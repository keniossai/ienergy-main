<!DOCTYPE html>
<html lang="en">


<head>
    <title>iEnergy Online | Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="iEnergy Online Latest oil and gas news" />
    <meta name="author" content="Latest oil and gas news" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- app favicon -->
    <link rel="shortcut icon" href="panel/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('panel/css/vendors.css')}}" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="{{asset('panel/css/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @yield('style')
</head>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            {{-- <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="{{asset('panel/img/loader/loader.svg')}}" alt="loader">
                    </div>
                </div>
            </div> --}}

            <header class="app-header top-bar">
                <!-- begin navbar -->
                <nav class="navbar navbar-expand-md">

                    <!-- begin navbar-header -->
                    <div class="navbar-header d-flex align-items-center">
                        <button style="background-color: transparent; overflow: visible; outline: none;" class="mobile-toggle" type="button">
                            <i class="ti ti-align-right"></i>
                        </button>
                        {{-- <a href="javascript:void:(0)" data-toggle="collapse" role="button" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation" class="mobile-toggle"><i class="ti ti-align-right"></i></a> --}}
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset('panel/img/logo.png')}}" class="img-fluid logo-desktop" alt="logo" />
                            <img src="{{asset('panel/img/logo-icon.png')}}" class="img-fluid logo-mobile" alt="logo" />
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-align-left"></i>
                    </button>
                    <!-- end navbar-header -->
                    <!-- begin navigation -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navigation d-flex">
                            <ul class="navbar-nav nav-left">
                                <li class="nav-item">
                                    <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                                        <i class="ti ti-align-right"></i>
                                    </a>
                                </li>
                                <li class="nav-item full-screen d-none d-lg-block" id="btnFullscreen">
                                    <a href="javascript:void(0)" class="nav-link expand">
                                        <i class="icon-size-fullscreen"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav nav-right ml-auto">
                                
                                <li class="nav-item">
                                    <div class="search-wrapper">
                                        <div class="close-btn">
                                            <i class="ti ti-close"></i>
                                        </div>
                                        <div class="search-content">
                                            <form>
                                                <div class="form-group">
                                                    <i class="ti ti-search magnifier"></i>
                                                    <input type="text" class="form-control autocomplete" placeholder="Search Here" id="autocomplete-ajax" autofocus="autofocus">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown user-profile">
                                    <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset(auth()->user()->image) }}" alt="avtar-img">
                                        <span class="bg-success user-status"></span>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                        <div class="bg-gradient px-4 py-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="mr-1">
                                                    @guest
                                                        @else
                                                        <h4 class="text-white mb-0">{{ Auth::user()->name }}</h4>
                                                        <small class="text-white">{{ Auth::user()->email }}</small>
                                                    @endguest
                                                </div>
                                                <form method="POST" action="{{route('logout')}}">
                                                    @csrf
                                                    <a class="text-white font-20 tooltip-wrapper" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                           this.closest('form').submit();"> <i
                                                        class="zmdi zmdi-power"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <a class="dropdown-item d-flex nav-link" href="{{route('users.profile')}}">
                                                <i class="fa fa-user pr-2 text-success"></i> Profile</a>
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class="fa fa-envelope pr-2 text-primary"></i> Inbox
                                                <span class="badge badge-primary ml-auto">6</span>
                                            </a>
                                            <a class="dropdown-item d-flex nav-link" href="settings">
                                                <i class=" ti ti-settings pr-2 text-info"></i> Settings
                                            </a>
                                            <a class="dropdown-item d-flex nav-link" href="lockscreen">
                                                <i class=" ti ti-lock pr-2 text-dark"></i> Lockscreen
                                            </a>
                                            <a class="dropdown-item d-flex nav-link" href="mailto:kenossai1@gmail.com">
                                                <i class="fa fa-compass pr-2 text-warning"></i> Need help?
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end navigation -->
                </nav>
                <!-- end navbar -->
            </header>

            <div class="app-container expand">
                <!-- begin app-nabar -->
                <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
                    <div class="sidebar-nav scrollbar scroll_light">
                        <ul class="metismenu" id="sidebarNav">
                            <li class="nav-static-title">iENERGY CMS</li>
                            <li class="active">
                                <a class="has-arrow" href="{{ route('dashboard')}}" aria-expanded="false">
                                    <i class="nav-icon ti ti-home"></i>
                                    <span class="nav-title">Dashboard</span>
                                    <span class="nav-label label label-danger">9</span>
                                </a></li>
                                <li>
                                    <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-pin"></i><span class="nav-title">Posts</span> </a>
                                    <ul aria-expanded="false">
                                        <li> <a href="{{ route('post.index')}}">All Posts</a> </li>
                                        <li> <a href="{{ route('post.create')}}">Add New</a> </li>
                                        <li> <a href="{{ route('category.index')}}">Categories</a> </li>
                                        <li> <a href="{{ route('tag.index')}}">Tags</a> </li>
                                    </ul>
                                </li>
                            <li><a href="media"><i class="fa fa-picture-o" aria-hidden="true"></i><span class="nav-title">Media</span><span class="nav-label label label-success">New</span></a> </li>
                            <li><a href="messages"><i class="nav-icon ti ti-email"></i><span class="nav-title">Messages</span><span class="nav-label label label-success">2</span></a> </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-layout-column3-alt"></i><span class="nav-title">Pages</span> </a>
                                <ul aria-expanded="false">
                                    <li> <a href="/">Home</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-calendar-check    "></i><span class="nav-title">Events</span> </a>
                                <ul aria-expanded="false">
                                    <li> <a href="{{route('events.index')}}">All Events</a> </li>
                                    <li> <a href="{{route('events.create')}}">Add New</a> </li>
                                </ul>
                            </li>
                            <li><a href="calendar"><i class="fa fa-calendar" aria-hidden="true"></i><span class="nav-title">Calendar</span></a></li>
                            <li><a href="comments"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Comments</span><span class="nav-label label label-danger">2</span></a> </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class=" ti ti-settings pr-2 text-info"></i><span class="nav-title">Settings</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href="{{route('users.profile')}}"><i class="fa fa-user pr-2 text-success"></i>Your Profile</a> </li>
                                    <li> <a href="{{route('users.index')}}"> <i class="fa fa-user-plus" aria-hidden="true"></i> Users</a> </li>
                                    <li> <a href="{{route('settings.edit')}}"> <i class="fas fa-globe"></i> Site Settings</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-key"></i><span class="nav-title">Auth</span></a>
                                <ul aria-expanded="false">
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <li> <a href="{{route('logout')}}" 
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();"> <i
                                            class="zmdi zmdi-power"></i>
                                            Logout</a> </li>
                                    </form>
                                        <li><a href="{{route('lockscreen.index')}}"><i class="fa fa-lock"></i>Lock Screen</a> </li>
                                </ul>
                            </li>
                            <li class="sidebar-banner p-4 bg-gradient text-center m-3 d-block rounded">
                                <h5 class="text-white mb-1">iEnergyAfrica</h5>
                                <a class="btn btn-square bg-dark btn-xl d-inline-block mt-2 mb-0" href="/"> Go to website</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end sidebar-nav -->
                </aside>
            </div>

            @yield('content')

            <footer class="footer">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-left">
                        <p>&copy; Copyright 2022. All rights reserved.</p>
                    </div>
                <div class="col  col-sm-6 ml-sm-auto text-center text-sm-right">
                        <p><a target="_blank" href="">Developed By Ken Ossai</a></p>
                    </div>
                </div>
            </footer>
            <!-- end footer -->
        </div>  
    </div>
<!-- end app -->

<!-- plugins -->
<script src="{{asset('panel/js/vendors.js')}}"></script>
<script src="https://kit.fontawesome.com/f921b1f4f8.js" crossorigin="anonymous"></script>

<!-- custom app -->
<script src="{{asset('panel/js/app.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('panel') }}/js/bs-custom-file-input.min.js"></script>
@yield('script')
<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif
    $(document).ready(function () {
      bsCustomFileInput.init()
    });
  </script>
</body>


</html>