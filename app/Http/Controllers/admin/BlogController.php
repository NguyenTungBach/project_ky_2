<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('isLoggedIn');
    }

    function getAll(){
        $paginate = 9;
        $contacts = Blog::query();
        return view('admin.template.blog.table',[
            'items' => $contacts->orderBy('created_at', 'desc')->paginate($paginate),
            'paginate' => $paginate,
            'sum' => $contacts->count(),
        ]);
    }
    function getForm(){
        return view('admin.template.blog.form');
    }
    public function createBlog(StoreBlogRequest $request)
    {
        $request->request->add([
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh')
        ]);
        $blog = new Blog($request->all());
        $blog->save();
        Session::flash('message', 'Tạo mới danh mục thành công');
        return redirect('admin/blogs');
    }
    function getDetail($id){
        return view('admin.template.blog.detail',[
            'items' =>Blog::find($id)
        ]);
    }
    function getInformation($id){
        return view('admin.template.blog.update',[
            'items' =>Blog::find($id)
        ]);
    }
    function update(StoreBlogRequest $request){
        $request->request->remove("_token");
        $id = $request->get('id');
        $request->request->remove('id'); // xóa id, nếu để id sẽ bị update cho updated_at sẽ sinh ra lỗi
        $request->request->add([
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        try {
            $blog = Blog::find($id);
            $blog->update($request->all());
            Session::flash('message', "Cập nhật bài viết có id= $id, thành công");
        } catch (\Exception $e){
            Session::flash('message', "Cập nhật bài viết có id= $id, thất bại");
        }
        return redirect('admin/blogs');
    }
    function getConfirmDelete($id){
        return view('admin.template.blog.delete',[
            'items' =>Blog::find($id)
        ]);
    }

    function delete(Request $request){
        $id = $request->get('id');
        try {
            $blog = Blog::find($id);
            $blog->deleted_at = Carbon::now('Asia/Ho_Chi_Minh');
            $blog->status = 0;
            $blog->save();
            Session::flash('message', "Xóa bài viết có id= $id, thành công");
        } catch (\Exception $e) {
            Session::flash('message', "Xóa bài viết có id= $id, thất bại");
        }
        return redirect('admin/blogs');

    }

    public function updateAllStatus()
    {
        try {
            $data = json_decode(file_get_contents("php://input"), true);
            $ids = $data['ids'];
            $status = $data['status'];
            Blog::whereIn('id', $ids)->update([
                'status' => $status,
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
            ]);
            return json_encode($ids);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function removeAllStatus()
    {
        try {
            $data = json_decode(file_get_contents("php://input"), true);
            $ids = $data['ids'];
            $status = $data['status'];
            Blog::whereIn('id', $ids)->update([
                'status' => $status,
                'deleted_at' => Carbon::now('Asia/Ho_Chi_Minh')
            ]);
            return json_encode($ids);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function search(Request $request)
    {
        try {
            $paginate = 9;
            $contacts = Blog::query()
                ->title($request)
                ->status($request)
                ->orderBy('created_at','DESC');

            return view('admin.template.blog.table', [
                'items' => $contacts->paginate($paginate),
                'oldTitle' => $request->get('title'),
                'paginate' => $paginate,
                'sum' => $contacts->count(),
                'status' => $request->get('status'),
            ]);
        } catch (\Exception $exception) {
            return $exception;
        }
    }
}
