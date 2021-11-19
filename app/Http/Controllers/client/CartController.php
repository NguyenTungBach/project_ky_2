<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getCart()
    {
        return view('client.shoppingCart.cart');
    }
    public function getCheckOut()
    {
        return view('client.shoppingCart.check-out');
    }
}
