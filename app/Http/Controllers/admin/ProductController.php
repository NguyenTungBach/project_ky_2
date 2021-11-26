<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAll(){
        return view('admin.template.product.products', ['items'=>Product::paginate(9)] );
    }

    public function getForm(){
        return view('admin.template.product.create');
    }

    public function getDetail(){

    }
}
