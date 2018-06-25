@extends('frontend.master')
@section('title', $title->product_name)
@section('content')
@foreach($product as $prod)
<div class="page-heading">
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul>
              <li class="home"> <a href="#" title="Trang chủ {{$infoweb->info_name}}">Trang chủ {{$infoweb->info_name}}</a> <span>—› </span> </li>
              <li class="category1599"> <a href="{{'danh-muc/'.$prod->category_id.'-'.$prod->category_title}}" title="{{$prod->category_title}}">{{$prod->category_title}}</a> <span>—› </span> </li>
            </ul>
          </div>
          <!--col-xs-12-->
        </div>
        <!--row-->
      </div>
      <!--container-->
    </div>
    <div class="page-title">
      <h2>{{$prod->product_name}}</h2>
    </div>
  </div>
  <!-- BEGIN Main Container -->
  <div class="main-container col1-layout wow bounceInUp animated">
    <div class="main">
      <div class="col-main">
        <!-- Endif Next Previous Product -->
        <div class="product-view wow bounceInUp animated" itemscope="" itemtype="" itemid="#product_base">
          <div id="messages_product_view"></div>
          <!--product-next-prev-->
          <div class="product-essential container">
            <div class="row">
              <form action="{{asset('gio-hang/addcart')}}" method="post" id="product_addtocart_form">
                <!--End For version 1, 2, 6 -->
                <!-- For version 3 -->
                <div class="product-img-box col-sm-6 col-xs-12">
                  <div class="new-label new-top-left"> New </div>
                  <div class="product-image">
                    <div class="large-image"> <a href="{{asset('uploads/products/'.$prod->product_img)}}" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img src="{{asset('uploads/products/'.$prod->product_img)}}"> </a> </div>
                  </div>
                </div>
                <!--End For version 1,2,6-->
                <!-- For version 3 -->
                <div class="product-shop col-sm-6 col-xs-12">
                    @include('success.note')
                    @include('errors.note')
                  <div class="product-name">
                    <h1 itemprop="name">{{$prod->product_name}}</h1>
                  </div>
                  <!--product-name-->
                  <div class="price-block">
                    <div class="price-box"> <span class="regular-price" id="product-price-123"> <span class="price">{{number_format($prod->product_price)}} VNĐ</span> /{{strtoupper($prod->product_unit)}}</span> </div>

                    @if($prod->product_condition == 1)
                      <p class="availability in-stock">
                        <span>Còn hàng</span>
                      </p>
                    @else
                      <p class="availability out-of-stock">
                        <span>Tạm hết hàng</span>
                      </p>
                    @endif
                  </div>
                  <!--price-block-->
                  <div class="short-description">
                    <h2>Giới thiệu</h2>
                    <p>{!! $prod->product_description !!}</p>
                  </div>
                  <div class="add-to-box">
                    <div class="add-to-cart">
                      <div class="pull-left">
                        <div class="custom pull-left">
                         <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                          <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Số lượng:" class="input-text qty">
                           <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                        </div>
                        <!--custom pull-left-->
                      </div>
                      <!--pull-left-->
                      <button type="submit" title="Thêm vào giỏ hàng" name="id" value="{{$prod->product_id}}" class="button btn-cart"><span><i class="icon-basket"></i>Thêm vào giỏ hàng</span></button>
                    </div>
                  </div>
                  <!--add-to-box-->
                  <!-- thm-mart Social Share-->
                  <div class="social">
                    <ul class="link">
                      <li class="fb"> <a href="http://www.facebook.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
                      <li class="linkedin"> <a href="http://www.linkedin.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
                      <li class="tw"> <a href="http://twitter.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
                      <li class="pintrest"> <a href="http://pinterest.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
                      <li class="googleplus"> <a href="https://plus.google.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
                    </ul>
                  </div>
                  <!-- thm-mart Social Share Close-->
                </div>
                <!--product-shop-->
                <!--Detail page static block for version 3-->
                  {{csrf_field()}}
              </form>
            </div>
          </div>
          <!--product-essential-->
          <div class="product-collateral container">
            <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
              <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Giới thiệu </a> </li>
              <li><a href="#product_tabs_comments" data-toggle="tab"> Bình luận </a></li>
            </ul>
            <div id="productTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="product_tabs_description">
                <div class="std">
                  {!! $prod->product_content !!}
                </div>
              </div>
              <div class="tab-pane fade" id="product_tabs_comments">
                <div class="box-collateral box-tags">
                  <div class="tags">
                    <form id="addTagForm" action="#" method="get">
                      <div class="form-add-tags">
                        <label for="productTagName">Add Tags:</label>
                        <div class="input-box">
                          <input class="input-text" name="productTagName" id="productTagName" type="text">
                          <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span> </button>
                        </div>
                        <!--input-box--> 
                      </div>
                    </form>
                  </div>
                  <!--tags-->
                  <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                </div>
              </div>
            </div>
          </div>

          <!--product-collateral-->
          <div class="box-additional">
            <!-- BEGIN RELATED PRODUCTS -->
            <div class="related-pro container">
              <div class="slider-items-products">
                <div class="new_title center">
                  <h2>Sản phẩm liên quan</h2>
                </div>
                <div id="related-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col4 products-grid">
                      @foreach($relaproduct as $relaprod)
                        @if($relaprod->category_id == $prod->category_id && $relaprod->product_id != $prod->product_id)
                      <div class="item">
                          <div class="item-inner">
                              <div class="item-img">
                                  <div class="item-img-info"><a href="{{asset('san-pham/'.$relaprod->product_id.'-'.$relaprod->product_slug.'.html')}}" style="height: 210px;" title="{{$relaprod->product_name}}" class="product-image"><img style="height: 100%;" src="{{asset('uploads/products/'.$relaprod->product_img)}}" alt="{{$relaprod->product_name}}"></a>
                                      <div class="new-label new-top-left">Mới</div>
                                      <div class="item-box-hover">
                                          <div class="box-inner">
                                              <div class="product-detail-bnt"><a class="button detail-bnt" href="{{asset('san-pham/'.$relaprod->product_id.'-'.$relaprod->product_slug.'.html')}}"><span>Quick View</span></a></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="item-info">
                                  <div class="info-inner">
                                      <div class="item-title"><a href="{{asset('san-pham/'.$relaprod->product_id.'-'.$relaprod->product_slug.'.html')}}" title="{{$relaprod->product_name}}">{{$relaprod->product_name}}</a> </div>
                                      <div class="item-content">
                                          <div class="item-price">
                                              <div class="price-box"><span class="regular-price" ><span class="price">{{number_format($relaprod->product_price)}} VNĐ</span> </span> </div>
                                          </div>
                                          <div class="add_cart">
                                              <button class="button btn-cart" type="button"><span>Thêm vào giỏ hàng</span></button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                        @endif
                      @endforeach
          <!-- End Item -->
                    </div>
                </div>
              </div>
            </div>
            <!-- end related product -->
          </div>
          <!-- end related product -->
        </div>
        <!--box-additional-->
        <!--product-view-->
      </div>
    </div>
    <!--col-main-->
  </div>
  <!--main-container-->
</div>
@endforeach
@stop