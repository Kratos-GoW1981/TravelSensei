@extends('layouts.app')

@section('content')
<br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating Submission Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            width: 400px; /* Increased width */
            padding: 30px; /* Increased padding */
            background-color: #fff;
            border-radius: 10px; /* Increased border-radius */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); /* Slightly stronger shadow */
        }
        label {
            display: block;
            margin-bottom: 10px; /* Reduced margin-bottom */
            font-weight: bold;
            font-size: 16px; /* Increased font size */
        }
        .star-rating {
            display: flex;
            align-items: center;
            cursor: pointer;
            margin-bottom: 20px; /* Increased margin-bottom */
        }
        .star-icon {
            font-size: 28px; /* Increased font size */
            margin: 0 8px; /* Increased margin */
            color: #ccc;
        }
        input[type="range"] {
            display: none;
        }
        button[type="submit"] {
            background-color: #3498db;
            border: none;
            color: #fff;
            padding: 12px 20px; /* Increased padding */
            border-radius: 5px; /* Reduced border-radius */
            cursor: pointer;
            font-weight: bold;
            font-size: 16px; /* Increased font size */
        }
        button[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    @foreach ($flightDetails as $data )
    <form action="{{ route('rate.save') }}" method="post">
        @csrf
        <label for="product">Airline: {{ $data->flight_name }}</label>
        <input type="number" name="flightId" id="" value="{{ $data->id }}" hidden >
        
        <label for="rating">Rating:</label>
        <div class="star-rating">
            <input type="range" name="rating" id="rating" min="0" max="5" step="0.1" value="0" required>
            <span class="star-icon">&#9733;</span>
            <span class="star-icon">&#9733;</span>
            <span class="star-icon">&#9733;</span>
            <span class="star-icon">&#9733;</span>
            <span class="star-icon">&#9733;</span>
        </div>

        <button type="submit">Submit</button>
    </form>
    @endforeach
    <script>
        const ratingInput = document.getElementById("rating");
        const starIcons = document.querySelectorAll(".star-icon");

        starIcons.forEach((star, index) => {
            star.addEventListener("click", () => {
                ratingInput.value = index + 1;
                updateStarRating(index + 1);
            });
        });

        function updateStarRating(selectedRating) {
            starIcons.forEach((star, index) => {
                star.style.color = index < selectedRating ? "#f1c40f" : "#ccc";
            });
        }

        ratingInput.addEventListener("input", () => {
            const selectedRating = parseFloat(ratingInput.value);
            updateStarRating(selectedRating);
        });
    </script>
</body>
</html>


@endsection