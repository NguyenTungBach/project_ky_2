<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function getAll(){
        return view('admin.template.product.products', ['items'=>Product::orderBy('created_at','DESC')->paginate(9)]);
    }

    public function getForm(){
        return view('admin.template.product.create',[
            'categories' => Category::withCount('products')->get()
        ]);
    }

    public function create(StoreProductRequest $request){
        $product = new Product($request->all());
        $product->save();
        Session::flash('message', 'Tạo mới sản phẩm thành công');

        return redirect('admin/products');

    }
    public function getDetail(){

    }
}
