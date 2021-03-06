<?php

namespace App\Http\Controllers\admin;

use App\Enums\UserStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('isLoggedIn');
    }

    public function getAll(){
        $paginate = 9;
        $contacts = User::query();
        return view('admin.template.user.users', [
            'items' => $contacts->orderBy('created_at', 'desc')->paginate($paginate),
            'paginate' => $paginate,
            'sum' => $contacts->count(),
        ]);
    }

    public function search(Request $request){
        try {
            $paginate = 9;
            $contacts = User::query()
                ->name($request)
                ->email($request)
                ->phone($request)
                ->status($request);

            return view('admin.template.user.users', [
                'items' => $contacts->paginate($paginate),
                'oldName' => $request->get('name'),
                'oldPhone' => $request->get('phone'),
                'oldEmail' => $request->get('email'),
                'paginate' => $paginate,
                'sum' => $contacts->count(),
                'status' => $request->get('status'),
            ]);
        }
        catch (\Exception $exception){
            return $exception;
        }
    }

    public function getDetail($id){
        $user = User::find($id);
        $order = Order::where('user_id','=', $id);
        $paginate = 9;
        return view('admin.template.user.detail', [
            'user' => $user,
            'paginate' => $paginate,
            'items'=> $order->paginate($paginate),
            'sum'=> $order->count(),
        ]);
    }

    public function getInformation($id){
        return view('admin.template.user.update', ['item' => User::find($id)]);
    }

    public function update(StoreUserRequest $request){
        $request->request->remove("_token");
        $request->request->remove("email");
        $request->request->remove("confirmPassword");
        $id = $request->get('id');
        $request->request->add([
            'password' => Hash::make($request->get('password')),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);

        try {
            $user = User::find($id);
            $user->update($request->all());
            Session::flash('message', "C???p nh???t kh??ch h??ng c?? id= $id, th??nh c??ng");
        } catch (\Exception $e){
            Session::flash('message', "C???p nh???t kh??ch h??ng c?? id= $id, th???t b???i");
        }
        return redirect('admin/users');

    }

    public function removeAllStatus(){
        try {
            $data = json_decode(file_get_contents("php://input"), true);
            $ids = $data['ids'];
            $status = 0;
            User::whereIn('id',$ids)->update([
                'status'=>$status,
                'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')
            ]);
            return json_encode($ids); // tr??? v??? danh s??ch id (ids) ???????c c???p nh???t
        }catch (\Exception $e){
            return $e;
        }
    }

    public function updateStatus(){
        try {
//            $data = json_decode(file_get_contents("php://input"), true);
//            // l???y th??ng tin s???n ph???m.
//            $orderId = $data['id'];
//            // l???y s??? l?????ng s???n ph???m c???n th??m v??o gi??? h??ng.
//            $orderStatus = $data['status'];
            $userId = request()->get('id');
            $userStatus = request()->get('status-update');
            $user = User::find($userId);
//            return $order;
            if (!$user->exists()) {
                return 'Kh??ng t??m th???y kh??ch h??ng';
            }
            $user->status = $userStatus;
            $user->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
            $user->save();

//            $title = "";
//            switch ($userStatus) {
//                case UserStatus::Deleted;
//                    $title = "Kh??ch h??ng v???i m?? #$user->id ???? b??? x??a";
//                    break;
//                case UserStatus::Existed;
//                    $title = "Kh??ch h??ng v???i m?? #$user->id ???? ???????c c???p nh???t t???n t???i";
//                    break;
//            }
//            $this->sendMail($user->id, $title);

            session()->flash('message',"C???p nh???t tr???ng th??i kh??ch h??ng m?? $userId, th??nh c??ng");

            return redirect()->back();
        } catch (\Exception $e) {
            return $e;
        }
    }
}
