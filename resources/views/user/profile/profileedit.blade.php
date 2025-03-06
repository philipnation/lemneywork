@include('layouts.authheader')

    <!-- Body -->
    <main>

        @include('layouts.user.sidebar')

            <!-- Main content -->
            <div class="container">

                <div class="p-2 p-md-5">
                    @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @elseif (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                    <form action="{{ route('user.profile.update') }}" method="post">
                        @csrf

                        <div class="row">

                            <!-- Surname -->
                            <div class="my-2 col-md-6">
                                <label for="surname" class="form-label fw-semibold">Surname</label>
                                <input type="text" name="surname" id="surname" value="{{ Auth::user()->surname }}" class="form-control">
                            </div>

                            <!-- First name -->
                            <div class="my-2 col-md-6">
                                <label for="firstname" class="form-label fw-semibold">Firstname</label>
                                <input type="text" name="firstname" id="firstname" value="{{ Auth::user()->firstname }}" class="form-control">
                            </div>

                            <!-- Email address -->
                            <div class="my-2 col-md-6">
                                <label for="email" class="form-label fw-semibold">Email address</label>
                                <input type="text" name="email" id="email" value="{{ Auth::user()->email }}" class="form-control">

                                <!--<div class="small d-flex align-items-center">
                                    <input type="checkbox" name="subscribe" id="subscribe" class="form-control-sm me-2">
                                    <label for="subscribe" class="form-label mb-0">Subscribe to Newsletter</label>
                                </div>-->
                            </div>

                            <!-- Phone number -->
                            <div class="my-2 col-md-6">
                                <label for="phone-number" class="form-label fw-semibold">Phone Number</label>
                                <input type="text" name="phone" id="phone-number" value="{{ Auth::user()->phone }}" class="form-control">
                            </div>

                            <!-- Default Shipping Address -->
                            <div class="my-2">
                                <label for="shipping-address" class="form-label fw-semibold">Default Shipping
                                    Address</label>
                                <input type="text" name="address" id="shipping-address" value="{{ Auth::user()->address }}" class="form-control">
                            </div>

                            <!-- Submit -->
                            <div class="my-3">
                                <div class="d-grid">
                                    <button class="btn btn-lemney-primary text-uppercase">Confirm Edit</button>
                                </div>
                            </div>

                        </div>


                    </form>
                </div>

            </div>
        </div>
    </main>

@include('layouts.authfooter')
