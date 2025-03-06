@include('layouts.authheader')
    <!-- Body -->
    <main>

        @include('layouts.user.sidebar')

            <!-- Main content -->
            <div class="flex-grow-1">

                <!-- Title -->
                <div class="border-bottom d-flex p-3">
                    <!-- Toggle (mobile) sidebar -->
                    <a class="btn border-0 px-0 me-3 d-md-none" data-bs-toggle="offcanvas" href="#offcanvasExample"
                        role="button" aria-controls="offcanvasExample">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="d-flex align-items-center justify-content-between flex-grow-1 px-2 text-muted">
                        <span><a href="" class="link text-dark-50"><b>All Orders</b></a></span>
                        <!--<span><a href="" class="link">Completed</a></span>
                        <span><a href="" class="link">Cancelled</a></span>
                        <span><a href="" class="link">Ongoing</a></span>-->
                    </div>
                </div>

                <!-- Dashboard -->
                <div class="p-3 p-md-4">

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @elseif (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif


                    @foreach ($honeyhistory as $honeyhi)
                    <!-- First Order -->
                    <div class="bg-lemney-secondary rounded-3 p-3 my-3">
                        <!-- Order Information -->
                        <div class="py-2 d-flex align-items-center justify-content-between">
                            <div>
                                <div><b>Order Date: </b>{{ $honeyhi->date }}</div>
                                <div><b>Order Number: </b>{{ $honeyhi->orderno }}</div>
                            </div>
                            <div class="text-end">
                                <span
                                    class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">{{ $honeyhi->status }}</span><br>
                                <div class="d-md-none"><b>Price: </b><span class="text-uppercase">NGN {{ number_format($honeyhi->price, 2) }}</span>
                                </div>
                            </div>
                        </div>
                        <!-- Order Details -->
                        <div class="py-2 d-flex align-content-center justify-content-between text-center">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/order_img_natural_honey.png') }}" alt="" class="img-fluid">
                                <div class="ps-1">
                                    <b>Natural Honey</b> <br>
                                    <span>{{ $honeyhi->quantity_type }}</span>
                                </div>
                            </div>
                            <div>
                                <b>QTY</b><br>
                                <span class="">{{ $honeyhi->quantity }} litres</span>
                            </div>
                            <div class="d-none d-md-block">
                                <b>Price</b><br>
                                <span class="text-uppercase">NGN {{ number_format($honeyhi->price, 2) }}</span>
                            </div>
                            <div>
                                <b>Delivery</b><br>
                                <span class="text-uppercase">1 DAY</span>
                            </div>
                        </div>
                        <!--  -->
                        <div class="d-flex align-items-center justify-content-end">
                            <button data-bs-toggle="modal" data-bs-target="#confirmationModal"
                                class="btn btn-lemney-outline-primary fw-bold d-inline-block">Cancel
                                Order</button>

                            <!-- Cancel Order Confirmation Modal -->
                            <div class="modal fade" id="confirmationModal" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="Cancel Order Confirmation Modal"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered mx-auto rounded-3"
                                    style="max-width: 360px;">
                                    <div class="modal-content p-3">
                                        <div class="text-center fw-bold">
                                            <p class="mb-4">Are you sure you want to cancel your order?</p>

                                            <div class="d-flex align-items-center justify-content-between mt-4">
                                                <button class="btn btn-lemney-primary fw-bold px-5"><a href="{{ route('user.orderhistory.destroy', $honeyhi->id) }}" class="text-white text-decoration-none">Yes</a></button>
                                                <button class="btn btn-lemney-outline-primary fw-bold px-5"
                                                    data-bs-dismiss="modal">No</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                    @foreach ($homeservicehistory as $homeservices)
                    <!-- Second Order -->
                    <div class="bg-lemney-secondary rounded-3 p-3 my-3">
                        <!-- Order Information -->
                        <div class="py-2 d-flex align-items-center justify-content-between">
                            <div>
                                <div><b>Order Number: </b>{{ $homeservices->orderno }}</div>
                                <div><b>Dispatch Date: </b>11-11-2024</div>
                                <div><b>Delivery Date: </b>11-11-2024</div>
                            </div>
                            <div class="text-end">
                                <span class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">
                                    <img src="{{ asset('assets/img/package_check.svg') }}" alt="">
                                    {{ $homeservices->status }}
                                </span><br>
                                <div><b>Cost: </b><span class="text-uppercase">NGN 17,000</span></div>
                            </div>
                        </div>
                        <!-- Order timeline -->
                        <div class="order-timeline">
                            <div class="order-timeline-item">
                                <h5>Approval & Pick up</h5>
                                <div>
                                    <div class="text-muted">No. 6 Street Awka, Anambra</div>
                                    <div class="text-muted">11-11-2024 8:00am</div>
                                </div>
                            </div>
                            <div class="order-timeline-item">
                                <h5>In Transit</h5>
                                <div>
                                    <div class="text-muted">No. 6 Street Awka, Anambra</div>
                                    <div class="text-muted">11-11-2024 8:00am</div>
                                </div>
                            </div>
                            <div class="order-timeline-item">
                                <h5>Delivered</h5>
                                <div>
                                    <div class="text-muted">No. 6 Street Awka, Anambra</div>
                                    <div class="text-muted">11-11-2024 8:00am</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach


                    @foreach ($homeservicehistory as $homeservices)
                    <!-- Second Order -->
                    <div class="bg-lemney-secondary rounded-3 p-3 my-3">
                        <!-- Order Information -->
                        <div class="py-2 d-flex align-items-center justify-content-between">
                            <div>
                                <div><b>Order Number: </b>{{ $homeservices->orderno }}</div>
                                <div><b>Dispatch Date: </b>11-11-2024</div>
                                <div><b>Delivery Date: </b>11-11-2024</div>
                            </div>
                            <div class="text-end">
                                <span class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">
                                    <img src="{{ asset('assets/img/package_check.svg') }}" alt="">
                                    {{ $homeservices->status }}
                                </span><br>
                                <div><b>Cost: </b><span class="text-uppercase">NGN 17,000</span></div>
                            </div>
                        </div>
                        <!-- Order timeline -->
                        <div class="order-timeline">
                            <div class="order-timeline-item">
                                <h5>Approval & Pick up</h5>
                                <div>
                                    <div class="text-muted">No. 6 Street Awka, Anambra</div>
                                    <div class="text-muted">11-11-2024 8:00am</div>
                                </div>
                            </div>
                            <div class="order-timeline-item">
                                <h5>In Transit</h5>
                                <div>
                                    <div class="text-muted">No. 6 Street Awka, Anambra</div>
                                    <div class="text-muted">11-11-2024 8:00am</div>
                                </div>
                            </div>
                            <div class="order-timeline-item">
                                <h5>Delivered</h5>
                                <div>
                                    <div class="text-muted">No. 6 Street Awka, Anambra</div>
                                    <div class="text-muted">11-11-2024 8:00am</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </main>

@include('layouts.authfooter')
