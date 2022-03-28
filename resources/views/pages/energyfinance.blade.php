@extends('layouts.base')

<style>
    h3:hover{
        text-decoration: underline;
    }
</style>

@section('content')
<div class="clear-fix" style="margin-top: 80px;"></div>
<section class="news-area">
    <div class="container">
        <!-- <h1 class="mt-4">POLITICS</h1> -->
        <div class="row">
            <div class="col-md-12">
                <div class="latest-news">
                    <div class="tab-box d-flex justify-content-between">
                        <div class="sec-title">
                            <h5>Energy Finance</h5>
                        </div>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="lt-item-bg">
                                        <img src="{{asset('assets')}}/img/lt-bg-1.jpg" alt="" class="img-fluid">
                                        <h3><a href="">These sentences are selected from various online news.</a></h3>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">Technology</li>
                                            <li class="list-inline-item">February 11, 2019</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Exde tenetur, quasi, provident animi magni voluptas fugit Itaque labore quae ad........</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="lt-item-bg">
                                        <img src="{{asset('assets')}}/img/lt-bg-2.jpg" alt="" class="img-fluid">
                                        <h3><a href="">These sentences are selected from various online news.</a></h3>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">Business</li>
                                            <li class="list-inline-item">February 11, 2019</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Exde tenetur, quasi, provident animi magni voluptas fugit Itaque labore quae ad........</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="lt-item-bg">
                                        <img src="{{asset('assets')}}/img/lt-bg-3.jpg" alt="" class="img-fluid">
                                        <h3><a href="">These sentences are selected from various online news.</a></h3>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">Sports</li>
                                            <li class="list-inline-item">February 11, 2019</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Exde tenetur, quasi, provident animi magni voluptas fugit Itaque labore quae ad........</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-5">
                                    <div class="lt-item-bg">
                                        <img src="{{asset('assets')}}/img/lt-bg-3.jpg" alt="" class="img-fluid">
                                        <h3><a href="">These sentences are selected from various online news.</a></h3>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">Sports</li>
                                            <li class="list-inline-item">February 11, 2019</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Exde tenetur, quasi, provident animi magni voluptas fugit Itaque labore quae ad........</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-5">
                                    <div class="lt-item-bg">
                                        <img src="{{asset('assets')}}/img/lt-bg-3.jpg" alt="" class="img-fluid">
                                        <h3><a href="">These sentences are selected from various online news.</a></h3>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">Sports</li>
                                            <li class="list-inline-item">February 11, 2019</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Exde tenetur, quasi, provident animi magni voluptas fugit Itaque labore quae ad........</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-5">
                                    <div class="lt-item-bg">
                                        <img src="{{asset('assets')}}/img/lt-bg-3.jpg" alt="" class="img-fluid">
                                        <h3><a href="">These sentences are selected from various online news.</a></h3>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">Sports</li>
                                            <li class="list-inline-item">February 11, 2019</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Exde tenetur, quasi, provident animi magni voluptas fugit Itaque labore quae ad........</p>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-5">
                                    <div class="app-widget">
                                        <img style="width: 100%; height: 400px;" src="{{asset('assets')}}/img/news-app.jpg" alt="" class="img-fluid app-img">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    
        </div>
        
    </div>
</section>
@endsection
