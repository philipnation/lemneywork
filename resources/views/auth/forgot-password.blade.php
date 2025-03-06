@include('layouts.authheader')

    <!-- Main -->
    <main>

        <div class="container-fluid bg-lemney-primary-gradient text-white py-5">

            <div class="container">

                <div class="text-md-center">
                    <h2 class="my-3 fw-semibold">Forgot Password?</h2>
                    <p class="lead fs-6">Don't worry! it happens. <br> Please enter your email, we'll send the the OTP
                    </p>
                </div>

                <!-- Form Container -->
                <div class="py-2 py-md-4 mx-md-auto" style="max-width: 480px;">

                    <form action="{{ route('password.email') }}" method="post">

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @elseif (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @csrf

                        <!-- Email address -->
                        <div class="my-2">
                            <input type="email" class="form-control p-2 p-md-3" name="email" id="email"
                                placeholder="Enter Email Address">
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <div class="d-grid">
                                <button class="btn btn-dark text-uppercase py-2 my-3">Continue
                                </button>
                            </div>

                        </div>

                    </form>
                </div>

            </div>

        </div>
    </main>

    @include('layouts.authfooter')
