@extends('admincp.master')
@section('title', 'Danh sách tài khoản')
@section('content')

    <div class="content">
        <div class="container-fluid">
            @include('success.note')
            @include('errors.note')
            <div class="row">

                <div class="col-md-12">
                    <div class="card ">

                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">list</i>
                            </div>
                            <h4 class="card-title">Danh sách tài khoản</h4>
                        </div>

                        <div class="card-body">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">

                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="text-center">UID</th>
                                        <th class="text-left">Tài khoản</th>
                                        <th class="text-left">Loại tài khoản</th>
                                        <th class="text-center">Họ và tên</th>
                                        <th class="text-right">Số điện thoại</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Địa chỉ</th>
                                        <th class="text-center">Cập nhật</th>
                                        <th class="text-center">Ngày tạo</th>
                                        <th class="disabled-sorting text-center">Tác vụ</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th class="text-center">UID</th>
                                        <th class="text-left">Tài khoản</th>
                                        <th class="text-left">Loại tài khoản</th>
                                        <th class="text-center">Họ và tên</th>
                                        <th class="text-right">Số điện thoại</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Địa chỉ</th>
                                        <th class="text-center">Cập nhật</th>
                                        <th class="text-center">Ngày tạo</th>
                                        <th class="text-center">Tác vụ</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($userlist as $user)
                                        <tr>
                                            <td class="text-center">{{$user->user_id}}</td>
                                            <td>{{$user->user_name}}</td>
                                            <td>{{$user->group_name}}</td>
                                            <td class="text-center">{{$user->user_fullname}}</td>
                                            <td class="text-right">{{$user->user_phone}} VNĐ</td>
                                            <td class="text-center">{{$user->user_email}}</td>
                                            <td class="text-center">{{$user->user_address}}</td>
                                            <td class="text-center">{{$user->updated_at}}</td>
                                            <td class="text-center">{{$user->created_at}}</td>
                                            <td class="text-center">
                                                <a href="{{asset('admincp/dashboard/manage-user/edit/'.$user->user_id)}}" class="btn btn-warning btn-just-icon">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="{{asset('admincp/dashboard/manage-user/delete/'.$user->user_id)}}" class="btn btn-danger btn-just-icon" onclick="return confirm('Bạn có muốn xóa tài khoản này không?')">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop