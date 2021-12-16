<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('isLoggedIn');
    }

    public function displayDashboard()
    {
        $dataPrice = $this->lineChart();
        $dataQuantity = $this->pieChart();
        return view('admin.template.dashboard.dashboard', [
            'dataLineChart' => $dataPrice,
            'dataPieChart' => $dataQuantity,
        ]);
    }

    public function findChart()
    {
        // tìm đến các ngày và tổng giá từ bảng orders, nhóm vào theo ngày

        $dataPrice = $this->lineChart();
        $dataQuantity = $this->pieChart();
        return view('admin.template.dashboard.dashboard', [
            'dataLineChart' => $dataPrice,
            'dataPieChart' => $dataQuantity,
        ]);
    }

    public function pieChart(): string
    {
        $quantityProductQuery = "
        SELECT SUM(quantity) as total_quantity, products.name as name_product, product_id
        FROM order_details
        LEFT JOIN products ON order_details.product_id = products.id
        GROUP BY order_details.product_id,products.name ORDER BY total_quantity DESC";
        $resultTotalPrice = DB::select(DB::raw($quantityProductQuery));

        $dataQuantity = '';
        $quantityAnother = 0;
        for ($i = 0; $i < sizeof($resultTotalPrice); $i++) {
            if ($i < 10) {
                $dataQuantity .= "['" . $resultTotalPrice[$i]->name_product . "', " . $resultTotalPrice[$i]->total_quantity . "," . $resultTotalPrice[$i]->product_id . "],";
            } else {
                $quantityAnother += $resultTotalPrice[$i]->total_quantity;
            }
        }
        $dataQuantity .= "['Sản phẩm còn lại', " . $quantityAnother . ",'none'],";
        return $dataQuantity;
    }

    public function lineChart(): string
    {
        $totalPriceQuery = "
        SELECT DATE(created_at) as date, SUM(total_price) as total_price_day
        FROM orders GROUP BY DATE(created_at) ORDER BY DATE(created_at) ASC
        ";

        if (request()->filled('startDate') && request()->filled('endDate')) {
            $startDate = request()->get('startDate');
            $endDate = request()->get('endDate');
            $totalPriceQuery = "
        SELECT DATE(created_at) as date, SUM(total_price) as total_price_day
        FROM orders
        WHERE DATE(created_at) BETWEEN '$startDate' AND '$endDate'
        GROUP BY DATE(created_at)
        ORDER BY DATE(created_at) ASC";
        }
        // tìm đến các ngày và tổng giá từ bảng orders, nhóm vào theo ngày

        $resultTotalPrice = DB::select(DB::raw($totalPriceQuery));
        $dataPrice = "";
        foreach ($resultTotalPrice as $val) {
            $dataPrice .= "['" . $val->date . "', " . $val->total_price_day . "],";
        }
        return $dataPrice;
    }
}
