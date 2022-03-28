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
                        <h1>Post List</h1>
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
                                <li class="breadcrumb-item active text-primary" aria-current="page">Post List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>
        <!-- end row -->
        <!-- start-clients contant-->
        <div class="row">
            <div class="col-12">
                <div class="card card-statistics clients-contant">
                    <div class="card-header">
                        <div class="d-xxs-flex justify-content-between align-items-center">
                            <div class="card-heading">
                                <h4 class="card-title">Post List</h4>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-body py-0 table-responsive">
                        <table class="table clients-contant-table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Tags</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Edit & Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($posts->count())
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div style="max-width: 100px; max-height: 100px; overflow: hidden;">
                                                        <img src="{{asset($post->image)}}" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$post->title}}</td>
                                            <td class="tagname">{{$post->category->name}}</td>
                                            <td class="tagname">
                                                @foreach ($post->tags as $tag)
                                                    <span class="badge badge-primary">{{$tag->name}}</span>
                                                @endforeach
                                            </td>
                                            <td class="tagname">{{$post->user['name']}}</td>
                                            <td class="d-flex mt-3">
                                                <a href="{{ route('post.show', [$post->id])}}" class="btn btn-icon btn-outline-success btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-eye"></i></a>
                                                <a href="{{ route('post.edit', [$post->id])}}" class="btn btn-icon btn-outline-info btn-round"><i class="ti ti-pencil"></i></a>
                                                {{-- <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round ml-2"><i class="ti ti-trash"></i></a> --}}
                                                <form action="{{ route('post.destroy', [$post->id])}}" class="ml-2" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="summit" class="btn btn-icon btn-outline-danger btn-round "><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                </form>
                                                <a href="{{route('pages.newsdetails', ['slug' => $post->slug])}}" class="btn btn-icon btn-outline-dark btn-round ml-2"><i class="ti ti-link"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td colspan="6">
                                       <h5 class="text-center">No posts found.</h5>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end-clients contant-->
    </div>
    <!-- end container-fluid -->
</div>

<style>
    .tagname {
    vertical-align: middle;
    white-space: nowrap !important;
}
</style>
@endsection