<!DOCTYPE html>
<html lang="en">
<head>
<base href="{{asset('')}}">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>@yield('title') - {{$infoweb->info_title}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="description" content="{{$infoweb->info_description}}">
<meta name="keywords" content="{{$infoweb->info_keywords}}">
<meta name="robots" content="*">
<meta name="csrf-token" content="{{csrf_token()}}">
<link rel="icon" href="#" type="image/x-icon">
<link rel="shortcut icon" href="#" type="image/x-icon">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="./assests/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./assests/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="./assests/css/revslider.css" >
<link rel="stylesheet" type="text/css" href="./assests/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="./assests/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="./assests/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="./assests/css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="./assests/css/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="./assests/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="./assests/css/responsive.css" media="all">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<style>
    .featured-pro .pro-img .pro-info{
        background-image: url({{asset('assests/img/bk2.png')}});
    }
    #itemcate::after{
        background-image: url({{asset('assests/img/imgbkct.jpg')}});
    }
</style>

</head>

<body>

<div id="page">
  @include('frontend.header')
  <!--container-->
  @yield('content')
  
  @include('frontend.footer')
  
</div>
<!--page-->
  @include('frontend.mobile')
<!-- JavaScript -->
<script type="text/javascript" src="./assests/js/jquery.min.js"></script>
<script type="text/javascript" src="./assests/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./assests/js/parallax.js"></script>
<script type="text/javascript" src="./assests/js/revslider.js"></script>
<script type="text/javascript" src="./assests/js/common.js"></script>
<script type="text/javascript" src="./assests/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="./assests/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="./assests/js/cloud-zoom.js"></script>
<script type="text/javascript" src="./assests/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="./assests/js/jquery.mobile-menu.min.js"></script>
<script type="text/javascript" src="./assests/js/abcxyz.js"></script>

<script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#thm-rev-slider').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 0,
                startheight:650,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'on',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'on',
                forceFullWidth: 'off',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script>
<script type="text/javascript">
    function HideMe()
    {
        jQuery('.popup1').hide();
        jQuery('#fade').hide();
    }
</script> 
</body>
</html>
