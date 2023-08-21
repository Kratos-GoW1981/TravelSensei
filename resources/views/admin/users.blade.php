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
                        <span>All Registered Users</span> 
                        <hr>
                        </div>
                  </div>
                  </div>
            </center>


            <table class="table table-bordered">
  <thead>
    <center>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
    </tr>
</center>
  </thead>
  <tbody>
    @if(!empty($users))
    @foreach($users as $key => $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->is_admin==0?'user':'admin'}} &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
      <td><a href="/admin/user/status">change</a></td>
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
