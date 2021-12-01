<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
            $data = json_decode(file_get_contents("php://input"), true);
            // lấy thông tin sản phẩm.
            $orderId = $data['id'];
            // lấy số lượng sản phẩm cần thêm vào giỏ hàng.
            $orderStatus = $data['status'];
            $order = Order::find($orderId);
//            return $order;
            if (!$order->exists()) {
                return 'can not found order';
            }
            $order->ship_status = $orderStatus;
            $order->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
            $order->save();
            return true;
        } catch (\Exception $e) {
            return $e;
        }
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
}
