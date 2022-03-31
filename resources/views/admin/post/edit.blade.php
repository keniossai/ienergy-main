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
                        <h3>Edit Post {{$post->title}}</h3>
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
                                    <a href="{{route('post.index')}}">Post list</a>
                                </li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">Edit Post</li>
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
                            <form action="{{route('post.update', [$post->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    @include('includes.errors')
                                    <h4 class="card-title mt-3">Post Title</h4>
                                    <div class="input-group form-group input-group-lg">
                                        <input type="text" class="form-control" value="{{$post->title}}" name="title" id="title" placeholder="Enter title here">
                                    </div>
                                    <div class="card-heading mt-5">
                                        <h4 class="card-title">Post Category</h4>
                                    </div>
                                    <div class="form-group mb-0">
                                        <select class="js-basic-multiple form-control" name="category" id="category" multiple="multiple">
                                            <optgroup selected label="Select Category">
                                                @foreach ($categories as $category)
                                                    <option value="{{$category->id}}" @if($post->category_id == $category->id) selected @endif>{{$category->name}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
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
                                                    <img src="{{asset($post->image)}}" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-heading form-group mt-5">
                                        <h4 class="card-title">Edit Tag</h4>
                                        <div class=" d-flex flex-wrap">
                                            @foreach ($tags as $tag)
                                            <div class="custom-control custom-checkbox" style="margin-right: 20px">
                                                <input class="custom-control-input" name="tags[]" type="checkbox" id="tag{{$tag->id}}" value="{{$tag->id}}"
                                                    @foreach($post->tags as $t)
                                                        @if($tag->id == $t->id) checked @endif
                                                    @endforeach
                                                >
                                                <label for="tag{{$tag->id}}" class="custom-control-label">{{$tag->name}}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="card-heading mt-5">
                                        <h4 class="card-title">Description</h4>
                                        <textarea  name="description" id="description" class="form-control" value="{{ $post->description }}" rows="20">{{ $post->description }}</textarea>
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