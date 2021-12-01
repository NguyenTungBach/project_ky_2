<?php

namespace App\Http\Controllers\admin;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function getAll()
    {
        $paginate = 12;
        $orders = Order::query();
        return view('admin.template.order.table', [
            'items' => $orders->orderBy('created_at', 'desc')->paginate($paginate),
            'paginate' => $paginate,
            'sumOrder' => $orders->count(),
        ]);
    }

    public function updateStatus()
    {
        try {
//            $data = json_decode(file_get_contents("php://input"), true);
//            // lấy thông tin sản phẩm.
//            $orderId = $data['id'];
//            // lấy số lượng sản phẩm cần thêm vào giỏ hàng.
//            $orderStatus = $data['status'];
            $orderId = request()->get('id');
            $orderStatus = request()->get('status-update');
            $order = Order::find($orderId);
//            return $order;
            if (!$order->exists()) {
                return 'can not found order';
            }
            $order->ship_status = $orderStatus;
            $order->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
            $order->save();

            $title = "";
            switch ($orderStatus) {
                case OrderStatus::Cancel;
                    $title = "Đơn hàng với mã #$order->id đã bị huỷ";
                    break;
                case OrderStatus::Done;
                    $title = "Đơn hàng với mã #$order->id đã được gia thành công";
                    break;
                case OrderStatus::Waiting;
                    $title = "Đơn hàng với mã #$order->id đang chờ được xử lý";
                    break;
                case OrderStatus::Processing;
                    $title = "Đơn hàng với mã #$order->id đang được xử lý";
                    break;
            }
            $this->sendMail($order->id, $title);
            session()->flash('updateStatus','Cập nhật trạng thái đơn hàng thành công');
            return redirect()->back();
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function updateAllStatus(){

    }

    public function index(Request $request)
    {
        try {
            $paginate = 12;
            $order = Order::query()
                ->findByName()
                ->findByPhone()
                ->findById()
                ->findByEmail()
                ->findByStatus()
                ->findByPayment()
                ->filterDateCreated()
                ->filterPrice()
                ->sortByName()
                ->sortByCreatedAt()
                ->sortByPrice();

            return view('admin.template.order.table', [
                'items' => $order->paginate($paginate),
                'oldName' => $request->get('name'),
                'oldId' => $request->get('id'),
                'oldPhone' => $request->get('phone'),
                'oldEmail' => $request->get('email'),
                'oldStatus' => $request->get('status'),
                'oldPayment' => $request->get('payment'),
                'oldCreated_at' => $request->get('created_at'),
                'oldEndDate' => $request->get('endDate'),
                'oldStartDate' => $request->get('startDate'),
                'oldTotalPrice' => $request->get('totalPrice'),
                'paginate' => $paginate,
                'sumOrder' => $order->count(),
                'sortPrice' => $request->get('sortPrice'),
                'sortName' => $request->get('sortName'),
            ]);
        } catch (\Exception $e) {

            return redirect()->back();
        }
    }
    function sendMail($id,$title)
    {
        $data = Order::find($id);
        $data->subject = $title;
        Mail::send('client.mailOrder.mailOrder', ['order' => $data ],
            function ($message) use ($data) {
                $message->to( $data->ship_email, 'Tutorials Point')
                    ->subject($data->subject);
                $message->from('rausachtdhhn@gmail.com', 'Cửa hàng Cần Rau');
            });
    }
}
