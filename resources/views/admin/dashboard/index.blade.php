@extends('layouts.master')



@section('content')
<div class="app-main" id="main">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-lg-flex flex-nowrap align-items-center">
                    <div class="page-title mr-4 pr-4 border-right">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="breadcrumb-bar align-items-center">
                        <nav>
                            <ol class="breadcrumb p-0 m-b-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Dashboard
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                        <a href="{{route('homepage')}}" class="tooltip-wrapper" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="News">
                            <i class="fa fa-lightbulb-o btn btn-icon text-success"></i>
                        </a>
                        <a href="calendar" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar">
                            <i class="fa fa-calendar-o btn btn-icon text-cyan"></i>
                        </a>
                        <a class="btn btn-dark" href="{{ route('post.create')}}">
                            Add New
                        </a>
                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>
        <!-- Notification -->
        <div class="row">
            <div class="col-md-12">
                <div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">
                    <strong>Hello!</strong> {{ Auth::user()->name }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="ti ti-close"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- end row -->
        <!-- begin row -->
        <div class="row">
            <div class="col-xs-6 col-xxl-3 m-b-30">
                <div class="card card-statistics h-100 m-b-0 bg-pink">
                    <div class="card-body">
                        <h2 class="text-white mb-0">{{$postCount}}</h2>
                        <p class="text-white">News</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-xxl-3 m-b-30">
                <div class="card card-statistics h-100 m-b-0 bg-primary">
                    <div class="card-body">
                        <h2 class="text-white mb-0">{{$categoryCount}}</h2>
                        <p class="text-white">Categories</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-xxl-3 m-b-30">
                <div class="card card-statistics h-100 m-b-0 bg-orange">
                    <div class="card-body">
                        <h2 class="text-white mb-0">{{$tagCount}}</h2>
                        <p class="text-white">Tags</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-xxl-3 m-b-30">
                <div class="card card-statistics h-100 m-b-0 bg-info">
                    <div class="card-body">
                        <h2 class="text-white mb-0">{{$userCount}}</h2>
                        <p class="text-white">Users</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row magnific-wrapper">
            @if ($posts->count())
                @foreach ($posts as $post)
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="card card-statistics text-center">
                            <div class="card-body p-0">
                                <div class="portfolio-item">
                                    <img src="{{asset($post->image)}}" alt="gallery-img">
                                    <div class="portfolio-overlay">
                                        <h5 class="text-white"><a href="{{route('post.show', [$post->id])}}">{{$post->title}}</a></h5>
                                    </div>
                                    <a class="popup portfolio-img view" href="{{asset($post->image)}}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-12">
                    <h5 class="text-center">You have no post</h5>
                </div>
            @endif
        </div>
        <!-- event Modal -->
        
    </div>
    <!-- end container-fluid -->
</div>
@endsection