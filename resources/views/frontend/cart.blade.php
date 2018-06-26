@extends('frontend.master')
@section('title', 'Giỏ hàng')
@section('content')
<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
            <div class="page-title">
                <h2>Giỏ hàng</h2>
            </div>
        </div>
      </div>
    </div>
</div>
       
<!-- BEGIN Main Container -->  
          
<div class="main-container col1-layout wow bounceInUp animated">
    <div class="main">
        <div class="cart wow bounceInUp animated">
            <form action="{{asset('gio-hang/checkout')}}" method="post">
                <div class="table-responsive shopping-cart-tbl  container">
                    @include('success.note')
                    @include('errors.note')
                        <fieldset>
                            <table id="shopping-cart-table" class="data-table cart-table table-striped">
                                <colgroup>
                                    <col width="1">
                                    <col>
                                    <col width="1">
                                    <col width="1">
                                    <col width="1">
                                    <col width="1">
                                    <col width="1">
                                </colgroup>
                                <thead>
                                    <tr class="first last">
                                        <th rowspan="1">
                                            <span class="nobr">Tên sản phẩm</span>
                                        </th>
                                        <th rowspan="1"></th>
                                        <th class="a-center" colspan="1">
                                            <span class="nobr">Đơn giá</span>
                                        </th>
                                        <th rowspan="1" class="a-center">Số lượng</th>
                                        <th class="a-center" colspan="1">Thành tiền</th>
                                        <th rowspan="1" class="a-center">Tác vụ</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr class="first last">
                                        <td colspan="50" class="a-right last">
                                            <button type="button" title="Tiếp tục mua hàng" class="button btn-continue" onClick="window.location='{{asset('/')}}'">
                                                <span>
                                                    <span>Tiếp tục mua hàng</span>
                                                </span>
                                            </button>
                                            <a href="{{asset('gio-hang/delete/all')}}" title="Xóa giỏ hàng" class="button btn-empty" id="empty_cart_button">
                                                <span>
                                                    <span>Xóa giỏ hàng</span>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                @if(Cart::count() > 0)
                                    @foreach($product as $prod)
                                    <tr class="ood">
                                        <td class="image hidden-table">
                                            <a href="" title="{{$prod->name}}" class="product-image">
                                                <img src="{{asset('uploads/products/'.$prod->options->img)}}" width="75" alt="{{$prod->name}}">
                                            </a>
                                        </td>
                                        <td>
                                            <h2 class="product-name">
                                                <a href="{{asset('san-pham/'.$prod->id.'-'.$prod->options->slug.'.html')}}">{{$prod->name}}</a>
                                            </h2>
                                        </td>
                                        <td class="a-right hidden-table">
                                            <span class="cart-price">
                                                <span class="price">{{number_format($prod->price)}} VNĐ</span>
                                            </span>
                                        </td>
                                        <td class="a-center movewishlist">
                                            <input name="qty" type="text" value="{{$prod->qty}}" rowId="{{$prod->rowId}}" title="Số lượng" class="input-text qty ajax-qty" maxlength="12">
                                        </td>
                                        <td class="a-right movewishlist">
                                            <span class="cart-price">
                                                <span class="price">{{number_format($prod->price * $prod->qty)}} VNĐ</span>
                                            </span>
                                        </td>
                                        <td class="a-center last">
                                            <a href="{{asset('gio-hang/delete/'.$prod->rowId)}}" title="Xóa sản phẩm {{$prod->name}}" class="button remove-item">
                                                <span>
                                                    <i class="icon-trash"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <h2>Giỏ hàng chưa có sản phẩm nào!</h2>
                                @endif
                                </tbody>
                            </table>
                        </fieldset>
                </div>

                <div class="cart-collaterals container">
                    <div class="col-sm-4">
                        @if(Auth::check())
                        <div class="shipping">
                            <h3>Thông tin giao hàng</h3>
                            <div class="shipping-form">
                                    <p>Vui lòng nhập đầy đủ thông tin giao hàng.</p>
                                    <ul class="form-list">
                                        <li>
                                            <label for="name" class="required">Tên người nhận<em>*</em>:</label>
                                            <div class="input-box">
                                                <input class="input-text" type="text" id="name" name="name" value="{{Auth::user()->user_fullname}}" required>
                                            </div>
                                        </li>
                                        <li>
                                            <label for="phone" class="required">Số điện thoại<em>*</em>:</label>
                                            <div class="input-box">
                                                <input class="input-text" type="text" id="phone" name="phone" value="0{{Auth::user()->user_phone}}" required>
                                            </div>
                                        </li>
                                        <li>
                                            <label for="phone" class="required">Địa chỉ giao hàng<em>*</em>:</label>
                                            <div class="input-box">
                                                <input class="input-text" type="text" id="address" name="address" value="{{Auth::user()->user_address}}" required>
                                            </div>
                                        </li>
                                        <li>
                                            <label for="note">Yêu cầu:</label>
                                            <div class="input-box">
                                                <textarea class="input-text" style="width: 100%" rows="4" id="note" name="note"></textarea>
                                            </div>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        @endif
                    </div>

                    <div class="col-sm-4">
                        @if(Auth::check())
                        <div class="discount">
                            <h3>Phương thức thanh toán</h3>
                            <div class="shipping-form">
                                    <p>Vui lòng nhập chọn phương thức thanh toán.</p>
                                    <ul class="form-list">
                                        <li>
                                            <label for="method-payment" class="required">Phương thức thanh toán<em>*</em>:</label>
                                            <div class="input-box">
                                                <select name="methodpayment" id="methodpayment"  title="Chọn phương thức thanh toán" required>
                                                    <option value="Thanh toán tiền mặt khi nhận hàng">Thanh toán tiền mặt khi nhận hàng</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-sm-4">
                        <div class="totals">
                            <h3>Tổng thanh toán cho giỏ hàng</h3>
                            <div class="inner">
                                <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                                    <colgroup>
                                        <col>
                                        <col width="1">
                                    </colgroup>
                                    <tfoot>
                                        <tr>
                                            <td style="" class="a-left" colspan="1">
                                                <strong>Tổng thanh toán</strong>
                                            </td>
                                            <td style="" class="a-right">
                                                <strong><span class="price">{{$total}} VNĐ</span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table><ul class="checkout">
                                    <li>
                                        @if(Auth::check())
                                            <button type="submit" title="Đặt mua" class="button btn-proceed-checkout">
                                                <span>Đặt mua</span>
                                            </button>
                                        @else
                                            <button type="button" title="Đăng nhập để đặt mua" class="button btn-proceed-checkout" onClick="window.location='{{asset('dang-nhap')}}'">
                                                <span>Đăng nhập để đặt mua</span>
                                            </button>
                                        @endif
                                    </li>
                                </ul>
                            </div><!--inner-->
                        </div><!--totals-->
                    </div> <!--col-sm-4-->
                </div> <!--cart-collaterals-->
                {{csrf_field()}}
            </form>
        </div>  <!--cart-->
    </div><!--main-container-->
</div> <!--col1-layout-->
@stop