<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHome()
    {
        return view('client.page.home.template',['items' => Product::paginate(8)]);
    }

}

