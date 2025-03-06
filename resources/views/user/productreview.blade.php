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

                <!-- Title -->
                <!--<div class="border-bottom d-flex p-3">-->
                    <!-- Toggle (mobile) sidebar -->
                    <!--<a class="btn px-0 me-3 d-md-none border-0" data-bs-toggle="offcanvas" href="#offcanvasExample"
                        role="button" aria-controls="offcanvasExample">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="container row text-muted py-2">
                        <div class="col-6 col-md-3"><a href="" class="link text-dark">Awaiting Review</a>
                        </div>
                        <span class="col-6 col-md-3"><a href="" class="link">Reviewed</a></span>
                    </div>
                </div>-->

                <!-- Dashboard -->
                <div class="p-3 p-md-4">

                    @foreach ($reviews as $review)
                        <!-- First Order -->
                        <div class="bg-lemney-secondary rounded-3 p-3 my-3">
                            <!-- Order Information -->
                            <div class="py-2 d-flex align-items-center justify-content-between">
                                <div>
                                    <div><b>Date: </b>{{ $review->created_at }}</div>
                                    <div><b>Rating: </b>{{ $review->rating }} star</div>
                                </div>
                                <div>
                                    <div class="text-end">
                                        <span class="rounded-1 p-2 text-lemney-primary fw-bold bg-lemney-secondary-2">
                                            {{ $review->status }}</span><br />
                                        <!-- Show on mobile screen - hide on small screens -->

                                    </div>
                                </div>
                            </div>
                            <!-- Order Details -->
                            <div class="py-2 d-flex align-content-center justify-content-between text-center">
                                <div class="d-flex align-items-center">
                                    <img src="../../assets/img/order_img_natural_honey.png" alt="" class="img-fluid">
                                    <div class="ps-1">
                                        <b>Comment</b> <br>
                                        <span>{{ $review->comment }}</span>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="d-flex align-items-center justify-content-end">
                                <button
                                    class="btn btn-lemney-primary text-white fw-bold d-inline-block text-uppercase"><a href="{{ route('user.review.delete', $review->id) }}" class="text-white text-decoration-none">Delete</a></button>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </main>

@include('layouts.authfooter')
