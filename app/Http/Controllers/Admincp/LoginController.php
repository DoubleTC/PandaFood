<?php

namespace App\Http\Controllers\Admincp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function getLogin(){
        return view('admincp.login');
    }

    public function postLogin(Request $request){

        $credentials = [
                'user_name'=>$request->username,
                'password'=>$request->password,
                'group_id' => 1];
        if($request->remember =  'Remember Me'){
            $remember = true;
        } else {
            $remember = false;
        }

        if(Auth::attempt($credentials)){
            return redirect()->intended('admincp/dashboard');

        } else {
            return back()->withInput()->with('error', 'Tài khoản hoặc mật khẩu không đúng');
        }
    }
}


