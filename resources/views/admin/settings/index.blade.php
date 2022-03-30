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
                        <h1>Account Settings</h1>
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
                                <li class="breadcrumb-item active text-primary" aria-current="page">Account Settings</li>
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
                                                <img style="width: 100px; height: 100px;" src="{{asset($user->image)}}" class="img-fluid" alt="users-avatar">
                                            </div>
                                            <div class="profile pt-4">
                                                <h4 class="mb-1">{{$user->name}}</h4>
                                                <p>{{$user->email}}</p>
                                                <p>{{$user->description}}</p>
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
                                </div>
                            </div>
                            <div class="col-md-9 border-t border-right">
                                <div class="page-account-form">
                                    <div class="form-titel border-bottom p-3">
                                        <h5 class="mb-0 py-2">Edit Your Personal Profile</h5>
                                    </div>
                                    <form action="{{route('users.profile.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="p-4">
                                            @include('includes.errors')
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="name">User Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="email">User Email</label>
                                                    <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="password">User Password<small class="text-info">(Enter password if you want change.)</small></label>
                                                    <input type="password" class="form-control" name="password" id="password">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="profile_image">Profile Image</label>
                                                    <input type="file" class="form-control" id="image" name="image">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="description">Description</label>
                                                    <textarea name="description" class="form-control" id="description" cols="62" rows="5"></textarea>
                                                </div>
                                                
                                                <button type="submit" class="btn btn-primary">Update Information</button>
                                            </div>
                                        </div>
                                    </form>
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