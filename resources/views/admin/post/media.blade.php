@extends('layouts.master')



@section('content')
<div class="app-main" id="main">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1>Media</h1>
                    </div>
                    <div class="ml-auto d-flex align-items-center">
                        <nav>
                            <ol class="breadcrumb p-0 m-b-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Dashboard
                                </li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">Media</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>
        <!-- end row -->

        <!-- start light-box contant -->

        <div class="row magnific-wrapper">
            
            <div class="col-12">
                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading">
                            <h4 class="card-title">Media Gallery</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card-body">
                                <div class="gallery">
                                    <a href="{{asset('panel/img/widget/07.jpg')}}" class="view1"><img src="{{asset('panel/img/widget/07.jpg')}}" class="img-fluid" alt="small-img-7"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card-body">
                                <div class="gallery">
                                    <a href="{{asset('panel/img/widget/08.jpg')}}" class="view1"><img src="{{asset('panel/img/widget/08.jpg')}}" class="img-fluid" alt="small-img-8"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card-body">
                                <div class="gallery">
                                    <a href="{{asset('panel/img/widget/09.jpg')}}" class="view1"><img src="{{asset('panel/img/widget/09.jpg')}}" class="img-fluid" alt="small-img-9"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card-body">
                                <div class="gallery">
                                    <a href="{{asset('panel/img/widget/010.ht')}}ml" class="view1"><img src="{{asset('panel/img/widget/10.jpg')}}" class="img-fluid" alt="small-img-10"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card-body">
                                <div class="gallery">
                                    <a href="{{asset('panel/img/widget/01.jpg')}}" class="view1"><img src="{{asset('panel/img/widget/01.jpg')}}" class="img-fluid" alt="small-img-11"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card-body">
                                <div class="gallery">
                                    <a href="{{asset('panel/img/widget/02.jpg')}}" class="view1"><img src="{{asset('panel/img/widget/02.jpg')}}" class="img-fluid" alt="small-img-12"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end light-box contant -->
    </div>
    <!-- end container-fluid -->
</div>
@endsection