@extends('layouts.app')

@section('content')
<h3>{{ $flight->flight_name }}</h3>
                        
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <label >From</label>
                    <input class="form-control" value="{{ $flight->from }}" type="text" name="">
                </div>
        
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <label >To (Destination)</label>
                    <input class="form-control" value="{{ $flight->to }}" type="text" name="Any">
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <label >Date</label>
                    <input class="form-control" value="{{ $flight->date }}" placeholder="00.0" type="text" name="00.0">
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <label >Time</label>
                    <input class="form-control"value="{{ $flight->time }}" placeholder="Any" type="text" name="Any">
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <label >Total Seat</label>
                    <input class="form-control" value="{{ $flight->total_seats }}" placeholder="Any" type="text" name="Any">
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <label >Price per Seat</label>
                    <input class="form-control"value="{{ $flight->price }}" placeholder="00.0" type="text" name="00.0">
                </div>
            </div>
        </div>

        <div class="card-footer">
        
        </div>
    </div>
                            
<form action="{{ route('flights.book', $flight->id) }}" method="post">
 @csrf
<div class="form-group">
    <label for="seat_number">Seat Number</label>
    <input type="text" class="form-control" id="seat_number" name="seat_number" placeholder="Seat Number">
</div>
                                        
                                        
     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
        <button type="submit" class="btn btn-primary">Book Seat</button>
    </div>
</form>
@endsection