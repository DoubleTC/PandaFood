<footer>
    <!-- BEGIN INFORMATIVE FOOTER -->
    <div class="footer-inner">
        <div class="newsletter-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col">
                        <!-- Footer Payment Link -->
                        <div class="payment-accept">
                            <div><img src="./assests/img/payment-1.png" alt="payment1"> <img src="./assests/img/payment-2.png" alt="payment2"> <img src="./assests/img/payment-3.png" alt="payment3"> <img src="./assests/img/payment-4.png" alt="payment4"></div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col1">
                        <div class="newsletter-wrap">
                            <h4>{{strtoupper($infoweb->info_name)}} - Nhà cung cấp thực phẩm sạch lớn nhất Vịnh Bắc Bộ</h4>
                        </div>
                    </div>

                </div>
            </div>
            <!--footer-column-last-->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12 col-lg-4">
                    <div class="co-info">
                        <div><a href="{{asset('/')}}"><img height="110px" src="{{asset('uploads/logos/'.$infoweb->info_imgmain)}}" alt="footer logo"></a></div>
                        <address>
                            <div><em class="icon-location-arrow"></em> <span>{{$infoweb->info_address}}</span></div>
                            <div> <em class="icon-mobile-phone"></em><span>{{$infoweb->info_phone}}</span></div>
                            <div> <em class="icon-envelope"></em><span>{{$infoweb->info_email}}</span></div>
                        </address>
                        <div class="social">
                            <ul class="link">
                                <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
                                <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
                                <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
                                <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
                                <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
                                <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
                                <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 col-xs-12 col-lg-8">
                    <div class="footer-column">
                        <h4>Về chúng tôi</h4>
                        <ul class="links">
                            <li class="first"><a title="How to buy" href="/blog/">Blog</a></li>
                            <li><a title="FAQs" href="#">FAQs</a></li>
                            <li><a title="Payment" href="#">Payment</a></li>
                            <li><a title="Shipment" href="#">Shipment</a></li>
                            <li><a title="Where is my order?" href="#">Where is my order?</a></li>
                            <li class="last"><a title="Return policy" href="#">Return policy</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Chính sách bán hàng</h4>
                        <ul class="links">
                            <li class="first"><a title="Your Account" href="#">Your Account</a></li>
                            <li><a title="Information" href="#">Information</a></li>
                            <li><a title="Addresses" href="#">Addresses</a></li>
                            <li><a title="Addresses" href="#">Discount</a></li>
                            <li><a title="Orders History" href="#">Orders History</a></li>
                            <li class="last"><a title=" Additional Information" href="#"> Additional Information</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Hỗ trợ khách hàng</h4>
                        <ul class="links">
                            <li class="first"><a title="Site Map" href="#">Site Map</a></li>
                            <li><a title="Search Terms" href="#">Search Terms</a></li>
                            <li><a title="Advanced Search" href="#">Advanced Search</a></li>
                            <li><a title="History" href="#">About Us</a></li>
                            <li><a title="History" href="#">Contact Us</a></li>
                            <li><a title="Suppliers" href="#">Suppliers</a></li>
                        </ul>
                    </div>

                </div>

                <!--col-sm-12 col-xs-12 col-lg-8-->
                <!--col-xs-12 col-lg-4-->
            </div>
            <!--row-->

        </div>

        <!--container-->
    </div>
    <!--footer-inner-->

    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="row"> </div>
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
    <!--footer-middle-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 coppyright">© 2018 {{$infoweb->info_name}}. Bản quyền nội dung thuộc về {{$infoweb->info_name}}.</div>

            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
    <!--footer-bottom-->
    <!-- BEGIN SIMPLE FOOTER -->
</footer>