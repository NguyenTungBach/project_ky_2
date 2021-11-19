<?php


namespace App\Http\Controllers;


class AdminController extends Controller
{
    public function getLayout(){
        return view('admin.layout.master-layout');
    }

    public function getCreateProduct(){
        return view('admin.products.create');
    }

    public function getListProduct(){
        return view('admin.products.list');
    }
}
