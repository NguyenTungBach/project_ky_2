<?php

namespace App\Http\Controllers\client;

use App\Enums\OrderStatus;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;


class OrderController extends Controller
{
    public function getDetail($id)
    {
        $order = Order::find($id);
        if ($order ==null){
            return view('client.page.error.404',['msg' => 'Order not found']);
        }
        return view('client.page.cart.checkout',['order'=> $order]);
    }

    public function process(Request $request)
    {
        $shipName = $request->get('ship_name');
        $shipAddress = $request->get('ship_address');
        $shipPhone = $request->get('ship_phone');
        $ship_note = $request->get('ship_note');
        $ship_email = $request->get('ship_email');
        $shoppingCart = [];
        if (Session::has('shoppingCart')) {
            $shoppingCart = Session::get('shoppingCart');
        }
        if (sizeof($shoppingCart) == 0 | $shoppingCart == null) {
            return 'Please choose some product to submit order';
        }
        //1. Tạo thông tin order
        $order = new Order();
//        $order->user_id = 1; // ai mua, hardcode vì chưa có thông tin người dùng
        $order->ship_name = $shipName; // ship cho ai
        $order->ship_phone = $shipPhone; // phone là gì
        $order->ship_address = $shipAddress; // địa chỉ cần gửi đến
        $order->ship_note = $ship_note; // ghi chú
        $order->ship_email = $ship_email; // email
        $order->check_out = false; // thanh toán hay chưa
        $order->created_at = Carbon::now();
        $order->ship_status = OrderStatus::Waiting;
        //2. Tạo danh sách order details.
        $hasError = false;
        $array_order_detail = [];
        foreach ($shoppingCart as $cartItem) {
            $product = Product::find($cartItem->id); // kiểm tra lại một lần nữa theo product id
            if ($product == null) {
                $hasError = true;
                break;
            }
            $orderDetail = new OrderDetail();
            $orderDetail->product_id = $product->id;
            $orderDetail->quantity = $cartItem->quantity;
            $orderDetail->unit_price = $product->price;

            $order->total_price += $orderDetail->unit_price * $orderDetail->quantity;
            array_push($array_order_detail, $orderDetail);
        }
        if ($hasError) {
            return 'Product is not found or has been deleted';
        }
        //3. Save thông tin order và order details trong transaction
        try {
            DB::beginTransaction();
            $order->save();
            $order_id = $order->id;
            $order_details = [];
            foreach ($array_order_detail as $orderDetail) {
                $order_details[] = [
                    'product_id' => $orderDetail->product_id,
                    'quantity' => $orderDetail->quantity,
                    'unit_price' => $orderDetail->unit_price,
                    'order_id' => $order_id,
                ];
            }
            OrderDetail::insert($order_details);
            session()->flash('orderMessage','Order Success');
            DB::commit();
            Session::remove('shoppingCart');
            return redirect("/order/$order_id");
        } catch (\Exception $e) {
            DB::rollBack();
            return " Error occur, please contact admin for more information! " . $e;
        }
    }

    public function createPayment(Request $request){
        $orderID = $request->get('orderID');
        $order= Order::find($orderID);
        if ($order == null){
            return 'Order not found';
        }
        // Cấu hình phần Pay Pal
        $apiContext = new ApiContext(
            new OAuthTokenCredential(
                env('PAYPAL_CLIENT_ID'),
                env('PAYPAL_CLIENT_SECRET')
            )
        );

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

// ### Itemized information
// (Optional) Lets you specify item wise
// information
        $array_item =[];
        $total_price_in_USD = 0;
        foreach ($order->orderDetails as $orderDetail){
            $item = new Item();
            $item->setName($orderDetail->product->name)
                ->setCurrency('USD')
                ->setQuantity($orderDetail->quantity)
                ->setSku($orderDetail->product->id) // Similar to `item_number` in Classic API
                ->setPrice(Helper::convertVNDtoUSD($orderDetail->unit_price));
            $total_price_in_USD += Helper::convertVNDtoUSD($orderDetail->unit_price) * $orderDetail->quantity;
            array_push($array_item,$item);
        }

        $itemList = new ItemList();
        $itemList->setItems($array_item);

// ### Additional payment details
// Use this optional field to set additional
// payment information such as tax, shipping
// charges etc.
        $details = new Details();
        $details->setShipping(0)
            ->setTax(0)
            ->setSubtotal($total_price_in_USD);

// ### Amount
// Lets you specify a payment amount.
// You can also specify additional details
// such as shipping, tax.
        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal($total_price_in_USD)
            ->setDetails($details);

// ### Transaction
// A transaction defines the contract of a
// payment - what is the payment for and who
// is fulfilling it.
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Checkout order: #$order->id")
            ->setInvoiceNumber($order->id); // set id Order !!, gửi paypal sẽ lưu lại id

// ### Redirect urls
// Set the urls that the buyer must be redirected to after
// payment approval/ cancellation.
        $baseUrl = request()->root();// lấy giao thức ,ví dụ hiện tại sẽ lấy địa chỉ "http://127.0.0.1:8000"
        $redirectUrls = new RedirectUrls();
//        $redirectUrls->setReturnUrl("$baseUrl/ExecutePayment.php?success=true")
//            ->setCancelUrl("$baseUrl/ExecutePayment.php?success=false");
        $redirectUrls->setReturnUrl("$baseUrl/checout-success")
            ->setCancelUrl("$baseUrl/cancel-success");

// ### Payment
// A Payment Resource; create one using
// the above types and intent set to 'sale'
        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($apiContext);
        } catch (PayPalConnectionException $ex) {
            echo $ex;
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            exit(1);
        }

// ### Get redirect url
// The API response provides the url that you must redirect
// the buyer to. Retrieve the url from the $payment->getApprovalLink()
// method
        $approvalUrl = $payment->getApprovalLink();

// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY

        return $payment;
    }

    public function executePayment(Request $request){
        $orderID = $request->get('orderID');
        $order= Order::find($orderID);
        if ($order == null){
            return 'Order not found';
        }
        $paymentID =$request->get('paymentID'); // ID riêng của paypal
        $payerID =$request->get('payerID'); // ID của người đăng nhập
        $apiContext = new ApiContext(
            new OAuthTokenCredential(
                env('PAYPAL_CLIENT_ID'),
                env('PAYPAL_CLIENT_SECRET')
            )
        );

        // Get the payment Object by passing paymentId
        // payment id was previously stored in session in
        // CreatePaymentUsingPayPal.php
        $payment = Payment::get($paymentID, $apiContext);

        // ### Payment Execute
        // PaymentExecution object includes information necessary
        // to execute a PayPal account payment.
        // The payer_id is added to the request query parameters
        // when the user is redirected from paypal back to your site
        $execution = new PaymentExecution();
        $execution->setPayerId($payerID);

        // ### Optional Changes to Amount
        // If you wish to update the amount that you wish to charge the customer,
        // based on the shipping address or any other reason, you could
        // do that by passing the transaction object with just `amount` field in it.
        // Here is the example on how we changed the shipping to $1 more than before.
//        $transaction = new Transaction();
//        $amount = new Amount();
//        $details = new Details();
//
//        $details->setShipping(2.2)
//            ->setTax(1.3)
//            ->setSubtotal(17.50);
//
//        $amount->setCurrency('USD');
//        $amount->setTotal(21);
//        $amount->setDetails($details);
//        $transaction->setAmount($amount);
//
//        // Add the above transaction object inside our Execution object.
//        $execution->addTransaction($transaction);

        try {
            // Execute the payment
            // (See bootstrap.php for more on `ApiContext`)
//            $result = $payment->execute($execution, $apiContext);
            $payment->execute($execution, $apiContext);
            $order->check_out =true;
            $order->updated_at = Carbon::now();
            $order->save();
            Mail::to($order->ship_email)->send(new OrderMail($order));
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY

            try {
                $payment = Payment::get($paymentID, $apiContext);
            } catch (Exception $ex) {
                // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
                echo "Lỗi Bên apiContext". $ex;
                return $ex;
//                exit(1);
            }
        } catch (PayPalConnectionException $ex) {
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            var_dump(json_decode($ex->getData()));
            return $ex;
//            exit(1);
        }

        // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY

        return $payment;

    }

    public function getCheckMail(Request $request){
        $order = Order::find($request->get('orderID'));
        return view('client.mailOrder.mailOrder',['order'=> $order]);
    }
}
