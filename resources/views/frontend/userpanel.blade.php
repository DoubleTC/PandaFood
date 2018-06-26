@extends('frontend.master')
@section('title', 'Thông tin tài khoản')
@section('content')
<div class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="page-title">
          <h2>Thông tin tài khoản</h2>
        </div>
      </div>
    </div>
  </div>
</div>
  
  <!-- BEGIN Main Container col2-right -->
<section class="main-container col2-right-layout">
  <div class="main container">
    <div class="row">
      <section class="col-main col-sm-9 col-xs-12 wow bounceInUp animated animated" style="visibility: visible;">
        <div class="my-account">
          <!--page-title-->
          <!-- BEGIN DASHBOARD-->
          <div class="dashboard">
            <div class="recent-orders">
              <div class="title-buttons"> <strong>Đơn hàng gần đây</strong> <a href="{{asset('tai-khoan/don-hang')}}">Xem tất cả</a> </div>
              <div class="table-responsive">
                <table class="data-table table-striped" id="my-orders-table">
                  <colgroup>
                    <col width="1">
                    <col width="20%">
                    <col width="1">
                    <col width="1">
                    <col width="1">
                    <col width="1">
                    <col width="1">
                    <col width="1">
                    <col width="1">
                    </colgroup>
                    <thead>
                      <tr class="first last">
                        <th>Mã # </th>
                        <th>Người nhận</th>
                        <th>Số điện thoại</th>
                        <th><span class="nobr">Thành tiền</span></th>
                        <th>Dự kiến giao hàng</th>
                        <th>Trạng thái</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                      <tr class="even">
                        <td><span class="nobr"> <a href="{{asset('tai-khoan/don-hang/chi-tiet/'.$order->order_id)}}" style="color: #337ab7">{{$order->order_id}}</a></span></td>
                        <td>{{$order->order_name}}</td>
                        <td>{{$order->order_phone}}</td>
                        <td><span class="price">{{number_format($order->order_total)}}</span> VNĐ</td>
                        <td><span class="nobr">{{date('d-m-Y',strtotime($order->order_receivetime))}}</span></td>
                        <td>
                            <em>
                                <span class="status">
                                  @if($order->order_status == 0)
                                    <span class="label label-danger">Chờ xử lý</span>
                                  @elseif($order->order_status == 1)
                                    <span class="label label-info">Đã xác nhận</span>
                                  @elseif($order->order_status == 2)
                                    <span class="label label-primary">Đã đóng gói</span>
                                  @elseif($order->order_status == 3)
                                    <span class="label label-warning">Đang vận chuyển</span>
                                  @elseif($order->order_status == 4)
                                    <span class="label label-success">Giao thành công</span>
                                  @endif
                                </span>
                            </em>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!--table-responsive-->                 
              </div>
              <!--recent-orders-->
              <div class="box-account">
                <div class="page-title">
                  <h2>Thông tin tài khoản</h2>
                </div>
                <div class="col2-set">
                  <div class="col-1">
                    <div class="box">
                      <div class="box-title">
                        <h5>Tài khoản</h5>
                      </div>
                      <!--box-title-->
                      <div class="box-content">
                         <p>{{Auth::user()->user_name}}</p>
                         <p>{{Auth::user()->user_email}}</p>
                         <p> <a href="#">Đổi mật khẩu</a> </p>
                      </div>
                      <!--box-content--> 
                    </div>
                    <!--box--> 
                  </div>
                  <div class="col-2">
                    <div class="box">
                        <div class="box-title">
                            <h5>Địa chỉ giao hàng mặc định</h5>
                        </div>
                          <div class="box-content">
                              <p>{{Auth::user()->user_fullname}}</p>
                              <p>{{Auth::user()->user_phone}}</p>
                              <p>{{Auth::user()->user_address}}</p>
                              <p><a href="#">Thay đổi địa chỉ</a></p>
                          </div>
                      <!--box-content-->
                    </div>
                    <!--box--> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--col-main col-sm-9 wow bounceInUp animated-->
        @include('frontend.aside')
        <!--col-right sidebar col-sm-3 wow bounceInUp animated--> 
    </div>
      <!--row--> 
  </div>
    <!--main container--> 
</section>
@stop