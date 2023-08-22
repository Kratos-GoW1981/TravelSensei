<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TravelSensei</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href=" {{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }} ">
    <!-- Tweaks for older IEs-->
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }} ">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>TravelSensei</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }} ">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }} ">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/fevicon.png') }} " type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }} ">
    <!-- Tweaks for older IEs-->
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }} ">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <style>
        .hovertext {
            position: relative;
            border-bottom: 1px;
        }

        .hovertext:before {
            content: attr(data-hover);
            visibility: hidden;
            opacity: 0;
            width: 200px;
            height: 50px;
            background-color: white;
            color: #000;
            text-align: center;
            border-radius: 5px;
            padding: 5px 0;
            transition: opacity 1s ease-in-out;

            position: absolute;
            z-index: 1;
            left: 0;
            top: 110%;
        }

        .hovertext:hover:before {
            opacity: 1;
            visibility: visible;
        }
    </style>
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('images/loading.gif') }} " alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="header_white_section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header_information">
                                <ul>
                                    <li><img src="{{ asset('images/1.png') }} " alt="#" /> Kathmandu
                                        Nepal</li>
                                    <li><img src="{{ asset('images/2.png') }} " alt="#" /> +977 9868834696
                                    </li>
                                    <li><img src="{{ asset('images/3.png') }} " alt="#" /> travelsensei@gmail.com
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row" style="height: 90px">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo"> <a href="/home"><img src="{{ asset('images/logo.png') }} "
                                            alt="logo" height="200px" width="100px"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9" style="margin-left: 200px; margin-top:30px;">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class=""> <a href="/">Home</a> </li>
                                        <li><a href="/travel">Travel</a></li>
                                        <li><a href="/placetovisit">Place to visit</a></li>
                                        <li><a href="/calculateSimilarities">Similar Places</a></li>

                                        @guest
                                            @if (Route::has('login'))
                                                <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                            @endif

                                            @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                    <a class="dropdown-item" href="{{ route('history') }}">
                                                        History
                                                    </a>

                                                    @if (auth()->user()->is_admin == 1)
                                                        <a class="dropdown-item" href="/admin">
                                                            Dashboard
                                                        </a>
                                                    @endif

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <main class="">
        @yield('content')
    </main>
    <footer>
        <div id="contact" class="footer">
            {{-- <div class="container"> --}}
            {{-- <div class="row pdn-top-30">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <ul class="location_icon">
                            <li> <a href="#"><img src="{{ asset('icon/facebook.png') }}"></a></li>
                            <li> <a href="#"><img src="{{ asset('icon/Twitter.png') }}"></a></li>
                            <li> <a href="#"><img src="{{ asset('icon/linkedin.png') }}"></a></li>
                            <li> <a href="#"><img src="{{ asset('icon/instagram.png') }}"></a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="Follow">
                            <h3>CONTACT US</h3>
                            <span>Kalanki, <br>Kathmandu,<br>
                                Nepal<br>
                                +999 986862121</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="Follow">
                            <h3>ADDITIONAL LINKS</h3>
                            <ul class="link">
                                <li> <a href="#">About us</a></li>
                                <li> <a href="#">Terms and conditions</a></li>
                                <li> <a href="#"> Privacy policy</a></li>
                                <li> <a href="#">News</a></li>
                                <li> <a href="#"> Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="Follow">
                            <h3> Contact</h3>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <input class="Newsletter" placeholder="Name" type="text">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <input class="Newsletter" placeholder="Email" type="text">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" placeholder="comment" type="text">Comment</textarea>
                                </div>
                            </div>
                            <button class="Subscribe">Submit</button>
                        </div>
                    </div>
                </div> --}}
            <div class="copyright">
                <div class="container">
                    <p>Copyright 2023 All Right Reserved By <a href="#">Sanish Shrestha</a>
                    </p>
                </div>
            </div>
            {{-- </div> --}}
        </div>
    </footer>
    <!-- end footer -->

    <!-- Javascript files-->
    <script src="{{ asset('js/jquery.min.js') }} "></script>
    <script src="{{ asset('js/popper.min.js') }} "></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }} "></script>
    <script src="{{ asset('js/plugin.js') }} "></script>
    <!-- sidebar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }} "></script>
    <script src="{{ asset('js/custom.js') }} "></script>
    <!-- javascript -->
    <script src="{{ asset('js/owl.carousel.js') }} "></script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        })
    </script>

</body>

</html>


<style>
    .hovertext {
        position: relative;
        border-bottom: 1px;
    }

    .hovertext:before {
        content: attr(data-hover);
        visibility: hidden;
        opacity: 0;
        width: 200px;
        height: 50px;
        background-color: white;
        color: #000;
        text-align: center;
        border-radius: 5px;
        padding: 5px 0;
        transition: opacity 1s ease-in-out;

        position: absolute;
        z-index: 1;
        left: 0;
        top: 110%;
    }

    .hovertext:hover:before {
        opacity: 1;
        visibility: visible;
    }
</style>

<script>
    $(".nochange").click(function() {
        return false;
    });
</script>
