
@extends('layouts.dashboard')

@section('content')
<br>
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
      <div id="travel" class="traveling">
         <div class="container">
            <center>
                  <div class="row">
                  <div class="col-md-12 ">
                        <div class="titlepage">
                        <span>All Added FLights</span> 
                        <hr>
                        </div>
                  </div>
                  </div>
            </center>

            <div class="row">
                  @if(!empty($flights))
                  @foreach($flights as $flight)
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                              <div class="traveling-box">
                                    <i><img src="{{ asset('images/plane-img.png') }}" alt="icon" height="120px" width="150px"/></i>
                                    
                                    <h3>{{$flight->flight_name}} </h3>
                                    <p> {{ $flight->from }} -  {{ $flight->to }}</p>
                                    <p> {{ $flight->date }} , {{ $flight->time }}</p>
                                    <h5>Total Seats: {{ $flight->total_seats }} </h5>
                                    <h5>Rs. {{$flight->price}} </h5>

                                    <div class="read-more">
                                          <a  href="{{ route('flights.show', $flight->id) }}">Show More</a>
                                    </div>
                              </div>
                        </div>
                  @endforeach
                  @endif
            </div>
      </div>
</div>
</div>
</div>
      @endsection