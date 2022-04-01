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
                        <h1>Create Event</h1>
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
                                <li class="breadcrumb-item">
                                    <a href="{{route('post.index')}}">Event list</a>
                                </li>
                                <li class="breadcrumb-item active text-info" aria-current="page">Create Event</li>
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
                            <form action="{{route('events.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    @include('includes.errors')
                                    <h4 class="card-title mt-3">Event Title:</h4>
                                    <div class="input-group form-group input-group-lg">
                                        <input type="text" class="form-control" value="" name="title" id="title" placeholder="Enter title here">
                                    </div>
                                    <div class="card-heading mt-2">
                                        <h4 class="card-title">Event Description:</h4>
                                    </div>
                                    <div class="form-group mb-0">
                                        <textarea class="form-control" name="description" id="description" cols="135" rows="10"></textarea>
                                    </div>
                                    <div class="card-heading form-group mt-2">
                                        <h4 class="card-title">Event Date</h4>
                                        <input class="form-control" type="date" name="date" id="date" placeholder="Event Date">
                                    </div>
                                    <div class="card-heading form-group mt-2">
                                        <h4 class="card-title">Event Place</h4>
                                        <input class="form-control" type="text" name="place" id="place" placeholder="Event Place">
                                    </div>
                                    <div class="card-heading mt-2">
                                        <h4 class="card-title">Event Status</h4>
                                    </div>
                                    <div class="form-group mb-0">
                                        <select class="form-control" name="status" id="status">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                         </select>
                                    </div>
                                    <div class="card-heading mt-2">
                                        <h4 class="card-title">Event Type</h4>
                                    </div>
                                    <div class="form-group">
                                        <select class="js-basic-multiple form-control" name="event_type" id="event_type" multiple="multiple">
                                            <optgroup selected label="Select Type">
                                                <option value="free">Free</option>
                                                <option class="paid">Paid</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="card-heading form-group mt-2">
                                        <h4 class="card-title">Drop Image</h4>
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input"  id="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn bg-dark text-white btn-block mt-3">Create Event</button>
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

{{-- @section('style')
    <link rel="stylesheet" href="{{asset('panel/css/summernote-bs4.min.css')}}">
@endsection

@section('script')
    <script src="{{asset('panel/js/summernote-bs4.min.js')}}"></script>

    <script>
        $('#description').summernote({
            placeholder: 'News Description',
            tabsize: 2,
            height: 300
        });
    </script>
@endsection --}}