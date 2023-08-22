@extends('layouts.app')

@section('content')


<script src="https://js.stripe.com/v3/"></script>

    @if (!empty($flight))


        <form action="/flights/{{ $flight->id }}/book" method="post">
            @csrf

            <table class="table">
                <thead>
                    <tr>
                        <th style="width:400px; height:400px;
                ]padding:50px">
                            <div class="traveling-box">
                                <i><img src="{{ asset('images/plane-img.png') }}" alt="flight"
                                        style="min: height 180px" /></i>
                                <h3>{{ $flight->flight_name }}</h3>
                                <p>{{ $flight->from }} - {{ $flight->to }}</p>
                                <p> {{ $flight->date }} , {{ $flight->time }}</p>
                                <h5>Seat Number: {{ $flight->seat_number }} </h5>
                                <p> Total Seat : {{ $flight->total_seats }}</p>
                                <h5>Rs. {{ $flight->price }} </h5>
                                <div class="read-more">
                                    @if (auth()->user()->is_admin == 1)
                                        <a href="{{ route('flights.edit', $flight->id) }}">Edit Flight</a>
                                    @endif
                                </div>
                            </div>
                        </th>
                        <th style="width:400px; height:400px; padding:50px">
                            @if (!empty($flight))
                            <form action="/flights/{{ $flight->id }}/book" method="post">
                                seats:<span class="seats"></span>
                                <br>
                                total:<span class="total"></span>
                                <br>
                                @foreach ($seat as $key => $s)
                                    @if ($key % 4 == 0)
                                    @endif
                                    <span
                                        style="margin: 7px; padding: 7px; display: inline-block; {{ $s->status == 1 ? 'background-color:red' : 'background-color:green' }}">
                                        <input type="checkbox"
                                            style="height: 30px; width: 30px;"
                                            name="seat[]" value="{{ $s->seat_number }}"
                                            @if ($s->status == 1) class="hovertext" onclick="return false;" disabled="disabled" @endif
                                            data-hover=" @if (auth()->user()->is_admin == 1) @if (($user = App\Models\User::where('id', $s->user_id)->get()->first()) != null)
                            {{ $user->name }}
                            {{ $user->email }} @endif
                            @endif">
                                        <br>
                                        {{ $key + 1 }}
                                    </span>
                                @endforeach
                            </form>
                            
                            
                            @endif
                        </th>




                        <th>

                            <div class="card2">
                                <p class="h8 py-3">Payment Details</p>

                                <div class="row gx-3">

                                    <div class="col-12">
                                        <div class="d-flex flex-column">
                                            <p class="text mb-1">Person Name</p>
                                            <input class="form-control mb-3" type="text" placeholder="Name"
                                                value="{{ auth()->user()->name }}" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex flex-column">
                                            <p class="text mb-1">Card Number</p>
                                            <input id="cardNumber" class="form-control mb-3" type="number" placeholder="1234 5678 435678" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="d-flex flex-column">
                                            <p class="text mb-1">Expiry</p>
                                            <input  id="expiry" class="form-control mb-3" type="date" placeholder="MM/YYYY"  min="{{ date('Y-m-d') }}" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="d-flex flex-column">
                                            <p class="text mb-1">CVV/CVC</p>
                                            <input class="form-control mb-3 pt-2 " type="password" placeholder="***" required maxlength="3">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button  id="payButton"class=" btn btn-success btn-lg" type="submit "
                                            style="margin-top: 140px;">Pay:<span class="total"></span>
                                        </button>

                                    </div>
                                </div>
                            </div>
                            </div>

                        </th>


                    </tr>
                </thead>
            </table>           
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const payButton = document.getElementById('payButton');
                    payButton.addEventListener('click', async function() {
                        // Get the input values
                        const cardNumberInput = document.getElementById('cardNumber');
                        const expiryInput = document.getElementById('expiry');
            
                        // Validate the inputs
                        if (!cardNumberInput.value || !expiryInput.value) {
                            // Inputs are empty, show an error message
                            swal({
                                title: "Validation Error",
                                text: "Please fill in all required fields.",
                                icon: "error",
                                button: "OK",
                            });
                            return; // Exit the function
                        }
            
                        // Simulate payment success (you should replace this with your actual payment logic)
                        const paymentSuccessful = true; // Set this to true if payment is successful
            
                        if (paymentSuccessful) {
                            // Payment succeeded, show success message
                            swal({
                                title: "Congratulations!",
                                text: "Your payment has been made successfully",
                                icon: "success",
                                button: "Back",
                            });
                        } else {
                            // Payment failed, show error message
                            swal({
                                title: "Payment Error",
                                text: "An error occurred during payment. Please try again.",
                                icon: "error",
                                button: "OK",
                            });
                        }
                    });
                });
            </script>


            
            
    @endif
    <!-- @if (!empty($flight))

                                                                                                                                                                                                                                                                                                                                                        <form action="/flights/{{ $flight->id }}/book" method = "post">
                                                                                                                                                                                                                                                                                                                                                            <div class="container">
                                                                                                                                                                                                                                                                                                                                                                <div class="row d-flex flex-row">
                                                                                                                                                                                                                                                                                                                                                                    <div class="col-5">
                                                                                                                                                                                                                                                                                                                                                                        <div class="card">
                                                                                                                                                                                                                                                                                                                                                                             <div class="card-header">
                                                                                                                                                                                                                                                                                                                                                                                <h3>{{ $flight->flight_name }}</h3>

                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                            <div class="card-body">
                                                                                                                                                                                                                                                                                                                                                                                <p>Origin   :{{ $flight->from }} </p>
                                                                                                                                                                                                                                                                                                                                                                                <p>Destination :{{ $flight->to }}</p>
                                                                                                                                                                                                                                                                                                                                                                                <p>Date :{{ $flight->date }}</p>
                                                                                                                                                                                                                                                                                                                                                                                <p>Time :{{ $flight->time }}</p>
                                                                                                                                                                                                                                                                                                                                                                                <p>Total Seats :{{ $flight->total_seats }}</p>
                                                                                                                                                                                                                                                                                                                                                                                <p>Price per Seat :{{ $flight->price }}</p>

                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                            <center>
                                                                                                                                                                                                                                                                                                                                                                        <div class="card-body"><table style="margin:200px;margin-top:0;">


                                                                                                                                                                                                                                                                                                                                                                            seats:<span class="seats"></span>
                                                                                                                                                                                                                                                                                                                                                                                <br>
                                                                                                                                                                                                                                                                                                                                                                            total:<span class="total"></span>
                                                                                                                                                                                                                                                                                                                                                                                <br>

                                                                                                                                                                                                                                                                                                                                                                            <tr>





                                                                                                                                                                                                                                                                                                                                                                            @foreach ($seat as $key => $s)
    <td>
                                                                                                                                                                                                                                                                                                                                                                                @if ($key % 4 == 0)
    </td>
                                                                                                                                                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                <tr>
                                                                                                                                                                                                                                                                                                                                                                                    <td>
    @endif
                                                                                                                                                                                                                                                                                                                                                                                        <span style=" margin:7px;padding:7px;display:inline-block;
                                {{ $s->status == 1 ? 'background-color:red' : 'background-color:green' }}">
                                                                                                                                                                                                                                                                                                                                                                                        <input type="checkbox" style=" height: 30px;
                                width: 30px;"
                                                                                                                                                                                                                                                                                                                                                                                        name ="seat[]" value="{{ $s->seat_number }}"
                                                                                                                                                                                                                                                                                                                                                                                        @if ($s->status == 1) onclick="return false;" disabled="disabled" @endif  >
                                                                                                                                                                                                                                                                                                                                                                                    </span>

                                                                                                                                                                                                                                                                                                                                                                            </td>
    @endforeach
                                                                                                                                                                                                                                                                                                                                                                            </tr>


                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                    </center>
                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                        </form>






                                                                                                                                                                                                                                                                                                                                                        @endif -->


    <script>
        var bcount = 0;
        var price = {{ $flight->price }};
        $(document).ready(function() {
            $(".card2").hide();

            $('input:checkbox').on('change', function() {
                var $el = $(this);
                if ($el.prop('checked')) {
                    $el.addClass('checked');
                    bcount++;
                } else {
                    $el.removeClass('checked');
                    bcount--;
                }
                $('.seats').html(bcount);
                $('.total').html(bcount * price);
                $(".card2").show();
                if (bcount == 0) {
                    $(".card2").hide();

                }
            });
        });
    </script>



    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');





        .card2 {
            max-width: 500px;
            color: black;
            border-radius: 20 px;
        }

        p {
            margin: 0px;
        }

        .container .h8 {
            font-size: 30px;
            font-weight: 800;
            text-align: center;
        }

        .btn.btn-primary {
            width: 100%;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 15px;
            background-image: linear-gradient(to right, #77A1D3 0%, #79CBCA 51%, #77A1D3 100%);
            border: none;
            transition: 0.5s;
            background-size: 200% auto;

        }


        .btn.btn.btn-primary:hover {
            background-position: right center;
            color: #fff;
            text-decoration: none;
        }



        .btn.btn-primary:hover .fas.fa-arrow-right {
            transform: translate(15px);
            transition: transform 0.2s ease-in;
        }

        .form-control {
            color: white;
            background-color: #223C60;
            border: 2px solid transparent;
            height: 60px;
            padding-left: 20px;
            vertical-align: right;
        }

        .form-control:focus {
            color: white;
            background-color: #0C4160;
            border: 2px solid #2d4dda;
            box-shadow: none;
        }

        .text {
            font-size: 14px;
            font-weight: 600;
        }

        ::placeholder {
            font-size: 14px;
            font-weight: 600;
        }
    </style>
@endsection
