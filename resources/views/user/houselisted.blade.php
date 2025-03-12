@include('layouts.authheader')

    <!-- Body -->
    <main>

        @include('layouts.user.sidebar')

            <!-- Main content -->
            <div class="flex-grow-1">
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

                <!-- House Listings -->
                <div class="px-3">

                    <div class="row">
                            <style>
                                .img-all{
                                    width: 50px;
                                    height: 50px;
                                    clip-path: circle();
                                }
                                
                                .img-img{
                                    height: 250px;
                                }
                            </style>

                        @foreach ($houses as $house)
                        <!-- House Listing 1 -->
                        <div class="col-md-4 py-2 py-md-3">
                            <div>
                                <!-- Card -->
                                <div class="card border shadow-sm">
                                    <div class="position-relative rounded-top">
                                        <img src="{{ asset('public/house_images') }}/{{ $house->img }}" class="card-img-top img-img"
                                            alt="Traditional Apartment">

                                        <div class="position-absolute top-0 h-100 w-100 d-flex flex-column justify-content-between small p-2"
                                            style="background-color: rgba(0, 0, 0, 0.6);">

                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <div class="bg-dark text-bg-dark p-2">
                                                        <span>{{ $house->property_name }}</span>
                                                        <br>
                                                        <span class="fw-semibold">NGN {{ number_format($house->price, 2) }}</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    @if ($house->status == 'pending')
                                                        <div class="bg-lemney-primary-2 text-bg-dark p-2">
                                                            {{ $house->status }}
                                                        </div>
                                                    @else
                                                        <div class="bg-success text-bg-dark p-2">
                                                            {{ $house->status }}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-between text-white">
                                                <div>
                                                    <div>
                                                        <i class="fa fa-location me-2"></i>
                                                        {{ $house->location }}, {{ $house->state }}
                                                    </div>
                                                    <div>
                                                        <i class="fa fa-house me-2"></i>
                                                        {{ $house->no_of_bedrooms }} Bedrooms
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    {{-- <span>2<i class="fa fa-video ms-1"></i></span> --}}
                                                    {{-- <span>2<i class="fa fa-image ms-1"></i></span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center justify-content-between p-2">
                                            <div class="d-flex align-items-center gap-1">
                                                <div class="rounded-circle">
                                                    <img src="{{ asset('public/profile_image') }}/{{ $house->profile_picture }}" alt="" class="img-all">
                                                </div>
                                                <div>
                                                    <div class="fw-semibold">{{ $house->contact_name }}</div>
                                                    <div class="small text-muted">{{ $house->contact_role }}</div>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="btn btn-lemney">
                                                    <a href="{{ route('user.houselisted.delete', $house->id) }}"><i class="fa fa-trash text-danger"></i></a>
                                                </button>
                                            </div>

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

    @include('layouts.authfooter')
