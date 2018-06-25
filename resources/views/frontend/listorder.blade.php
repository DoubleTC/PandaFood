@extends('frontend.master')
@section('title', 'Danh sách đơn hàng')
@section('content')
<div class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="page-title">
          <h2>Danh sách đơn hàng</h2>
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
              <div class="title-buttons"> <strong>Đơn hàng</strong></div>
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
                                @if($order->order_status == 0)
                                    Chờ xử lý
                                @elseif($order->order_status == 1)
                                    Đã xác nhận
                                @elseif($order->order_status == 2)
                                    Đã đóng gói
                                @elseif($order->order_status == 3)
                                    Đang vận chuyển
                                @elseif($order->order_status == 4)
                                    Giao thành công
                                @endif
                            </em>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                <div class="pages text-center">
                  {{$orders->links()}}
                </div>
                </div>
                <!--table-responsive-->                 
              </div>
              <!--recent-orders-->
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