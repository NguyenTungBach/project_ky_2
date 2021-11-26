<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getShop(){
        $paginate = 9;
        return view('client.page.product.template', [
            'items'=> Product::paginate($paginate),
            'categories' => Category::all()
        ]);
    }

    public function getDetail($id){
        return view('client.page.product.detail');
    }

    public function search(){
        return view('client.page.product.template');
    }
    public function index(Request $request)
    {
        $product = Product::query()
            ->name($request)
            ->price($request)
            ->cate($request)
            ->sortByName($request)
            ->sortByPrice($request);
        return view('client.page.product.template',
            ['items' => $product->paginate(9),
                'categories' => Category::all()]);
    }

}
