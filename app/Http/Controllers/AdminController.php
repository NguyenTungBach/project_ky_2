<?php


namespace App\Http\Controllers;


use App\Models\Category;

class AdminController extends Controller
{

    public function getTable(){
        return view('admin.template.table');
    }

    public function getForm(){
        return view('admin.template.form',[
            'categories' => Category::withCount('products')->get()
        ]);
    }

}
