<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getCart()
    {
        return view('client.page.cart.template');
    }

    public function add(Request $request)
    {
        // lấy thông tin sản phẩm.
        $productId = $request->get('id');
//        // lấy số lượng sản phẩm cần thêm vào giỏ hàng.
//        $productQuantity = $request->get('quantity');
//        if($productQuantity <= 0){
//            return view('client.errors.404', [
//                'msg' => 'Số lượng sản phẩm cần lớn hơn 0.'
//            ]);
//        }
        // 1. Kiểm tra sự tồn tại của sản phẩm.
        $obj = Product::find($productId);
        // nếu không tồn tại thì trả về 404.
        if ($obj == null) {
            return view('client.errors.404', [
                'msg' => 'Không tìm thấy sản phẩm'
            ]);
        }
        // nếu có sản phẩm trong db.
        

        return view('client.page.cart.template');
    }

    public function getCheckOut()
    {
        return view('client.page.cart.checkout');
    }
}

