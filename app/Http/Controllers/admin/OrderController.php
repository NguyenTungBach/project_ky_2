<?php

namespace App\Http\Controllers\admin;

use App\Enums\OrderStatus;
use App\Exports\OrderExport;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        return (new OrderExport($ids))->download('DanhSachHoaDon.xlsx');
    }

    public function updateStatus()
    {
        try {
            $orderId = request()->get('id');
            $orderStatus = request()->get('status-update');
            $checkUpdate = $this->getUpdateOrder($orderId,$orderStatus);
           if (!$checkUpdate){
               session()->flash('message', "Cập nhật trạng thái đơn hàng mã $orderId, thất bại");
               return redirect()->back();
           }
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
            $statusUpdate = $data['status'];
            $orders = Order::whereIn('id', $ids)->get();
            $array = [];
            foreach ($ids as $id){
                $checkUpdate = $this->getUpdateOrder($id, $statusUpdate);
                if (!$checkUpdate){
                    $array[] = $id;
                }
            }
//            Order::whereIn('id', $ids)->update([
//                'ship_status' => $statusUpdate,
//                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
//            ]);
            return json_encode($array);
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
                $message->to($data->ship_email, $data->ship_name)
                    ->subject($data->subject);
                $message->from('rausachtdhhn@gmail.com', 'Cửa hàng Cần Rau');
            });
    }

    function getUpdateOrder($orderId,$statusUpdate)
    {
        try {
            $order = Order::find($orderId);
            if (!$order->exists()) {
                session()->flash('message', "Không tìm thấy sản phẩm");
                return redirect()->back();
            }
            $status = $order->ship_status;
            if ($status == OrderStatus::Waiting || $status == OrderStatus::Processing){
                $order->ship_status = $statusUpdate;
                $order->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
                $order->save();
                $this->sendMail($order->id, $this->getTitleMail($orderId,$statusUpdate));
                return true;
            }else if (($status == OrderStatus::Done || $status == OrderStatus::Cancel) && $statusUpdate == OrderStatus::Deleted ){
                $order->ship_status = $statusUpdate;
                $order->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
                $order->save();
                $this->sendMail($order->id, $this->getTitleMail($orderId,$statusUpdate));
                return true;
            }
            return false;
        }catch (Exception $e){
            return $e;
        }
    }

    function getTitleMail( $orderId,$statusUpdate): string
    {
        $title = '';
        switch ($statusUpdate) {
            case OrderStatus::Cancel;
                $title = "Đơn hàng với mã #$orderId đã bị huỷ";
                break;
            case OrderStatus::Done;
                $title = "Đơn hàng với mã #$orderId đã được giao hàng thành công";
                break;
            case OrderStatus::Waiting;
                $title = "Đơn hàng với mã #$orderId đang chờ được xử lý";
                break;
            case OrderStatus::Processing;
                $title = "Đơn hàng với mã #$orderId đang được xử lý";
                break;
        }
        return $title;
    }
}
