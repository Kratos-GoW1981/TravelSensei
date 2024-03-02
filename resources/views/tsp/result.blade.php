@extends('layouts.app')

@section('content')
    <!-- Display TSP result -->
    <h2>TSP Result</h2>
    <p>Route:</p>
    <p>Total Distance: {{ $totalDistance }}</p>

    <!-- Display recommended places -->
    <h2>Recommended Places</h2>
    <ul>
        @foreach ($recommendedPlaces as $place)
            <li>{{ $place->name }} - {{ $place->description }}</li>
        @endforeach
    </ul>
@endsection
