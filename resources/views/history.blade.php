@extends('layouts.app')

@section('content')


    <head>

        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <!-- traveling -->
    <div id="travel" class="traveling">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage">
                        <h2>Your Travelling Flight History is</h2>
                        <span>Welcome to Travel and Tour System</span>
                    </div>
                </div>
            </div>

            <h2>Upcoming Flights</h2>
            <hr>
            @if (!empty($flight_after))
                @foreach ($flight_after as $flight)
                    <div class="row">
                        <div class="card" style="width: 25rem;">
                            <div class="traveling-box">
                                <h3>{{ $flight->flight_name }} </h3>
                                <p> {{ $flight->from }} - {{ $flight->to }}</p>
                                <p> {{ $flight->date }} , {{ $flight->time }}</p>
                                <h5>Seat Number: {{ $flight->seat_number }} </h5>
                                <h5>Rs. {{ $flight->price }} </h5>
                                <div class="read-more">
                                    <a href="{{ route('invoice.show', $flight->flight_id) }}">Show More</a>
                                    <a href="{{ route('rate.show', ['id' => $flight->flight_id]) }}">Rate</a>



                                </div>
                            </div>
                            <form id="analyzeEmotionForm">
                                @csrf
                                <input type="text" value="{{ $flight->flight_id }}" name="flightId" id="flightId"
                                    hidden>
                                <textarea id="text" name="text" rows="4" cols="50"></textarea><br>
                                <button type="button" id="analyzeButton">Analyze Emotion</button>
                            </form>

                            <div id="resultContainer" style="display: none;">
                                <h2>Emotion Analysis Result</h2>
                                <p><strong>Input Text:</strong> <span id="inputText"></span></p>
                                <p><strong>Output Emotion:</strong> <span id="outputEmotion"></span></p>
                            </div>


                            <script>
                                document.getElementById('analyzeButton').addEventListener('click', function() {
                                    var text = document.getElementById('text').value;
                                    var flightId = document.getElementById('flightId').value;
                                    console.log(flightId);

                                    // Perform AJAX request
                                    var xhr = new XMLHttpRequest();
                                    xhr.open('POST', '{{ route('analyzeEmotion') }}', true);
                                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                    xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

                                    xhr.onreadystatechange = function() {
                                        if (xhr.readyState === 4 && xhr.status === 200) {
                                            var response = JSON.parse(xhr.responseText);
                                            console.log(response.output_emotion);
                                            displayEmotionResult(text, response.output_emotion);


                                            // Send the data to your backend to save in the database
                                            saveEmotionDataToDatabase(text, response.output_emotion, flightId);
                                        }
                                    };

                                    xhr.send('text=' + encodeURIComponent(text));
                                });

                                function displayEmotionResult(inputText, outputEmotion) {
                                    var resultContainer = document.getElementById('resultContainer');
                                    var inputTextElement = document.getElementById('inputText');
                                    var outputEmotionElement = document.getElementById('outputEmotion');

                                    inputTextElement.textContent = inputText;

                                    // Display the sentiment scores
                                    outputEmotionElement.textContent = "Negative: " + outputEmotion.neg +
                                        ", Neutral: " + outputEmotion.neu +
                                        ", Positive: " + outputEmotion.pos +
                                        ", Compound: " + outputEmotion.compound;

                                    resultContainer.style.display = 'block';
                                }

                                function saveEmotionDataToDatabase(inputText, outputEmotion, flightId) {
                                    var xhr = new XMLHttpRequest();
                                    xhr.open('POST', '/saveEmotionData', true);
                                    xhr.setRequestHeader('Content-Type', 'application/json');
                                    xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

                                    xhr.onreadystatechange = function() {
                                        if (xhr.readyState === 4 && xhr.status === 200) {
                                            // Data has been saved in the database
                                        }
                                    };

                                    var data = {
                                        flightId: flightId,
                                        text: inputText,
                                        emotion: outputEmotion
                                    };

                                    xhr.send(JSON.stringify(data));
                                }
                            </script>
                @endforeach
            @endif
        </div>
    </div>

    <br><br>
    <h2>All flights before today</h2>
    <hr>
    <div class="row">
        @if (!empty($flight_before))
            @foreach ($flight_before as $flight)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="traveling-box">
                        <i><img src="images/plane-img.png" alt="icon" height="120px" width="150px" /></i>
                        <h3>{{ $flight->flight_name }} </h3>
                        <p> {{ $flight->from }} - {{ $flight->to }}</p>
                        <p> {{ $flight->date }} , {{ $flight->time }}</p>
                        <h5>Seat Number: {{ $flight->seat_number }} </h5>
                        <h5>Rs. {{ $flight->price }} </h5>
                        <div class="read-more">
                            <a href="{{ route('invoice.show', $flight->id) }}">{{ $flight->flight_name }}</a>
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
