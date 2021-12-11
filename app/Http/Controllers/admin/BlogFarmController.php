<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FarmRequest;
use App\Http\Requests\StoreBlogFarm;
use App\Models\Blog;
use App\Models\BlogFarm;
use App\Models\Farm;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogFarmController extends Controller
{
    public function __construct()
    {
        $this->middleware('isLoggedIn');
    }

    function getAll(){
        return view('admin.template.blog-farm.table',[
            'items' => BlogFarm::all(),
            'farm' =>Farm::all()
        ]);
    }

    public function search(Request $request)
    {
        try {
            $paginate = 9;
            $contacts = BlogFarm::query()
                ->title($request)
                ->farm($request)
                ->status($request)
                ->orderBy('created_at','DESC');

            return view('admin.template.blog-farm.table', [
                'farm' =>Farm::all(),
                'items' => $contacts->paginate($paginate),
                'oldName' => $request->get('title'),
                'oldPhone' => $request->get('farm_id'),
                'sum' => $contacts->count(),
                'status' => $request->get('status'),
            ]);
        } catch (\Exception $exception) {
            return $exception;
        }
    }
//
    function getForm(){
        return view('admin.template.blog-farm.form',[
            'farm' => Farm::all()
        ]);
    }
//
    function create(StoreBlogFarm $request){
        $request->request->remove("_token");
        $request->request->add([
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        ]);
        $farm = new BlogFarm($request->all());
        $farm->save();
        Session::flash('message', 'Tạo bài viết mới thành công');
        return redirect('/admin/blog/farms');
    }
//
    function getDetail($id){
        return view('admin.template.blog-farm.detail',[
            'item' =>BlogFarm::find($id)
        ]);
    }

    function getInformation($id){
        return view('admin.template.blog-farm.update',[
            'item' =>BlogFarm::find($id),
            'farm' => Farm::all()
        ]);
    }
//
    function update(StoreBlogFarm $request){
        $request->request->remove("_token");
        $id = $request->get('id');
        $request->request->remove('id'); // xóa id, nếu để id sẽ bị update cho updated_at sẽ sinh ra lỗi
        $request->request->add([
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        try {
            $farm = BlogFarm::find($id);
            $farm->update($request->all());
            Session::flash('message', "Cập nhật bài viết có id= $id, thành công");
        } catch (\Exception $e){
            Session::flash('message', "Cập nhật bài viết có id= $id, thất bại");
        }
        return redirect('admin/blog/farms');
    }
//
    function getConfirmDelete($id){
        return view('admin.template.blog-farm.delete',[
            'item' =>BlogFarm::find($id)
        ]);
    }

    function delete(Request $request){
        $id = $request->get('id');
        try {
            $farm = BlogFarm::find($id);
            $farm->deleted_at = Carbon::now('Asia/Ho_Chi_Minh');
            $farm->status = 0;
            $farm->save();
            Session::flash('message', "Xóa bài viết có id= $id, thành công");
        } catch (\Exception $e) {
            Session::flash('message', "Xóa bài viết có id= $id, thất bại");
        }
        return redirect('admin/blog/farms');
    }
//
//    public function updateAllStatus()
//    {
//        try {
//            $data = json_decode(file_get_contents("php://input"), true);
//            $ids = $data['ids'];
//            $status = $data['status'];
//            Farm::whereIn('id', $ids)->update([
//                'status' => $status,
//                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
//            ]);
//            return json_encode($ids);
//        } catch (\Exception $e) {
//            return $e;
//        }
//    }
//
//    public function removeAllStatus()
//    {
//        try {
//            $data = json_decode(file_get_contents("php://input"), true);
//            $ids = $data['ids'];
//            $status = $data['status'];
//            Farm::whereIn('id', $ids)->update([
//                'status' => $status,
//                'deleted_at' => Carbon::now('Asia/Ho_Chi_Minh')
//            ]);
//            return json_encode($ids);
//        } catch (\Exception $e) {
//            return $e;
//        }
//    }
//
//    public function search(Request $request)
//    {
//        try {
//            $paginate = 9;
//            $contacts = Farm::query()
//                ->name($request)
//                ->email($request)
//                ->phone($request)
//                ->status($request)
//                ->orderBy('created_at','DESC');
//
//            return view('admin.template.farm.table', [
//                'items' => $contacts->paginate($paginate),
//                'oldName' => $request->get('name'),
//                'oldPhone' => $request->get('phone'),
//                'oldEmail' => $request->get('email'),
//                'paginate' => $paginate,
//                'sum' => $contacts->count(),
//                'status' => $request->get('status'),
//            ]);
//        } catch (\Exception $exception) {
//            return $exception;
//        }
//    }
}
