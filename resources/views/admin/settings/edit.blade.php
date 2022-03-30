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
                        <h3>Edit Site Settings</h3>
                    </div>
                    <div class="ml-auto d-flex align-items-center">
                        <nav>
                            <ol class="breadcrumb p-0 m-b-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>
        <!-- end row -->
        <div class="row select-wrapper">
            <div class="col-md-12 col-12 selects-contant">
                <div class="row">
                    <div class="col-md-12 col-12 selects-contant">
                        <div class="card card-statistics Multi-sel">
                            <form action="{{route('settings.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    @include('includes.errors')
                                    <h4 class="card-title mt-3">Site Name</h4>
                                    <div class="input-group form-group input-group-lg">
                                        <input type="text" class="form-control" value="{{$setting->name}}" name="name" id="name" placeholder="Enter name here">
                                    </div>
                                
                                    <div class="card-heading form-group mt-5">
                                        <div class="row">
                                            <div class="col-8">
                                                <h4 class="card-title">Site Logo</h4>
                                                <div class="custom-file">
                                                    <input type="file" name="logo" class="custom-file-input"  id="logo">
                                                    <label class="custom-file-label" for="logo">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div style="max-width: 200px; max-height: 200px; overflow: hidden;">
                                                    <img src="{{asset($site->image)}}" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="card-heading mt-5">
                                        <h4 class="card-title">Description</h4>
                                        <textarea  name="description" id="description" class="form-control" value="{{ $post->description }}" rows="20">Description</textarea>
                                    </div>
                                    <button type="submit" class="btn bg-dark text-white btn-block mt-3">Update Post</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>                        
        <!-- begin row -->
       
        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</div>



@endsection