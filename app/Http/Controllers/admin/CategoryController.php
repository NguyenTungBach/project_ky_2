<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('isLoggedIn');
    }
    public function getAll()
    {
        return view('admin.template.category.table', ['items' => Category::all()]);
    }

    public function getForm()
    {
        return view('admin.template.category.form');
    }


    public function create(StoreCategoryRequest $request)
    {
        $category = new Category($request->all());
        $category->save();
        Session::flash('message', 'Tạo mới danh mục thành công');
        return redirect('admin/categories');
    }
    public function getDetail($id){
        return view('admin.template.category.detail',[
            'items' => Category::find($id)
        ]);
    }
    public function getInformation($id){
        return view('admin.template.category.update',[
            'items' => Category::find($id)
        ]);
    }
    public function update(StoreCategoryRequest $request){
        $request->request->remove("_token");
        $id = $request->get('id');
        $request->request->remove('id'); // xóa id, nếu để id sẽ bị update cho updated_at sẽ sinh ra lỗi
        $request->request->add([
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        try {
            $category = Category::find($id);
            $category->update($request->all());
            Session::flash('message', "Cập nhật sản phẩm có id= $id, thành công");
        } catch (\Exception $e){
            Session::flash('message', "Cập nhật sản phẩm có id= $id, thất bại");
        }
        return redirect('admin/categories');
    }
    public function getConfirmDelete($id){
        return view('admin.template.category.delete',['items' =>Category::find($id)]);
    }
    public function delete(Request $request){
       $id  = $request->get('id');
        try {
            $category = Category::find($id);
            $category->deleted_at = Carbon::now('Asia/Ho_Chi_Minh');
            $category->status = 0;
            $category->save();
            Session::flash('message', "Xóa sản phẩm có id= $id, thành công");
            return redirect('admin/categories');
        }
        catch (\Exception $e){
            Session::flash('message', "Xóa sản phẩm có id= $id, thất bại");
        }

    }
}
