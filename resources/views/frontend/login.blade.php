@extends('frontend.master')
@section('title', 'Đăng nhập')
@section('content')

<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title">
                    <h2>Đăng nhập</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">
    <div class="main">
        <div class="account-login container">
            @include('success.note')
            @include('errors.note')
            <form action="" method="post" id="login-form">
                <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
                <fieldset class="col2-set">
                    <div class="col-1 new-users">
                        <strong>Bạn là khách hàng mới?</strong>
                        <div class="content">
                            <p>Tạo tài khoản tại {{$infoweb->info_name}} để thỏa sức mua sắm các loại thực phẩm sạch được cung cấp bởi {{$infoweb->info_name}} và nhận được thông tin về các chương trình khuyến mãi nhanh nhất!</p>
                            <div class="buttons-set">
                                <a title="Đăng ký tài khoản" class="button2 create-account" href="{{asset('dang-ky')}}"><span>Đăng ký tài khoản</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 registered-users">
                        <strong>Đăng nhập</strong>
                        <div class="content">
                            <ul class="form-list">
                                <li>
                                    <label for="username">Tên đăng nhập<em class="required">*</em>:</label>
                                    <div class="input-box">
                                        <input type="text" name="username" id="username" class="input-text required-entry validate-email" title="Tên đăng nhập">
                                    </div>
                                </li>
                                <li>
                                    <label for="pass">Mật khảu<em class="required">*</em>:</label>
                                    <div class="input-box">
                                        <input type="password" name="password" class="input-text required-entry validate-password" id="pass" title="Mật khẩu">
                                    </div>
                                </li>
                            </ul>
                            <div class="remember-me-popup">
                                <div class="remember-me-popup-head" style="display:none">
                                    <h3 id="text2">What's this?</h3>
                                    <a href="#" class="remember-me-popup-close" onClick="showDiv()" title="Close">Close</a>
                                </div>
                                <div class="remember-me-popup-body" style="display:none">
                                    <p id="text1">Checking "Remember Me" will let you access your shopping cart on this computer when you are logged out</p>
                                    <div class="remember-me-popup-close-button a-right">
                                        <a href="#" class="remember-me-popup-close button" title="Close" onClick="showDiv()"><span>Close</span></a>
                                    </div>
                                </div>
                            </div>
                            <p class="required">* Vui lòng không được bỏ trống!</p>
                            <div class="buttons-set">
                                <button type="submit" class="button login" title="Đăng nhập" name="login"><span>Đăng nhập</span></button>
                                <a href="#" class="forgot-word">Quên mật khẩu?</a>
                            </div>
                        </div>
                    </div>
                </fieldset>
                {{csrf_field()}}
            </form>
        </div>
    </div>
</div>
          
@stop