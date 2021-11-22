<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHome()
    {
        return $this->view('client.home');
    }

    public function getBlog()
    {
        return view('client.blog.blog');
    }

    public function getBlogDetail()
    {
        return view('client.blog.blog-detail');
    }
    public function getContact()
    {
        return view('client.contact.contact');
    }
    public function getProduct()
    {
        return view('client.product.product');
    }

//    public function getCart()
//    {
//        return view('client.shoppingCart.cart');
//    }
//    public function getCheckOut()
//    {
//        return view('client.shoppingCart.check-out');
//    }
    public function getAboutUs(){
        return view('client.about-us.about-us');
    }


}

