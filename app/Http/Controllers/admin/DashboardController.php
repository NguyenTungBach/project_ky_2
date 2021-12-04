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
        // tìm đến các ngày và tổng giá từ bảng orders, nhóm vào theo ngày
        $totalPriceQuery = "
        SELECT DATE(created_at) as date, SUM(`total_price`) totalPriceDay
        FROM `orders` GROUP BY DATE(created_at)
        ";
        $resultTotalPrice = DB::select(DB::raw($totalPriceQuery));
        $dataPrice = "";
        foreach ($resultTotalPrice as $val) {
            $dataPrice .= "['" . $val->date . "', " . $val->totalPriceDay . "],";
        }


        $quantityProductQuery = "
        SELECT SUM(`quantity`) totalQuantity, products.name as nameProduct, product_id FROM order_details
        LEFT JOIN products ON order_details.product_id = products.id
        GROUP BY product_id ORDER BY totalQuantity DESC";
        $resultTotalPrice = DB::select(DB::raw($quantityProductQuery));

        $dataQuantity ='';
        $quantityAnother = 0;
        for($i = 0; $i < sizeof($resultTotalPrice); $i++){
            if($i < 10){
                $dataQuantity .= "['".$resultTotalPrice[$i]->nameProduct."', ".$resultTotalPrice[$i]->totalQuantity.",".$resultTotalPrice[$i]->product_id."],";
            }else{
                $quantityAnother += $resultTotalPrice[$i]->totalQuantity;
            }
        }
        $dataQuantity .= "['Sản phẩm còn lại', ".$quantityAnother.",'none'],";
//        dd($dataQuantity);
        return view('admin.template.dashboard.dashboard', [
            'dataLineChart' => $dataPrice,
            'dataPieChart' => $dataQuantity,
        ]);
    }
}
