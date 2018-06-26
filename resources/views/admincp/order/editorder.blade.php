@extends('admincp.master')
@section('title', 'Cập nhật đơn hàng')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('success.note')
                    @include('errors.note')
                    <div class="card ">

                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">build</i>
                            </div>
                            <h4 class="card-title">Cập nhật đơn hàng #{{$order->order_id}}</h4>
                        </div>

                        <div class="card-body ">

                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Tên người nhận</label>
                                            <div class="col-md-9">
                                                <div class="form-group has-default bmd-form-group">
                                                    <input type="text" class="form-control" name="name" value="{{$order->order_name}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Số điện thoại</label>
                                            <div class="col-md-9">
                                                <div class="form-group has-default bmd-form-group">
                                                    <input type="text" class="form-control" name="name" value="{{$order->order_phone}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Địa chỉ giao hàng</label>
                                            <div class="col-md-9">
                                                <div class="form-group has-default bmd-form-group">
                                                    <input type="text" class="form-control" name="name" value="{{$order->order_address}}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Yêu cầu</label>
                                            <div class="col-md-9">
                                                <div class="form-group bmd-form-group">
                                                    <textarea class="form-control" rows="5" name="note">{{$order->order_note}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Trạng thái đơn hàng</label>

                                            <div class="col-md-6 col-sm-12">
                                                <select required class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" name="status" title="Trạng thái đơn hàng">
                                                    <option disabled>Chọn trạng thái đơn hàng</option>
                                                    <option value="0" @if($order->order_status == 0) selected @endif>Chờ xử lý</option>
                                                    <option value="1" @if($order->order_status == 1) selected @endif>Đã xác nhận</option>
                                                    <option value="2" @if($order->order_status == 2) selected @endif>Đã đóng gói</option>
                                                    <option value="3" @if($order->order_status == 3) selected @endif>Đang vận chuyển</option>
                                                    <option value="4" @if($order->order_status == 4) selected @endif>Giao hàng thành công</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Phương thức thanh toán</label>

                                            <div class="col-md-6 col-sm-12">
                                                <select required class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" name="methodpayment" title="Phương thức thanh toán">
                                                    <option disabled>Chọn phương thức thanh toán</option>
                                                    <option value="{{$order->order_methodpayment}}" @if($order->order_methodpayment == 'Thanh toán tiền mặt khi nhận hàng') selected @endif>{{$order->order_methodpayment}}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Đối tác vận chuyển</label>

                                            <div class="col-md-6 col-sm-12">
                                                <select required class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" name="shipper" title="Đối tác vận chuyển">
                                                    <option disabled>Chọn đối tác vận chuyển</option>
                                                    @foreach($shippers as $shipper)
                                                        <option value="{{$shipper->shipper_id}}" @if($shipper->shipper_id == $order->shipper_id) selected @endif>{{$shipper->shipper_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Mã vận đơn</label>
                                            <div class="col-md-6">
                                                <div class="form-group bmd-form-group">
                                                    <input type="text" class="form-control" name="billoflanding" value="{{$order->order_billoflanding}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Thời gian đặt hàng</label>
                                            <div class="col-md-6">
                                                <div class="form-group bmd-form-group">
                                                    {{$order->created_at}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Dự kiến giao hàng</label>
                                            <div class="col-md-6">
                                                <div class="form-group bmd-form-group">
                                                    {{date('d-m-Y',strtotime($order->order_receivetime))}}
                                                </div>
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
                        <div class="card-body">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">

                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Mã sản phẩm</th>
                                        <th class="text-left">Tên sản phẩm</th>
                                        <th class="text-right">Đơn giá</th>
                                        <th class="text-center">Số lượng</th>
                                        <th class="text-right">Thành tiền</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th class="text-center">Mã sản phẩm</th>
                                        <th class="text-left">Tên sản phẩm</th>
                                        <th class="text-right">Đơn giá</th>
                                        <th class="text-center">Số lượng</th>
                                        <th class="text-right">Thành tiền</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($details as $detail)
                                        <tr>
                                            <td class="text-center">{{$detail->detail_id}}</td>
                                            <td>{{$detail->detail_id}}</td>
                                            <td class="text-right">{{number_format($detail->detail_price)}} VNĐ</td>
                                            <td class="text-center">{{$detail->detail_qty}}</td>
                                            <td class="text-right">{{number_format($detail->detail_subtotal)}} VNĐ</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a class="btn btn-rose" href="{{asset('admincp/dashboard/order')}}"><i class="material-icons">
                            keyboard_arrow_left
                        </i> Quay lại <div class="ripple-container"></div><div class="ripple-container"></div></a>

                </div>
            </div>
        </div>
    </div>
@stop