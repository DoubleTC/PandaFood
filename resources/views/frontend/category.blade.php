@extends('frontend.master')
@section('title', $category->category_title)
@section('content')
<div class="page-heading">
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a href="#" title="Trang chủ {{$infoweb->info_name}}">Trang chủ {{$infoweb->info_name}}</a> <span>—› </span> </li>
          </ul>
        </div>
        <!--col-xs-12--> 
      </div>
      <!--row--> 
    </div>
    <!--container--> 
  </div>
  <div class="page-title">
    <h2>{{$category->category_title}}</h2>
  </div>
</div>
<!--breadcrumbs--> 
<!-- BEGIN Main Container col2-left -->
<section class="main-container col2-left-layout bounceInUp animated"> 
  <!-- For version 1, 2, 3, 8 --> 
  <!-- For version 1, 2, 3 -->
  <div class="container">
    <div class="row">
      <div class="col-main col-sm-9 col-sm-push-3 product-grid">
      <div class="pro-coloumn">
        <article class="col-main">
          <div class="toolbar">
            <div id="sort-by">
              <label class="left">Sắp xếp: </label>
              <ul>
                <li><a href="#">Position<span class="right-arrow"></span></a>
                  <ul>
                    <li><a href="#">Tên</a></li>
                    <li><a href="#">Giá</a></li>
                  </ul>
                </li>
              </ul>
              <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
            <div class="pager">
              <div id="limiter">
                <label>Hiển thị: </label>
                <ul>
                  <li><a href="#">9<span class="right-arrow"></span></a>
                    <ul>
                      <li><a href="#">15</a></li>
                      <li><a href="#">30</a></li>
                      <li><a href="#">42</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="pages">
                <label>Trang:</label>
                {{$product->links()}}
              </div>
            </div>
          </div>
          <div class="category-products">
            <ul class="products-grid">
              @foreach($product as $prod)
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info">
                      <a style="height: 255px" href="{{asset('san-pham/'.$prod->product_id.'-'.$prod->product_slug.'.html')}}" title="{{$prod->product_name}}" class="product-image">
                        <img height="100%" src="{{asset('uploads/products/'.$prod->product_img)}}" alt="{{$prod->product_name}}">
                      </a>
                      <div class="item-box-hover">
                        <div class="box-inner">
                          <div class="product-detail-bnt"><a href="{{asset('san-pham/'.$prod->product_id.'-'.$prod->product_slug.'.html')}}" class="button detail-bnt" type="button"><span>Quick View</span></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"><a href="{{asset('san-pham/'.$prod->product_id.'-'.$prod->product_slug.'.html')}}" title="{{$prod->product_name}}">{{$prod->product_name}}</a> </div>
                      <div class="item-content">
                        <div class="item-price">
                          <div class="price-box"><span class="regular-price" id="product-price-1"><span class="price">{{number_format($prod->product_price)}} VNĐ</span> /{{strtoupper($prod->product_unit)}}</span> </div>
                        </div>
                        <div class="add_cart">
                            <button class="button btn-cart ajax-cart" value="{{$prod->product_id}}" type="button"><span>Thêm vào giỏ hàng</span></button>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </article>
        </div>
        <!--	///*///======    End article  ========= //*/// --> 
      </div>
      <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated"> 
        <!-- BEGIN SIDE-NAV-CATEGORY -->
        <div class="side-nav-categories">
          <div class="block-title"> Danh mục </div>
          <!--block-title--> 
          <!-- BEGIN BOX-CATEGORY -->
          <div class="box-content box-category">
            <ul>
              @foreach($cateshow as $cate)
              <li> <a class="{{request()->is('danh-muc/'.$cate->category_id.'-'.$cate->category_slug.'.html') ? 'active' : ''}}" href="{{asset('danh-muc/'.$cate->category_id.'-'.$cate->category_slug.'.html')}}">{{$cate->category_title}}</a> <span class="subDropdown {{request()->is('danh-muc/'.$cate->category_id.'-'.$cate->category_slug.'.html') ? 'minus' : 'plus'}}"></span>
                <ul class="level0_415" style="{{request()->is('danh-muc/'.$cate->category_id.'-'.$cate->category_slug.'.html') ? 'display:block;' : ''}}">
                  @foreach($prodshow as $prod)
                    @if($prod->category_id == $cate->category_id)
                      <li>
                        <a href="{{asset('san-pham/'.$prod->product_id.'-'.$prod->product_slug.'.html')}}"> {{$prod->product_name}} </a>
                      </li>
                    @endif
                  @endforeach
                </ul>
              </li>
              @endforeach
            </ul>
          </div>
          <!--box-content box-category--> 
        </div>
        <!--side-nav-categories-->
        <div class="block block-list block-cart">
          <div class="block-title"> Giỏ hàng </div>
          <div class="block-content">
            <div class="summary">
              <p class="amount">Đang có <a href="#">? sản phẩm</a> trong giỏ hàng.</p>
              <p class="subtotal"> <span class="label">Thành tiền:</span> <span class="price">$299.00</span> </p>
            </div>
            <div class="ajax-checkout">
              <button type="button" title="Checkout" class="button button-checkout" onClick="#"> <span>Thanh toán</span> </button>
            </div>
            <p class="block-subtitle">Sản phẩm</p>
            <ul id="cart-sidebar" class="mini-products-list">
              <li class="item">
                <div class="item-inner"> <a href="#" class="product-image"><img src="products-images/p1.jpg" width="80" alt="product"></a>
                  <div class="product-details">
                    <div class="access"> <a href="#" class="btn-remove1">Remove</a> 
                    <a href="" title="Edit item" class="btn-edit">
                    <i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                    <!--access--> 
                    
                    <strong>1</strong> x <span class="price">$299.00</span>
                    <p class="product-name"><a href="#">RETIS LAPEN CASEN</a></p>
                  </div>
                  <!--product-details-bottoms--> 
                </div>
              </li>
            </ul>
          </div>
        </div>
       <div class="hot-banner"><img src="./assests/img/hot-trends-banner.jpg" alt="banner"></div>  
      </aside>
      <!--col-right sidebar--> 
    </div>
    <!--row--> 
  </div>
  <!--container--> 
</section>
<!--main-container col2-left-layout--> 
@stop