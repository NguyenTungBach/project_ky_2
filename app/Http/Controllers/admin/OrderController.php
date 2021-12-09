<?php

namespace App\Http\Controllers\admin;

use App\Enums\OrderStatus;
use App\Exports\OrderExport;
use App\Http\Controllers\Controller;
use App\Imports\DistrictsImport;
use App\Imports\WardsImport;
use App\Models\Order;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('isLoggedIn');
    }

    public function getAll()
    {
        $paginate = 9;
        $orders = Order::query();
        return view('admin.template.order.table', [
            'items' => $orders->orderBy('created_at', 'desc')->paginate($paginate),
            'paginate' => $paginate,
            'sumOrder' => $orders->count(),
            'totalOrderSearch' => $orders->sum('total_price'),
        ]);
    }

    public function exportOrder()
    {
        $ids = explode(",", request('ids')); // tạo mảng ids
        return (new OrderExport($ids))->download('orders.xlsx');
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
                return 'Không tìm thấy đơn hàng';
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
                    $title = "Đơn hàng với mã #$order->id đã được giao hàng thành công";
                    break;
                case OrderStatus::Waiting;
                    $title = "Đơn hàng với mã #$order->id đang chờ được xử lý";
                    break;
                case OrderStatus::Processing;
                    $title = "Đơn hàng với mã #$order->id đang được xử lý";
                    break;
            }
            $this->sendMail($order->id, $title);

            session()->flash('message', "Cập nhật trạng thái đơn hàng mã $orderId, thành công");

            return redirect()->back();
        } catch (Exception $e) {
            return $e;
        }
    }

    public function updateAllStatus()
    {
        try {
            $data = json_decode(file_get_contents("php://input"), true);
            $ids = $data['ids'];
            $status = $data['status'];
            Order::whereIn('id', $ids)->update([
                'ship_status' => $status,
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
            ]);
            return json_encode($ids);
        } catch (Exception $e) {
            return $e;
        }
    }

    public function removeAllStatus()
    {
        try {
            $data = json_decode(file_get_contents("php://input"), true);
            $ids = $data['ids'];
            Order::whereIn('id', $ids)->update([
                'ship_status' => OrderStatus::Deleted,
                'deleted_at' => Carbon::now('Asia/Ho_Chi_Minh')
            ]);
            return true;
        } catch (Exception $e) {
            return $e;
        }
    }

    public function index(Request $request)
    {
        try {
            $paginate = 9;
            $orders = Order::query()
                ->findByNameProduct()
                ->findByName()
                ->findByUserId()
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
                'items' => $orders->paginate($paginate),
                'paginate' => $paginate,
                'sumOrder' => $orders->count(),
                'totalOrderSearch' => $orders->sum('total_price'),
                'oldName' => $request->get('name'),
                'oldNameProduct' => $request->get('nameProduct'),
                'oldId' => $request->get('id'),
                'oldUserId' => $request->get('user_id'),
                'oldPhone' => $request->get('phone'),
                'oldEmail' => $request->get('email'),
                'oldStatus' => $request->get('status'),
                'oldPayment' => $request->get('payment'),
                'oldCreated_at' => $request->get('created_at'),
                'oldEndDate' => $request->get('endDate'),
                'oldStartDate' => $request->get('startDate'),
                'oldTotalPrice' => $request->get('totalPrice'),
                'sortPrice' => $request->get('sortPrice'),
                'sortName' => $request->get('sortName'),
            ]);
        } catch (Exception $e) {

            return redirect()->back();
        }
    }


    public function searchByIdProduct($id)
    {
        $paginate = 9;
        $orders = Order::whereHas('products', function ($q) use ($id) {
            $q->where('id', $id);
        });
        return view('admin.template.order.table', [
            'items' => $orders->paginate($paginate),
            'sumOrder' => $orders->count(),
            'totalOrderSearch' => $orders->sum('total_price'),
            'paginate' => $paginate,
        ]);
    }

    public function searchByDate($date){
        try {
            $paginate = 9;
            $orders = Order::whereDate('created_at','=',Carbon::parse($date));
            return view('admin.template.order.table', [
                'items' => $orders->paginate($paginate),
                'sumOrder' => $orders->count(),
                'totalOrderSearch' => $orders->sum('total_price'),
                'paginate' => $paginate,
            ]);
        }catch (Exception $e){
            session()->flash('fail',$e);
            redirect()->back();
        }
    }

    public function getInformation($id)
    {
        try {
            return view('admin.template.order.order-detail', [
                'item' => Order::find($id)
            ]);
        } catch (Exception $e) {
            return "Id không tồn tại hoặc lỗi lấy trang.";
        }
    }

    function sendMail($id,$title)
    {
        $data = Order::find($id);
        $data->subject = $title;
        Mail::send('client.mailOrder.mailOrder', ['order' => $data],
            function ($message) use ($data) {
                $message->to($data->ship_email, 'Tutorials Point')
                    ->subject($data->subject);
                $message->from('rausachtdhhn@gmail.com', 'Cửa hàng Cần Rau');
            });
    }
}
