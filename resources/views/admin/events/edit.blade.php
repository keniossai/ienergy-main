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
                        <h1>Edit Event</h1>
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
                                    <a href="{{route('events.index')}}">Event list</a>
                                </li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">Create Event</li>
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
                            <form action="{{route('events.update', [$event->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    @include('includes.errors')
                                    <h4 class="card-title mt-3">Event Title:</h4>
                                    <div class="input-group form-group input-group-lg">
                                        <input type="text" class="form-control" value="{{$event->title}}" name="title" id="title" placeholder="Enter title here">
                                    </div>
                                    <div class="card-heading mt-2">
                                        <h4 class="card-title">Event Description:</h4>
                                    </div>
                                    <div class="form-group mb-0">
                                        <textarea class="form-control" value="{{$event->description}}" name="description" id="description" cols="135" rows="10">{{ $event->description }}</textarea>
                                    </div>
                                    <div class="card-heading form-group mt-2">
                                        <h4 class="card-title">Event Date</h4>
                                        <input class="form-control" type="date" value="{{$event->date}}" name="date" id="date" placeholder="Event Date">
                                    </div>
                                    
                                    <div class="card-heading form-group mt-5">
                                        <div class="row">
                                            <div class="col-8">
                                                <h4 class="card-title">Drop Image</h4>
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input"  id="image">
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div style="max-width: 200px; max-height: 200px; overflow: hidden;">
                                                    <img src="{{asset($event->image)}}" class="img-fluid" alt="">
                                                </div>
                                            </div>
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