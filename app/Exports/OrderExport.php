<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class OrderExport implements FromQuery,WithHeadings,WithMapping,ShouldAutoSize
{
    use Exportable;

   protected $selectedId;

    /**
     * @param $selectedId
     */
    public function __construct($selectedId)
    {
        $this->selectedId = $selectedId;
    }


    public function headings():array{
        return [
            'Mã đơn hàng',
            'Thanh toán',
            'Tổng giá(VND)',
            'Tên',
            'Số điện thoại',
            'Email',
            'Địa chỉ',
            'Ghi chú',
            'Trạng thái',
            'Ngày xoá',
            'Ngày đặt hàng',
            'Ngày cập nhật',


        ];
    }


    public function query()
    {
        return Order::whereIn('id' ,$this->selectedId);
    }

    /**
     * @var Order $order
     */

    public function map($order): array
    {
        $status='';
        switch ($order->ship_status){
            case 0:
                $status = 'Đã huỷ';
                break;
            case 1:
                $status = 'Đã giao hàng';
                break;
            case 2:
                $status = 'Đang chờ xác nhận';
                break;
            case 3:
                $status = 'Đang xử lý';
                break;
            case -1:
                $status = 'Đã xoá';
                break;
        }
        $order->ship_status = $status;
        if ($order->check_out ==1){
            $order->check_out = 'Đã thanh toán';
        }
        if ($order->check_out == 0){
            $order->check_out = 'Chưa thanh toán';
        }
        return [
            $order->id,
            $order->check_out,
            $order->total_price,
            $order->ship_name,
            $order->ship_phone,
            $order->ship_email,
            $order->ship_address,
            $order->ship_note,
            $order->ship_status,
            $order->deleted_at,
            $order->created_at,
            $order->updated_at,
        ];
    }
}
