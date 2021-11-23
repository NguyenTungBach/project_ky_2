<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getShop(){
        return view('client.page.product.template');
    }

    public function getDetail($id){
        return view('client.page.product.detail');
    }
}
