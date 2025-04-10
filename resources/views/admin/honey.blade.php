@include('layouts.admin.header')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

            <!-- Main content -->
            <div class="flex-grow-1">

                <!--  -->
                <div class="p-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <!-- Empty div to push Search Bar to the end -->
                        <div>
                            <div class="d-md-none">
                                <!--  -->
                            </div>
                        </div>

                        <!--  -->
                        <div>
                            <!-- Search Bar -->
                            <div class="header-search-bar input-group d-flex align-items-stretch rounded-pill p-1">
                                <span class="rounded-start-pill ps-2">
                                    <button class="btn d-md-none" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasExample">
                                        <i class="fa fa-bars"></i>
                                    </button>

                                    <button class="btn d-none d-md-inline-block">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                </span>
                                <input type="search" name="search-keyword" id="search-keyword" class="form-control"
                                    placeholder="Search">
                                <span class="px-3 rounded-end-pill">
                                    <label for="search-keyword"
                                        class="form-label h-100 d-flex align-items-center justify-content-center"><i
                                            class="fa fa-search"></i></label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  -->
                <div class="p-3">

                    <!-- Notice -->
                    <div>
                        <p><strong>N/B: These items are mostly for those in <em>Transit</em></strong>.
                            All orders should
                            be treated with scrutiny to avoid complications. Upon completion of
                            continue
                            progress report of materials to ensure delivery and client update</p>
                    </div>

                    <!-- Title -->
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            {{-- <button class="btn btn-lemney-primary text-uppercase">Place Order</button> --}}
                        </div>


                    </div>

                    <br>
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @elseif (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Booked Services List -->
                    <!-- Awaiting Pricing and Approval -->
                    <div>

                        <div>

                            @foreach ($honeys as $honey)

                            <!-- Awaiting 2 -->
                            <div class="bg-lemney-secondary rounded-3 p-3 my-3">

                                <!--  -->
                                <div class="d-flex align-items-sm-center justify-content-between py-3">
                                    <div>
                                        <span
                                            class="border bg-lemney-secondary-2 text-lemney-primary fw-semibold px-3 py-2 rounded-4 small user-select-none">
                                            <span class="me-2">
                                                <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.17001 6.44L11 11.55L19.77 6.46997M11 20.61V11.54M18 13C19 13 19.9 13.36 20.6 13.97C20.61 13.92 20.61 13.88 20.61 13.83V8.17C20.61 6.79 19.62 5.11002 18.41 4.44002L13.07 1.48C11.93 0.84 10.07 0.84 8.92999 1.48L3.59 4.44002C2.38 5.11002 1.39001 6.79 1.39001 8.17V13.83C1.39001 15.21 2.38 16.89 3.59 17.56L8.92999 20.52C10.07 21.16 11.93 21.16 13.07 20.52L14.9 19.51C14.78 19.37 14.67 19.22 14.58 19.06C14.21 18.46 14 17.75 14 17M18 13C17.06 13 16.19 13.33 15.5 13.88C14.58 14.61 14 15.74 14 17M18 13C20.21 13 22 14.79 22 17C22 18.2 21.47 19.27 20.64 20C19.93 20.62 19.01 21 18 21C15.79 21 14 19.21 14 17M18.25 15.75V17.25L17 18"
                                                        stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            {{ $honey->status }}
                                        </span>
                                    </div>

                                    <div class="d-flex flex-column flex-md-row gap-2">
                                        <div class="d-flex align-items-center gap-1">
                                            <!-- Package Check -->
                                            <!--<button class="btn btn-lemney">
                                                <svg width="16" height="16" viewBox="0 0 26 28" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M23.2277 7.60019L12.1426 1.2002L1.0575 7.60019V20.4002L12.1426 26.8002M23.2277 7.60019L12.1426 14.8002M23.2277 7.60019V14.0002M12.1426 26.8002V14.8002M12.1426 26.8002L14.5419 25.415M12.1426 14.8002L1.74262 8.40019M16.9426 10.8002L6.54262 4.40019M18.5426 22.0002L20.1426 23.6002L24.9426 18.8002"
                                                        stroke="black" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>

                                            </button>-->
                                            <!--  -->
                                            <!--<button class="btn btn-lemney">
                                                <svg width="16" height="16" viewBox="0 0 39 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M25.4787 0.524432C29.1428 0.524432 32.4608 1.71471 34.8628 3.63841C37.2645 5.56248 38.75 8.22037 38.75 11.1555C38.75 14.0912 37.2645 16.749 34.8628 18.6728C33.9403 19.4121 32.8822 20.0428 31.7209 20.5395L31.8004 20.6019L31.5719 20.6023C29.747 21.3594 27.675 21.7871 25.4787 21.7871C21.8146 21.7871 18.4965 20.5967 16.0946 18.6728C14.7327 17.5818 13.6652 16.2547 12.9962 14.7745H16.327C16.8229 15.5791 17.4795 16.3083 18.2633 16.9358C19.9011 18.2482 22.0946 19.1164 24.5368 19.2955L20.7532 16.4497L28.0404 10.7469C28.9907 10.0032 29.4827 8.90304 29.4827 7.78303C29.4827 7.22394 29.3592 6.65529 29.1083 6.12048L29.108 6.12083C28.8553 5.58234 28.4742 5.08101 27.9614 4.66058C27.0521 3.91502 25.7396 3.42141 24.0061 3.42141V3.42323L22.1602 3.42397L22.1537 3.42544H2.70024C0.281329 3.42544 -1.25 1.98212 -1.25 0.521868H24.5664V0.52002C24.6948 0.52149 24.8238 0.525903 24.9525 0.532899C25.1269 0.527374 25.3028 0.524432 25.4787 0.524432ZM29.4541 18.8057C30.7011 18.3947 31.8235 17.7949 32.7639 17.0513C34.6203 15.5833 35.7686 13.5551 35.7686 11.3144C35.7686 9.12949 34.6757 7.14613 32.9001 5.68772C33.3296 6.53393 33.5664 7.43635 33.553 8.34937C33.5286 10.0323 32.6499 11.7685 30.5579 13.285L26.3276 16.362L26.7301 16.677L29.4541 18.8057ZM18.4379 14.6644C18.4379 14.9701 18.8275 15.1609 19.1386 14.921L24.837 10.2591H9.43323C9.43323 11.4905 11.122 13.1046 12.4733 13.1046H18.4379V14.6644ZM26.5627 8.47033C27.2941 7.38537 26.4514 5.48896 24.5597 5.48896H3.96739C3.96739 7.04953 5.68861 8.47033 7.55273 8.47033H26.5627Z"
                                                        fill="black" />
                                                </svg>
                                            </button>-->
                                            <!-- Location -->

                                            @if ($honey->pay == 'pending')
                                            <button class="btn btn-lemney">
                                                <!--<svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M12.0001 -0.00146484C16.4941 -0.00146484 20.2391 3.7435 20.2391 8.23757C20.2391 9.70429 19.7349 11.1508 19.0303 12.4614C18.323 13.777 17.3867 15.0055 16.4564 16.0513C15.5244 17.0992 14.5827 17.9814 13.849 18.6048C13.4825 18.9161 13.1617 19.1681 12.9144 19.3465C12.7923 19.4346 12.6779 19.5121 12.5791 19.5714C12.531 19.6002 12.4724 19.6335 12.4101 19.6623C12.3791 19.6765 12.3345 19.6957 12.2813 19.7127C12.2394 19.7261 12.1348 19.7574 12.0001 19.7574C11.8642 19.7574 11.7587 19.7256 11.7167 19.712C11.6632 19.6947 11.6184 19.6753 11.5874 19.6609C11.525 19.6318 11.4663 19.5984 11.4183 19.5692C11.3195 19.5094 11.2052 19.4312 11.0831 19.3424C10.836 19.1628 10.5153 18.909 10.149 18.5957C9.41567 17.9686 8.47439 17.0818 7.54283 16.0311C6.61312 14.9825 5.67726 13.7529 4.97015 12.4403C4.26607 11.1334 3.76106 9.69279 3.76106 8.23757C3.76106 3.7435 7.50602 -0.00146484 12.0001 -0.00146484ZM12.0001 10.6982C10.6411 10.6982 9.53946 9.59653 9.53946 8.23757C9.53946 6.8786 10.6411 5.77693 12.0001 5.77693C13.3591 5.77693 14.4607 6.8786 14.4607 8.23757C14.4607 9.59653 13.3591 10.6982 12.0001 10.6982ZM17.313 17.4108C17.6293 17.0552 17.9457 16.6827 18.2563 16.2957H20.5588C20.9017 16.2957 21.2116 16.5 21.3467 16.8152L23.9142 22.8063C24.0277 23.0712 24.0006 23.3753 23.842 23.6158C23.6834 23.8563 23.4145 24.001 23.1265 24.001H0.873746C0.585625 24.001 0.316777 23.8563 0.158169 23.6158C-0.000439687 23.3753 -0.0275883 23.0712 0.0859093 22.8063L2.65351 16.8152C2.78858 16.5 3.09847 16.2957 3.44137 16.2957H5.76479C6.06834 16.6737 6.37734 17.0379 6.68606 17.3861C7.82012 18.6653 8.9662 19.7451 9.85843 20.508C10.3042 20.8892 10.6927 21.1966 10.9903 21.4129C11.1376 21.5201 11.2728 21.6123 11.3873 21.6816C11.4432 21.7155 11.5083 21.7525 11.5759 21.7841C11.6096 21.7998 11.6566 21.8201 11.712 21.8379C11.7559 21.8521 11.8629 21.8844 12 21.8844C12.1359 21.8844 12.2421 21.8526 12.2858 21.8388C12.3409 21.8211 12.3878 21.801 12.4214 21.7854C12.4889 21.7542 12.554 21.7176 12.6099 21.684C12.7244 21.6152 12.8597 21.5237 13.007 21.4174C13.3048 21.2026 13.6935 20.8974 14.1394 20.5186C15.032 19.7604 16.1785 18.6862 17.313 17.4108Z"
                                                        fill="black" />
                                                </svg>-->
                                                <a href="{{ asset('public/honeypayment/'.$honey->image) }}" target="_blank"><i class="fa fa-eye"></i></a>
                                            </button>
                                            @endif
                                        </div>
                                        @if ($honey->status == 'pending')
                                            <button class="btn btn-lemney-primary px-md-4"><a href="{{ route('admin.honey.update.status', [$honey->id, 'ongoing']) }}" class="text-white text-decoration-none">Approve</a></button>
                                        @elseif ($honey->status == 'ongoing' && $honey->pay == 'pending')
                                            <button class="btn btn-lemney-primary px-md-4"><a href="{{ route('admin.honey.update.payment', [$honey->id, 'approved']) }}" class="text-white text-decoration-none">Confirm Payment</a></button>
                                        @elseif ($honey->status == 'ongoing' && $honey->pay == 'approved')
                                            <button class="btn btn-lemney-primary px-md-4"><a href="{{ route('admin.honey.update.status', [$honey->id, 'completed']) }}" class="text-white text-decoration-none">Complete Order</a></button>
                                        @elseif ($honey->status == 'ongoing' && $honey->pay == null)
                                            <button class="btn btn-lemney-primary px-md-4"><a href="{{ route('admin.honey.update.status', [$honey->id, 'cancelled']) }}" class="text-white text-decoration-none">Cancel Order</a></button>
                                        @endif
                                    </div>
                                </div>

                                <!-- Order Information -->
                                <div class="bg-white p-3 rounded-4">
                                    <div class="py-2 d-flex align-items-center justify-content-between">
                                        <div>
                                            <div><b>Order Date: </b>{{ $honey->date }}</div>
                                            <div><b>Order Number: </b>{{ $honey->orderno }}</div>
                                            <div><b>Payment Method: </b><span>Transfer</span></div>
                                        </div>
                                        <div>
                                            <div><b>Recipient Name: </b>{{ $honey->receipient_name }}</div>
                                            <div><b>Call Line: </b>{{ $honey->phone }}</div>
                                            <div><b>Address: </b><span>{{ $honey->receipient_pickup_address }}, {{ $honey->receipient_lga }}, {{ $honey->receipient_state }}</span></div>
                                        </div>
                                    </div>
                                    <!-- Order Details -->
                                    <div class="py-2 d-flex align-content-center justify-content-between gap-3">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/img/order_img_natural_honey.png') }}" alt=""
                                                class="img-fluid">
                                            <div class="ps-1">
                                                <b>Natural Honey</b> <br>
                                                <span>{{ $honey->quantity_type }}</span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex flex-column flex-md-row align-items-md-center justify-content-between text-end text-md-center gap-2 flex-grow-1">
                                            <div>
                                                <b>QTY</b><br>
                                                <span>{{ $honey->quantity }} {{ $honey->quantity_type }}</span>
                                            </div>
                                            <div>
                                                <b>Cost</b><br>
                                                <span class="text-uppercase">NGN {{ number_format($honey->price, 2) }}</span>
                                            </div>
                                            <!--<div>
                                                <b>Delivery</b><br>
                                                <span class="text-uppercase">1 Day</span>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>

                    <br><br>

                    <!-- History -->
                    <div>

                        <!-- Title -->
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="fs-4  text-uppercase fw-bold">History</h3>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <!-- Order Type -->
                                <select name="order-type" id="order-type" class="form-select">
                                    <option value="type1">Type 1</option>
                                    <option value="type2">Type 2</option>
                                    <option value="type3">Type 3</option>
                                    <option value="type4">Type 4</option>
                                    <option value="type5">Type 5</option>
                                </select>
                                <!-- Filter -->
                                <button class="btn btn-lemney">
                                    <i class="fa fa-filter"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Content -->
                        <div>


                            @foreach ($honey_history as $honey_histor)
                            <!-- 1 -->
                            <div class="bg-lemney-secondary rounded-3 p-3 my-3">

                                <!--  -->
                                <div class="d-flex align-items-sm-center justify-content-between py-3">
                                    <div>
                                        <span
                                            class="border bg-lemney-secondary-2 text-lemney-primary fw-semibold px-3 py-2 rounded-4 small user-select-none">
                                            <span class="me-2">
                                                <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.6708 6.1999L9.35693 1.3999L1.04309 6.1999V15.7999L9.35693 20.5999M17.6708 6.1999L9.35693 11.5999M17.6708 6.1999V10.9999M9.35693 20.5999V11.5999M9.35693 20.5999L11.1564 19.561M9.35693 11.5999L1.55693 6.7999M12.9569 8.5999L5.15693 3.7999M14.1569 16.9999L15.3569 18.1999L18.9569 14.5999"
                                                        stroke="black" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            {{ $honey_histor->status }}
                                        </span>
                                    </div>
                                </div>

                                <!-- Order Information -->
                                <div class="bg-white p-3 rounded-4">
                                    <div class="py-2 d-flex align-items-center justify-content-between">
                                        <div>
                                            <div><b>Order Date: </b>{{$honey_histor->date }}</div>
                                            <div><b>Order Number: </b>{{ $honey_histor->orderno }}</div>
                                            <div><b>Payment Method: </b><span>{{ $honey_histor->payment }}</span></div>
                                        </div>
                                        <div>
                                            <div><b>Recipient Name: </b>{{ $honey_histor->receipient_name }}</div>
                                            <div><b>Call Line: </b>{{ $honey_histor->phone }}</div>
                                            <div><b>Address: </b><span>{{ $honey_histor->receipient_pickup_address }}, {{ $honey->receipient_lga }}, {{ $honey->receipient_state }}</span></div>
                                        </div>
                                    </div>
                                    <!-- Order Details -->
                                    <div class="py-2 d-flex align-content-center justify-content-between gap-3">
                                        <div class="d-flex align-items-center">
                                            <img src="../../../assets/img/salon_styled_hair.png" alt=""
                                                class="img-fluid">
                                            <div class="ps-1">
                                                {{-- <b>Home Service</b> <br> --}}
                                                <span>HONEY ORDER</span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex flex-column flex-md-row align-items-md-center justify-content-between text-end text-md-center gap-2 flex-grow-1">
                                            <!--<div>
                                                <b>Schedule</b><br>
                                                <span>Saturday, 11 Nov. 2024 9:00 am</span>
                                            </div>-->
                                            <div>
                                                <b>Cost</b><br>
                                                <span class="text-uppercase">NGN {{ number_format($honey_histor->price, 2) }}</span>
                                            </div>
                                            <!--<div>
                                                <b>Service Location</b><br>
                                                <span>GetStyled Krib, Enugu</span>
                                            </div>-->
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


@include('layouts.admin.footer')
