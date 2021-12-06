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
            return view('client.page.error.404',['msg' => 'Không tìm thấy đơn hàng']);
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
            return 'Xin hãy chọn vài sản phẩm để có thể thanh toán đơn hàng';
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
        $order->created_at = Carbon::now('Asia/Ho_Chi_Minh');
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
            if (Session::has('loginUserId')){
                $order->user_id = Session::get('loginUserId');
            }
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
            session()->flash('orderMessage','Tạo đơn hàng thành công');
            DB::commit();
            $title = "Đơn hàng với mã #$order->id, đã được tạo thành công";
            $this->sendMail($order->id,$title);
            Session::remove('shoppingCart');
            return redirect("/order/$order_id");
        } catch (\Exception $e) {
            DB::rollBack();
            return " Có lỗi xảy ra, xin vui lòng gọi admin để được giúp " . $e;
        }
    }

    public function createPayment(Request $request){
        $orderID = $request->get('orderID');
        $order= Order::find($orderID);
        if ($order == null){
            return 'Không tìm thấy đơn hàng';
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

        $details = new Details();
        $details->setShipping(0)
            ->setTax(0)
            ->setSubtotal($total_price_in_USD);

        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal($total_price_in_USD)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Checkout order: #$order->id")
            ->setInvoiceNumber($order->id); // set id Order !!, gửi paypal sẽ lưu lại id

        $baseUrl = request()->root();// lấy giao thức ,ví dụ hiện tại sẽ lấy địa chỉ "http://127.0.0.1:8000"
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("$baseUrl/checout-success")
            ->setCancelUrl("$baseUrl/cancel-success");


        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($apiContext);
        } catch (Exception $ex) {
            echo $ex;
        }


         $payment->getApprovalLink();
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

        $payment = Payment::get($paymentID, $apiContext);
        $execution = new PaymentExecution();
        $execution->setPayerId($payerID);

        try {
            $payment->execute($execution, $apiContext);
            $order->check_out =true;

            $order->updated_at = Carbon::now('Asia/Ho_Chi_Minh');

            $order->save();
            $title = "Đơn hàng với mã #$order->id, đã được thanh toán thành công";
            $this->sendMail($order->id,$title);
            try {
                $payment = Payment::get($paymentID, $apiContext);
            } catch (Exception $ex) {
                echo "Fail: ". $ex;
                return $ex;
            }
        } catch (PayPalConnectionException $ex) {
            var_dump(json_decode($ex->getData()));
            return $ex;
        }
        return $payment;

    }

    public function getCheckMail(Request $request){
        $order = Order::find($request->get('orderID'));
        return view('client.mailOrder.mailOrder',['order'=> $order]);
    }

    function sendMail($id,$title)
    {
        $data = Order::find($id);
        $data->subject = $title;
        Mail::send('client.mailOrder.mailOrder', ['order' => $data ],
            function ($message) use ($data) {
                $message->to( $data->ship_email, $data->ship_name)
                    ->subject($data->subject);
                $message->from('rausachtdhhn@gmail.com', 'Cửa hàng Cần Rau');
            });
    }

}

