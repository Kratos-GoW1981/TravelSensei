@extends('layouts.app')

@section('content')
    <div class="amazing">
        <div class="container">
            <div class="row">
                @foreach ($recommendedFlights as $flight)
                        <div class="col-md-12">
                            <div class="amazing-box">
                                <h2> You May Want To Visit This Place</h2>
                                <h2>{{ $flight->flight_name }}</h2>
                                <a href="#">From: {{ $flight->from }}</a><a href="#">Destination :
                                    {{ $flight->to }}</a>

                                <a>Date and Time:
                                    {{ $flight->date }} at {{ $flight->time }} </a>
                                <br><br>
                                <a>Total Seat in Flight: {{ $flight->total_seats }} </a>
                                <a>Price per seat: Rs. {{ $flight->price }}</a>
                                <br>
                                <br>
                                <br>
                                <a href="/flights/{{ $flight->id }}" style="background-color: green;">Book This Flight</a>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection

