<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iEnergy Upcoming Events | Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('event')}}/img/favicon.png" rel="icon">
  <link href="{{asset('event')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('event')}}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('event')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('event')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('event')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('event')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('event')}}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: TheEvent - v4.7.0
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center header-inner">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
        <a href="/" class="scrollto"><img src="{{asset('event')}}/img/logo.png" alt="" title=""></a>
      </div>

      {{-- <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#speakers">Speakers</a></li>
          <li><a class="nav-link scrollto" href="#schedule">Schedule</a></li>
          <li><a class="nav-link scrollto" href="#venue">Venue</a></li>
          <li><a class="nav-link scrollto" href="#hotels">Hotels</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#supporters">Sponsors</a></li>
          
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar --> --}}
      {{-- <a class="buy-tickets scrollto" href="#buy-tickets">Buy Tickets</a> --}}
    </div>
  </header><!-- End Header -->



  @yield('content')



  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-info">
            <img src="{{asset('event')}}/img/logo.png" alt="TheEvenet">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <strong>Published by</strong>
       <img style="width: 100px;" src="{{asset('event/img/white-logo.png')}}" alt=""> &copy; 
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
      -->
        Designed by <a href="mailto:kenossai1@gmail.com">LightCode</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('event')}}/vendor/aos/aos.js"></script>
  <script src="{{asset('event')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('event')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('event')}}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('event')}}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('event')}}/js/main.js"></script>

</body>

</html>