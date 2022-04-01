@extends('layouts.event')


@section('content')
<main id="main" class="main-page">

    <!-- ======= Speaker Details Sectionn ======= -->
    <section id="speakers-details">
      <div class="container">
        <div class="section-header">
          <h2>Event Details</h2>
        </div>

        <div class="row">
          <div class="col-md-6">
            <img src="{{$event->image}}" alt="Speaker 1" class="img-fluid">
          </div>

          <div class="col-md-6">
            <div class="details">
              <h2>{{$event->title}}</h2>
              
              <p>{{$event->description}}</p>
              <b>Venue:</b> <h6>{{$event->place}}</h6>
              <b>Date:</b>
              <h6>{{$event->date}}</h6>
              <b>Type:</b>
              <h5>{{$event->event_type}}</h5>
              </div>
          </div>

        </div>
      </div>

    </section>

  </main><!-- End #main -->
@endsection