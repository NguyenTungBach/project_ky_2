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
    public function getAll()
    {
        $paginate = 9;
        $products = Product::orderBy('created_at', 'DESC');

        return view('admin.template.product.products', [
            'items' => $products->paginate($paginate),
            'categories' => Category::withCount('products')->get(),
            'sum'=> $products->count(),
            'paginate'=> $paginate
        ]);
    }

    public function getForm()
    {
        return view('admin.template.product.create', [
            'categories' => Category::withCount('products')->get()
        ]);
    }

    public function create(StoreProductRequest $request)
    {
        $product = new Product($request->all());
        $product->save();
        Session::flash('message', 'Tạo mới sản phẩm thành công');

        return redirect('admin/products');

    }

    public function getDetail($id)
    {

    }

    public function search(Request $request)
    {
        try {
            $paginate = 9;
            $products = Product::query()
                ->name($request)
                ->price($request)
                ->cate($request)
                ->sortByName($request)
                ->sortByPrice($request)
                ->status($request);
//        return $products;
            return view('admin.template.product.products', [
                'items' => $products->paginate($paginate),
                'oldName' => $request->get('name'),
                'oldPrice' => $request->get('price'),
                'limit' => $paginate,
                'sumProduct' => $products->count(),
                'priceSort' => $request->get('priceSort'),
                'status' => $request->get('status'),
                'nameSort' => $request->get('nameSort'),
                'oldCategory' => $request->get('categories'),
                'categories' => Category::withCount('products')->get(),
            ]);
        }
        catch (\Exception $exception){
            return $exception;
        }
    }
}
