<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset('')}}"/>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('uploads/logos/'.$infoweb->info_imgtitle)}}">
    <link rel="icon" href="{{asset('uploads/logos/'.$infoweb->info_imgtitle)}}">

    <title>
        @yield('title') - {{$infoweb->info_title}}
    </title>

    <!-- Canonical SEO -->
    <link rel="canonical" href="{{asset('/')}}" />

    <!--  Social tags      -->
    <meta name="keywords" content="{{$infoweb->info_keywords}}">
    <meta name="description" content="{{$infoweb->info_description}}">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{$infoweb->info_title}}">
    <meta itemprop="description" content="{{$infoweb->info_description}}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="Shop">
    <meta name="twitter:site" content="@doubletc">
    <meta name="twitter:title" content="{{$infoweb->info_title}}">
    <meta name="twitter:description" content="{{$infoweb->info_description}}">
    <meta name="twitter:creator" content="DoubleTC">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{$infoweb->info_title}}" />
    <meta property="og:description" content="{{$infoweb->info_description}}" />
    <meta property="og:site_name" content="{{$infoweb->info_name}}" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <link rel="stylesheet" href="./assetscp/css/material-dashboard.min.css?v=2.0.1">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assetscp/assets-for-demo/demo.css" rel="stylesheet"/>

    <script type="text/javascript">
        if (document.readyState === 'complete') {
            if (window.location != window.parent.location) {
                const elements = document.getElementsByClassName("iframe-extern");
                while (elemnts.lenght > 0) elements[0].remove();
                // $(".iframe-extern").remove();
            }
        };
    </script>
</head>

<body >
<div class="wrapper">
    <div class="sidebar" data-color="rose" data-background-color="black" data-image="./assetscp/img/sidebar-1.jpg">

        <div class="logo">
            <a href="{{asset('/')}}" class="simple-text logo-mini">
                CP
            </a>
            <a href="{{asset('/')}}" class="simple-text logo-normal">
                {{$infoweb->info_name}}
            </a>
        </div>

        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo"></div>
                <div class="user-info">
                    <a data-toggle="collapse" href="#ProfileAdmin" class="username">
                    <span>
                       {{Auth::user()->user_fullname}}
                        <b class="caret"></b>
                    </span>
                    </a>
                    <div class="collapse" id="ProfileAdmin">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{asset('admincp/dashboard/profile')}}">
                                    <span class="sidebar-mini"> INFO </span>
                                    <span class="sidebar-normal"> Hồ sơ cá nhân </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{asset('admincp/dashboard/password')}}">
                                    <span class="sidebar-mini"> PWD </span>
                                    <span class="sidebar-normal"> Thay đổi mật khẩu </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="{{asset('admincp/dashboard')}}">
                        <i class="material-icons">dashboard</i>
                        <p> Trang chủ </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#Manage-User">
                        <i class="material-icons">face</i>
                        <p> Quản lý tài khoản
                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="Manage-User">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{asset('admincp/dashboard/manage-user')}}">
                                    <span class="sidebar-mini"> List </span>
                                    <span class="sidebar-normal"> Danh sách tài khoản </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{asset('admincp/dashboard/manage-user/add')}}">
                                    <span class="sidebar-mini"> Add </span>
                                    <span class="sidebar-normal"> Thêm mới tài khoản </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="{{asset('admincp/dashboard/category')}}">
                        <i class="material-icons">list</i>
                        <p> Quản lý danh mục </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#Manage-Product">
                        <i class="material-icons">description</i>
                        <p> Quản lý sản phẩm
                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="Manage-Product">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{asset('admincp/dashboard/product')}}">
                                    <span class="sidebar-mini"> LIST </span>
                                    <span class="sidebar-normal"> Danh sách sản phẩm </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{asset('admincp/dashboard/product/add')}}">
                                    <span class="sidebar-mini"> ADD </span>
                                    <span class="sidebar-normal"> Thêm mới sản phẩm </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="{{asset('admincp/dashboard/order')}}">
                        <i class="material-icons">shopping_cart</i>
                        <p> Quản lý đơn hàng </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="{{asset('admincp/dashboard/shipper')}}">
                        <i class="material-icons">local_shipping</i>
                        <p> Đối tác vận chuyển </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#Manage-Blog">
                        <i class="material-icons">note</i>
                        <p> Quản lý bài viết
                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="Manage-Blog">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{asset('admincp/dashboard/blog')}}">
                                    <span class="sidebar-mini"> LIST </span>
                                    <span class="sidebar-normal"> Danh sách bài viết </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{asset('admincp/dashboard/blog/add')}}">
                                    <span class="sidebar-mini"> ADD </span>
                                    <span class="sidebar-normal"> Thêm mới bài viết </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="{{asset('admincp/dashboard/slide')}}">
                        <i class="material-icons">slideshow</i>
                        <p> Slide Banner </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="{{asset('admincp/dashboard/information')}}">
                        <i class="material-icons">info</i>
                        <p> Thông tin Website </p>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                            <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">@yield('title')</a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </div>
                    </form>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('admincp/dashboard')}}">
                                <i class="material-icons">dashboard</i>Trang chủ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('admincp/dashboard/profile')}}">
                                <i class="material-icons">person</i>{{Auth::user()->user_name}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('admincp/logout')}}">
                                <i class="material-icons">all_out</i>Đăng xuất
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <!-- Content -->

        @yield('content')

        <!-- End Content -->
        <footer class="footer ">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="{{asset('admincp/dashboard')}}">
                                Trang chủ
                            </a>
                        </li>
                        <li>
                            <a href="https://fb.me/spcdoubletc">
                                Về chúng tôi
                            </a>
                        </li>
                        <li>
                            <a href="https://fb.me/spcdoubletc">
                                Liên hệ
                            </a>
                        </li>
                        <li>
                            <a href="https://fb.me/spcdoubletc">
                                Thiết kế website
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, thiết kế bởi <a href="https://fb.me/spcdoubletc" target="_blank">DoubleTC</a>
                </div>
            </div>
        </footer>
    </div>
</body>

<!--   Core JS Files   -->
<script src="./assetscp/js/core/jquery.min.js"></script>
<script src="./assetscp/js/core/popper.min.js"></script>
<script src="./assetscp/js/bootstrap-material-design.min.js"></script>
<script src="./assetscp/js/plugins/perfect-scrollbar.jquery.min.js"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
<script src="./assetscp/js/plugins/moment.min.js"></script>

<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="./assetscp/js/plugins/bootstrap-datetimepicker.min.js"></script>

<!--	Plugin for the Sliders, full documentation here: https://refreshless.com/nouislider/ -->
<script src="./assetscp/js/plugins/nouislider.min.js"></script>

<!--	Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
<script src="./assetscp/js/plugins/bootstrap-selectpicker.js"></script>

<!--	Plugin for Tags, full documentation here: https://xoxco.com/projects/code/tagsinput/  -->
<script src="./assetscp/js/plugins/bootstrap-tagsinput.js"></script>

<!--	Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="./assetscp/js/plugins/jasny-bootstrap.min.js"></script>

<!-- Plugins for presentation and navigation  -->
<script src="./assetscp/assets-for-demo/js/modernizr.js"></script>

<!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="./assetscp/js/material-dashboard.js?v=2.0.1"></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- Library for adding dinamically elements -->
<script src="./assetscp/js/plugins/arrive.min.js" type="text/javascript"></script>

<!-- Forms Validations Plugin -->
<script src="./assetscp/js/plugins/jquery.validate.min.js"></script>

<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="./assetscp/js/plugins/chartist.min.js"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="./assetscp/js/plugins/jquery.bootstrap-wizard.js"></script>

<!--  Notifications Plugin, full documentation here: https://bootstrap-notify.remabledesigns.com/    -->
<script src="./assetscp/js/plugins/bootstrap-notify.js"></script>

<!-- Vector Map plugin, full documentation here: https://jvectormap.com/documentation/ -->
<script src="./assetscp/js/plugins/jquery-jvectormap.js"></script>

<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="./assetscp/js/plugins/nouislider.min.js"></script>

<!--  Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
<script src="./assetscp/js/plugins/jquery.select-bootstrap.js"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="./assetscp/js/plugins/jquery.datatables.js"></script>

<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="./assetscp/js/plugins/sweetalert2.js"></script>

<!-- Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="./assetscp/js/plugins/jasny-bootstrap.min.js"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="./assetscp/js/plugins/fullcalendar.min.js"></script>

<!-- demo init -->
<script src="./assetscp/js/plugins/demo.js"></script>

<!-- CK Editor -->
<script type="text/javascript" src="./ckeditor/ckeditor.js"></script>

<!-- CK Finder -->
<script type="text/javascript" src="./ckfinder/ckfinder.js"></script>

<script type="text/javascript">
    CKEDITOR.replace( 'prodcontent', {
        filebrowserBrowseUrl: './ckfinder/ckfinder.html',
        filebrowserUploadUrl: './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
    });
    CKFinder.setupCKEditor( prodcontent );
</script>

<script>
    CKEDITOR.replace( 'blogcontent', {
        height: 500,
        filebrowserBrowseUrl: './ckfinder/ckfinder.html',
        filebrowserUploadUrl: './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
    });
    CKFinder.setupCKEditor( blogcontent );
</script>

<script>
    CKEDITOR.replace( 'blogdes', {
        filebrowserBrowseUrl: './ckfinder/ckfinder.html',
        filebrowserUploadUrl: './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
    });
    CKFinder.setupCKEditor( blogdes );
</script>

<script type="text/javascript">

    $(document).ready(function(){

        //init wizard

        demo.initMaterialWizard();

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initCharts();

    });

</script>

<script type="text/javascript">
    $(document).ready(function(){

        demo.initVectorMap();
    });

</script>

<!-- Sharrre libray -->
<script src="./assetscp/assets-for-demo/js/jquery.sharrre.js">

</script>

<script type="text/javascript">
    $(function(){
        $('.nav .nav-item .nav-link').filter(function(){
            return this.href==location.href
        }).parent().addClass('active').siblings().removeClass('active')
        $('.nav .nav-item .nav-link').click(function(){
            $(this).parent().addClass('active').siblings().removeClass('active')
        })
    })
</script>

<script type="text/javascript">

    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "Tất cả"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Tìm kiếm",
            }

        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });

</script>

<script>

    $(document).ready(function(){
        $('#twitter').sharrre({
            share: {
                twitter: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            buttons: { twitter: {via: 'CreativeTim'}},
            click: function(api, options){
                api.simulateClick();
                api.openPopup('twitter');
            },
            template: '<i class="fa fa-twitter"></i> Twitter',
            url: 'https://demos.creative-tim.com/material-kit-pro/presentation.html'
        });

        $('#facebook').sharrre({
            share: {
                facebook: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            click: function(api, options){
                api.simulateClick();
                api.openPopup('facebook');
            },
            template: '<i class="fa fa-facebook-square"></i> Facebook',
            url: 'https://demos.creative-tim.com/material-kit-pro/presentation.html'
        });

        $('#google').sharrre({
            share: {
                googlePlus: true
            },
            enableCounter: false,
            enableHover: false,
            enableTracking: true,
            click: function(api, options){
                api.simulateClick();
                api.openPopup('googlePlus');
            },
            template: '<i class="fa fa-google-plus"></i> Google',
            url: 'https://demos.creative-tim.com/material-kit-pro/presentation.html'
        });
    });


    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-46172202-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

    // Facebook Pixel Code Don't Delete
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','//connect.facebook.net/en_US/fbevents.js');

    try{
        fbq('init', '111649226022273');
        fbq('track', "PageView");

    }catch(err) {
        console.log('Facebook Track Error:', err);
    }

</script>
</html>
