@include('layouts.authheader')
    <!-- Main -->
    <main>

        <div class="container-fluid bg-lemney-primary-gradient text-white py-5">
            <h2 class="text-uppercase text-center my-3 fw-bold">Reset your password</h2>

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
                    <form action="{{ route('password.store') }}" method="post">

                        <!-- Name - Surname and First Name -->
                        <div class="row">
                            @csrf
                        <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}" readonly hidden required>

                        <!-- Password -->
                        <div class="form-field mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-field mb-3">
                            <label for="password-confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation"
                                id="password-confirmation" required>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="btn btn-block d-block w-100 bg-lemney-primary-2 text-white text-uppercase py-2 my-3 fw-semibold">
                                Change Password
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
