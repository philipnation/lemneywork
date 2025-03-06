@include('layouts.authheader')

    <!-- Body -->
    <main>

        @include('layouts.user.sidebar')

            <!-- Main content -->
            <div class="flex-grow-1">

                <!-- Tabs -->
                <ul class="nav nav-pills p-3 d-flex align-items-center justify-content-between border-bottom" id="myTab"
                    role="tablist">

                    <!-- Place Orders Tab -->
                    <li class="nav-item">
                        <button class="nav-link active" id="place-orders-tab" data-bs-toggle="tab"
                            data-bs-target="#place-orders-tab-pane" type="button" role="tab">Place Orders</button>
                    </li>

                    <!-- Completed Tab -->
                    <li class="nav-item">
                        <button class="nav-link" id="completed-tab" data-bs-toggle="tab"
                            data-bs-target="#completed-tab-pane" type="button">Completed</button>
                    </li>

                    <!-- Cancelled Tab -->
                    <li class="nav-item">
                        <button class="nav-link" id="cancelled-tab" data-bs-toggle="tab"
                            data-bs-target="#cancelled-tab-pane" type="button">Cancelled</button>
                    </li>

                    <!-- Ongoing Tab -->
                    <li class="nav-item">
                        <button class="nav-link" id="ongoing-tab" data-bs-toggle="tab"
                            data-bs-target="#ongoing-tab-pane" type="button">Ongoing</button>
                    </li>
                </ul>

                <!-- Tabs Content -->
                <div class="tab-content p-3" id="myTabContent">

                    <!-- Place Orders Tab Content -->
                    <div class="tab-pane fade show active" id="place-orders-tab-pane" role="tabpanel">

                        <!-- Home Service Form -->
                        <div class="row">

                            <div class="col-5 order-last d-none d-md-block">
                                <img src="../../assets/img/teddy_bear_honey.png" alt="" srcset="" class="img-fluid">
                            </div>

                            <div class="col-12 col-md-7">

                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @elseif (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <!--  -->
                                <form action="{{ route('user.homeservice.store') }}" method="post">
                                    @csrf

                                    <!-- Recipient full name -->
                                    <div class="my-2">
                                        <label for="fullname" class="form-label fw-semibold">Receipient Full Name</label>
                                        <input type="text" name="fullname" id="fullname" class="form-control" required>
                                    </div>

                                    <!-- Service Location -->
                                    <div class="my-2">
                                        <label for="location" class="form-label fw-semibold">Service Location</label>
                                        <select name="location" id="location" class="form-select" required>
                                            <option value="location1" selected>Location 1</option>
                                            <option value="location2">Location 2</option>
                                            <option value="location3">Location 3</option>
                                            <option value="location4">Location 4</option>
                                            <option value="location5">Location 5</option>
                                        </select>
                                    </div>

                                    <!-- Phone Number -->
                                    <div class="my-2">
                                        <label for="phone" class="form-label fw-semibold">Phone Number</label>
                                        <input type="text" name="phone" id="phone" class="form-control" required>
                                    </div>

                                    <!-- Recipient State -->
                                    <div class="my-2">
                                        <label for="state" class="form-label fw-semibold">Recipient State</label>
                                        <select name="state" id="state" class="form-select" required>
                                            <option value="state1">State 1</option>
                                            <option value="state2">State 2</option>
                                            <option value="state3">State 3</option>
                                            <option value="state4">State 4</option>
                                            <option value="state5">State 5</option>
                                        </select>
                                    </div>

                                    <!-- Recipient Local Government -->
                                    <div class="my-2">
                                        <label for="lga" class="form-label fw-semibold">Recipient Local Government</label>
                                        <select name="lga" id="lga" class="form-select" required>
                                            <option value="lga1">LGA 1</option>
                                            <option value="lga2">LGA 2</option>
                                            <option value="lga3">LGA 3</option>
                                            <option value="lga4">LGA 4</option>
                                            <option value="lga5">LGA 5</option>
                                        </select>
                                    </div>

                                    <!-- Required Home Service -->
                                    <div class="my-2">
                                        <label for="service" class="form-label fw-semibold">Required Home Service</label>
                                        <select name="service" id="state" class="form-select" required>
                                            <option value="service1">Service 1</option>
                                            <option value="service2">Service 2</option>
                                            <option value="service3">Service 3</option>
                                            <option value="service4">Service 4</option>
                                            <option value="service5">Service 5</option>
                                        </select>
                                    </div>

                                    <!-- Schedule Date and Time -->
                                    <div class="my-2 row py-2">
                                        <div class="schedule-date col-12 col-md-6">
                                            <label for="schedule-date" class="form-label fw-semibold">Schedule Date</label>
                                            <input type="date" name="date" id="schedule-date" class="form-control" required>
                                        </div>
                                        <div class="schedule-time col-12 col-md-6">
                                            <label for="schedule-time" class="form-label fw-semibold">Schedule Time</label>
                                            <input type="time" name="time" id="schedule-time" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="my-2">
                                        <p>N/B: The services are mostly estimated prices, as charges might be affected by
                                            quality
                                            of product to be serviced. Billing would ensue on order review</p>

                                        <div class="d-flex align-items-center justify-content-between my-2">
                                            <span class="fw-bold">Price Estimate</span>
                                            <span>Price: <span>&#x020A6;6000</span></span>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between my-2 gap-2">
                                            <button type="submit"
                                                class="btn btn-lemney-primary px-md-5 text-uppercase">Book Service</button>
                                            <button type="submit"
                                                class="btn btn-lemney-outline-primary px-md-5 text-uppercase" name="later" value="yes">Save for Later</button>
                                        </div>
                                    </div>


                                </form>
                            </div>



                        </div>
                    </div>

                    <!-- Completed Tab Content -->
                    <div class="tab-pane fade" id="completed-tab-pane" role="tabpanel">

                        <!-- Completed Timeline 1 -->
                        <div class="bg-lemney-secondary rounded-3 p-3 my-3">
                            <!-- Order Information -->
                            <div class="py-2 d-flex align-items-center justify-content-between">
                                <div>
                                    <div><b>Order Number: </b>L-NG1111241A</div>
                                    <div><b>Dispatch Date: </b>11-11-2024</div>
                                    <div><b>Delivery Date: </b>11-11-2024</div>
                                </div>
                                <div class="text-end">
                                    <span class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">
                                        <img src="../../assets/img/package_check.svg" alt="">
                                        Delivered
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

                        <!--  -->
                        <div class="bg-lemney-secondary rounded-3 p-3 my-3">
                            <!-- Order Information -->
                            <div class="py-2 d-flex align-items-center justify-content-between">
                                <div>
                                    <div><b>Order Number: </b>L-NG1111241A</div>
                                    <div><b>Dispatch Date: </b>11-11-2024</div>
                                    <div><b>Delivery Date: </b>11-11-2024</div>
                                </div>
                                <div class="text-end">
                                    <span class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">
                                        <img src="../../assets/img/package_check.svg" alt="">
                                        Delivered
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

                    </div>

                    <!-- Cancelled Tab Content -->
                    <div class="tab-pane fade" id="cancelled-tab-pane" role="tabpanel">

                        <!-- Cancelled Time line 1 -->

                        <div class="bg-lemney-secondary rounded-3 p-3 my-3">
                            <!-- Order Information -->
                            <div class="py-2 d-flex align-items-center justify-content-between">
                                <div>
                                    <div><b>Order Number: </b>L-NG1111241A</div>
                                    <div><b>Dispatch Date: </b>11-11-2024</div>
                                    <div><b>Delivery Date: </b>11-11-2024</div>
                                </div>
                                <div class="text-end">
                                    <span class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">
                                        <img src="../../assets/img/package_check.svg" alt="">
                                        Cancelled
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
                                <div class="order-timeline-item order-timeline-item-muted">
                                    <h5>In Transit</h5>
                                    <div>
                                        <div class="text-muted">No. 6 Street Awka, Anambra</div>
                                        <div class="text-muted">11-11-2024 8:00am</div>
                                    </div>
                                </div>
                                <div class="order-timeline-item order-timeline-item-muted">
                                    <h5>Awaiting Delivery</h5>
                                    <div>
                                        <div class="text-muted">No. 6 Street Awka, Anambra</div>
                                        <div class="text-muted">11-11-2024 8:00am</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Cancelled Time Line 2 -->
                        <div class="bg-lemney-secondary rounded-3 p-3 my-3">
                            <!-- Order Information -->
                            <div class="py-2 d-flex align-items-center justify-content-between">
                                <div>
                                    <div><b>Order Number: </b>L-NG1111241A</div>
                                    <div><b>Dispatch Date: </b>11-11-2024</div>
                                    <div><b>Delivery Date: </b>11-11-2024</div>
                                </div>
                                <div class="text-end">
                                    <span class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">
                                        <img src="../../assets/img/package_check.svg" alt="">
                                        Cancelled
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
                                <div class="order-timeline-item order-timeline-item-muted">
                                    <h5>In Transit</h5>
                                    <div>
                                        <div class="text-muted">No. 6 Street Awka, Anambra</div>
                                        <div class="text-muted">11-11-2024 8:00am</div>
                                    </div>
                                </div>
                                <div class="order-timeline-item order-timeline-item-muted">
                                    <h5>Awaiting Delivery</h5>
                                    <div>
                                        <div class="text-muted">No. 6 Street Awka, Anambra</div>
                                        <div class="text-muted">11-11-2024 8:00am</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Ongoing Tab Content -->
                    <div class="tab-pane fade" id="ongoing-tab-pane" role="tabpanel">

                        <!-- Ongoing Time line 1 -->

                        <div class="bg-lemney-secondary rounded-3 p-3 my-3">
                            <!-- Order Information -->

                            @foreach ($ongoings as $ongoing)
                            <!-- Ongoing Time Line 2 -->
                        <div class="bg-lemney-secondary rounded-3 p-3 my-3">
                            <!-- Order Information -->
                            <div class="py-2 d-flex align-items-center justify-content-between">
                                <div>
                                    <div><b>Order Number: </b>L-NG1111241A</div>
                                    <div><b>Dispatch Date: </b>11-11-2024</div>
                                    <div><b>Delivery Date: </b>11-11-2024</div>
                                </div>
                                <div class="text-end">
                                    <span class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">
                                        <img src="../../assets/img/package_check.svg" alt="">
                                        In Transit
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
                                <div class="order-timeline-item awaiting order-timeline-item-muted">
                                    <h5>Awaiting Delivery</h5>
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
            </div>
        </div>
    </main>


@include('layouts.authfooter')
