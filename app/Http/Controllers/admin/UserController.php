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
            Session::flash('message', "Cập nhật khách hàng có id= $id, thành công");
        } catch (\Exception $e){
            Session::flash('message', "Cập nhật khách hàng có id= $id, thất bại");
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
            return json_encode($ids); // trả về danh sách id (ids) được cập nhật
        }catch (\Exception $e){
            return $e;
        }
    }

    public function updateStatus(){
        try {
//            $data = json_decode(file_get_contents("php://input"), true);
//            // lấy thông tin sản phẩm.
//            $orderId = $data['id'];
//            // lấy số lượng sản phẩm cần thêm vào giỏ hàng.
//            $orderStatus = $data['status'];
            $userId = request()->get('id');
            $userStatus = request()->get('status-update');
            $user = User::find($userId);
//            return $order;
            if (!$user->exists()) {
                return 'Không tìm thấy khách hàng';
            }
            $user->status = $userStatus;
            $user->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
            $user->save();

//            $title = "";
//            switch ($userStatus) {
//                case UserStatus::Deleted;
//                    $title = "Khách hàng với mã #$user->id đã bị xóa";
//                    break;
//                case UserStatus::Existed;
//                    $title = "Khách hàng với mã #$user->id đã được cập nhật tồn tại";
//                    break;
//            }
//            $this->sendMail($user->id, $title);

            session()->flash('message',"Cập nhật trạng thái khách hàng mã $userId, thành công");

            return redirect()->back();
        } catch (\Exception $e) {
            return $e;
        }
    }
}
