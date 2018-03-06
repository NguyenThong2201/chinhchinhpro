
<!DOCTYPE HTML>
<html>
<head>
    <title>New Shop</title>
    <!--css-->
    <link href="{{ asset('home/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('home/css/font-awesome.css') }}" rel="stylesheet">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/fonts/fontawesome-webfont.woff2" /> -->
    <link rel="icon" href="https://bonamatcha.vn/wp-content/uploads/2017/10/favicon-300x300.png" sizes="32x32">
    <!--css-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="{{ asset('home/js/jquery.min.js') }}"></script>
    <!--search jQuery-->
    <script src="{{ asset('home/js/main.js') }}"></script>
    <!--search jQuery-->
    <script src="{{ asset('home/js/responsiveslides.min.js') }}"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <!--mycart-->
    <script type="text/javascript" src="{{ asset('home/js/bootstrap-3.1.1.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <!--start-rate-->
    <!-- <script src="{{ asset('home/js/jstarbox.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('home/css/jstarbox.css') }}" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript">
        jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                }).bind('starbox-value-changed', function(event, value) {
                    if(starbox.hasClass('random')) {
                        var val = Math.random();
                        starbox.next().text(' '+val);
                        return val;
                    }
                })
            });
        });
    </script> -->
    <!--//End-rate-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<!--header-->
@include('page.header')
<!--header-->
<!--banner-->
<div class="banner-w3">
    <div class="demo-1">
        <div id="example1" class="core-slider core-slider__carousel example_1">
            <div class="core-slider_viewport">
                <div class="core-slider_list">
                    <div class="core-slider_item">
                        <img src="home/images/b1.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="core-slider_item">
                        <img src="home/images/b2.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="core-slider_item">
                        <img src="home/images/b3.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="core-slider_item">
                        <img src="home/images/b4.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
            <div class="core-slider_nav">
                <div class="core-slider_arrow core-slider_arrow__right"></div>
                <div class="core-slider_arrow core-slider_arrow__left"></div>
            </div>
            <div class="core-slider_control-nav"></div>
        </div>
    </div>
    <link href="{{ asset('home/css/coreSlider.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('home/js/coreSlider.js') }}"></script>
    <script>
        $('#example1').coreSlider({
            pauseOnHover: false,
            interval: 3000,
            controlNavEnabled: true
        });

    </script>

</div>
<!--banner-->
<!--content-->

    @yield('content')

<!--content-->
<!--footer-->
@include('page.footer')
<!--footer-->
<!--copy-->
<div class="copy-section">
    <div class="container">
        <div class="copy-left">
            <p>&copy; 2018 New Shop . All rights reserved | Design by <a href="#">Thong Nguyen</a></p>
        </div>
        <div class="copy-right">
            <img src="home/images/card.png" alt=""/>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--copy-->
<script type="text/javascript">
    // makes sure the whole site is loaded
jQuery(window).load(function() {
        // will first fade out the loading animation
    jQuery("#status").fadeOut();
        // will fade out the whole DIV that covers the website.
    jQuery("#preloader").delay(1000).fadeOut("slow");
})
</script>

</body>
</html>