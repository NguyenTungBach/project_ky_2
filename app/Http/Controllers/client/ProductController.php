<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getShop(){
        $paginate = 9;
        return view('client.page.product.template', [
            'items'=> Product::paginate($paginate),
        ]);
    }

    public function getDetail($id){
        return view('client.page.product.detail');
    }

    public function search(){
        return view('client.page.product.template');
    }
}
