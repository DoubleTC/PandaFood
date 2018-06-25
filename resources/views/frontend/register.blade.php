@extends('frontend.master')
@section('title', 'Đăng ký tài khoản')
@section('content')

<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title">
                    <h2>Đăng ký tài khoản</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BEGIN Main Container -->
<div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">
    <div class="main">
        <div class="account-register container">
            @include('success.note')
            @include('errors.note')
            <strong>Đăng ký tài khoản</strong>
            <form action="" method="POST" id="login-form">
                <div class="row">
                    <div class="col-md-6 register">
                        <label>Tên đăng nhập<em class="required">*</em>:</label>
                        <div class="input-box">
                            <input class="input-text" type="text" name="username" required>
                        </div>
                        <label>Mật khẩu<em class="required">*</em>:</label>
                        <div class="input-box">
                            <input class="input-text" type="password" name="password" required>
                        </div>
                        <label>Nhập lại mật khẩu<em class="required">*</em>:</label>
                        <div class="input-box">
                            <input class="input-text" type="password" name="password_confirmation" required>
                        </div>
                        <label>Địa chỉ Email<em class="required">*</em>:</label>
                        <div class="input-box">
                            <input class="input-text" type="email" name="email" required>
                        </div>
                    </div>
                    <div class="col-md-6 register">
                        <label>Họ và tên<em class="required">*</em>:</label>
                        <div class="input-box">
                            <input class="input-text" type="text" name="fullname" required>
                        </div>
                        <label>Số điện thoại<em class="required">*</em>:</label>
                        <div class="input-box">
                            <input class="input-text" type="text" name="phone" required>
                        </div>
                        <label>Địa chỉ giao hàng<em class="required">*</em>:</label>
                        <div class="input-box">
                            <input class="input-text" type="text" name="address" required>
                        </div>
                    </div>
                </div>

                <div class="buttons-set">
                    <button type="submit" title="Đăng ký tài khoản" class="button create-account"><span><span>Đăng ký tài khoản</span></span></button>
                </div>

                {{csrf_field()}}
            </form>
        </div>
    </div>
</div>
@stop