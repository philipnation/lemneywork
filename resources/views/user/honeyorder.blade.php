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
                                        <input type="text" name="address" id="address" class="form-control" required>

                                    </div>

                                    <!-- Recipient State -->
                                    <div class="my-2">
                                        <label for="state" class="form-label fw-bold">Recipient State</label>
                                        <input type="text" name="state" id="state" class="form-control" required>
                                    </div>

                                    <!-- Recipient Local Government -->
                                    <div class="my-2">
                                        <label for="lga" class="form-label fw-bold">Recipient Local Government</label>
                                        <input type="text" name="lga" id="lga" class="form-control" required>
                                    </div>

                                    <div class="my-2">
                                        <label for="quantitiy" class="form-label fw-bold">Honey Quantity</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="quantity" id="quantitiy" placeholder="Quantity" aria-label="Recipient's username"
                                                aria-describedby="basic-addon2">
                                            <select name="qtype" id="option" class="form-select">
                                                <option value="none">Select price</option>
                                                @foreach ($honey_prices as $honey_price)
                                                    <option value="{{ $honey_price->name }}" data-price="{{ $honey_price->price }}" data-d-price="{{ $honey_price->dprice }}">{{ $honey_price->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <input type="hidden" name="price" id="inputprice">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>Price: <span class="text-lemney-primary fw-bold">&#x020A6;<span
                                                        class="amount" id="price"></span></span>
                                            </div>
                                            <div>Distributor Discount Price: <span
                                                    class="text-lemney-primary fw-bold">&#x020A6;<span
                                                        class="amount-discount" id="dprice"></span></span></div>
                                        </div>
                                    </div>

                                    <script>
                                        const select = document.getElementById('option');
                                        const price = document.getElementById('price');
                                        const dprice = document.getElementById('dprice');
                                        const inputprice = document.getElementById('inputprice');

                                        select.addEventListener('change', function () {
                                            const selectedOption = this.options[this.selectedIndex];
                                            const selectedPrice = selectedOption.getAttribute('data-price');
                                            const selectedDiscountPrice = selectedOption.getAttribute('data-d-price');

                                            price.textContent = selectedPrice;
                                            dprice.textContent = selectedDiscountPrice;
                                            inputprice.value = selectedPrice;
                                        });
                                    </script>


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


                        @foreach ($completeds as $completed)

                        <!-- Ongoing 1 -->
                        <div class="bg-lemney-secondary rounded-3 p-3 my-3">

                            <!-- Order Information -->
                            <div class="py-2 d-flex align-items-center justify-content-between">
                                <div>
                                    <div><b>Order Date: </b>{{ $completed->created_at }}</div>
                                    <div><b>Order Number: </b>{{ $completed->orderno }}</div>
                                    <div><b>Payment Method: </b><span>Transfer</span></div>

                                </div>
                                <div>
                                    <div class="text-end">
                                        <span class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">
                                            completed</span><br />
                                        <span><b>Cost: </b><span class="text-uppercase">NGN {{ number_format($completed->price, 2) }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Order Details -->
                            <div class="py-2 d-flex align-content-center justify-content-between gap-3">
                                <div class="d-flex align-items-center">
                                    <img src="../../assets/img/salon_styled_hair.png" alt="" class="img-fluid">
                                    <div class="ps-1">
                                        <b>Honey Delivery</b> <br>
                                        <span>--</span>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-column flex-md-row align-items-md-center justify-content-between text-end text-md-center gap-2 flex-grow-1">
                                    <div>
                                        <b>Quantity</b><br>
                                        <span>{{ $completed->quantity_type }} - {{ $completed->quantity }}</span>
                                    </div>
                                    <!--<div>
                                        <b>Delivery Time</b><br>
                                        <span class="text-uppercase">1 DAY</span>
                                    </div>-->
                                    <div>
                                        <b>Service Location</b><br>
                                        <span>{{ $completed->receipient_pickup_address }}, {{ $completed->receipient_lga }}, {{ $completed->receipient_state }}</span>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="d-flex align-items-center justify-content-end">

                                <div class="text-end">
                                    <!--<button data-bs-toggle="modal" data-bs-target="#reviewModal"
                                        class="btn btn-lemney-primary">Make Payment</button>

                                    <button
                                        class="btn btn-lemney-outline-primary"><a href="{{ route('user.honey.delete', $completed->id) }}" class="text-decoration-none" style="color: inherit">Cancel
                                        Order</a></button>-->
                                </div>
                            </div>

                        </div>
                        @endforeach

                    </div>

                    <!-- Cancelled Tab Content -->
                    <div class="tab-pane fade" id="cancelled-tab-pane" role="tabpanel">


                        @foreach ($cancelleds as $cancelled)
                        <!-- Cancelled 1 --><!-- cancelled 1 -->
                        <div class="bg-lemney-secondary rounded-3 p-3 my-3">

                            <!-- Order Information -->
                            <div class="py-2 d-flex align-items-center justify-content-between">
                                <div>
                                    <div><b>Order Date: </b>{{ $cancelled->created_at }}</div>
                                    <div><b>Order Number: </b>{{ $cancelled->orderno }}</div>
                                    <div><b>Payment Method: </b><span>Transfer</span></div>

                                </div>
                                <div>
                                    <div class="text-end">
                                        <span class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">
                                            cancelled</span><br />
                                        <span><b>Cost: </b><span class="text-uppercase">NGN {{ number_format($cancelled->price, 2) }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Order Details -->
                            <div class="py-2 d-flex align-content-center justify-content-between gap-3">
                                <div class="d-flex align-items-center">
                                    <img src="../../assets/img/salon_styled_hair.png" alt="" class="img-fluid">
                                    <div class="ps-1">
                                        <b>Honey Delivery</b> <br>
                                        <span>--</span>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-column flex-md-row align-items-md-center justify-content-between text-end text-md-center gap-2 flex-grow-1">
                                    <div>
                                        <b>Quantity</b><br>
                                        <span>{{ $cancelled->quantity_type }} - {{ $cancelled->quantity }}</span>
                                    </div>
                                    <!--<div>
                                        <b>Delivery Time</b><br>
                                        <span class="text-uppercase">1 DAY</span>
                                    </div>-->
                                    <div>
                                        <b>Service Location</b><br>
                                        <span>{{ $cancelled->receipient_pickup_address }}, {{ $cancelled->receipient_lga }}, {{ $cancelled->receipient_state }}</span>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="d-flex align-items-center justify-content-end">

                                <div class="text-end">
                                    <!--<1x-guest-layoutbutton data-bs-toggle="modal" data-bs-target="#reviewModal"
                                        class="btn btn-lemney-primary">Reschedule</button>

                                    <button
                                        class="btn btn-lemney-outline-primary"><a href="{{ route('user.honey.delete', $cancelled->id) }}" class="text-decoration-none" style="color: inherit">Cancel
                                        Order</a></button>-->
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Ongoing Tab Content -->
                    <div class="tab-pane fade" id="ongoing-tab-pane" role="tabpanel">


                        @foreach ($ongoings as $ongoing)


                        <!-- Ongoing 1 -->
                        <div class="bg-lemney-secondary rounded-3 p-3 my-3">

                            <!-- Order Information -->
                            <div class="py-2 d-flex align-items-center justify-content-between">
                                <div>
                                    <div><b>Order Date: </b>{{ $ongoing->created_at }}</div>
                                    <div><b>Order Number: </b>{{ $ongoing->orderno }}</div>
                                    <div><b>Payment Method: </b><span>Transfer</span></div>

                                </div>
                                <div>
                                    <div class="text-end">
                                        <span class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">
                                            Ongoing</span><br />
                                        <span><b>Cost: </b><span class="text-uppercase">NGN {{ number_format($ongoing->price, 2) }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Order Details -->
                            <div class="py-2 d-flex align-content-center justify-content-between gap-3">
                                <div class="d-flex align-items-center">
                                    <img src="../../assets/img/salon_styled_hair.png" alt="" class="img-fluid">
                                    <div class="ps-1">
                                        <b>Honey Delivery</b> <br>
                                        <span>--</span>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-column flex-md-row align-items-md-center justify-content-between text-end text-md-center gap-2 flex-grow-1">
                                    <div>
                                        <b>Quantity</b><br>
                                        <span>{{ $ongoing->quantity_type }} - {{ $ongoing->quantity }}</span>
                                    </div>
                                    <!--<div>
                                        <b>Delivery Time</b><br>
                                        <span class="text-uppercase">1 DAY</span>
                                    </div>-->
                                    <div>
                                        <b>Service Location</b><br>
                                        <span>{{ $ongoing->receipient_pickup_address }}, {{ $ongoing->receipient_lga }}, {{ $ongoing->receipient_state }}</span>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="d-flex align-items-center justify-content-end">

                                <div class="text-end">
                                    <!--<1x-guest-layoutbutton data-bs-toggle="modal" data-bs-target="#reviewModal"
                                        class="btn btn-lemney-primary">Reschedule</button>-->

                                        @if ($ongoing->pay == null)
                                            <button data-bs-toggle="modal" data-bs-target="#reviewModal"
                                            class="btn btn-lemney-primary">Make Payment</button>

                                            <button
                                            class="btn btn-lemney-outline-primary"><a href="{{ route('user.honey.delete', $ongoing->id) }}" class="text-decoration-none" style="color: inherit">Cancel
                                            Order</a></button>

                                        @elseif ($ongoing->pay == 'approved')
                                            <span
                                            class="btn btn-lemney-primary">Payment Approved</span>
                                        @endif
                                </div>
                            </div>

                            <!-- Review Modal -->
                            <form method="post" action="javascript:void('')">

                                <div class="modal fade" id="reviewModal" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="Cancel Order Confirmation Modal" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable mx-auto rounded-3"
                                        style="max-width: 360px;">
                                        <div class="modal-content p-3">
                                            <!-- Modal header -->
                                            <!--<div class="modal-header border-0 p-2">
                                                <h2 class="text-uppercase fs-4 my-0">Review</h2>
                                            </div>-->
                                            <!-- Modal body -->
                                            <div class="modal-body p-2">

                                                <!-- Email address -->
                                                <div class="my-2">
                                                    <label for="email" class="form-label fw-bold">Amount (NGN)</label>
                                                    <input type="email" name="acc" id="email" value="{{ number_format($ongoing->price, 2) }}"
                                                        class="form-control" readonly>
                                                </div>

                                                <!-- Email address -->
                                                <div class="my-2">
                                                    <label for="email" class="form-label fw-bold">Account Number</label>
                                                    <div style="display: flex; align-items: center;">
                                                    <input type="email" name="acc" id="email" value="{{ $accountdetails->accountnumber }}"
                                                        class="form-control w-70"><span style="position: absolute; right: 0; color: #F58625; font-size: 23px;"><i class="fa fa-copy" onclick="copyTextToClipboard('{{ $accountdetails->accountnumber }}')"></i></span>
                                                    </div>
                                                </div>

                                                <!-- Summary -->
                                                <div class="my-2">
                                                    <label for="summary" class="form-label fw-bold">Account Name</label>

                                                    <div style="display: flex; align-items: center;">
                                                    <input type="text" name="summary" id="summary" value="{{ $accountdetails->accountname }}"
                                                        class="form-control"><span style="position: absolute; right: 0; color: #F58625; font-size: 23px;"><i class="fa fa-copy" onclick="copyTextToClipboard('{{ $accountdetails->accountname }}')"></i></span>
                                                    </div>
                                                </div>

                                                <!-- Review -->
                                                <div class="my-2">
                                                    <label for="review" class="form-label fw-bold">Bank Name</label>

                                                    <div style="display: flex; align-items: center;">
                                                    <input type="text" name="summary" id="summary" value="{{ $accountdetails->bankname }}"
                                                        class="form-control"><span style="position: absolute; right: 0; color: #F58625; font-size: 23px;"><i class="fa fa-copy" onclick="copyTextToClipboard('{{ $accountdetails->bankname }}')"></i></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer border-0 p-2">
                                                <button type="submit" class="btn btn-lemney-primary px-4"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#reviewSubmissionConfirmationModal">Made Payment?</button>
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
                                            <form action="{{ route('user.honey.payment.upload') }}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <div class="my-2">


                                                    <input type="hidden" name="id" value="{{ $ongoing->id }}">
                                                    <label for="images" class="form-label">
                                                        <p class="fw-bold">Upload Receipt</p>

                                                        <div class="d-flex align-items-center justify-content-center border border-black rounded-1"
                                                            style="width: 80px; height: 80px">
                                                            <i class="fa fa-file-upload"></i>
                                                        </div>
                                                    </label>
                                                    <input type="file" name="images" id="images" class="d-none">
                                                </div>

                                            <!--<p class="mb-4">Are you sure you want to <span
                                                    class="fw-bold">Submit</span>?</p>-->

                                            <div class="d-flex align-items-center justify-content-between mt-4">
                                                <button class="btn btn-lemney-primary fw-bold px-5">Upload</button>
                                                <button class="btn btn-lemney-outline-primary fw-bold px-5"
                                                    data-bs-dismiss="modal" type="reset">Cancel</button>
                                            </div>
                                        </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function copyTextToClipboard(text) {
          var copyText = document.createElement("textarea");
          copyText.value = text;
          document.body.appendChild(copyText);
          copyText.select();
          document.execCommand("copy");
          document.body.removeChild(copyText);
          alert("Copied: " + text);
        }
    </script>
@include('layouts.authfooter')
