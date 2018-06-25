@extends('admincp.master')
@section('title', 'Đối tác vận chuyển')
@section('content')

    <div class="content">
        <div class="container-fluid">
            @include('success.note')
            @include('errors.note')
            <div class="row">

                <div class="col-md-4">
                    <div class="card ">

                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">add_circle</i>
                            </div>
                            <h4 class="card-title">Thêm mới đối tác vận chuyển</h4>
                        </div>

                        <div class="card-body ">
                            <form class="form-horizontal" method="POST">

                                <div class="row">
                                    <label class="col-md-3 col-form-label">Tên đối tác</label>
                                    <div class="col-md-9">
                                        <div class="form-group has-default bmd-form-group">
                                            <input name="name" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Số điện thoại</label>
                                    <div class="col-md-9">
                                        <div class="form-group has-default bmd-form-group">
                                            <input name="phone" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-footer ml-auto mr-auto">
                                        <button name="submit" type="submit" class="btn btn-rose">Thêm mới<div class="ripple-container"></div></button>
                                    </div>
                                </div>
                                {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card ">

                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">list</i>
                            </div>
                            <h4 class="card-title">Danh sách tối tác vận chuyển</h4>
                        </div>

                        <div class="card-body">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">

                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Mã đối tác</th>
                                        <th>Tên đối tác</th>
                                        <th>Số điện thoại</th>
                                        <th class="disabled-sorting text-center">Tác vụ</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th class="text-center">Mã đối tác</th>
                                        <th>Tên đối tác</th>
                                        <th>Số điện thoại</th>
                                        <th class="text-center">Tác vụ</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($shipperlist as $shipper)
                                        <tr>
                                            <td class="text-center">{{$shipper->shipper_id}}</td>
                                            <td>{{$shipper->shipper_name}}</td>
                                            <td>{{$shipper->shipper_phone}}</td>
                                            <td class="text-center">
                                                <a href="{{asset('admincp/dashboard/shipper/edit/'.$shipper->shipper_id)}}" class="btn btn-warning btn-just-icon">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="{{asset('admincp/dashboard/shipper/delete/'.$shipper->shipper_id)}}" class="btn btn-danger btn-just-icon" onclick="return confirm('Nếu xóa đối tác này, những đơn hàng được phụ trách bởi đối tác này cũng sẽ bị xóa.\nBạn có muốn xóa đối tác này không?')">
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