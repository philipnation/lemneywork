@include('layouts.authheader')
    <!-- Main -->
    <main>

        <div class="container-fluid bg-lemney-primary-gradient text-white py-5">
            <h2 class="text-uppercase text-center my-3 fw-bold">Create Your Lemney Account</h2>

            <div class="login-form-container">

                <!-- Form -->
                <div class="login-form bg-white text-dark rounded-4 mx-auto px-3 px-md-4 py-4 mt-4"
                    style="max-width: 480px;">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @elseif (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="post">

                        <!-- Name - Surname and First Name -->
                        <div class="row">
                            @csrf

                            <!-- Surname -->
                            <div class="col-md-6 form-field mb-3">
                                <label for="surname" class="form-label">Surname</label>
                                <input type="text" name="surname" id="surname" class="form-control" required>
                            </div>

                            <!-- First Name -->
                            <div class="col-md-6 form-field mb-3">
                                <label for="firstname" class="form-label">Firstname</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" required>
                            </div>
                        </div>

                        <!-- Email address -->
                        <div class="form-field mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email"  required>
                        </div>

                        <!-- Email address -->
                        <div class="form-field mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" name="phone" id="phone"  required>
                        </div>

                        <!-- Email address -->
                        <div class="form-field mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address"  required>
                        </div>

                        <!-- Password -->
                        <div class="form-field mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-field mb-3">
                            <label for="password-confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="pconfirmation"
                                id="password-confirmation" required>
                        </div>


                        <!-- Agree to Terms and Condition Section -->
                        <div class="form-field mb-3 d-flex align-items-center justify-content-center">
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="agree" id="agree" class="form-check">
                                <label for="agree" class="form-label mb-0">
                                    I have agreed to <a href="" class="link fw-semibold">Terms and Conditions</a>
                                </label>
                            </div>
                        </div>


                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="btn btn-block d-block w-100 bg-lemney-primary-2 text-white text-uppercase py-2 my-3 fw-semibold">
                                Create Account
                            </button>
                            <button type="button"
                                class="btn btn-block d-block w-100 btn-lemney-outline-primary py-2 my-3">
                                <img src="{{ asset('assets/img/google-icons.png') }}" alt="" class="img-fluid me-1">
                                <a href="{{ route('auth.google') }}" class="text-black" style="text-decoration: none;">Sign Up With Google</a>
                            </button>
                        </div>

                        <div class="text-center mb-2">
                            I already have an account, <a href="{{ route('login') }}" class="fw-bold link">Sign In</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </main>

    @include('layouts.authfooter')
