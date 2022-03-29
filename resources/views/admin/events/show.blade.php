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
                        <h1>View Event</h1>
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
                                <li class="breadcrumb-item active text-primary" aria-current="page">View Event</li>
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
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">{{$event->title}}</h3>
                                    <a href="{{ route('events.index') }}" class="btn btn-primary">Go Back to Event List</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-pimary">
                                    <tbody>
                                        <tr>
                                            <th style="width: 200px">Image</th>
                                            <td>
                                                <div style="max-width: 400px; max-height:400px;overflow:hidden">
                                                    <img src="{{ asset($event->image) }}" class="img-fluid" alt="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 200px">Title</th>
                                            <td>{{ $event->title }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 200px">Category Name</th>
                                            <td>{{ $event->date }}</td>
                                        </tr>
                                       
                                        <tr>
                                            <div>
                                                <th style="width: 200px">Description</th>
                                                <td>{!! $event->description !!}</td>
                                            </div>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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