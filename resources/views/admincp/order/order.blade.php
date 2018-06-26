@extends('admincp.master')
@section('title', 'Quản lý đơn hàng')
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
                            <h4 class="card-title">Danh sách đơn hàng</h4>
                        </div>

                        <div class="card-body">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">

                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Mã đơn hàng</th>
                                        <th class="text-left">Tài khoản đặt hàng</th>
                                        <th class="text-right">Tổng tiền</th>
                                        <th class="text-center">Thời gian đặt hàng</th>
                                        <th class="text-center">Dự kiến giao hàng</th>
                                        <th class="text-center">Đối tác vận chuyển</th>
                                        <th class="text-center">Mã vận bưu</th>
                                        <th class="text-center">Trạng thái</th>
                                        <th class="disabled-sorting text-center">Tác vụ</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th class="text-center">Mã đơn hàng</th>
                                        <th class="text-left">Tài khoản đặt hàng</th>
                                        <th class="text-right">Tổng tiền</th>
                                        <th class="text-center">Thời gian đặt hàng</th>
                                        <th class="text-center">Dự kiến giao hàng</th>
                                        <th class="text-center">Đối tác vận chuyển</th>
                                        <th class="text-center">Mã vận bưu</th>
                                        <th class="text-center">Trạng thái</th>
                                        <th class="text-center">Tác vụ</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($orderslist as $order)
                                        <tr>
                                            <td class="text-center">{{$order->order_id}}</td>
                                            <td>{{$order->user_name}}</td>
                                            <td class="text-right">{{number_format($order->order_total)}} VNĐ</td>
                                            <td class="text-center">{{$order->created_at}}</td>
                                            <td class="text-center">{{date('d-m-Y',strtotime($order->order_receivetime))}}</td>
                                            <td class="text-center">{{$order->shipper_name}}</td>
                                            <td class="text-center">{{$order->order_billoflanding}}</td>
                                            <td class="text-center">
                                                <span class="status">
                                                    @if($order->order_status == 0)
                                                        <span class="btn btn-danger">Chờ xử lý</span>
                                                    @elseif($order->order_status == 1)
                                                        <span class="btn btn-info">Đã xác nhận</span>
                                                    @elseif($order->order_status == 2)
                                                        <span class="btn btn-primary">Đã đóng gói</span>
                                                    @elseif($order->order_status == 3)
                                                        <span class="btn btn-warning">Đang vận chuyển</span>
                                                    @elseif($order->order_status == 4)
                                                        <span class="btn btn-success">Giao thành công</span>
                                                    @endif
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{asset('admincp/dashboard/order/edit/'.$order->order_id)}}" class="btn btn-warning btn-just-icon">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="{{asset('admincp/dashboard/order/delete/'.$order->order_id)}}" class="btn btn-danger btn-just-icon" onclick="return confirm('Bạn có muốn xóa đơn hàng này không?')">
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