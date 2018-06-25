@extends('admincp.master')
@section('title', 'Thêm mới tài khoản')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card ">

                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">add_circle</i>
                            </div>
                            <h4 class="card-title">Thêm mới tài khoản</h4>
                        </div>

                        <div class="card-body ">
                            @include('success.note')
                            @include('errors.note')
                            <form class="form-horizontal" method="POST">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Tài khoản</label>
                                            <div class="col-md-9">
                                                <div class="form-group has-default bmd-form-group">
                                                    <input type="text" class="form-control" name="name" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Mật khẩu</label>
                                            <div class="col-md-9">
                                                <div class="form-group has-default bmd-form-group">
                                                    <input type="password" class="form-control" name="password" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Email</label>
                                            <div class="col-md-9">
                                                <div class="form-group has-default bmd-form-group">
                                                    <input type="email" class="form-control" name="email" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Họ và tên</label>
                                            <div class="col-md-9">
                                                <div class="form-group has-default bmd-form-group">
                                                    <input type="text" class="form-control" name="fullname" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Số điện thoại</label>
                                            <div class="col-md-9">
                                                <div class="form-group has-default bmd-form-group">
                                                    <input type="text" class="form-control" name="phone" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Địa chỉ</label>
                                            <div class="col-md-9">
                                                <div class="form-group has-default bmd-form-group">
                                                    <input type="text" class="form-control" name="address" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Loại tài khoản</label>

                                            <div class="col-md-9 col-sm-12">
                                                <select required class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" name="group" title="Chọn loại tài khoản">
                                                    <option disabled>Loại tài khoản</option>
                                                    @foreach($grouplist as $group)
                                                        <option value="{{$group->group_id}}">{{$group->group_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-footer ml-auto mr-auto">
                                        <button type="submit" class="btn btn-rose">Thêm mới<div class="ripple-container"></div></button>
                                    </div>
                                </div>
                                {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a class="btn btn-rose" href="{{asset('admincp/dashboard/manage-user')}}"><i class="material-icons">
                            keyboard_arrow_left
                        </i> Quay lại <div class="ripple-container"></div><div class="ripple-container"></div></a>

                </div>
            </div>
        </div>
    </div>
@stop