@extends('frontend.master')
@section('title', 'Chi tiết hóa đơn')
@section('content')
<div class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="page-title">
          <h2>Chi tiết hóa đơn</h2>
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
              <div class="title-buttons">
                  @foreach($order as $ord)
                  <strong>Chi tiết hóa đơn <span class="badge">#{{$ord->order_id}}</span> -
                      <span class="status">
                          @if($ord->order_status == 0)
                              <span class="label label-danger">Chờ xử lý</span>
                          @elseif($ord->order_status == 1)
                              <span class="label label-info">Đã xác nhận</span>
                          @elseif($ord->order_status == 2)
                              <span class="label label-primary">Đã đóng gói</span>
                          @elseif($ord->order_status == 3)
                              <span class="label label-warning">Đang vận chuyển</span>
                          @elseif($ord->order_status == 4)
                              <span class="label label-success">Giao thành công</span>
                          @endif
                      </span>
                  </strong>
                  @endforeach
              </div>
              <div class="table-responsive">
                <table class="data-table table-striped" id="my-orders-table">
                  <colgroup>
                    <col width="1">
                    <col width="1">
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
                        <th>Sản phẩm</th>
                        <th class="text-right">Đơn giá</th>
                        <th class="text-center">Số lượng</th>
                        <th class="text-right"><span class="nobr">Thành tiền</span></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($details as $prod)
                      <tr class="even">
                        <td>
                            <span class="nobr">
                                <a href="{{asset('san-pham/'.$prod->product_id.'-'.$prod->product_slug.'.html')}}" title="{{$prod->product_name}}">
                                    <img width="75px" src="{{asset('uploads/products/'.$prod->product_img)}}" alt="{{$prod->product_name}}">
                                    {{$prod->product_name}}
                                </a>
                            </span>
                        </td>
                        <td class="text-right"><span class="price">{{number_format($prod->detail_price)}}</span> VNĐ</td>
                        <td class="text-center">{{$prod->detail_qty}}</td>
                        <td class="text-right"><span class="price">{{number_format($prod->detail_subtotal)}}</span> VNĐ</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  <div class="total text-right">Tổng thanh toán: <span class="price">@foreach($order as $ord){{number_format($ord->order_total)}}@endforeach</span> VNĐ</div>
                </div>
                <!--table-responsive-->                 
              </div>
              <!--recent-orders-->
              <div class="box-account">
                <div class="page-title">
                  <h2>Thông tin thanh toán</h2>
                </div>
                <div class="col2-set">
                  <div class="col-1">
                    <div class="box">
                      <div class="box-title">
                        <h5>Địa chỉ người nhận</h5>
                      </div>
                      <!--box-title-->
                      <div class="box-content">
                         @foreach($order as $ord)
                         <p>{{$ord->order_name}}</p>
                         <p>Số điện thoại: {{$ord->order_phone}}</p>
                         <p>Địa chỉ: {{$ord->order_address}}</p>
                         @endforeach
                      </div>
                      <!--box-content--> 
                    </div>
                    <!--box--> 
                  </div>
                  <div class="col-2">
                    <div class="box">
                        <div class="box-title">
                            <h5>Hình thức giao hàng</h5>
                        </div>
                          <div class="box-content">
                              @foreach($order as $ord)
                                  <p>Đối tác vận chuyển: <b>{{$ord->shipper_name}}</b></p>
                                  <p>Mã vận đơn: {{$ord->order_billoflanding}}</p>
                                  <p>Dự kiến giao hàng: <b>{{date('d-m-Y', strtotime($ord->order_receivetime))}}</b></p>
                              @endforeach
                          </div>
                      <!--box-content-->
                    </div>
                    <!--box--> 
                  </div>
                </div>
                  <div class="col2-set">
                      <div class="col-1">
                          <div class="box">
                              <div class="box-title">
                                  <h5>Phương thức thanh toán</h5>
                              </div>
                              <!--box-title-->
                              <div class="box-content">
                                  @foreach($order as $ord)
                                      <p>{{$ord->order_methodpayment}}</p>
                                  @endforeach
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