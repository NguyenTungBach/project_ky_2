<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAll(){
        return view('admin.template.category.table', ['items'=>Category::all()]);
    }

    public function getForm(){
        return view('admin.template.category.form');
    }

    public function create(){
        return view('admin.template.category.table');
    }
}
