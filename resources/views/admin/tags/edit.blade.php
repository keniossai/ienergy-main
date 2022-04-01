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
                        <h1>Edit Tag</h1>
                    </div>
                    <div class="ml-auto d-flex align-items-center">
                        <nav>
                            <ol class="breadcrumb p-0 m-b-0">
                                <li class="breadcrumb-item">
                                    <a href="dashboard"><i class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Dashboard
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('tag.index')}}">Tag list</a></li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">Edit Tag</li>
                            </ol>
                        </nav>
                        
                    </div>
                    
                </div>
                <!-- end page title -->
            </div>
        </div>
        <!-- end row -->
        <!-- begin row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="ml-auto d-flex justify-content-between align-items-center secondary-menu text-center">
                            <h4 class="card-title">Edit tag - {{$tag->name}}</h4>
                            <a class="btn btn-dark" href="{{route('tag.index')}}">
                                Back to tag List
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{ route('tag.update', [$tag->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        @include('includes.errors')
                                        <div class="form-group">
                                            <label for="name">Tag Name</label>
                                            <input type="name" name='name' value="{{ $tag->name }}" class="form-control" placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter description">{{ $tag->description }}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-dark">Update Tag</button>
                                    </div>
                                </form>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</div>
@endsection