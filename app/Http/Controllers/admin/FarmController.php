<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FarmRequest;
use App\Models\Farm;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FarmController extends Controller
{
    public function __construct()
    {
        $this->middleware('isLoggedIn');
    }

    function getAll(){
        return view('admin.template.farm.table',[
            'items' =>Farm::all()
        ]);
    }

    function getForm(){
        return view('admin.template.farm.form');
    }

    function create(FarmRequest $request){
        $request->request->remove("_token");
        $request->request->add([
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh')
        ]);
        $farm = new Farm($request->all());
        $farm->save();
        Session::flash('message', 'Tạo trang trại mới  thành công');
        return redirect('admin/farms');
    }
}
