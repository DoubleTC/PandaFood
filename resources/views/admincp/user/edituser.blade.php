@extends('admincp.master')
@section('title', 'Cập nhật tài khoản')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card ">

                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">build</i>
                            </div>
                            <h4 class="card-title">Cập nhật tài khoản</h4>
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
                                                    <input type="text" class="form-control" name="name" value="{{$user->user_name}}" disabled required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Email</label>
                                            <div class="col-md-9">
                                                <div class="form-group bmd-form-group">
                                                    <input type="email" class="form-control" name="email" value="{{$user->user_email}}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Họ và tên</label>
                                            <div class="col-md-9">
                                                <div class="form-group bmd-form-group">
                                                    <input type="text" class="form-control" name="fullname" value="{{$user->user_fullname}}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Số điện thoại</label>
                                            <div class="col-md-9">
                                                <div class="form-group bmd-form-group">
                                                    <input type="text" class="form-control" name="phone" value="{{$user->user_phone}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Địa chỉ</label>
                                            <div class="col-md-9">
                                                <div class="form-group bmd-form-group">
                                                    <input type="text" class="form-control" name="address" value="{{$user->user_address}}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Loại tài khoản</label>

                                            <div class="col-md-9 col-sm-12">
                                                <select required class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" name="group" title="">
                                                    <option disabled>Chọn danh mục sản phẩm</option>
                                                    @foreach($grouplist as $group)
                                                        <option value="{{$group->group_id}}" @if($user->group_id == $group->group_id) selected @endif>{{$group->group_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-footer ml-auto mr-auto">
                                        <button type="submit" class="btn btn-rose">Cập nhật<div class="ripple-container"></div></button>
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