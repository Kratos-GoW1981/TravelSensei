@extends('layouts.app')

@section('content')
    {{-- <div class="amazing"> --}}
    <div class="container">
        <div class="row">
            @foreach ($recommendedFlights as $flight)
                <div class="col-md-12">
                    <h1> Your Next Adventure Awaits at</h1>
                    <style>
                        h1 {
                            text-align: center;
                            font-size: 24px;
                            color: #007BFF;
                            /* You can adjust the color code to your preference */
                            /* You can add more styling here, such as font-family, margin, etc. */
                        }
                    </style>
                    <div class="amazing-box">

                        <div class="container2">
                            <h2>{{ $flight->flight_name }}</h2>
                            <div class="flight-info">
                                <a href="#">From: {{ $flight->from }}</a>
                                <a href="#">Destination: {{ $flight->to }}</a>
                                <a>Date and Time: {{ $flight->date }} at {{ $flight->time }}</a>
                                <a>Total Seats in Flight: {{ $flight->total_seats }}</a>
                                <a>Price per Seat: Rs. {{ $flight->price }}</a>

                            </div>
                            <br>
                            <a href="/flights/{{ $flight->id }}" class="book-button">Book This Flight</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container2 {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            margin-top: 0;
        }

        a {
            color: #3498db;
            text-decoration: none;
            display: inline-block;
            margin-top: 5px;
        }

        a:hover {
            color: #1e87b9;
        }

        .flight-info {
            margin-top: 20px;
        }

        .flight-info a {
            display: block;
        }

        .flight-info a:first-child {
            margin-bottom: 10px;
        }

        .book-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2ecc71;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .book-button:hover {
            background-color: #27ae60;
        }
    </style>
@endsection
