@extends('admincp.master')
@section('title', 'Chỉnh sửa đối tác vận chuyển')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card ">

                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">build</i>
                            </div>
                            <h4 class="card-title">Chỉnh sửa đối tác vận chuyển</h4>
                        </div>

                        <div class="card-body ">
                            <form class="form-horizontal" method="POST">
                                @include('success.note')
                                @include('errors.note')
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Tên đối tác</label>
                                    <div class="col-md-9">
                                        <div class="form-group has-default bmd-form-group">
                                            <input name="name" type="text" class="form-control" value="{{$ship->shipper_name}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Số điện thoại</label>
                                    <div class="col-md-9">
                                        <div class="form-group has-default bmd-form-group">
                                            <input name="phone" type="text" class="form-control" value="{{$ship->shipper_phone}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-footer ml-auto mr-auto">
                                        <button name="submit" type="submit" class="btn btn-rose">Cập nhật<div class="ripple-container"></div></button>
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
                    <a class="btn btn-rose" href="{{asset('admincp/dashboard/shipper')}}"><i class="material-icons">
                            keyboard_arrow_left
                        </i> Quay lại <div class="ripple-container"></div></a>

                </div>
            </div>
        </div>
    </div>



@stop