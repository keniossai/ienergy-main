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
                        <li class="list-inline-item">About us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area -->

<!-- About Area -->
<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-top text-center">
                    <h4>About Us</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore excepturi exercitationem ipsam culpa est. Tempore nisi eligendi explicabo facere at ut corporis.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-box">
                    <h4>Welcome to <span style="color: #000; text-transform: capitalize;">iEnergy</span><span style="text-transform: capitalize;" >Africa</span></h4>
                    <p>iEnergy is an online, bespoke energy information
                        and news platform dedicated to providing data,
                        analytics and insights to stakeholders in the African
                        energy, oil and gas space.
                        
                        It is an chiefly an online platform targeted at
                        delivering regional market insights, expert
                        commentary, conversations, breaking news and in-
                        depth features on the energy space in Nigeria and Africa
                        It is the one-stop site for breaking news, interviews,
                        cover stories, press releases and feature articles
                        relating to the oil, gas and energy industries in
                        Nigeria and across West Africa.
                    </p>
                    <a href="#">Contact Us</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-img">
                    <img src="{{asset('assets')}}/img/about.jpg" alt="" class="img-fluid">
                </div>
            </div>
            
            
        </div>
    </div>
</section>
<!-- End About Area -->
@endsection