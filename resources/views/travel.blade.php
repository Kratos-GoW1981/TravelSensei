@extends('layouts.app')

@section('content')
    <div id="blog" class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Recommended Place for you</h2>
                        <span>Here are some of the recommended places fro you according to your destination.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($places as $p)
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="blog-box">
                            <figure><img src="{{ $p->image }}" alt="#" height="200px" width="600px" />
                                <span>{{ $p->address }}</span>
                            </figure>
                            <div class="travel">
                                <span>{{ $p->name }} : Nearest to {{ $p->nearest_to }}</span>
                                <a href="{{ $p->map }}">
                                    <p><strong class="Comment"> See</strong> Direction</p>
                                </a>
                                <a href="{{ $p->link }}">
                                    <p><strong class="Comment"> Learn More </strong> about {{ $p->address }}</p>
                                </a>
                            </div>
                            <h3>Know more about {{ $p->address }} </h3>
                            <p>{{ $p->description }}...<a href="{{ $p->link }}">more</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
