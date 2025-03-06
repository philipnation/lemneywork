@include('layouts.authheader')

<main>
    @include('layouts.user.sidebar')
            <!-- Main content -->
            <div class="container p-2 p-md-3 bg-light">

                <!-- Notifications -->
                <div class="notifications-container p-2">
                    @foreach ($notifications as $notification)
                        <div class="notification bg-white shadow-sm rounded-2 my-3 p-2 px-3 p-md-3 px-md-4"
                            data-bs-toggle="collapse" data-bs-target="#notificationCollapse{{ $notification->id }}">

                            <div>
                                <div class="d-flex align-items-center justify-content-between my-2 small">
                                    <h5 class="fs-5 fw-bold">{{ $notification->title }}</h5>
                                    <div class="d-flex align-items-center gap-2 text-lemney-primary">
                                        <svg width="12" height="14" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="6" cy="6" r="6" fill="#F37E21" />
                                        </svg>
                                        {{ $notification->date }} {{ $notification->time }}
                                    </div>
                                </div>
                                <p class="mb-0">{{ $notification->message }}</p>
                            </div>

                            <div class="notification-detail collapse" id="notificationCollapse{{ $notification->id }}">
                                <div class="bg-lemney-secondary rounded-3 p-3 my-3">
                                    <!-- Display Service Details Dynamically -->
                                    @if($notification->serviceDetails)
                                        @if($notification->service == 'house_listings')
                                            <div class="py-2">
                                                <b>Property Name:</b> {{ $notification->serviceDetails->property_name }} <br>
                                                <b>Price:</b> NGN {{ number_format($notification->serviceDetails->price) }} <br>
                                                <b>Location:</b> {{ $notification->serviceDetails->location }}, {{ $notification->serviceDetails->state }}
                                            </div>
                                        @elseif($notification->service == 'honeyorders')
                                            <div class="py-2">
                                                <b>Order Number:</b> {{ $notification->serviceDetails->orderno }} <br>
                                                <b>Recipient Name:</b> {{ $notification->serviceDetails->receipient_name }} <br>
                                                <b>Quantity:</b> {{ $notification->serviceDetails->quantity }} {{ $notification->serviceDetails->quantity_type }} <br>
                                                <b>Price:</b> NGN {{ number_format($notification->serviceDetails->price) }}
                                            </div>
                                        @endif
                                    @else
                                        <p>Service details not available.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </main>

@include('layouts.authfooter')
