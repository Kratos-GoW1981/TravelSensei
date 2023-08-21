* @extends('layouts.dashboard')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<!-- form to edit flight -->
<div class="card">
        <div class="card-header">
            <h3>Edit Flight</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('flights.update', $flight->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="flight_name">Flight Name</label>
                    <input type="text" class="form-control" id="flight_name" name="flight_name" value="{{ $flight->flight_name }}">
                </div>
                <div class="form-group">
                    <label for="from">From</label>
                    <input type="text" class="form-control" id="from" name="from" value="{{ $flight->from }}">
                </div>
                <div class="form-group">
                    <label for="to">To</label>
                    <input type="text" class="form-control" id="to" name="to" value="{{ $flight->to }}">
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $flight->date }}">
                </div>
                <div class="form-group">
                    <label for="time">Time</label>
                    <input type="time" class="form-control" id="time" name="time" value="{{ $flight->time }}">
                </div>
                <div class="form-group">
                    <label for="total_seats">Total Seats</label>
                    <input type="number" class="form-control" id="total_seats" name="total_seats" value="{{ $flight->total_seats }}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $flight->price }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Flight</button>
            </form>
        </div>
        <!-- button to delete flight -->
        <div class="card-footer">
            <form action="{{ route('flights.destroy', $flight->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Flight</button>
            </form>
        </div>
</div>



@endsection