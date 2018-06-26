@extends('admincp.master')
@section('title', 'Trang chủ')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">face</i>
                        </div>
                        <p class="card-category">Tài khoản khách hàng</p>
                        <h3 class="card-title">{{$user}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">face</i>
                            <a href="{{asset('admincp/dashboard/manage-user')}}">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <p class="card-category">Số lượng sản phẩm</p>
                        <h3 class="card-title">{{$product}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">equalizer</i>
                            <a href="{{asset('admincp/dashboard/product')}}">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">shopping_cart</i>
                        </div>
                        <p class="card-category">Số lượng đơn hàng</p>
                        <h3 class="card-title">{{$order}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">shopping_cart</i>
                            <a href="{{asset('admincp/dashboard/order')}}">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">check_circle</i>
                        </div>
                        <p class="card-category">Số lượng đơn hàng thành công</p>
                        <h3 class="card-title">{{$orderoke}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@stop