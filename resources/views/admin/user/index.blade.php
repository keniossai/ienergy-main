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
                        <h1>User List</h1>
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
                                <li class="breadcrumb-item active text-primary" aria-current="page">User list</li>
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
                            <h4 class="card-title">User List</h4>
                            <a class="btn btn-primary" href="{{route('users.create')}}">
                                Add User
                            </a>
                        </div>
                    </div>   
                </div>
                <div class="row">
                    @if ($users->count())
                    @foreach ($users as $user)
                    <div class="col-md-4">
                        <div class="card card-statistics employees-contant px-2">
                            <div class="card-body pb-5 pt-4">
                                <div class="text-center">
                                    <div class="text-right">
                                        <h4><span class="badge badge-primary badge-pill px-3 py-2">{{$user->id}}</span></h4>
                                    </div>
                                    <div class="pt-1 bg-img m-auto"><img style="width: 100px;" src="{{asset($user->image)}}" class="img-fluid" alt="user_image"></div>
                                    <div class="mt-3 employees-contant-inner">
                                        <h4 class="mb-1">{{$user->name}}</h4>
                                        <h5 class="mb-0 text-muted">{{$user->email}}</h5>
                                        <div class="mt-3 d-flex ml-auto">
                                            <span class="badge badge-pill badge-info-inverse px-3 py-2"><a href="{{ route('users.edit', [$user->id]) }}">Edit</a></span>
                                            <form action="{{ route('users.destroy', [$user->id])}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <span class="badge badge-pill badge-danger-inverse px-3 py-2"><a href="{{ route('users.destroy', [$user->id])}}" onclick="event.preventDefault();
                                                    this.closest('form').submit();">Delete</a></span>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="text-center">No user found.</h5>
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</div>

<style>
    .btn-icon{
        width: 30px !important;
        height: 30px !important;
        padding: 0 !important;
        line-height: 30px !important;
    }
</style>
@endsection