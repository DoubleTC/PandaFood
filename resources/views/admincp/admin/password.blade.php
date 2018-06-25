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
                                <i class="material-icons">build</i>
                            </div>
                            <h4 class="card-title">Thay đổi mật khẩu</h4>
                        </div>

                        <div class="card-body ">
                            <form class="form-horizontal" method="POST">
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Mật khẩu hiện tại</label>
                                    <div class="col-md-7">
                                        <div class="form-group has-default bmd-form-group">
                                            <input type="password" class="form-control" name="oldpassword" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-3 col-form-label">Mật khẩu mới</label>
                                    <div class="col-md-7">
                                        <div class="form-group bmd-form-group">
                                            <input type="password" class="form-control" name="password" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-3 col-form-label">Nhập lại mật khẩu mới</label>
                                    <div class="col-md-7">
                                        <div class="form-group bmd-form-group">
                                            <input type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-footer ml-auto mr-auto">
                                        <button type="submit" name="updatepwd" class="btn btn-rose">Thay đổi mật khẩu<div class="ripple-container"></div></button>
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