<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    function getForm(){
        return view('client.page.account.register');
    }
    function create(StoreUserRequest  $request){
        $name = $request->get('name');
        $address = $request->get('address');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $password = Hash::make($request->get('password'));
        $existAccount = User::where('email',$email)->exists();
        if ($existAccount){
            return "Tài khoản đã tồn tại";
        }
        else{
            $user = new User();
            $user->email = $email;
            $user->name = $name;
            $user->address = $address;
            $user->phone = $phone;
            $user->password = $password;;
            $user->created_at = Carbon::now('Asia/Ho_Chi_Minh');
            $user->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
            $user->save();
            return view('client.page.account.login');
        }
    }
    function getLogin(){
        return view('client.page.account.login');
    }
    function login(LoginRequest  $request){
        $email = $request->get('email');
        $user = User::where('email',$email)->first();
        if ($user){
            $password = $request->get('password');
            $isLogin = Hash::check($password, $user->password);
            if ($isLogin){
                Session::put('loginUserId', $user->id);
                return view('client.page.account.detail',[
                    'items' =>$user
                ]);
            }
        }
        return "Login Failed";
    }


    function getOrder(){
        return view('client.page.account.order');
    }
}
