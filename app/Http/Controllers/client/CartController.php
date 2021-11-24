<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getCart()
    {
        return view('client.page.cart.template');
    }

    public function addToCart()
    {
        return view('client.page.cart.template');
    }

    public function getCheckOut()
    {
        return view('client.page.cart.checkout');
    }
}

