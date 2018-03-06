
<!DOCTYPE HTML>
<html>
<head>
    <title>New Shop</title>
    <!--css-->
    <link href="{{ asset('home/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('home/css/font-awesome.css') }}" rel="stylesheet">
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
    <!--mycart-->
    <script type="text/javascript" src="{{ asset('home/js/bootstrap-3.1.1.min.js') }}"></script>
    
    <script defer src="{{ asset('home/js/jquery.flexslider.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('home/css/flexslider.css')}}" type="text/css" media="screen" />
    <script src="{{ asset('home/js/imagezoom.js')}}"></script>
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
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
    <link href="{{ asset('home/css/owl.carousel.css')}}" rel="stylesheet">
    <script src="{{ asset('home/js/owl.carousel.js')}}"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items : 1,
                lazyLoad : true,
                autoPlay : true,
                navigation : false,
                navigationText :  false,
                pagination : true,
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <!--//End-rate-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=1285056734928738';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--header-->
@include('page.header')
<!--header-->
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
            <img src="/home/images/card.png" alt=""/>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var nav = $('.heder-bottom');
        var nha = $('.cd-header-buttons');
        var taa = $('.cd-search');
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                nav.addClass("addthong");
                nha.addClass("bnt-seach-thong");
                taa.addClass("cd-search-thong");
            } else {
                nav.removeClass("addthong");
                nha.removeClass("bnt-seach-thong");
                taa.removeClass("cd-search-thong");
            }
        });
        $(".checkout-right").click(function(){
            $("#mg-checkout").css("display","block");
            $( "#hoten" ).focus();
        });
    });
</script>
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