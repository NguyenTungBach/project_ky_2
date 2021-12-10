<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Farm;
use App\Models\Product;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class ProductController extends Controller
{
    public function getShop()
    {
        $paginate = 9;
        return view('client.page.product.template', [
            'items' => Product::where('status', '!=', 0)->paginate($paginate),
            'categories' => Category::withCount('products')->get(),
            'farms' => Farm::withCount('products')->get(),
            'sumProduct' => Product::count(),
            'limit' => $paginate,
        ]);
    }

    public function getDetail($id)
    {
        $product = Product::find($id);
        $array = [];
        if (\Illuminate\Support\Facades\Session::has('recent_view')) {
            $array = \Illuminate\Support\Facades\Session::get('recent_view');
        }
        array_push($array, $id);
        \Illuminate\Support\Facades\Session::put('recent_view', $array);
        $recentView = Product::findMany(\Illuminate\Support\Facades\Session::get('recent_view'));
        return view('client.page.product.detail', [
            'items' => $product,
            'recent' => $recentView]);
    }

    public function search()
    {
        return view('client.page.product.template');
    }

    public function index(Request $request)
    {
        $paginate = 9;
        $products = Product::where('status', '!=', 0)
            ->query()
            ->name($request)
            ->price($request)
            ->cate($request)
            ->farm($request)
            ->sortByName($request)
            ->sortByPrice($request);

//        return $products->paginate($paginate);

        return view('client.page.product.template', [
            'items' => $products->paginate($paginate),
            'oldName' => $request->get('name'),
            'oldPrice' => $request->get('price'),
            'limit' => $paginate,
            'sumProduct' => $products->count(),
            'priceSort' => $request->get('priceSort'),
            'nameSort' => $request->get('nameSort'),
            'oldCategory' => $request->get('categories'),
            'oldFarm' => $request->get('farms'),
            'categories' => Category::withCount('products')->get(),
            'farms' => Farm::withCount('products')->get(),
        ]);
    }

    public function searchFarm($id)
    {
        $paginate = 9;
        $products = Product::where('farm_id', $id);
        return view('client.page.product.template', [
            'items' => $products->paginate($paginate),
            'limit' => $paginate,
            'oldFarm' => $id,
            'sumProduct' => $products->count(),
            'categories' => Category::withCount('products')->get(),
            'farms' => Farm::withCount('products')->get(),
        ]);
    }
}
