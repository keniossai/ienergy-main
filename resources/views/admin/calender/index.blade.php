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
                        <h1>Calendar</h1>
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
                        <div class="card-heading">
                            <h4 class="card-title">Event Calendar</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3">
                                <div id="external-events">
                                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#eventModal">Add New Todo</button>
                                    <p class="mt-3">
                                        Drag and drop your event or click in the calendar.
                                    </p>
                                    @foreach ($events as $event)
                                    <div class="fc-event fc-event-primary" data-color="fc-event-primary"><span></span>{{$event->title}}</div>
                                    @endforeach
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Remove After Drop
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9">
                                <div class="event-calendar">
                                    <div id="event-calendar"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <!-- event Modal -->
        <div class="modal fade" id="eventModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="verticalCenterTitle">Add New Event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Event Name</label>
                                <input type="email" class="form-control" id="eventname">
                            </div>
                            <div class="form-group">
                                <label>Choose Event Color</label>
                                <select class="form-control">
                                    <option>Primary</option>
                                    <option>Warning</option>
                                    <option>Success</option>
                                    <option>Danger</option>
                                </select>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end container-fluid -->
</div>
@endsection