@extends('layouts.dashboard')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div id="travel" class="traveling">
                <div class="container">
            <center>
                  <div class="row">
                  <div class="col-md-12 ">
                        <div class="titlepage">
                        <span>Check All Recommended Places</span> 
                        <hr>
                        </div>
                  </div>
                  </div>
            </center>

            <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Nearest to</th>
      <th scope="col">Description</th>
      <th scope="col">Learn More</th>
    </tr>
  </thead>
  <tbody>
    @if(!empty($places))
    @foreach($places as $key => $place)
    <tr>
      <th scope="row">{{$place->id}}</th>
      <td><img src="{{$place->image}}" alt="icon" height="120px" width="150px"/></td>
      <td>{{$place->address}}</td>
      <td>{{$place->name}}</td>
      <td>{{$place->nearest_to}}</td>
      <td>{{$place->description}}</td>
      <td><a href="{{$place->link}}"> Learn more</a></td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
