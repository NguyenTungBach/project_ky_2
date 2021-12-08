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
        $paginate = 9;
        $contacts = Farm::query();
        return view('admin.template.farm.table',[
            'items' => $contacts->orderBy('created_at', 'desc')->paginate($paginate),
            'paginate' => $paginate,
            'sum' => $contacts->count(),
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

    function getDetail($id){
        return view('admin.template.farm.detail',[
            'item' =>Farm::find($id)
        ]);
    }

    function getInformation($id){
        return view('admin.template.farm.update',[
            'item' =>Farm::find($id)
        ]);
    }

    function update(FarmRequest $request){
        $request->request->remove("_token");
        $id = $request->get('id');
        $request->request->remove('id'); // xóa id, nếu để id sẽ bị update cho updated_at sẽ sinh ra lỗi
        $request->request->add([
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        try {
            $farm = Farm::find($id);
            $farm->update($request->all());
            Session::flash('message', "Cập nhật sản phẩm có id= $id, thành công");
        } catch (\Exception $e){
            Session::flash('message', "Cập nhật sản phẩm có id= $id, thất bại");
        }
        return redirect('admin/farms');
    }

    function getConfirmDelete($id){
        return view('admin.template.farm.delete',[
            'item' =>Farm::find($id)
        ]);
    }

    function delete(Request $request){
        $id = $request->get('id');
        try {
            $farm = Farm::find($id);
            $farm->deleted_at = Carbon::now('Asia/Ho_Chi_Minh');
            $farm->status = 0;
            $farm->save();
            Session::flash('message', "Xóa trang trại có id= $id, thành công");
        } catch (\Exception $e) {
            Session::flash('message', "Xóa trang trại có id= $id, thất bại");
        }
        return redirect('admin/farms');
    }

    public function updateAllStatus()
    {
        try {
            $data = json_decode(file_get_contents("php://input"), true);
            $ids = $data['ids'];
            $status = $data['status'];
            Farm::whereIn('id', $ids)->update([
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
            Farm::whereIn('id', $ids)->update([
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
            $contacts = Farm::query()
                ->name($request)
                ->email($request)
                ->phone($request)
                ->status($request);

            return view('admin.template.farm.table', [
                'items' => $contacts->paginate($paginate),
                'oldName' => $request->get('name'),
                'oldPhone' => $request->get('phone'),
                'oldEmail' => $request->get('email'),
                'paginate' => $paginate,
                'sum' => $contacts->count(),
                'status' => $request->get('status'),
            ]);
        } catch (\Exception $exception) {
            return $exception;
        }
    }
}
