<?php

namespace App\Http\Controllers\Admincp;

use App\Http\Requests\Admin\EditAdminRequest;
use App\Http\Requests\Admin\EditPwdRequest;
use Illuminate\Http\Request;
use App\User;
use App\Models\Group;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileAdminController extends Controller
{
    public function getProfileAdmin(){
        $data['grouplist'] = Group::All();
        return view('admincp.admin.profile',$data);
    }

    public function postProfileAdmin(EditAdminRequest $request, $user_id = null){
        $user_id = Auth::user()->user_id;
        $admin = new User();
        $arr['user_email'] = $request->email;
        $arr['user_fullname'] = $request->fullname;
        $arr['user_phone'] = $request->phone;
        $arr['user_address'] = $request->address;
        $arr['group_id'] = $request->group;
        $admin::where('user_id',$user_id)->update($arr);
        return back()->withInput()->with('success', 'Đã cập nhật thông tin tài khoản');
    }

    public function getPwdAdmin(){
        return view('admincp.admin.password');
    }

    public function postPwdAdmin(EditPwdRequest $request, $user_id = null){
        $user_id = Auth::user()->user_id;
        $user_password = Auth::user()->user_password;
        $admin = new User();

        if(Hash::check($request->oldpassword, $user_password)){
            $arr['user_password'] = bcrypt($request->password);
            $admin::where('user_id',$user_id)->update($arr);
            return back()->withInput()->with('success', 'Đã cập nhật mật khẩu tài khoản');
        } else {
            return back()->withInput()->with('error', 'Mật khẩu hiện tại không đúng');
        }
    }
}
