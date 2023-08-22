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

                            <form action="/add/places" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Name : </label>
                                    <input type="text" name="name" class="form-control" id="formGroupExampleInput"
                                        placeholder="Name of the city" required>
                                </div>

                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Nearest To : </label>
                                    <input type="text" name="nearest_to" class="form-control" id="formGroupExampleInput2"
                                        placeholder="Location Nearest to destination" required>
                                </div>

                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Address : </label>
                                    <input type="text" name="address" class="form-control" id="formGroupExampleInput2"
                                        placeholder="Address for recommendation" required>
                                </div>

                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Description : </label>
                                    <input type="text" name="description" class="form-control"
                                        id="formGroupExampleInput2" placeholder="Description about location" required>
                                </div>

                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Link : </label>
                                    <input type="text" name="link" class="form-control" id="formGroupExampleInput2"
                                        placeholder="Link for the Location" required>
                                </div>

                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Image URL : </label>
                                    <input type="text" name="image" class="form-control" id="formGroupExampleInput2"
                                        placeholder="Image URL of the location" required>
                                </div>

                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Map of Location : </label>
                                    <input type="text" name="map" class="form-control" id="formGroupExampleInput2"
                                        placeholder="Map for the Location" required>
                                </div>
                                <button class="btn btn-danger" type="submit">submit</button>
                            </form>
                        @endsection
