@extends('frontend.master')
@section('title', 'Tìm kiếm')
@section('content')
  <div class="page-heading">
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul>
              <li class="home"> <a href="{{asset('/')}}" title="Trang chủ {{$infoweb->info_name}}">Trang chủ {{$infoweb->info_name}}</a> <span>—› </span> </li>
            </ul>
          </div>
          <!--col-xs-12--> 
        </div>
        <!--row--> 
      </div>
      <!--container--> 
    </div>
    <div class="page-title">
      <h2>Tìm kiếm</h2>
    </div>
  </div>	

    <section class="main-container col2-left-layout bounceInUp animated">

      <div class="container">               
        
       <div class="row">
         <div class="col-main col-sm-12">
           <div class="pro-coloumn">
            <article class="col-main">
              <div class="toolbar">
                <div id="keyword-title"> Từ khóa tìm kiếm: <span class="keyword">{{$keyword}}</span></div>
                <div id="sort-by">
                  <label class="left">Sort By: </label>
                  <ul>
                    <li><a href="#">Position<span class="right-arrow"></span></a>
                      <ul>
                        <li><a href="#">Name</a></li>
                        <li><a href="#">Price</a></li>
                        <li><a href="#">Position</a></li>
                      </ul>
                    </li>
                  </ul>
                  <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
                <div class="pager">
                  <div id="limiter">
                    <label>View: </label>
                    <ul>
                      <li><a href="#">15<span class="right-arrow"></span></a>
                        <ul>
                          <li><a href="#">20</a></li>
                          <li><a href="#">30</a></li>
                          <li><a href="#">35</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="pages">
                    <label>Trang:</label>
                    {{$product->appends(request()->except('page'))->links()}}
                  </div>
                </div>
              </div>
              <div class="category-products">
                  <ol class="products-list" id="products-list">
                    @foreach($product as $prod)
                    <li class="item even">
                      <div class="product-image"> <a href="{{asset('sanpham/'.$prod->product_id.'-'.$prod->product_slug.'.html')}}" title="{{$prod->product_name}}"> <img class="small-image" src="{{asset('uploads/products/'.$prod->product_img)}}" alt="{{$prod->product_name}}"> </a> </div>
                      <div class="product-shop">
                        <h2 class="product-name"><a href="{{asset('sanpham/'.$prod->product_id.'-'.$prod->product_slug.'.html')}}" title="{{$prod->product_name}}">{{$prod->product_name}}</a></h2>
                        <div class="desc std">
                          <p>{!! $prod->product_description !!}</p>
                        </div>
                        <div class="price-box"> <span class="regular-price" id="product-price-159"> <span class="price">{{number_format($prod->product_price)}} VNĐ</span> /{{strtoupper($prod->product_unit)}}</span> </div>
                        <div class="actions">
                          <button class="button btn-cart ajax-cart" value="{{$prod->product_id}}" title="Thêm vào giỏ hàng" type="button"><span>Thêm vào giỏ hàng</span></button>
                      </div>
                    </li>
                    @endforeach
                  </ol>
              </div>
            </article>
          <!--	///*///======    End article  ========= //*/// -->
           </div>
        </div>
        <!--col-right sidebar--> 
       </div> <!--row-->
      </div><!--container-->
    </section> <!--main-container col2-left-layout-->   
@stop