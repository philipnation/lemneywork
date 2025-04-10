@include('layouts.admin.header')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
    .card-box {
      width: 120px;
      height: 120px;
      border-radius: 12px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: white;
    }
    .card-dark { background-color: #552f00; }
    .card-orange { background-color: #f7931e; }
    .card-yellow { background-color: #ffc20e; }

    .bar-label {
      border-radius: 12px;
      overflow: hidden;
      display: flex;
      width: 100%;
      color: white;
    }
    .bar-left {
      background-color: #552f00;
      padding: 12px;
      flex: 1;
    }
    .bar-right-orange {
      background-color: #f7931e;
      padding: 12px;
      width: 60px;
      text-align: center;
      color: black;
    }
    .bar-right-yellow {
      background-color: #ffc20e;
      padding: 12px;
      width: 60px;
      text-align: center;
      color: black;
    }
  </style>
            <!-- Main content -->
            <div class="flex-grow-1">

                <div class="p-3 d-block d-lg-flex w-100 m-0" style="align-items: center;">
                    <div class="container">
                        <h3 class="mb-4 fw-semibold text-dark">Statistics</h3>
                        <div class="d-flex justify-content-center">
                        <canvas id="activityChart"></canvas>
                        </div>
                        <div class="d-flex justify-content-center gap-4 mt-4">
                        <div class="d-flex align-items-center gap-2">
                            <div style="width: 15px; height: 15px; background-color: #552f00; border-radius: 50%;"></div>
                            <span class="text-dark">Honey Sales</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div style="width: 15px; height: 15px; background-color: #f7901e; border-radius: 50%;"></div>
                            <span class="text-dark">Logistics</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div style="width: 15px; height: 15px; background-color: #ffd32d; border-radius: 50%;"></div>
                            <span class="text-dark">Home Service</span>
                        </div>
                        </div>
                    </div>

                    <br>

                    <div class="container rounded text-center">
                        <!--<p class="mb-4 fs-5">
                        These records are by number of fulfilled order once shipped to customer. Record cannot be tampered with and are absolute
                        </p>-->

                        <div class="d-flex gap-4 flex-wrap align-items-center mb-4">
                        <div class="card-box card-dark">
                            <h2> {{ number_format($honey_total, 0) }}</h2>
                            <div>Honey</div>
                            <div>Orders</div>
                        </div>
                        <div class="card-box card-orange">
                            <h2>{{ number_format($logistics_total, 0)}}</h2>
                            <div>Logistics</div>
                        </div>
                        <div class="card-box card-yellow">
                            <h2>{{ number_format($homeservice_total, 0) }}</h2>
                            <div>Home</div>
                            <div>Service</div>
                        </div>
                        </div>

                        <div class="d-flex flex-column gap-3">
                        <div class="bar-label">
                            <div class="bar-left">
                            Web Visits (Today)
                            </div>
                            <div class="bar-right-orange">
                            {{ number_format($visits, 0) }}
                            </div>
                        </div>

                        <div class="bar-label">
                            <div class="bar-left">
                            Reg. Users
                            </div>
                            <div class="bar-right-yellow">
                            {{ number_format($users_total, 0) }}
                            </div>
                        </div>
                        </div>
                    </div>
                </div>


                <!--  -->
                <div class="p-3">

                    <!-- Notice -->
                    <div>
                        <p>All orders should
                            be treated with scrutiny to avoid complications. Upon completion of
                            continue
                            progress report of materials to ensure delivery and client update</p>
                    </div>

                    <!-- Title -->
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            {{-- <button class="btn btn-lemney-primary text-uppercase">Place Home Service Option</button> --}}
                        </div>
                        <div class="d-flex align-items-center gap-2">

                            <!-- Filter -->
                            <button class="btn btn-lemney">
                                <i class="fa fa-filter"></i>
                            </button>
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


                            @foreach ($homeservices as $homeservice)
                            <!-- Awaiting 1 -->
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
                                            {{ $homeservice->status }}
                                        </span>
                                    </div>

                                    <div class="d-flex flex-column flex-md-row gap-2">
                                        <div class="d-flex align-items-center gap-1">

                                            <!--  -->
                                            <!-- <button class="btn btn-lemney">
                                                <svg width="16" height="16" viewBox="0 0 39 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M25.4787 0.524432C29.1428 0.524432 32.4608 1.71471 34.8628 3.63841C37.2645 5.56248 38.75 8.22037 38.75 11.1555C38.75 14.0912 37.2645 16.749 34.8628 18.6728C33.9403 19.4121 32.8822 20.0428 31.7209 20.5395L31.8004 20.6019L31.5719 20.6023C29.747 21.3594 27.675 21.7871 25.4787 21.7871C21.8146 21.7871 18.4965 20.5967 16.0946 18.6728C14.7327 17.5818 13.6652 16.2547 12.9962 14.7745H16.327C16.8229 15.5791 17.4795 16.3083 18.2633 16.9358C19.9011 18.2482 22.0946 19.1164 24.5368 19.2955L20.7532 16.4497L28.0404 10.7469C28.9907 10.0032 29.4827 8.90304 29.4827 7.78303C29.4827 7.22394 29.3592 6.65529 29.1083 6.12048L29.108 6.12083C28.8553 5.58234 28.4742 5.08101 27.9614 4.66058C27.0521 3.91502 25.7396 3.42141 24.0061 3.42141V3.42323L22.1602 3.42397L22.1537 3.42544H2.70024C0.281329 3.42544 -1.25 1.98212 -1.25 0.521868H24.5664V0.52002C24.6948 0.52149 24.8238 0.525903 24.9525 0.532899C25.1269 0.527374 25.3028 0.524432 25.4787 0.524432ZM29.4541 18.8057C30.7011 18.3947 31.8235 17.7949 32.7639 17.0513C34.6203 15.5833 35.7686 13.5551 35.7686 11.3144C35.7686 9.12949 34.6757 7.14613 32.9001 5.68772C33.3296 6.53393 33.5664 7.43635 33.553 8.34937C33.5286 10.0323 32.6499 11.7685 30.5579 13.285L26.3276 16.362L26.7301 16.677L29.4541 18.8057ZM18.4379 14.6644C18.4379 14.9701 18.8275 15.1609 19.1386 14.921L24.837 10.2591H9.43323C9.43323 11.4905 11.122 13.1046 12.4733 13.1046H18.4379V14.6644ZM26.5627 8.47033C27.2941 7.38537 26.4514 5.48896 24.5597 5.48896H3.96739C3.96739 7.04953 5.68861 8.47033 7.55273 8.47033H26.5627Z"
                                                        fill="black" />
                                                </svg>
                                            </button> -->

                                        </div>

                                        @if ($homeservice->status == 'ongoing')
                                        <form action="{{ route('admin.homeservice.update') }}" method="post">
                                            @csrf
                                            <div class="flex-column">
                                                <input type="hidden" name="id" value="{{ $homeservice->id }}">
                                                <select name="status" id="" class="form-control text-black">
                                                    <option value="">--select status--</option>
                                                    <option value="completed">Delivered</option>
                                                    <option value="cancelled">Cancelled</option>
                                                </select>
                                                <button type="submit" class="btn btn-lemney-primary px-md-4">Update</button>
                                            </div>
                                        </form>
                                        @endif

                                    </div>
                                </div>

                                <!-- Order Information -->
                                <div class="bg-white p-3 rounded-4">
                                    <div class="py-2 d-flex align-items-center justify-content-between">
                                        <div>
                                            <div><b>Order Date: </b>{{ $homeservice->date }}</div>
                                            <div><b>Order Number: </b>{{ $homeservice->orderno }}</div>
                                            <div><b>Payment Method: </b><span>Transfer</span></div>
                                        </div>
                                        <div>
                                            <div><b>Recipient Name: </b>{{ $homeservice->receipient_name }}</div>
                                            <div><b>Call Line: </b>{{ $homeservice->phone }}</div>
                                            <div><b>Address: </b><span>{{ $homeservice->service_location }}, {{ $homeservice->receipient_lga }}, {{ $homeservice->receipient_state }}</span></div>
                                        </div>
                                    </div>
                                    <!-- Order Details -->
                                    <div class="py-2 d-flex align-content-center justify-content-between gap-3">
                                        <div class="d-flex align-items-center">
                                            <img src="../../../assets/img/salon_styled_hair.png" alt=""
                                                class="img-fluid" width="">
                                            <div class="ps-1">
                                                <b>Home Service</b> <br>
                                                <span>{{ $homeservice->service }}</span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex flex-column flex-md-row align-items-md-center justify-content-between text-end text-md-center gap-2 flex-grow-1">
                                            <div>
                                                <b>Schedule</b><br>
                                                <span>{{ $homeservice->date }} {{ $homeservice->time }}</span>
                                            </div>
                                            <!--<div>
                                                <b>Cost</b><br>
                                                <span class="text-uppercase">NGN 17,000</span>
                                            </div>
                                            <div>
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


                </div>


            </div>
        </div>
    </main>

    <script>
        const ctx = document.getElementById('activityChart').getContext('2d');
        new Chart(ctx, {
          type: 'pie',
          data: {
            labels: ['Home Service', 'Logistics', 'Honey Sales'],
            datasets: [{
              data: [{{ $homePercent }}, {{ $logisticsPercent }}, {{ $honeyPercent }}],
              backgroundColor: ['#ffd32d', '#f7901e', '#552f00'],
              borderWidth: 0
            }]
          },
          options: {
            plugins: {
              legend: {
                display: false
              },
              tooltip: {
                enabled: false
              }
            }
          }
        });
      </script>
@include('layouts.admin.footer')
