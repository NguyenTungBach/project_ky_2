<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function getBlog(){
        return view('client.page.blog.template',[
            'items' =>Blog::all()
        ]);
    }
    function getDetail($id){
        return view('client.page.blog.detail',[
            'items' =>Blog::find($id),
            'new' => Blog::all()
        ]);
    }
}
