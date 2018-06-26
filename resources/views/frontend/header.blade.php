<header>
    <div id="header">
        <div class="header-container container">
            <div class="row">
                <div class="logo">
                    <a href="{{asset('/')}}" title="{{$infoweb->info_title}}">
                        <div><img height="63px" src="{{asset('uploads/logos/'.$infoweb->info_imgmain)}}" alt="{{$infoweb->info_title}}"></div>
                    </a>
                </div>
                <div class="fl-nav-menu">
                    <nav>
                        <div class="mm-toggle-wrap">
                            <div class="mm-toggle"><i class="icon-align-justify"></i><span class="mm-label">Menu</span> </div>
                        </div>
                        <div class="nav-inner">
                            <!-- BEGIN NAV -->
                            <ul id="nav" class="hidden-xs">

                                <li class="active">
                                    <a class="level-top" href="{{asset('/')}}"><span>Trang chủ</span></a>
                                </li>
                                <li class="mega-menu"><a class="level-top" href="#"><span>Sản phẩm</span></a>
                                    <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                                        <div class="container">
                                            <div class="level0-wrapper2">
                                                <div class="col-1">
                                                    <div class="nav-block nav-block-center">
                                                        <!--mega menu-->
                                                        <ul class="level0">
                                                            @foreach($cateshow as $cate)
                                                                <li class="level3 nav-6-1 parent item"> <a href="{{asset('danh-muc/'.$cate->category_id.'-'.$cate->category_slug.'.html')}}"><span>{{$cate->category_title}}</span></a>
                                                                    <!--sub sub category-->
                                                                    <ul class="level1">
                                                                        @foreach($prodshow as $prod)
                                                                            @if($prod->category_id == $cate->category_id)
                                                                                @if($prod->product_condition == 1 && $prod->product_featured == 1)
                                                                                    <li class="level2 nav-6-1-1"> <a href="{{asset('san-pham/'.$prod->product_id.'-'.$prod->product_slug.'.html')}}"><span>{{$prod->product_name}}</span></a> </li>
                                                                                @endif
                                                                            @endif
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                        <!--level0-->
                                                    </div>
                                                    <!--nav-block nav-block-center-->
                                                </div>
                                                <!--col-1-->
                                                <div class="col-2">
                                                    <div class="menu_image"><a title="{{$infoweb->info_title}}" href="#"><img alt="menu_image" src="./assests/img/menu-bag.png"></a></div>

                                                </div>
                                                <!--col-2-->
                                            </div>
                                            <!--level0-wrapper2-->
                                        </div>
                                        <!--container-->
                                    </div>
                                    <!--level0-wrapper dropdown-6col-->
                                    <!--mega menu-->
                                </li>
                                <li class="fl-custom-tabmenulink mega-menu"> <a href="#" class="level-top"> <span>Khuyến mãi</span> </a>
                                    <div class="level0-wrapper fl-custom-tabmenu" style="left: 0px; display: none;">
                                        <div class="container">
                                            <div class="header-nav-dropdown-wrapper clearer">
                                                <div class="grid12-3">

                                                    <div><img src="./assests/img/custom-img1.jpg" alt="custom-image"></div>
                                                    <h4 class="heading">SALE UP TO 30% OFF</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                                <div class="grid12-3">

                                                    <div><img src="./assests/img/custom-img2.jpg" alt="custom-image"></div>
                                                    <h4 class="heading">SALE UP TO 30% OFF</h4>
                                                    <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                                                </div>
                                                <div class="grid12-3">
                                                    <div><img src="./assests/img/custom-img3.jpg" alt="custom-image"></div>
                                                    <h4 class="heading">SALE UP TO 30% OFF</h4>
                                                    <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                                                </div>
                                                <div class="grid12-3">
                                                    <div><img src="./assests/img/custom-img4.jpg" alt="custom-image"></div>
                                                    <h4 class="heading">SALE UP TO 30% OFF</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-custom-tabmenulink mega-menu"> <a href="#" class="level-top"> <span>Chia sẻ</span> </a>
                                    <div class="level0-wrapper fl-custom-tabmenu" style="left: 0px; display: none;">
                                        <div class="container">
                                            <div class="header-nav-dropdown-wrapper clearer">
                                                @foreach($blogshow as $blog)
                                                    <div class="grid12-3">
                                                        <div><a href="{{asset('bai-viet/'.$blog->blog_id.'-'.$blog->blog_slug.'.html')}}"><img height="220px" src="{{asset('uploads/blogs/'.$blog->blog_img)}}" alt="{{$blog->blog_title}}"></a></div>
                                                        <a href="{{asset('bai-viet/'.$blog->blog_id.'-'.$blog->blog_slug.'.html')}}"><h4 class="heading">{{$blog->blog_title}}</h4></a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mega-menu"> <a class="level-top" href="category.blade.php"><span>Về {{$infoweb->info_name}}</span></a></li>
                                <li class="mega-menu"> <a class="level-top" href="category.blade.php"><span>Liên hệ</span></a> </li>
                            </ul>
                            <!--nav-->
                        </div>
                    </nav>
                </div>

                <div class="fl-header-right">
                    <div class="fl-links">
                        <div class="no-js"> <a title="Company" class="clicker"></a>
                            <div class="fl-nav-links">
                                <ul class="links">
                                    @if(Auth::check())
                                        <li><a href="tai-khoan/thong-tin" title="Thông tin tài khoản">Thông tin tài khoản</a></li>
                                        <li><a href="tai-khoan/don-hang" title="Đơn hàng của bạn">Theo dõi đơn hàng</a></li>
                                        <li><a href="{{asset('gio-hang')}}" title="Giỏ hàng">Giỏ hàng</a></li>
                                        <li><a href="{{asset('dang-xuat')}}" title="Đăng xuất">Đăng xuất</a></li>
                                    @else
                                        <li><a href="{{asset('dang-ky')}}" title="Đăng ký"><span>Đăng ký</span></a></li>
                                        <li class="last"><a href="{{asset('dang-nhap')}}" title="Đăng nhập"><span>Đăng nhập</span></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="fl-cart-contain">
                        <div class="mini-cart">
                            <div class="basket"> <a href="{{asset('gio-hang')}}"><span> {{Cart::count()}} </span></a> </div>
                            <div class="fl-mini-cart-content" style="display: none;">
                                <div class="block-subtitle">
                                    <div class="top-subtotal">Hiện có: {{Cart::count()}} sản phẩm, <span class="price">{{Cart::total()}} VNĐ</span> </div>
                                </div>
                                <ul class="mini-products-list" id="cart-sidebar">
                                    @if(Cart::count() > 0)
                                        @foreach(Cart::content() as $cart)
                                        <li class="item first">
                                            <div class="item-inner"><a class="product-image" title="{{$cart->name}}" href="#"><img alt="{{$cart->name}}" src="{{asset('uploads/products/'.$cart->options->img)}}"></a>
                                                <div class="product-details">
                                                    <strong>{{$cart->qty}}</strong> x <span class="price">{{number_format($cart->price)}} VNĐ</span>
                                                    <p class="product-name"><a href="{{asset('san-pham/'.$cart->id.'-'.$cart->options->slug.'.html')}}">{{$cart->name}}</a></p>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    @else
                                        <li class="item first">
                                            <h4>Giỏ hàng chưa có sản phẩm nào!</h4>
                                        </li>
                                    @endif
                                </ul>
                                <div class="actions">
                                    <a class="btn-checkout" href="{{asset('gio-hang')}}" title="Xem giỏ hàng" type="button"><span>Xem giỏ hàng</span></a>
                                </div>
                                <!--actions-->
                            </div>
                            <!--fl-mini-cart-content-->
                        </div>
                    </div>
                    <!--mini-cart-->
                    <div class="collapse navbar-collapse">
                        <form id="SearchForm" class="navbar-form" role="search" method="get" action="{{asset('tim-kiem')}}">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm" name="tu_khoa">
                                <span class="input-group-btn">
                                  <button type="submit" class="search-btn" id="submitButton">
                                      <span class="glyphicon glyphicon-search">
                                          <span class="">Tìm kiếm</span>
                                      </span>
                                  </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!--links-->
                </div>
            </div>
        </div>
    </div>

</header>