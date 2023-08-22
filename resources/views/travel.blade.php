@extends('layouts.app')

@section('content')
    <div id="blog" class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Recommended Place for you</h2>
                        <span>Here are some of the recommended places for you according to your destination.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($places as $p)
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="blog-box">
                            <figure>
                                <img src="{{ $p->image }}" alt="{{ $p->address }}" height="200" width="500">
                                <span>{{ $p->address }}</span>
                            </figure>
                            
                            <div class="travel">
                                <span>{{ $p->name }} : Nearest to {{ $p->nearest_to }}</span>
                                <a href="{{ $p->map }}">See Direction</a>
                                <a href="{{ $p->link }}">Learn More about {{ $p->address }}</a>
                            </div>
                            <h3>Know more about {{ $p->address }}</h3>
                            <p>{{ $p->description }}... <a href="{{ $p->link }}">more</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        
        .blog-box {
            max-width: 600px;
            margin: auto;
            background-color: white;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        
        .blog-box figure {
            position: relative;
            margin: 0;
            overflow: hidden;
        }
        
        .blog-box figure img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .blog-box figure span {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
        }
        
        .travel {
            margin-top: 15px;
            color: #555;
        }
        
        .travel span {
            display: block;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .travel a {
            color: #3498db;
            text-decoration: none;
            display: inline-block;
            margin-right: 10px;
            font-weight: bold;
            transition: color 0.3s;
        }
        
        .travel a:hover {
            color: #1e87b9;
        }
        
        h3 {
            font-size: 22px;
            margin-top: 15px;
        }
        
        p {
            color: #777;
            margin-top: 10px;
            line-height: 1.5;
        }
        
        p a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }
        
        p a:hover {
            color: #1e87b9;
        }
    </style>
@endsection
