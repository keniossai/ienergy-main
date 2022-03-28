@extends('layouts.base')



@section('content')
<!-- Breadcrumb Area -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-box">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                        <li class="list-inline-item">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area -->

<!-- Contact Area -->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="get-in-touch">
                    <div class="sec-title">
                        <h5>Get In Touch</h5>
                    </div>
                    <div class="contact-form">
                        <form id="ajax-contact" method="post" action="send.php">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <p><input type="text" id="name" name="name" placeholder="Name"></p>
                                </div>
                                <div class="col-md-6">
                                    <p><input type="text" id="email" name="email" placeholder="Email"></p>
                                </div>
                                <div class="col-md-12">
                                    <p><textarea name="message" id="message" placeholder="Message"></textarea></p>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit">Submit Message</button>
                                </div>
                            </div>
                            <div id="form-messages"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="contact-info">
                    <div class="sec-title">
                        <h5>Contact Info</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-box d-flex">
                                <div class="contact-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact-content">
                                    <p>795 South Park Avenue, Long Island, Newyork, NY 94107.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="contact-box d-flex">
                                <div class="contact-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="contact-content">
                                    <p>enquery@domain.com <br>help@yourdomain.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="contact-box d-flex">
                                <div class="contact-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-content">
                                    <p>+1 908 875 7678 <br>+1 908 875 7637</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="social">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="fa fa-rss"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="map"></div>
</section>
<!-- End Contact Area -->
@endsection