@extends('admincp.master')
@section('title', 'Hồ sơ cá nhân quản trị viên')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                @include('success.note')
                @include('errors.note')
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card ">

                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">contacts</i>
                        </div>
                        <h4 class="card-title">Hồ sơ cá nhân quản trị viên</h4>
                    </div>

                    <div class="card-body ">
                        <form class="form-horizontal" method="POST">
                            <div class="row">
                                <label class="col-md-3 col-form-label">Tên đăng nhập</label>
                                <div class="col-md-7">
                                    <div class="form-group has-default bmd-form-group">
                                        <input type="text" class="form-control" value="{{Auth::user()->user_name}}" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">Email</label>
                                <div class="col-md-7">
                                    <div class="form-group bmd-form-group">
                                        <input type="email" class="form-control" name="email" value="{{Auth::user()->user_email}}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">Họ và tên</label>
                                <div class="col-md-7">
                                    <div class="form-group bmd-form-group">
                                        <input type="text" class="form-control" name="fullname" value="{{Auth::user()->user_fullname}}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">Số điện thoại</label>
                                <div class="col-md-7">
                                    <div class="form-group bmd-form-group">
                                        <input type="text" class="form-control" name="phone" value="{{Auth::user()->user_phone}}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">Địa chỉ</label>
                                <div class="col-md-7">
                                    <div class="form-group bmd-form-group">
                                        <input type="text" class="form-control" name="address" value="{{Auth::user()->user_address}}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">Loại tài khoản</label>

                                <div class="col-lg-5 col-md-6 col-sm-3">
                                    <select class="selectpicker" data-size="7" name="group" data-style="btn btn-primary btn-round" title="Loại tài khoản" required>
                                        <option disabled>Chọn loại tài khoản</option>
                                        @foreach($grouplist as $group)
                                            <option value="{{$group->group_id}}" @if($group->group_id == Auth::user()->group_id) selected @endif>{{$group->group_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" name="updateinfo" class="btn btn-rose">Cập nhật<div class="ripple-container"></div></button>
                                </div>
                            </div>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop