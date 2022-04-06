<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>iEnergy Online | Latest oil and gas news</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{asset('assets')}}/img/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/bootstrap.min.css">

    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/all.min.css">

    <!-- Animate Css -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/animate.css">

    <!-- Owl Slider -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/owl.carousel.min.css">

    <!-- Magnific PopUp -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/magnific-popup.css">

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/normalize.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/responsive.css">
    <link rel="stylesheet" href="{{asset('assets/css/assets/owl.carousel.1283818200c7b7a7a8e0.css')}}">

</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="load-list">
            <div class="load"></div>
            <div class="load load2"></div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Top Bar -->
    <section class="top-bar" id="btt">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="bar-left">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="">iEnergy Africa the Company & Its Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Top Bar -->
    <!-- Logo Area -->
    <section class="logo-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="logo">
                        <a href="/"><img style="margin-left: 350px; width: 400px;" src="{{asset('assets')}}/img/logo.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="searchbar text-right">
                        <form action="{{route('search')}}" method="GET">
                            <input placeholder="Search..." name="query" type="text" required>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Logo Area -->

  



    <!-- Menu Area -->
    <section class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="main-menu">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="{{route('pages.region')}}">Regions</a></li>
                            @foreach ($categories as $category)
                            <li class="list-inline-item"><a href="{{route('pages.categorynews', ['slug' => $category->slug])}}">{{$category->name}}</a></li>
                            @endforeach
                            <li class="list-inline-item mega-mnu"><a>More <i class="fa fa-angle-down"></i></a>
                                <ul class="mega-menu">
                                    <li class="row">
                                        <div class="col-xl-2">
                                            <div class="mega-cat">
                                                <div class="sec-title">
                                                    <h5>SECTOR</h5>
                                                </div>
                                                <div class="cat-content">
                                                    <ul class="list-unstyled">
                                                        <li><a href="">Latest News</a></li>
                                                        <li><a href="">Exclusive</a></li>
                                                        <li><a href="">Regions</a></li>
                                                        <li><a href="energy-p">E & P</a></li>
                                                        <li><a href="rigs-vessel">Gas</a></li>
                                                        <li><a href="">Energy Transition</a></li>
                                                        <li><a href="">Energy Finance</a></li>
                                                        <li><a href="">Opinion</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <div class="mega-cat">
                                                <div class="sec-title">
                                                    <h5>REGION</h5>
                                                </div>
                                                <div class="cat-content">
                                                    <ul class="list-unstyled">
                                                        <li><a href="">East Africa</a></li>
                                                        <li><a href="">North Africa</a></li>
                                                        <li><a href="">Southern Africa</a></li>
                                                        <li><a href="">West Africa</a></li>
                                                        <li><a href="">Nigeria</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <div class="mega-cat">
                                                <div class="sec-title">
                                                    <h5>DEPARTMENTS</h5>
                                                </div>
                                                <div class="cat-content">
                                                    <ul class="list-unstyled">
                                                        <li><a href="">Energy Politics</a></li>
                                                        <li><a href="">Insights</a></li>
                                                        <li><a href="">Analysis</a></li>
                                                        <li><a href="">Opinion</li>
                                                        <li><a href=""></a></li>
                                                        <li><a href=""></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <div class="mega-cat">
                                                <div class="sec-title">
                                                    <h5>DIGITAL</h5>
                                                </div>
                                                <div class="cat-content">
                                                    <ul class="list-unstyled">
                                                        <li><a href="">Edition</a></li>
                                                        <li><a href="{{route('event.index')}}">Industry Events</a></li>
                                                        <li><a href="">Newsletter</a></li>
                                                        <li><a href="">Breaking News Letter</a></li>
                                                        <li><a href="">RSS</a></li>
                                                        <li><a href="">Sponsor Content</a></li>
                                                        <li><a href="">iEnergy News App</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <div class="mega-cat">
                                                <div class="sec-title">
                                                    <h5 class="energy">iEnergy Africa</h5>
                                                </div>
                                                <div class="cat-content">
                                                    <ul class="list-unstyled">
                                                        <li><a href="{{route('about')}}">About Us</a></li>
                                                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                                                        <li><a href="">Subscribe</a></li>
                                                        <li><a href="{{route('pages.faq')}}">Faq</a></li>
                                                        <li><a href="">Advertise</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="clock text-right">
                        <span id="dg-clock"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Menu Area -->
      
      <!-- TradingView Widget BEGIN -->

    {{-- <iframe src="https://fxpricing.com/fx-widget/ticker-tape-widget.php?id=1,2,3,5,14,20&d_mode=compact-name" width="100%" height="85" style="border: unset;"></iframe> <div id="fx-pricing-widget-copyright"> <span>Powered by </span><a href="https://fxpricing.com/" target="_blank">FX Pricing</a> </div> <style type="text/css"> #fx-pricing-widget-copyright{ text-align: center; font-size: 13px; font-family: sans-serif; margin-top: 10px; margin-bottom: 10px; color: #9db2bd; } #fx-pricing-widget-copyright a{ text-decoration: unset; color: #bb3534; font-weight: 600; } </style> --}}
    <!-- Mobile Menu -->
    <section class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <a href="home.html"><img src="{{asset('assets')}}/img/f-logo.png" alt=""></a>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="{{route('pages.region')}}">Regions</a></li>
                                @foreach ($categories as $category)
                                <li class="list-inline-item"><a href="{{route('pages.categorynews', ['slug' => $category->slug])}}">{{$category->name}}</a></li>
                                @endforeach
                                <li><a>More</a>
                                    <ul class="mega-menu">
                                        <li class="row">
                                            <div class="col-xl-2">
                                                <div class="mega-cat">
                                                    <div class="sec-title">
                                                        <h5>SECTOR</h5>
                                                    </div>
                                                    <div class="cat-content">
                                                        <ul class="list-unstyled">
                                                            <li><a href="">Latest News</a></li>
                                                            <li><a href="exclusive.html">Exclusive</a></li>
                                                            <li><a href="">Regions</a></li>
                                                            <li><a href="">Energy & Politics</a></li>
                                                            <li><a href="">Gas</a></li>
                                                            <li><a href="">Energy Transition</a></li>
                                                            <li><a href="">Energy Finance</a></li>
                                                            <li><a href="">Opinion</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="mega-cat">
                                                    <div class="sec-title">
                                                        <h5>REGION</h5>
                                                    </div>
                                                    <div class="cat-content">
                                                        <ul class="list-unstyled">
                                                            <li><a href="">East Africa</a></li>
                                                            <li><a href="">North Africa</a></li>
                                                            <li><a href="">Southern Africa</a></li>
                                                            <li><a href="">West Africa</a></li>
                                                            <li><a href="">Nigeria</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="mega-cat">
                                                    <div class="sec-title">
                                                        <h5>DEPARTMENTS</h5>
                                                    </div>
                                                    <div class="cat-content">
                                                        <ul class="list-unstyled">
                                                            <li><a href="">Energy Politics</a></li>
                                                            <li><a href="">Insights</a></li>
                                                            <li><a href="">Analysis</a></li>
                                                            <li><a href="">Opinion</li>
                                                            <li><a href=""></a></li>
                                                            <li><a href=""></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="mega-cat">
                                                    <div class="sec-title">
                                                        <h5>DIGITAL</h5>
                                                    </div>
                                                    <div class="cat-content">
                                                        <ul class="list-unstyled">
                                                            <li><a href="">Edition</a></li>
                                                            <li><a href="{{route('event.index')}}">Industry Events</a></li>
                                                            <li><a href="">Newsletter</a></li>
                                                            <li><a href="">Breaking News Letter</a></li>
                                                            <li><a href="">RSS</a></li>
                                                            <li><a href="">Sponsor Content</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="mega-cat">
                                                    <div class="sec-title">
                                                        <h5 class="energy">iEnergy Africa</h5>
                                                    </div>
                                                    <div class="cat-content">
                                                        <ul class="list-unstyled">
                                                            <li><a href="{{route('about')}}">About Us</a></li>
                                                            <li><a href="{{route('pages.contact')}}">Contact Us</a></li>
                                                            <li><a href="">Subscribe</a></li>
                                                            <li><a href="{{route('pages.faq')}}">Faq</a></li>
                                                            <li><a href="">Advertise</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Mobile Menu -->


       @yield('content')


<!-- Footer Area -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="f-about">
                    <img src="{{asset('assets')}}/img/f-logo.png" alt="">
                    <ul class="list-unstyled list-inline f-social">
                        <li class="list-inline-item"><a href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="{{$setting->twitter}}"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="{{$setting->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="{{$setting->instagram}}"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="{{$setting->reddit}}"><i class="fa fa-reddit"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="f-service">
                    <div class="sec-title">
                        <h5>Services</h5>
                    </div>
                    <ul class="list-unstyled service-list">
                        <li><a href="{{route('event.index')}}"><i class="fa fa-angle-right"></i>Advertise & Events</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i>Work for us</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i>Post a deal</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="f-service">
                    <div class="sec-title">
                        <h5>Region</h5>
                    </div>
                    <ul class="list-unstyled service-list">
                        <li><a href=""><i class="fa fa-angle-right"></i>East Africa</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i>West East Africa</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i>Nigeria</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="f-menu d-flex justify-content-between">
                    <a href="{{route('about')}}">About Us</a>
                    <a href="{{route('pages.terms')}}">Terms & Condition</a>
                    <a href="{{route('pages.privacy')}}">Privacy Policy</a>
                    <a href="{{$setting->reddit}}">Rss</a>
                    <a href="{{route('pages.faq')}}">Faq</a>
                    <a href="{{route('pages.contact')}}">Contact</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="footer-btm">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="copyright-text">
                    <p>{{$setting->copyright}}</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ftb-menu text-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="{{route('homepage')}}">Home</a></li>
                        <li class="list-inline-item"><a href="">Map</a></li>
                        <li class="list-inline-item"><a href="">Site Map</a></li>
                        <li class="list-inline-item"><a href="">Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="back-to-top text-center">
        <a data-scroll href="#btt"><i class="fa fa-angle-up"></i></a>
    </div>
</section>
<!-- End Footer Area -->




<!-- =========================================
    JavaScript Files
    ========================================== -->

<!-- jQuery JS -->
<script src="{{asset('assets')}}/js/assets/vendor/jquery-3.6.0.min.js"></script>
<script src="{{asset('assets')}}/js/assets/vendor/jquery-1.12.4.min.js"></script>
{{-- <script src="{{asset('assets')}}/js/assets/vendor/analytic.js"></script> --}}
<script src="https://kit.fontawesome.com/f921b1f4f8.js" crossorigin="anonymous"></script>

<!-- Bootstrap -->
<script src="{{asset('assets')}}/js/assets/popper.min.js"></script>
<script src="{{asset('assets')}}/js/assets/bootstrap.min.js"></script>

<!-- Owl Slider -->
<script src="{{asset('assets')}}/js/assets/owl.carousel.min.js"></script>

<!-- News Ticker -->
<script src="{{asset('assets')}}/js/assets/jquery.newsticker.min.js"></script>

<!-- Magnific PopUp -->
<script src="{{asset('assets')}}/js/assets/magnific-popup.min.js"></script>

<!-- Smooth Scroll -->
<script src="{{asset('assets')}}/js/assets/smooth-scroll.js"></script>

<!-- Mean Menu -->
<script src="{{asset('assets')}}/js/assets/jquery.meanmenu.min.js"></script>

<!-- Wow Animation -->
<script src="{{asset('assets')}}/js/assets/wow.min.js"></script>

<!-- Custom JS -->
<script src="{{asset('assets')}}/js/plugins.js"></script>
<script src="{{asset('assets')}}/js/custom.js"></script>
@yield('script')

</body>

</html>