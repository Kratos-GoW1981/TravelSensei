@extends('layouts.app')

@section('content')
    <section>
        <div class="banner-main">
            <img src="images/banner.jpg" alt="#" />

            <div class="container">
                <div class="text-bg">
                    <h1><strong class="white">Find your flight</strong></h1>
                    <form action="/search/flights" method="post">
                        @csrf
                        <h4><strong class="white">From: </strong><input type="text" name="from" required>
                            <strong class="white">To: </strong><input type="text" name="to" required>
                            <div class="button_section"> <button class="main_bt" type="submit"
                                    href="#">Search</button> </div>
                            <!-- <button type="submit">search</button> -->
                        </h4>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage">
                        <h2>About  travel Sensei</h2>
                        <span> Here are some of the important introduction about the travelsensei. Read it carefully and
                            know about us.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="about-box">
                            <p> <span>The world is growing at a very fast pace with high level of technological
                                    advancements. Globalization is now reaching to almost every corner of the world at a
                                    very rapid rate. In today’s airline industry users or customers can reserve seat or book
                                    flight from any place in the world as long as they are connected to internet.
                                    The Travel and Tour System is an innovative project designed to provide efficient and
                                    streamlined solutions for managing flights and organizing tours. </span></p>
                            <div class="palne-img-area">
                                <img src="images/plane-img.png" alt="images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/home">Read More</a>
        </div>
    </div>
    <!-- end about -->
@endsection
