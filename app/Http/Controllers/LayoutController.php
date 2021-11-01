<?php


namespace App\Http\Controllers;


class LayoutController extends Controller
{
    public function getLayout(){
        return view('admin.layout.master-layout');
    }

    public function getCreateProduct(){
        return view('admin.product.create');
    }

    public function getListProduct(){
        return view('admin.product.list');
    }
}
