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
//        $remember_me = $request->has('remember_me');
        $admin = DB::table('admins')->where('email', $email)->first();
        $isLogin = $admin != null && Hash::check($password, $admin->password);
        if ($isLogin) {
            Session::put('loginId', $admin->id);
            return redirect('/admin/dashboard');
        } else {
            return redirect()
                ->back()
                ->with('loginFail', 'Please check username or password')
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
        $existUser = DB::table('admins')->where('email',$email )->exists();
        if ($existUser) {
            return redirect()
                ->back()
                ->with('emailExist', 'Email Exists')
                ->withInput();
        } else {
            $admin = new Admin();
            $admin->email = $email;
            $admin->full_name = $fullname;
            $admin->password = $password;
            $admin->save();
            return redirect()
                ->back()
                ->with('success', 'Successfully created a new account');
        }

    }
}
