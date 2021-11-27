<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FarmController extends Controller
{
    public function getFarms(){
        return view('client.page.farm.template');
    }
}
