<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getShop()
    {
        $paginate = 9;
        return view('client.page.product.template', [
            'items' => Product::paginate($paginate),
            'categories' => Category::withCount('products')->get(),
            'sumProduct' => Product::count(),
            'limit' => $paginate,
        ]);
    }

    public function getDetail($id)
    {
        return view('client.page.product.detail',[
            'items' => Product::find($id)]);
    }

    public function search()
    {
        return view('client.page.product.template');
    }

    public function index(Request $request)
    {
        $paginate = 9;
        $products = Product::query()
//            ->name($request)
//            ->price($request)
            ->cate($request)
            ->sortByName($request)
            ->sortByPrice($request);
        return $products->paginate($paginate);
        return view('client.page.product.template', [
            'items' => $products->paginate($paginate),
            'oldName' => $request->get('name'),
            'minPrice' => $request->get('minPrice'),
            'maxPrice' => $request->get('maxPrice'),
            'limit' => $paginate,
            'sumProduct' => $products->count(),
            'priceSort' => $request->get('priceSort'),
            'nameSort' => $request->get('nameSort'),
            'oldCategory' => $request->get('categories'),
            'categories' => Category::withCount('products')->get(),
        ]);
    }

}
