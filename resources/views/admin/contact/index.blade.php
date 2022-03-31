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
                        <h1>Messages</h1>
                    </div>
                    <div class="ml-auto d-flex align-items-center">
                        <nav>
                            <ol class="breadcrumb p-0 m-b-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html"><i class="ti ti-home"></i>Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">Messages</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>
        <!-- end row -->
        <!-- start Media contant -->
        <div class="row media-contant">
            @if ($messages->count() )
                @foreach ($messages as $message)
                    <div class="col-12 col-lg-6">
                        <div class="card card-statistics media-contant">
                            <div class="card-header d-flex">
                                <div class="ml-auto">
                                    <form action="{{route('contact.destroy', ['id' => $message->id])}}" class="ml-2" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="summit" class="btn btn-icon btn-outline-danger btn-round "><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                    {{-- <a href="" class="btn btn-icon btn-outline-success btn-round ml-2"><i class="fa fa-eye" aria-hidden="true"></i></a> --}}
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="media">
                                    <img class="mr-3 mb-3 mb-xxs-0 img-fluid" src="{{asset('panel')}}/img/avtar/profilew.png" alt="image">
                                    <div class="media-body">
                                        <h4 class="card-title">{{$message->subject}}</h4>
                                        <h5 class="mt-0">{{$message->name}}</h5>
                                        {{$message->message}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
            <div class="text-center m-auto">
                <h3 class="mt-50">You have no message</h3>
            </div>
            @endif

            
        </div>
    </div>
    <!-- end container-fluid -->
</div>
@endsection