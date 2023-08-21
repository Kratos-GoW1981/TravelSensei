<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating Submission Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        .star-rating {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        .star-icon {
            font-size: 24px;
            margin: 0 5px;
        }
        input[type="range"] {
            display: none;
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
