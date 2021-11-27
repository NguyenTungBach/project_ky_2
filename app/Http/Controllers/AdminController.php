<?php


namespace App\Http\Controllers;


class AdminController extends Controller
{

    public function getTable(){
        return view('admin.template.table');
    }

    public function getForm(){
        return view('admin.template.form');
    }

}
