<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getForm(){
        return view('client.page.account.register');
    }
    function getOrder(){
        return view('client.page.account.order');
    }
}
