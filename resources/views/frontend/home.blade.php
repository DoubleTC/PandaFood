@extends('frontend.master')
@section('title', $infoweb->info_name)
@section('content')

<div class="content">
    @include('frontend.slide')
    <div class="our-features-box wow bounceInUp animated animated">
        <div class="container">
            <ul class="row">
                <li class="col-md-6">
                    <div class="feature-box free-shipping">
                        <div class="icon-truck"></div>
                        <div class="content">Giao hàng toàn quốc trong 78H</div>
                    </div>
                </li>
                <li class="col-md-6">
                    <div class="feature-box money-back">
                        <div class="icon-money"></div>
                        <div class="content">Đa dạng phương thức thanh toán</div>
                    </div>
                </li>
                <li class="col-md-6">
                    <div class="feature-box need-help">
                        <div class="icon-support"></div>
                        <div class="content">Hotline:<br>{{$infoweb->info_phone}}</div>
                    </div>
                </li>
                <li class="col-md-6 last">
                    <div class="feature-box return-policy">
                        <div class="icon-return"></div>
                        <div class="content">Cam kết bán hàng bình ổn giá</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--Category slider Start-->
    <div class="top-cate">
        <div class="featured-pro container">
            <div class="row">
                <div class="slider-items-products">
                    <div class="new_title">
                        <h2>Danh mục sản phẩm</h2>
                    </div>
                    <div id="top-categories" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col8 products-grid">
                            @foreach($catelist as $cate)
                                <a href="{{asset('danh-muc/'.$cate->category_id.'-'.$cate->category_slug.'.html')}}">
                                    <div id="itemcate" class="item">
                                        <div class="pro-img">
                                            <div class="pro-info">{{$cate->category_title}}</div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Category silder End-->

    <div id="top">
        <div class="container">
            <div class="row">
                <ul>
                    <li>
                        <div>
                            <a href="#" data-scroll-goto="1">
                                <img src="./assests/img/speakers.png" alt="promotion-banner1">
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="#" data-scroll-goto="2">
                                <img src="./assests/img/schedule.png" alt="promotion-banner2">
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="#" data-scroll-goto="3">
                                <img src="./assests/img/details.png" alt="promotion-banner3">
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- best Pro Slider -->
    <section class=" wow bounceInUp animated">
        <div class="best-pro slider-items-products container">
            <div class="new_title">
                <h2>Sản phẩm mới</h2>
            </div>
            <div id="best-seller" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                    @foreach($productlist as $prod)
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info"><a href="{{asset('san-pham/'.$prod->product_id.'-'.$prod->product_slug.'.html')}}" style="height: 210px;" title="{{$prod->product_name}}" class="product-image"><img style="height: 100%;" src="{{asset('uploads/products/'.$prod->product_img)}}" alt="{{$prod->product_name}}"></a>
                                    <div class="new-label new-top-left">Mới</div>
                                    <div class="item-box-hover">
                                        <div class="box-inner">
                                            <div class="product-detail-bnt"><a class="button detail-bnt" href="{{asset('san-pham/'.$prod->product_id.'-'.$prod->product_slug.'.html')}}"><span>Quick View</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="{{asset('san-pham/'.$prod->product_id.'-'.$prod->product_slug.'.html')}}" title="{{$prod->product_name}}">{{$prod->product_name}}</a> </div>
                                    <div class="item-content">
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price" ><span class="price">{{number_format($prod->product_price)}} VNĐ</span> /{{strtoupper($prod->product_unit)}}</span> </div>
                                        </div>
                                        <div class="add_cart">
                                            <button class="button btn-cart ajax-cart" type="button" value="{{$prod->product_id}}"><span>Thêm vào giỏ hàng</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>



    <!-- Home Lastest Blog Block -->
    <div class="latest-blog wow bounceInUp animated animated container">
        <!--exclude For version 6 -->

        <!--For version 1,2,3,4,5,6,8 -->
        <div class="row">
            @foreach($bloglist as $blog)
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
                <div class="blog_inner">
                    <div class="blog-img"> <a href="{{asset('bai-viet/'.$blog->blog_id.'-'.$blog->blog_slug.'.html')}}"> <img height="300px" src="{{asset('uploads/blogs/'.$blog->blog_img)}}" alt="{{$blog->blog_title}}"> </a>
                        <div class="mask"> <a class="info" href="{{asset('bai-viet/'.$blog->blog_id.'-'.$blog->blog_slug.'.html')}}">Xem chi tiết</a> </div>
                    </div>
                    <!--blog-img-->
                    <div class="blog-info">
                        <div class="post-date" style="width: 90px">
                            <time class="entry-date" datetime="{{$blog->updated_at}}">{{date('d',$blog->updated_at->timestamp)}} <br> Tháng {{date('n',$blog->updated_at->timestamp)}}</time>
                        </div>
                        <h3><a href="{{asset('bai-viet/'.$blog->blog_id.'-'.$blog->blog_slug.'.html')}}">{{$blog->blog_title}}</a></h3>
                        {!!substr($blog->blog_description, 0, 190)!!}...<br>

                        <a class="readmore" href="{{asset('bai-viet/'.$blog->blog_id.'-'.$blog->blog_slug.'.html')}}">Xem chi tiết</a> </div>
                </div>
                <!--blog_inner-->
            </div>
            @endforeach
        </div>

    </div>

    <!-- Logo Brand Block -->
    <div class="brand-logo wow bounceInUp animated">
        <div class="container">
            <div class="row">
                <div class="logo-brand col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="new_title">
                        <h2>Đối tác</h2>
                    </div>
                    <div class="slider-items-products">
                        <div id="brand-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col6">
                                <div class="item">
                                    <div class="logo-item"><a href="#"><img class="logodt" src="./uploads/logodt/vec.png" alt="Image"></a></div>
                                </div>
                                <div class="item">
                                    <div class="logo-item"><a href="#"><img class="logodt" src="./uploads/logodt/skm.png" alt="Image"></a></div>
                                </div>
                                <div class="item">
                                    <div class="logo-item"><a href="#"><img class="logodt" src="./uploads/logodt/snf.png" alt="Image"></a></div>
                                </div>
                                <div class="item">
                                    <div class="logo-item"><a href="#"><img class="logodt" src="./uploads/logodt/hf.png" alt="Image"></a></div>
                                </div>
                                <div class="item">
                                    <div class="logo-item"><a href="#"><img class="logodt" src="./uploads/logodt/ejl.jpg" alt="Image"></a></div>
                                </div>
                                <div class="item">
                                    <div class="logo-item"><a href="#"><img class="logodt" src="./uploads/logodt/hbf.jpg" alt="Image"></a></div>
                                </div>
                                <div class="item">
                                    <div class="logo-item"><a href="#"><img class="logodt" src="./uploads/logodt/ghn.jpg" alt="Image"></a></div>
                                </div>
                                <div class="item">
                                    <div class="logo-item"><a href="#"><img class="logodt" src="./uploads/logodt/vnp.jpg" alt="Image"></a></div>
                                </div>
                                <div class="item">
                                    <div class="logo-item"><a href="#"><img class="logodt" src="./uploads/logodt/vtp.jpg" alt="Image"></a></div>
                                </div>
                                <!-- End Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop