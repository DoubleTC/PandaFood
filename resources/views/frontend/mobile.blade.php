<!-- Mobile Menu-->
<div id="mobile-menu">
    <ul>
        <li>
            <div class="home"><a href="#"><i class="icon-home"></i>Trang chủ</a> </div>
        </li>
        <li><a href="#">Sản phẩm‎</a>
            <ul>
                @foreach($cateshow as $cate)
                    <li><a href="{{asset('danh-muc/'.$cate->category_id.'-'.$cate->category_slug.'.html')}}"><span>{{$cate->category_title}}‎</span></a>
                        <ul>
                            @foreach($prodshow as $prod)
                                @if($prod->category_id == $cate->category_id)
                                    @if($prod->product_condition == 1 && $prod->product_featured == 1)
                                        <li> <a href="{{asset('san-pham/'.$prod->product_slug.'-'.$prod->product_id.'.html')}}"><span>{{$prod->product_name}}</span></a> </li>
                                    @endif
                                @endif
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </li>
        <li><a href="category.blade.php">Khuyến mãi‎</a></li>
        <li><a href="category.blade.php">Chia sẻ</a></li>
        <li><a href="category.blade.php">Về {{$infoweb->info_name}}‎</a></li>
        <li><a href="contact-us.html">Liên hệ</a></li>
    </ul>
</div>