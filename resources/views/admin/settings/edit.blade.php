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
                            <div class="col-xl-4 pb-xl-0 pb-5 border-right">
                                <div class="page-account-profil pt-5">
                                    <div class="profile-img text-center rounded-circle">
                                        <div class="pt-5">
                                            <div class="bg-img m-auto">
                                                <img style="width: 100px; height: 100px;" src="{{asset($setting->site_logo)}}" class="img-fluid" alt="settings-avatar">
                                            </div>
                                            <div class="profile pt-4">
                                                <h4 class="mb-1">{{$setting->name}}</h4>
                                                <p class="p-4">{{$setting->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-8 border-t border-right">
                                <div class="page-account-form">
                                    <div class="form-titel border-bottom p-3">
                                        <h5 class="mb-0 py-2">Edit Your Site Settings</h5>
                                    </div>
                                    <form action="{{route('settings.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="p-4">
                                            @include('includes.errors')
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="name">Site Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="{{$setting->name}}">
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="facebook">Facebook</label>
                                                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{$setting->facebook}}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="linkedin">LinkedIn</label>
                                                        <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{$setting->linkedin}}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="instagram">Instagram</label>
                                                        <input type="text" class="form-control" id="instagram" name="instagram" value="{{$setting->instagram}}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="reddit">Reddit</label>
                                                        <input type="text" class="form-control" id="reddit" name="reddit" value="{{$setting->reddit}}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="twitter">Twitter</label>
                                                        <input type="text" class="form-control" id="twitter" name="twitter" value="{{$setting->twitter}}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" class="form-control" id="email" name="email" value="{{$setting->email}}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="phone">Contact Phone Number:</label>
                                                        <input type="text" class="form-control" id="phone" name="phone" value="{{$setting->phone}}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="address">Contact Address:</label>
                                                        <input type="text" class="form-control" id="address" name="address" value="{{$setting->address}}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="copyright">Copyright</label>
                                                        <input type="text" class="form-control" id="copyright" name="copyright" value="{{$setting->copyright}}">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <label for="profile_image">Site Logo</label>
                                                    <input type="file" class="form-control" id="site_logo" name="site_logo">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="description">Description</label>
                                                    <textarea name="description" class="form-control" id="description" rows="5">{{$setting->description}}</textarea>
                                                </div>
                                                <button type="submit" class="btn btn-dark">Update Site Info</button>
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
