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
                    <h4>Welcome to <span>NewsEra</span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quod facere praesentium odit. Repellat porro et laudantium, atque similique distinctio.<br>Nemo quidem obcaecati aut possimus, voluptatibus
                        dignissimos facilis sit. Qui.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ipsum, ut! Numquam nesciunt, ex obcaecati libero asperiores reprehenderit ratione minus commodi magni fugit non nemo quas dolorum
                        nisi ducimus laboriosam! voluptatibus voluptatibus dignissimos facilis sit. Facilis sit.</p>
                    <a href="#">Read More</a>
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