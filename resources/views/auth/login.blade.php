@include('layouts.authheader')

    <!-- Main -->
    <main>

        <div class="container-fluid bg-lemney-primary-gradient text-white py-5">
            <h2 class="text-uppercase text-center my-3 fw-bold">Login to Your Lemney Account</h2>

            <div class="login-form-container">

                <!-- Form -->
                <div class="login-form bg-white text-dark rounded-4 mx-auto px-3 px-md-4 py-4 mt-4"
                    style="max-width: 480px;">
                    <form action="{{ route('login') }}" method="post">

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
                        <div class="form-field mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>

                        <!-- Password -->
                        <div class="form-field mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>

                        <!-- Remember Me section -->
                        <div class="form-field mb-3 d-flex align-items-center justify-content-between">
                            <div>
                                <input type="checkbox" name="remember-me" id="remember-me">
                                <label for="remember-me">Remember Me</label>
                            </div>
                            <div><a href="{{ route('password.request') }}" class="link">Forgot Password?</a></div>
                        </div>


                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="btn btn-block d-block w-100 bg-lemney-primary-2 text-white text-uppercase py-2 my-3">Sign
                                In
                            </button>
                            <button type="button"
                                class="btn btn-block d-block w-100 btn-lemney-outline-primary py-2 my-3">
                                <img src="{{ asset('assets/img/google-icons.png') }}" alt="" class="img-fluid me-1">
                                <a href="{{ route('auth.google') }}" class="text-black" style="text-decoration: none;">Sign In With Google</a>
                            </button>
                        </div>

                        <div class="text-center mb-2">
                            I don't have an account, <a href="{{ route('register') }}" class="fw-bold link">Sign Up</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </main>

@include('layouts.authfooter')
