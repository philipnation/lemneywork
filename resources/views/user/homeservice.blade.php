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
                                        <input type="text" name="location" id="location" class="form-control" required>
                                    </div>

                                    <!-- Phone Number -->
                                    <div class="my-2">
                                        <label for="phone" class="form-label fw-semibold">Phone Number</label>
                                        <input type="text" name="phone" id="phone" class="form-control" required>
                                    </div>

                                    <!-- Recipient State -->
                                    <div class="my-2">
                                        <label for="state" class="form-label fw-semibold">Recipient State</label>
                                        <input type="text" name="state" id="state" class="form-control" required>
                                    </div>

                                    <!-- Recipient Local Government -->
                                    <div class="my-2">
                                        <label for="lga" class="form-label fw-semibold">Recipient Local Government</label>
                                        <input type="text" name="lga" id="lga" class="form-control" required>

                                    </div>


                                    <!-- Required Home Service -->
                                    <div class="my-2">
                                        <label for="service" class="form-label fw-semibold">Required Home Service</label>
                                        <select name="service" id="service" class="form-select" required>
                                            <option value="none">select service</option>
                                            @foreach ($services as $service)
                                                <option value="{{ $service->name }}" data-price="{{ $service->price }}" data-preprice="{{ $service->preprice }}">{{ $service->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="my-2">
                                        <label for="lga" class="form-label fw-semibold">Price</label>
                                        <input type="text" name="price" id="inputprice" class="form-control" readonly required>
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

                                            <span class="font-bold" id="priceplace" style="font-weight: bold; display: none;">


                                                <span>Pre Price: <s id="preprice" style="color: red;"></s></span>

                                                    Price: <span id="price"></span>
                                            </span>
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


                    <script>
                        document.getElementById('service').addEventListener('change', function () {
                            document.getElementById('priceplace').style.display = 'block';
                            const selectedOption = this.options[this.selectedIndex];

                            const price = selectedOption.getAttribute('data-price');
                            const preprice = selectedOption.getAttribute('data-preprice');

                            document.getElementById('inputprice').value = price;

                            console.log("Price:", price);
                            console.log("Previous Price:", preprice);

                            // Example: Display in HTML
                            document.getElementById('price').textContent = price ?? 'N/A';
                            document.getElementById('preprice').textContent = preprice ?? 'N/A';
                        });
                        </script>


                    <!-- Completed Tab Content -->
                    <div class="tab-pane fade" id="completed-tab-pane" role="tabpanel">

                        @foreach ($completeds as $complete)

                        <!-- complete Time Line 2 -->
                        <div class="bg-lemney-secondary rounded-3 p-3 my-3">
                            <!-- Order Information -->
                            <div class="py-2 d-flex align-items-center justify-content-between">
                                <div>
                                    <div><b>Order Number: </b>{{ $complete->order_no }}</div>
                                    <div><b>Order Date: </b>{{ $complete->created_at }}</div>
                                    {{-- <div><b>Delivery Date: </b>11-11-2024</div> --}}
                                </div>
                                <div class="text-end">
                                    <span class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">
                                        <img src="../../assets/img/package_check.svg" alt="">
                                        {{ $complete->status }}
                                    </span><br>
                                    <div><b>Cost: </b><span class="text-uppercase">NGN {{ number_format($complete->price, 2) }}</span></div>
                                </div>
                            </div>
                            <!-- Order timeline -->
                            <div class="order-timeline">
                                <div class="order-timeline-item">
                                    <h5>Service Location</h5>
                                    <div>
                                        <div class="text-muted">{{ $complete->service_location }}</div>
                                        <div class="text-muted">{{ $complete->date }} {{ $complete->time }}</div>
                                    </div>
                                </div>

                                <br>

                                <div class="order-timeline-item awaiting order-timeline-item-muted">
                                    <h5>Other Information</h5>
                                    <div>
                                        <div>{{ $complete->receipient_lga }}, {{ $complete->receipient_state }}</div>
                                        {{-- <div class="text-muted">11-11-2024 8:00am</div> --}}
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endforeach

                    </div>

                    <!-- Cancelled Tab Content -->
                    <div class="tab-pane fade" id="cancelled-tab-pane" role="tabpanel">

                        @foreach ($cancelleds as $cancelled)

                        <!-- cancelled Time Line 2 -->
                        <div class="bg-lemney-secondary rounded-3 p-3 my-3">
                            <!-- Order Information -->
                            <div class="py-2 d-flex align-items-center justify-content-between">
                                <div>
                                    <div><b>Order Number: </b>{{ $cancelled->order_no }}</div>
                                    <div><b>Order Date: </b>{{ $cancelled->created_at }}</div>
                                    {{-- <div><b>Delivery Date: </b>11-11-2024</div> --}}
                                </div>
                                <div class="text-end">
                                    <span class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">
                                        <img src="../../assets/img/package_check.svg" alt="">
                                        {{ $cancelled->status }}
                                    </span><br>
                                    <div><b>Cost: </b><span class="text-uppercase">NGN {{ number_format($cancelled->price, 2) }}</span></div>
                                </div>
                            </div>
                            <!-- Order timeline -->
                            <div class="order-timeline">
                                <div class="order-timeline-item">
                                    <h5>Service Location</h5>
                                    <div>
                                        <div class="text-muted">{{ $cancelled->service_location }}</div>
                                        <div class="text-muted">{{ $cancelled->date }} {{ $cancelled->time }}</div>
                                    </div>
                                </div>

                                <br>

                                <div class="order-timeline-item awaiting order-timeline-item-muted">
                                    <h5>Other Information</h5>
                                    <div>
                                        <div>{{ $cancelled->receipient_lga }}, {{ $cancelled->receipient_state }}</div>
                                        {{-- <div class="text-muted">11-11-2024 8:00am</div> --}}
                                    </div>
                                </div>
                            </div>

                        </div>

                        @endforeach
                    </div>

                    <!-- Ongoing Tab Content -->
                    <div class="tab-pane fade" id="ongoing-tab-pane" role="tabpanel">

                        <!-- Ongoing Time line 1 -->
                            <!-- Order Information -->

                            @foreach ($ongoings as $ongoing)
                            <!-- Ongoing Time Line 2 -->
                                <div class="bg-lemney-secondary rounded-3 p-3 my-3">
                                    <!-- Order Information -->
                                    <div class="py-2 d-flex align-items-center justify-content-between">
                                        <div>
                                            <div><b>Order Number: </b>{{ $ongoing->order_no }}</div>
                                            <div><b>Order Date: </b>{{ $ongoing->created_at }}</div>
                                            {{-- <div><b>Delivery Date: </b>11-11-2024</div> --}}
                                        </div>
                                        <div class="text-end">
                                            <span class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">
                                                <img src="../../assets/img/package_check.svg" alt="">
                                                {{ $ongoing->status }}
                                            </span><br>
                                            <div><b>Cost: </b><span class="text-uppercase">NGN {{ number_format($ongoing->price, 2) }}</span></div>
                                        </div>
                                    </div>
                                    <!-- Order timeline -->
                                    <div class="order-timeline">
                                        <div class="order-timeline-item">
                                            <h5>Service Location</h5>
                                            <div>
                                                <div class="text-muted">{{ $ongoing->service_location }}</div>
                                                <div class="text-muted">{{ $ongoing->date }} {{ $ongoing->time }}</div>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="order-timeline-item awaiting order-timeline-item-muted">
                                            <h5>Other Information</h5>
                                            <div>
                                                <div>{{ $ongoing->receipient_lga }}, {{ $ongoing->receipient_state }}</div>
                                                {{-- <div class="text-muted">11-11-2024 8:00am</div> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <br>


                                    @if ($ongoing->pay == null)
                                        <button data-bs-toggle="modal" data-bs-target="#reviewModal"
                                        class="btn btn-lemney-primary">Make Payment</button>

                                        <button
                                        class="btn btn-lemney-outline-primary"><a href="{{ route('user.homeservice.delete', $ongoing->id) }}" class="text-decoration-none" style="color: inherit">Cancel
                                        Order</a></button>

                                    @elseif ($ongoing->pay == 'approved')
                                        <span
                                        class="btn btn-lemney-primary">Payment Approved</span>
                                    @endif




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
                                            <form action="{{ route('user.homeservice.payment.upload') }}" enctype="multipart/form-data" method="post">
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
