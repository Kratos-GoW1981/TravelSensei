@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Flight Details for Positive Emotion Reviews</h1>
        <style>
            h1 {
                text-align: center;
                font-size: 24px;
                color: #01060a;
                /* You can adjust the color code to your preference */
                /* You can add more styling here, such as font-family, margin, etc. */
            }
        </style>

        @if (!empty($positiveEmotionFlightDetails))
            <ul>
                @foreach ($positiveEmotionFlightDetails as $flight)
                    <li>
                        <div class="container2">

                            <h2>Flight ID: {{ $flight->id }}</h2>
                            <p>Flight Name: {{ $flight->flight_name }}</p>
                            <p>From: {{ $flight->from }}</p>
                            <p>To: {{ $flight->to }}</p>
                            <p>Date: {{ $flight->date }}</p>
                            <p>Time: {{ $flight->time }}</p>
                            <!-- Display other flight details as needed -->

                            <!-- Display review text for this flight -->
                            <h4>Review: {{ $flight->review_text }}</h4>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No positive emotion flight details found.</p>
        @endif
    </div>


    <style>
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


        h4 {
            display: inline-block;
            padding: 10px 20px;
            color: rgb(31, 220, 10);
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;


        }
    </style>

@endsection
