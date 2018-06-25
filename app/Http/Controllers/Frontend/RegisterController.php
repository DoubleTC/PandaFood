<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\User\RegisterRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class RegisterController extends Controller
{
    public function getRegister(){
        return view('frontend.register');
    }

    public function postRegister(RegisterRequest $request){
        $user = new User();
        $user->user_name = $request->username;
        $user->user_password = bcrypt($request->password);
        $user->user_email = $request->email;
        $user->user_fullname = $request->fullname;
        $user->user_phone = $request->phone;
        $user->user_address = $request->address;
        $user->group_id = 2;
        $user->save();
        return back()->withInput()->with('success', 'Đã đăng ký thành công');
    }
}
