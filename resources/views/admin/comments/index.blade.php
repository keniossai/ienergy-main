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
                        <h1>Comments</h1>
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
                                <li class="breadcrumb-item active text-primary" aria-current="page">Comments</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>
        <!-- end row -->
    
        <div class="col-12">
            <div class="card card-statistics">
                <div class="card-header">
                    <div class="card-heading">
                        <h4 class="card-title">Comment List</h4>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="media">
                            <img class="mr-3 mb-3 mb-xxs-0 img-fluid" src="{{asset('panel/img/avtar/08.jpg')}}" alt="image">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Wdcorbitt</h5>
                                Without clarity, you send a very garbled message out to the Universe. We know that the Law of Attraction says that we will attract what we focus on, so if we don’t have clarity, we will attract confusion.
                            </div>
                        </li>
                        <li class="media my-4">
                            <img class="mr-3 mb-3 mb-xxs-0 img-fluid" src="{{asset('panel/img/avtar/09.jpg')}}" alt="image">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">AnnaHorno</h5>
                                The first thing to remember about success is that it is a process – nothing more, nothing less. There is really no magic to it and it’s not reserved only for a select few people. As such, success really has nothing to do with luck, coincidence or fate. It really comes down to understanding the steps in the process and then executing on those steps.
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 mb-3 mb-xxs-0 img-fluid" src="{{asset('panel/img/avtar/01.jpg')}}" alt="image">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">M_morsch</h5>
                                We carry them with us like rocks in a knapsack, and then use them to sabotage our success.
                            </div>
                        </li>
                    </ul>
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