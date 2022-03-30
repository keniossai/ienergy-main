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
                        <h1>Site Settings</h1>
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
                                <li class="breadcrumb-item active text-primary" aria-current="page">Site Settings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>
        <!-- end row -->

        <!--mail-Compose-contant-start-->
        <div class="row account-contant">
            <div class="col-12">
                <div class="card card-statistics">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-xl-3 pb-xl-0 pb-5 border-right">
                                <div class="page-account-profil pt-5">
                                    <div class="profile-img text-center rounded-circle">
                                        <div class="pt-5">
                                            <div class="bg-img m-auto">
                                                <img src="{{asset('panel/img/avtar/01.jpg')}}" class="img-fluid" alt="users-avatar">
                                            </div>
                                            <div class="profile pt-4">
                                                <h4 class="mb-1">Alice Williams</h4>
                                                <p>Enthusiast</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-5 profile-counter">
                                        <ul class="nav justify-content-center text-center">
                                            <li class="nav-item border-right px-3">
                                                <div>
                                                    <h4 class="mb-0">90</h4>
                                                    <p>Post</p>
                                                </div>
                                            </li>

                                            <li class="nav-item border-right px-3">
                                                <div>
                                                    <h4 class="mb-0">1.5K</h4>
                                                    <p>Messages</p>
                                                </div>
                                            </li>

                                            <li class="nav-item px-3">
                                                <div>
                                                    <h4 class="mb-0">4.4K</h4>
                                                    <p>Members</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="profile-btn text-center">
                                        <div><button class="btn btn-light text-primary mb-2">Upload New Avatar</button></div>
                                        <div><a href="{{route('settings.edit')}}" class="btn btn-danger">Edit Site</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6 col-12 border-t border-right">
                                <div class="page-account-form">
                                    <div class="form-titel border-bottom p-3">
                                        <h5 class="mb-0 py-2">Edit Your Personal Settings</h5>
                                    </div>
                                    <div class="p-4">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="name1">Full Name</label>
                                                    <input type="text" class="form-control" id="name1" value="Alice Williams">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="title1">Title</label>
                                                    <input type="text" class="form-control" id="title1" value="Marketing expert">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="phone1">Phone Number</label>
                                                    <input type="text" class="form-control" id="phone1" value="(01) 97 563 15613">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="email1">Email</label>
                                                    <input type="email" class="form-control" id="email1" value="alicewilliams@gmail.com">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="add1">Address</label>
                                                <input type="text" class="form-control" id="add1" value="17504 Carlton Cuevas Rd, Gulfport, MS, 39503">
                                            </div>
                                            <div class="form-group">
                                                <label for="add2">Address 2</label>
                                                <input type="text" class="form-control" id="add2" value="1234 North Avenue Luke Lane, South Bend, IN 360001">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update Information</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 border-t col-12">
                                <div class="page-account-form">
                                    <div class="form-titel border-bottom p-3">
                                        <h5 class="mb-0 py-2">Your External Link</h5>
                                    </div>
                                    <div class="p-4">
                                        <form>
                                            <div class="form-group">
                                                <label for="fb">Facebook URL:</label>
                                                <input type="text" class="form-control" id="fb" value="https://www.facebook.com/">
                                            </div>
                                            <div class="form-group">
                                                <label for="tr">Twitter URL:</label>
                                                <input type="text" class="form-control" id="tr" value="https://twitter.com/">
                                            </div>

                                            <div class="form-group">
                                                <label for="br">Blogger URL:</label>
                                                <input type="text" class="form-control" id="br" value="https://www.blogger.com/">
                                            </div>

                                            <div class="form-group">
                                                <label for="go">Google+ URL:</label>
                                                <input type="text" class="form-control" id="go" value="https://plus.google.com/discover">
                                            </div>

                                            <div class="form-group">
                                                <label for="li">LinkedIn URL:</label>
                                                <input type="text" class="form-control" id="li" value="https://in.linkedin.com/">
                                            </div>

                                            <div class="form-group">
                                                <label for="we">Website URL:</label>
                                                <input type="text" class="form-control" id="we" value="https://yourwebsite.com/">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save & Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--mail-Compose-contant-end-->
    </div>
    <!-- end container-fluid -->
</div>
@endsection