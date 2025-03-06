@include('layouts.authheader')

    <!-- Main -->
    <main>

        <div class="container-fluid bg-lemney-primary-gradient text-dark py-5">

            <div class="container">

                <div class="text-center">
                    <h2 class="my-3 fw-semibold text-uppercase">OTP Verfication?</h2>
                    <p class="lead fs-6">Enter the OTP sent to <strong class="fw-bold">{{ Auth::user()->email }}</strong>
                    </p>
                </div>

                <!-- Form Container -->
                <div class="py-2 py-md-4 mx-auto" style="max-width: 480px;">
                    <form action="{{ route('user.verify') }}" method="post" id="verify-otp-form">

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @elseif (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- OTP Code -->
                        <div class="my-2">
                            @csrf

                            <!-- Actual OTP Input to Submit -->
                            <input type="hidden" name="otp" id="otp-actual">

                            <!-- OTP Input Boxes -->
                            <div class="d-flex align-items-center justify-content-center gap-2 otp-input-boxes">
                                <input type="text" inputmode="numeric" name="otp-input-1" id="otp-input-1"
                                    class="form-control text-center p-2 p-md-3 fw-semibold"
                                    style="width: 48px; height: 48px;">
                                <input type="text" inputmode="numeric" name="otp-input-2" id="otp-input-2"
                                    class="form-control text-center p-2 p-md-3 fw-semibold"
                                    style="width: 48px; height: 48px;">
                                <input type="text" inputmode="numeric" name="otp-input-3" id="otp-input-3"
                                    class="form-control text-center p-2 p-md-3 fw-semibold"
                                    style="width: 48px; height: 48px;">
                                <input type="text" inputmode="numeric" name="otp-input-4" id="otp-input-4"
                                    class="form-control text-center p-2 p-md-3 fw-semibold"
                                    style="width: 48px; height: 48px;">
                                <input type="text" inputmode="numeric" name="otp-input-5" id="otp-input-5"
                                    class="form-control text-center p-2 p-md-3 fw-semibold"
                                    style="width: 48px; height: 48px;">
                                <input type="text" inputmode="numeric" name="otp-input-6" id="otp-input-6"
                                    class="form-control text-center p-2 p-md-3 fw-semibold"
                                    style="width: 48px; height: 48px;">
                            </div>
                        </div>

                        <!-- Resend OTP -->
                        <div class="my-2 mt-4 text-center">
                            {{-- <p><strong>120 Secs</strong></p> --}}
                            <p>Don't receive code? <strong><a href="{{ route('resend.code.now') }}" class="text-white" style="text-decoration: none">Re-send</a></strong></p>
                        </div>

                        <!-- Submit Button -->
                        <div class="my-2">
                            <div class="d-grid">
                                <button
                                class="btn btn-dark py-2 my-3"
                                type="submit"
                                id="submit-otp">

                                <i class="fas fa-check-circle me-2"></i>
                                    Submit
                                </button>
                            </div>

                        </div>

                    </form>
                </div>

            </div>

        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const inputs = document.querySelectorAll(".otp-input-boxes input");

    inputs.forEach((input, index) => {
        input.addEventListener("input", (e) => {
            let value = e.target.value;
            if (value.length === 1) {
                if (index < inputs.length - 1) {
                    inputs[index + 1].focus(); // Move to next input
                }
            } else if (value.length > 1) {
                e.target.value = value.charAt(0); // Only take first character
            }
            document.getElementById("otp-actual").value = Array.from(inputs).map(input => input.value).join("");
        });

        input.addEventListener("keydown", (e) => {
            if (e.key === "Backspace" && input.value === "" && index > 0) {
                inputs[index - 1].focus(); // Move to previous input on backspace
            }
        });
        let otp = Array.from(inputs).map(input => input.value).join("");
        //alert("Entered OTP: " + otp);
    });
});

    </script>
    @include('layouts.authfooter')
