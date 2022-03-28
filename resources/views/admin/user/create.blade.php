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
                        <h1>Create User</h1>
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
                                <li class="breadcrumb-item"><a href="{{route('users.index')}}">User list</a></li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">Create User</li>
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
                            <h4 class="card-title">Create User</h4>
                            <a class="btn btn-primary" href="{{route('users.index')}}">
                                Back to User List
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{route('users.store')}}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        @include('includes.errors')
                                        <div class="form-group">
                                            <label for="name">User Name</label>
                                            <input type="name" name='name' id="name" class="form-control" placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">User Email</label>
                                            <input type="email" name='email' id="email" class="form-control" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">User Password</label>
                                            <input type="password" name='password' id="password" class="form-control" placeholder="Enter password">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Create User</button>
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