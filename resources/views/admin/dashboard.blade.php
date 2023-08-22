@extends('layouts.dashboard')

@section('content')
<br>
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add a Flight</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<!-- create a form to insert flight data -->
                    <form action="{{ route('flights.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="total_seats">Total Seats</label>
                            <input type="number" class="form-control" id="total_seats" name="total_seats" placeholder="Total Seats" min="0">
                        </div>
                        <div class="form-group">
                            <label for="time">Time</label>
                            <input type="time" class="form-control" id="time" name="time" placeholder="Time">
                        </div>
<!-- flight name -->
                        <div class="form-group">
                            <label for="flight_name">Flight Name</label>
                            <input type="text" class="form-control" id="flight_name" name="flight_name" placeholder="Flight Name">  

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="Date">
                        </div>
                        <div class="form-group">
                            <label for="from">From</label>
                            <input type="text" class="form-control" id="from" name="from" placeholder="From">
                        </div>
                        <div class="form-group">
                            <label for="to">To</label>
                            <input type="text" class="form-control" id="to" name="to" placeholder="To">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" min="0">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>

<script language="javascript">
    //date
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();
  
    today = yyyy + '-' + mm + '-' + dd;
    $('#date').attr('min',today);
  
  </script>
@endsection
