@extends('layouts.app')

@section('content')


<!-- traveling -->
<div id="travel" class="traveling">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2>Your Travelling Flight History is</h2>
                     <span>Welcome to Flight Management System</span> 
                  </div>
               </div>
            </div>

            <h2>Upcoming Flights</h2>
            <hr>
            <div class="row">
               @if(!empty($flight_after))
               @foreach($flight_after as $flight)
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <h3>{{ $flight->flight_name }} </h3>
                     <p> {{ $flight->from }} -  {{ $flight->to }}</p>
                     <p> {{ $flight->date }} , {{ $flight->time }}</p>
                     <h5>Seat Number: {{ $flight->seat_number }} </h5>
                     <h5>Rs. {{$flight->price}} </h5>
                     <div class="read-more">
                        <a  href="{{ route('invoice.show', $flight->flight_id) }}">Show More</a>
                        <a href="{{ route('rate.show', ['id' => $flight->flight_id]) }}">Rate</a>

                     </div>
                  </div>
               </div>
               @endforeach
               @endif
            </div>

            <br><br>
            <h2>All flights before today</h2>
            <hr>
            <div class="row">
               @if(!empty($flight_before))
               @foreach($flight_before as $flight)
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <i><img src="images/plane-img.png" alt="icon" height="120px" width="150px"/></i>
                     <h3>{{ $flight->flight_name }} </h3>
                     <p> {{ $flight->from }} -  {{ $flight->to }}</p>
                     <p> {{ $flight->date }} , {{ $flight->time }}</p>
                     <h5>Seat Number: {{ $flight->seat_number }} </h5>
                     <h5>Rs. {{$flight->price}} </h5>
                     <div class="read-more">
                        <a  href="{{ route('invoice.show', $flight->id) }}">{{ $flight->flight_name }}</a>
                     </div>
                  </div>
               </div>
               @endforeach
               @endif
            </div>
         </div>
      </div>
      <!-- end traveling -->
      
@endsection
