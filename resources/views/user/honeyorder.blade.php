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
                        <div class="row px-3">

                            <div class="col-5 order-last d-none d-md-block">
                                <img src="{{ asset('assets/img/teddy_bear_honey.png') }}" alt="" srcset="" class="img-fluid">
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
                                <form action="{{ route('user.honey.store') }}" method="post">
                                    @csrf

                                    <!-- Recipient full name -->
                                    <div class="my-2">
                                        <label for="fullname" class="form-label fw-bold">Receipient Full Name</label>
                                        <input type="text" name="fullname" id="fullname" class="form-control">
                                    </div>

                                    <!-- Phone Number -->
                                    <div class="my-2">
                                        <label for="phone" class="form-label fw-bold">Phone Number</label>
                                        <input type="text" name="phone" id="phone" class="form-control">
                                    </div>

                                    <!-- Recipient Pickup Address -->
                                    <div class="my-2">
                                        <label for="state" class="form-label fw-bold">Recipient Pickup Address</label>
                                        <select name="address" id="address" class="form-select">
                                            <option value="address1">Address 1</option>
                                            <option value="address2">Address 2</option>
                                            <option value="address3">Address 3</option>
                                            <option value="address4">Address 4</option>
                                            <option value="address5">Address 5</option>
                                        </select>
                                    </div>

                                    <!-- Recipient State -->
                                    <div class="my-2">
                                        <label for="state" class="form-label fw-bold">Recipient State</label>
                                        <select name="state" id="state" class="form-select">
                                            <option value="state1">State 1</option>
                                            <option value="state2">State 2</option>
                                            <option value="state3">State 3</option>
                                            <option value="state4">State 4</option>
                                            <option value="state5">State 5</option>
                                        </select>
                                    </div>

                                    <!-- Recipient Local Government -->
                                    <div class="my-2">
                                        <label for="lga" class="form-label fw-bold">Recipient Local Government</label>
                                        <select name="lga" id="lga" class="form-select">
                                            <option value="lga1">LGA 1</option>
                                            <option value="lga2">LGA 2</option>
                                            <option value="lga3">LGA 3</option>
                                            <option value="lga4">LGA 4</option>
                                            <option value="lga5">LGA 5</option>
                                        </select>
                                    </div>

                                    <div class="my-2">
                                        <label for="quantitiy" class="form-label fw-bold">Honey Quantity</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="quantity" value="2">
                                            <select name="qtype" id="option" class="form-select">
                                                <option value="litre">Litre</option>
                                                <option value="bottle">Bottle</option>
                                                <option value="cup">Cup</option>
                                            </select>
                                        </div>
                                        <input type="hidden" name="price" value="{{ $price }}">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>Price: <span class="text-lemney-primary fw-bold">&#x020A6;<span
                                                        class="amount">{{ $price }}</span></span>
                                            </div>
                                            <div>Distributor Discount Price: <span
                                                    class="text-lemney-primary fw-bold">&#x020A6;<span
                                                        class="amount-discount">5,800</span></span></div>
                                        </div>
                                    </div>


                                    <div class="my-2 py-2">

                                        <div class="d-flex align-items-center justify-content-between my-2">
                                            <button class="btn btn-lemney-primary px-5 text-uppercase">Buy Now</button>
                                            <button class="btn btn-lemney-outline-primary text-uppercase" name="later" value="yes">Save for Later</button>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Completed Tab Content -->
                    <div class="tab-pane fade" id="completed-tab-pane" role="tabpanel">

                        <!-- Completed 1 -->
                        <div class="bg-lemney-secondary rounded-3 p-3 my-3">

                            <!-- Order Information -->
                            <div class="py-2 d-flex align-items-center justify-content-between">
                                <div>
                                    <div><b>Order Date: </b>11-11-2024</div>
                                    <div><b>Order Number: </b>L-NG1111241A</div>
                                    <div><b>Payment Method: </b><span>Transfer</span></div>

                                </div>
                                <div>
                                    <div class="text-end">
                                        <span class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">
                                            Completed</span><br />
                                        <!-- Show on mobile screen - hide on small screens -->
                                        <span class="d-md-none"><b>Cost: </b><span class="text-uppercase">NaN</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Order Details -->
                            <div class="py-2 d-flex align-content-center justify-content-between gap-3">
                                <div class="d-flex align-items-center">
                                    <img src="../../assets/img/salon_styled_hair.png" alt="" class="img-fluid">
                                    <div class="ps-1">
                                        <b>Home Service</b> <br>
                                        <span>House Cleaning</span>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-column flex-md-row align-items-md-center justify-content-between text-end text-md-center gap-2 flex-grow-1">
                                    <div class="d-none d-md-block">
                                        <b>Cost</b><br>
                                        <span class="text-uppercase">NAN</span>
                                    </div>
                                    <div>
                                        <b>Schedule</b><br>
                                        <span>Saturday, 11 Nov. 2024 9:00 am</span>
                                    </div>
                                    <div>
                                        <b>Delivery Time</b><br>
                                        <span class="text-uppercase">1 DAY</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Cancelled Tab Content -->
                    <div class="tab-pane fade" id="cancelled-tab-pane" role="tabpanel">

                        <!-- Cancelled 1 -->
                        <div class="bg-lemney-secondary rounded-3 p-3 my-3">

                            <!-- Order Information -->
                            <div class="py-2 d-flex align-items-center justify-content-between">
                                <div>
                                    <div><b>Order Date: </b>11-11-2024</div>
                                    <div><b>Order Number: </b>L-NG1111241A</div>
                                    <div><b>Payment Method: </b><span>Transfer</span></div>

                                </div>
                                <div>
                                    <div class="text-end">
                                        <span class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">
                                            Cancelled</span><br />
                                        <!-- Show on mobile screen - hide on small screens -->
                                        <span class="d-md-none"><b>Cost: </b><span class="text-uppercase">NaN</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Order Details -->
                            <div class="py-2 d-flex align-content-center justify-content-between gap-3">
                                <div class="d-flex align-items-center">
                                    <img src="../../assets/img/salon_styled_hair.png" alt="" class="img-fluid">
                                    <div class="ps-1">
                                        <b>Home Service</b> <br>
                                        <span>House Cleaning</span>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-column flex-md-row align-items-md-center justify-content-between text-end text-md-center gap-2 flex-grow-1">
                                    <div class="d-none d-md-block">
                                        <b>Cost</b><br>
                                        <span class="text-uppercase">NAN</span>
                                    </div>
                                    <div>
                                        <b>Schedule</b><br>
                                        <span>Saturday, 11 Nov. 2024 9:00 am</span>
                                    </div>
                                    <div>
                                        <b>Delivery Time</b><br>
                                        <span class="text-uppercase">1 DAY</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Ongoing Tab Content -->
                    <div class="tab-pane fade" id="ongoing-tab-pane" role="tabpanel">

                        <!-- Ongoing 1 -->
                        <div class="bg-lemney-secondary rounded-3 p-3 my-3">

                            <!-- Order Information -->
                            <div class="py-2 d-flex align-items-center justify-content-between">
                                <div>
                                    <div><b>Order Date: </b>11-11-2024</div>
                                    <div><b>Order Number: </b>L-NG1111241A</div>
                                    <div><b>Payment Method: </b><span>Transfer</span></div>

                                </div>
                                <div>
                                    <div class="text-end">
                                        <span class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">
                                            Ongoing</span><br />
                                        <span><b>Cost: </b><span class="text-uppercase">NaN</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Order Details -->
                            <div class="py-2 d-flex align-content-center justify-content-between gap-3">
                                <div class="d-flex align-items-center">
                                    <img src="../../assets/img/salon_styled_hair.png" alt="" class="img-fluid">
                                    <div class="ps-1">
                                        <b>Home Service</b> <br>
                                        <span>House Cleaning</span>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-column flex-md-row align-items-md-center justify-content-between text-end text-md-center gap-2 flex-grow-1">
                                    <div>
                                        <b>Schedule</b><br>
                                        <span>Saturday, 11 Nov. 2024 9:00 am</span>
                                    </div>
                                    <div>
                                        <b>Delivery Time</b><br>
                                        <span class="text-uppercase">1 DAY</span>
                                    </div>
                                    <div>
                                        <b>Service Location</b><br>
                                        <span>GetStyled Krib, Enugu</span>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="d-flex align-items-center justify-content-end">

                                <div class="text-end">
                                    <button data-bs-toggle="modal" data-bs-target="#reviewModal"
                                        class="btn btn-lemney-primary">Reschedule</button>

                                    <button data-bs-toggle="modal" data-bs-target="#reviewModal"
                                        class="btn btn-lemney-outline-primary">Cancel
                                        Order</button>
                                </div>

                                <!-- Review Modal -->
                                <form method="post" action="javascript:void('')">

                                    <div class="modal fade" id="reviewModal" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="Cancel Order Confirmation Modal" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable mx-auto rounded-3"
                                            style="max-width: 360px;">
                                            <div class="modal-content p-3">
                                                <!-- Modal header -->
                                                <div class="modal-header border-0 p-2">
                                                    <h2 class="text-uppercase fs-4 my-0">Review</h2>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body p-2">
                                                    <!-- Your Rating -->
                                                    <div class="my-2">
                                                        Your Rating
                                                        <input type="hidden" name="rating" value="0">
                                                        <div>
                                                            <button class="btn btn-sm border-0"><i class="fa fa-star"
                                                                    style="color: rgba(231, 231, 231, 0.8);"></i></button>
                                                            <button class="btn btn-sm border-0"><i class="fa fa-star"
                                                                    style="color: rgba(231, 231, 231, 0.8);"></i></button>
                                                            <button class="btn btn-sm border-0"><i class="fa fa-star"
                                                                    style="color: rgba(231, 231, 231, 0.8);"></i></button>
                                                            <button class="btn btn-sm border-0"><i class="fa fa-star"
                                                                    style="color: rgba(231, 231, 231, 0.8);"></i></button>
                                                            <button class="btn btn-sm border-0"><i class="fa fa-star"
                                                                    style="color: rgba(231, 231, 231, 0.8);"></i></button>
                                                        </div>
                                                    </div>

                                                    <!-- Email address -->
                                                    <div class="my-2">
                                                        <label for="email" class="form-label fw-bold">Email
                                                            address</label>
                                                        <input type="email" name="email" id="email"
                                                            class="form-control">
                                                    </div>

                                                    <!-- Summary -->
                                                    <div class="my-2">
                                                        <label for="summary" class="form-label fw-bold">Summary</label>
                                                        <input type="text" name="summary" id="summary"
                                                            class="form-control">
                                                    </div>

                                                    <!-- Review -->
                                                    <div class="my-2">
                                                        <label for="review" class="form-label fw-bold">Review</label>
                                                        <textarea name="review" id="review"
                                                            class="form-control"></textarea>
                                                    </div>

                                                    <!-- Add images (0-4 Max) -->
                                                    <div class="my-2">
                                                        <label for="images" class="form-label">
                                                            <p class="fw-bold">Add Images (0-4 Max)</p>

                                                            <div class="d-flex align-items-center justify-content-center border border-black rounded-1"
                                                                style="width: 80px; height: 80px">
                                                                <i class="fa fa-file-upload"></i>
                                                            </div>
                                                        </label>
                                                        <input type="file" name="images" id="images" class="d-none">
                                                    </div>

                                                </div>
                                                <!-- Modal footer -->
                                                <div class="modal-footer border-0 p-2">
                                                    <button type="submit" class="btn btn-lemney-primary px-4"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#reviewSubmissionConfirmationModal">Submit</button>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </form>

                                <!-- Review Modal Ends here -->

                                <!-- Review Submission Confirmation Modal -->
                                <div class="modal fade" id="reviewSubmissionConfirmationModal" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="Review Submission Confirmation Modal" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered mx-auto rounded-3"
                                        style="max-width: 360px;">
                                        <div class="modal-content p-3">
                                            <div class="text-center fw-bold">
                                                <p class="mb-4">Are you sure you want to <span
                                                        class="fw-bold">Submit</span>?</p>

                                                <div class="d-flex align-items-center justify-content-between mt-4">
                                                    <button class="btn btn-lemney-primary fw-bold px-5">Yes</button>
                                                    <button class="btn btn-lemney-outline-primary fw-bold px-5"
                                                        data-bs-dismiss="modal">No</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@include('layouts.authfooter')
