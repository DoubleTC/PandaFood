<?php

namespace App\Http\Controllers\Admincp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Models\Group;
use App\Http\Requests\User\AddUserRequest;
use App\Http\Requests\User\EditUserRequest;

class UserController extends Controller
{
    public function getUser(){
        $data['userlist'] = DB::table('pdf_users')->join('pdf_groups','pdf_users.group_id','=','pdf_groups.group_id')->orderBy('user_id','desc')->get();
        return view('admincp.user.user',$data);
    }

    public function getAddUser(){
        $data['grouplist'] = Group::All();
        return view('admincp.user.adduser',$data);
    }

    public function postAddUser(AddUserRequest $request){
        $user = new User();
        $user->user_name = $request->name;
        $user->user_password = bcrypt($request->password);
        $user->user_email = $request->email;
        $user->user_fullname = $request->fullname;
        $user->user_phone = $request->phone;
        $user->user_address = $request->address;
        $user->group_id = $request->group;
        $user->save();
        return back()->withInput()->with('success', 'Đã thêm mới tài khoản');
    }

    public function getEditUser($user_id){
        $data['user'] = User::find($user_id);
        $data['grouplist'] = Group::All();
        return view('admincp.user.edituser',$data);
    }

    public function postEditUser(EditUserRequest $request, $user_id){
        $user = new User();
        $arr['user_email'] = $request->email;
        $arr['user_fullname'] = $request->fullname;
        $arr['user_phone'] = $request->phone;
        $arr['user_address'] = $request->address;
        $arr['group_id'] = $request->group;
        $user::where('user_id',$user_id)->update($arr);
        return back()->withInput()->with('success', 'Đã cập nhật tài khoản');
    }

    public function getDelUser($user_id){
        User::destroy($user_id);
        return back()->withInput()->with('success', 'Đã xóa tài khoản');
    }
}
