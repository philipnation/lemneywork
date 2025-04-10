<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Lemney Logistics</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">

    <!-- Styles -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}"> --}}
    <!-- Swiper -->
    <link rel="stylesheet" href="{{ asset('assets/node_modules/swiper/swiper-bundle.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/> --}}


    <!-- Scripts -->

    <!-- JQuery -->
    <script src="{{ asset('assets/node_modules/jquery/dist/jquery.min.js') }}" defer></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}" defer></script>
    <!-- Swiper -->
    <script src="{{ asset('assets/node_modules/swiper/swiper-bundle.min.js') }}" defer></script>

    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">


</head>

<body>
    <!-- Header -->
    <header>

        <!-- NavBar -->

    </header>
<!-- Body -->
<main>


    <!--  -->
    <div class="d-md-flex">

        <!-- Side bar (desktop) -->
        <div class="sidebar-container border-end border-2 py-3 d-none d-md-block">

            <!--  -->
            <div class="px-4 mb-4">
                <h2 class="fs-4 py-2 my-2 text-uppercase fw-bold text-lemney-primary">
                    <a href="/" class="link py-2">Lemney IO</a>
                </h2>
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-dark-subtle rounded-2 position-relative d-flex align-items-center justify-content-center"
                        style="width: 48px; height: 48px;">
                        <!-- <img src="../../../assets/img/salon_styled_hair.png" alt="Admin Profile Picture" width="64" height="64" class="rounded-2"> -->
                        <span>
                            <i class="fa fs-5 lh-base fa-user"></i>
                        </span>
                        <span
                            class="position-absolute top-100 start-100 translate-middle p-2 bg-success rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </div>
                    <button class="btn btn-lemney-primary" style="width: 48px; height: 48px">
                        <i class="fa fa-bell"></i>
                    </button>

                </div>
            </div>

            <!-- Sidebar Menu Options -->
            <ul class="sidebar-menu-list list-group list-group-flush">
                <li><a href="{{ route('admin.index') }}" class="list-group-item list-group-item-action p-3">Dashboard</a></li>
                <li><a href="{{ route('admin.honey') }}" class="list-group-item list-group-item-action p-3">Honey Orders</a>
                </li>

                <li><a href="{{ route('admin.logistics') }}" class="list-group-item list-group-item-action p-3">Logistics</a></li>
                <li><a href="{{ route('admin.homeservice') }}" class="list-group-item list-group-item-action p-3">Home
                        Service</a>
                </li>
                <!--<li><a href="./booked_service.html" class="list-group-item list-group-item-action">Booked
                        Services</a></li>-->
                <!--<li><a href="./support.html"
                        class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
                        Support
                        <i class="fa fa-unlock-alt"></i>
                    </a></li>
                <li>-->
                    <li><a href="{{ route('admin.service') }}" class="list-group-item list-group-item-action">Services</a></li>

                    <a href="{{ route('admin.homeservice') }}"
                        class="list-group-item list-group-item-action p-3 d-flex align-items-center justify-content-between">
                        Service Agent
                        <i class="fa fa-unlock-alt"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.houselisting') }}"
                        class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">House
                        Listing
                        Approval
                        <i class="fa fa-unlock-alt"></i>
                    </a>
                </li>
            </ul>

            <!--  -->
            <div class="position-sticky sticky-bottom bg-white border-top border-2 ps-3 py-2">
                {{-- <button class="btn btn-lemney text-danger"> --}}
                    <i class="fa fa-sign-out me-2"></i>
                    <a href="{{ route('logout') }}" class="text-danger text-decoration-none">
                        Logout
                    </a>
                {{-- </button> --}}
            </div>

        </div>

        <!-- Side bar (mobile) -->
        <div class="d-md-none">
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h2 class="fs-4 px-2 my-2 text-uppercase fw-bold text-lemney-primary">
                        <a href="/" class="link py-2">Lemney IO</a>
                    </h2>
                    <button type="button" class="btn btn-lemney btn-close p-2 shadow-none"
                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body p-0 my-0">

                    <!-- Sidebar Menu Options -->
                    <ul class="sidebar-menu-list list-unstyled list-group list-group-flush">
                        <li><a href="{{ route('admin.index') }}" class="list-group-item list-group-item-action">Dashboard</a></li>
                        <!--<li><a href="./pending_orders.html" class="list-group-item list-group-item-action">Pending
                                Orders</a></li>-->
                        <li><a href="{{ route('admin.honey') }}" class="list-group-item list-group-item-action">Honey
                                Orders</a>
                        </li>
                        <li><a href="{{ route('admin.logistics') }}" class="list-group-item list-group-item-action">Logistics</a>
                        </li>
                        <li><a href="{{ route('admin.homeservice') }}" class="list-group-item list-group-item-action">Home
                                Service</a>
                        </li>
                        <li><a href="./booked_service.html" class="list-group-item list-group-item-action">Booked
                                Services</a></li>
                        <li><a href="./support.html"
                                class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
                                Support
                                <i class="fa fa-unlock-alt"></i>
                            </a></li>

                            <li><a href="{{ route('admin.service') }}" class="list-group-item list-group-item-action">Services</a></li>
                        <li>
                            <a href="{{ route('admin.serviceagent') }}"
                                class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
                                Service Agent
                                <i class="fa fa-unlock-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.houselisting') }}"
                                class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">House
                                Listing
                                Approval
                                <i class="fa fa-unlock-alt"></i>
                            </a>
                        </li>
                    </ul>

                </div>

                <!--  -->
                <div class="position-sticky sticky-bottom bg-white border-top ps-3 py-2">
                    {{-- <button class="btn btn-lemney text-danger"> --}}
                        <i class="fa fa-sign-out me-2"></i>
                        <a href="{{ route('logout') }}" class="text-danger text-decoration-none">
                        Logout
                        </a>
                    {{-- </button> --}}
                </div>

            </div>
        </div>
