@extends('frontend.master')
@section('title', 'Lỗi 404')
@section('content')
<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
       <div class="page-title"><h2>Lỗi 404</h2></div>
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </div>

<section class="content-wrapper">
  <div class="container">
    <div class="std">
      <div class="page-not-found">
      <br>
        <div><img src="./assests/img/404-img.png" alt="error image"></div>
        <h3>Ối @@ ! Trang bạn truy cập không tồn tại!</h3>
        <div><a href="{{asset('/')}}" class="btn-home"><span>Trở lại trang chủ</span></a></div>
      </div>
    </div>
  </div>
</section>
@stop