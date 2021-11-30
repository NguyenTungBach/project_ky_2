<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use stdClass;

class CartController extends Controller
{
    public function getCart()
    {
        // kiểm tra sự tồn tại của shopping cart trong session.
        $shoppingCart = null;
        // nếu có shopping cart rồi thì lấy ra
        if (Session::has('shoppingCart')) {
            $shoppingCart = Session::get('shoppingCart');
        } else {
            // nếu chưa có thì tạo shopping cart mới.
            $shoppingCart = [];
        }
        return view('client.page.cart.template', [
            'shoppingCart' => $shoppingCart
        ]);

//        return view('client.page.cart.template');
    }

    public function add()
    {
        $data = json_decode(file_get_contents("php://input"), true);
        // lấy thông tin sản phẩm.
        $productId = $data['id'];

        // lấy số lượng sản phẩm cần thêm vào giỏ hàng.
        $productQuantity = $data['quantity'];

        if($productQuantity <= 0){
            return view('client.errors.404', [
                'msg' => 'Số lượng sản phẩm cần lớn hơn 0.'
            ]);
        }
        // 1. Kiểm tra sự tồn tại của sản phẩm.
        $obj = Product::find($productId);
        // nếu không tồn tại thì trả về 404.
        if ($obj == null) {
            return view('client.errors.404', [
                'msg' => 'Không tìm thấy sản phẩm'
            ]);
        }
        // nếu có sản phẩm trong db.
        // 2. Check số lượng tồn kho. Nếu như số lượng mua lớn hơn số lượng trong kho thì báo lỗi.

        // kiểm tra sự tồn tại của shopping cart trong session.
        $shoppingCart = null;
        // nếu có shopping cart rồi thì lấy ra
        if (Session::has('shoppingCart')) {
            $shoppingCart = Session::get('shoppingCart');
        } else {
            // nếu chưa có thì tạo shopping cart mới.
            $shoppingCart = [];

        }
        // kiểm tra sản phẩm có tồn tại trong giỏ hàng không.
        if (array_key_exists($productId, $shoppingCart)) {
            // nếu có sản phẩm rồi thì update số lượng
            $existingCartItem = $shoppingCart[$productId];
            // tăng số lượng theo số lượng cần mua thêm.
            $existingCartItem->quantity += $productQuantity;
            // và lưu lại vào đối tượng shopping cart.
            $shoppingCart[$productId] = $existingCartItem;
        } else {
            // nếu chưa có tạo ra một cartItem mới, có thông tin trùng với thông tin sản phẩm từ
            // trong database.
            $cartItem = new stdClass();
            $cartItem->id = $obj->id;
            $cartItem->name = $obj->name;
            $cartItem->unitPrice = $obj->price;
            $cartItem->thumbnail = $obj->firstImage;
            $cartItem->quantity = $productQuantity;
            // đưa cartItem vào trong shoppingCart.
            $shoppingCart[$productId] = $cartItem;
        }
        // update thông tin shopping cart vào session.
        Session::put('shoppingCart', $shoppingCart);

//        return view('client.page.cart.template');
        return json_encode(Session::get('shoppingCart'));
    }

    public function update(Request $request)
    {
        $data = json_decode(file_get_contents("php://input"), true);

        // lấy thông tin sản phẩm.
        $productId = $data['id'];
        // lấy số lượng sản phẩm cần thêm vào giỏ hàng.
        $productQuantity = $data['quantity'];
        if($productQuantity <= 0){
            return view('client.errors.404', [
                'msg' => 'Số lượng sản phẩm cần lớn hơn 0.'
            ]);
        }
        // 1. Kiểm tra sự tồn tại của sản phẩm.
        $obj = Product::find($productId);
        // nếu không tồn tại thì trả về 404.
        if ($obj == null) {
            return view('client.errors.404', [
                'msg' => 'Không tìm thấy sản phẩm'
            ]);
        }
        // nếu có sản phẩm trong db.
        // 2. Check số lượng tồn kho. Nếu như số lượng mua lớn hơn số lượng trong kho thì báo lỗi.

        // kiểm tra sự tồn tại của shopping cart trong session.
        $shoppingCart = null;
        // nếu có shopping cart rồi thì lấy ra
        if (Session::has('shoppingCart')) {
            $shoppingCart = Session::get('shoppingCart');
        } else {
            // nếu chưa có thì tạo shopping cart mới.
            $shoppingCart = [];
        }
        // kiểm tra sản phẩm có tồn tại trong giỏ hàng không.
        if (array_key_exists($productId, $shoppingCart)) {
            // nếu có sản phẩm rồi thì update số lượng
            $existingCartItem = $shoppingCart[$productId];
            // tăng số lượng theo số lượng cần mua thêm.
            $existingCartItem->quantity = $productQuantity;
            // và lưu lại vào đối tượng shopping cart.
            $shoppingCart[$productId] = $existingCartItem;
        }
        // update thông tin shopping cart vào session.
        Session::put('shoppingCart', $shoppingCart);
        return json_encode(Session::get('shoppingCart'));
    }

    public function remove(Request $request)
    {
        $productId = $request->get('id');
        $shoppingCart = null;
        // nếu có shopping cart rồi thì lấy ra
        if (Session::has('shoppingCart')) {
            $shoppingCart = Session::get('shoppingCart');
        } else {
            // nếu chưa có thì tạo shopping cart mới.
            $shoppingCart = [];
        }
        unset($shoppingCart[$productId]); // Xoá giá trị theo key ở trong map với php.
        Session::put('shoppingCart', $shoppingCart);
        return redirect('/cart');
    }
}

