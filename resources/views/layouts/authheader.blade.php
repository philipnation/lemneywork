<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lemney</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">

    <!-- Styles -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <!-- Swiper -->
    <link rel="stylesheet" href="{{ asset('assets/node_modules/swiper/swiper-bundle.min.css') }}">

    <!-- Scripts -->

    <!-- JQuery -->
    <script src="{{ asset('assets/node_modules/jquery/dist/jquery.min.js') }}" defer></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}" defer></script>
    <!-- Swiper -->
    <script src="{{ asset('assets/node_modules/swiper/swiper-bundle.min.js') }}" defer></script>

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">

    <!-- Custom scripts -->
    <script src="{{ asset('assets/js/index.js') }}" defer></script>

</head>

<body>
    <!-- Header -->
    <header>

        <!-- NavBar -->
        <nav
            class="lemney-navbar bg-lemney-primary-gradient navbar navbar-dark navbar-expand-lg px-3 px-md-5 shadow-sm">
            <div class="container-fluid d-flex justify-content-between">
                <!-- Brand -->
                <a class="navbar-brand text-start d-flex align-items-center" href="#">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Lemney Brand Logo" class="img-fluid" width="48">
                </a>
                <div class="order-md-last d-flex align-items-center justify-content-center">
                    <!-- NavBar icons -->
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        {{-- <button type="button" class="btn"><i class="fa fa-search text-white"></i></button> --}}
                        @auth

                        <button type="button" class="btn"><a href="{{ route('logout') }}"><i class="fa fa-power-off text-white"></i></a></button>
                        <button type="button" class="btn"><a href="{{ route('dashboard') }}"><i class="fa fa-user text-white"></i></a></button>

                        @else

                        <button type="button" class="btn"><a href="{{ route('login') }}" class="text-white text-decoration-none">Sign in</a></button>
                        <button type="button" class="btn"><a href="{{ route('register') }}" class="text-white text-decoration-none">Sign up</a></button>
                        @endauth

                    </div>
                    <!-- Toggle button -->
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <!-- NavBar menu -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 gap-xl-3">
                        <!-- Honey Order -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('user.honey') }}">Honey Order</a>
                        </li>
                        <!-- Logistics -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('user.logistics') }}">Logistics</a>
                        </li>
                        <!-- Home Service -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Home Service
                            </a>
                            <ul class="dropdown-menu shadow">
                                <li><a class="dropdown-item" href="{{ route('user.honey') }}">Honey Sale</a></li>
                                <li><a class="dropdown-item" href="{{ route('user.logistics') }}">Logistics</a></li>
                                <li><a class="dropdown-item" href="{{ route('user.homeservice') }}">Home Service</a></li>
                                {{-- <li><a class="dropdown-item" href="#">Consultancy</a></li> --}}
                            </ul>
                        </li>
                        <!-- Housing -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('user.houselisting') }}">Housing</a>
                        </li>
                        <!-- Support -->
                        <!--<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Support
                            </a>
                            <ul class="dropdown-menu shadow dropdown-menu-end bg-lemney-primary-2">
                                <li><a class="dropdown-item" href="#">Track Order</a></li>
                                <li><a class="dropdown-item" href="#">Shipping and Delivery</a></li>
                            </ul>
                        </li>-->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
