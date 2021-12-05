<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function showLogin()
    {
        return view("admin.template.login");
    }

    public function postLogin(LoginRequest $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        $remember_me = $request->has('remember_me');
        // tìm đến email có tên đó
//        $admin = DB::table('admins')->where('email', $email)->first();
//        $admin = Admin::where('email', $email)->get(); // trả về mảng
        $admin = Admin::where('email', $email)->first(); // trả về 1 đối tượng
//        // kiểm tra mật khẩu
//        $isLogin = $admin != null && Hash::check($password, $admin[0]->password); // lấy với get vì nó là mảng
        $isLogin = $admin != null && Hash::check($password, $admin->password); // lấy với first vì nó là 1 đối tượng

        if ($isLogin) {
            Session::put('loginId', $admin->id);
            return redirect('/admin/dashboard');
        } else {
            return redirect()
                ->back()
                ->with('loginFail', 'Xin hãy kiểm tra lại tên đăng nhập và mật khẩu')
                ->withInput();
        }
    }

    public function logOut(){
        if (Session::has('loginId')){
            session()->pull('loginId');
            return redirect('/admin/login');
        }
    }

    public function showRegister()
    {
        return view("admin.template.register");
    }

    public function register(RegisterRequest $request)
    {
        $email =$request->get('email');
        $fullname = $request->get('fullname');
        $password = Hash::make($request->get('password'));
        // kiểm tra sự tồn tại của tài khoản
//        $existUser = DB::table('admins')->where('email',$email )->exists();
        $existUser = Admin::where('email',$email )->exists();
        if ($existUser) {
            return redirect()
                ->back()
                ->with('emailExist', 'Email đã tồn tại')
                ->withInput();
        } else {
            $admin = new Admin();
            $admin->email = $email;
            $admin->full_name = $fullname;
            $admin->password = $password;
            $admin->save();
            return redirect()
                ->back()
                ->with('success', 'Tạo tài khoản mới thành công');
        }
    }
}
