<!-- Footer -->
<footer class="bg-black text-white">

    <div class="container-fluid py-3">

        <!-- Social media handles -->
        <div class="my-3">
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook-f"></i>
            <span>lemney_ltf | lemney.com ltd</span>
        </div>

        <!-- Logo -->
        <div class="my-3">
            <img src="{{ asset('assets/img/logo.png') }}" alt="" height="48">
        </div>

        <!-- Footer information and details -->
        <div class="my-3">

            <div class="row">

                <!-- Contact Information -->
                <div class="col-md-3 my-3">
                    <h5>Contact Information</h5>

                    <!-- Service hours -->
                    <div class="my-2">
                        <h6>Service Hours</h6>
                        <div>Monday to Friday 9 to 6pm</div>
                    </div>

                    <!-- Phone number -->
                    <div class="my-2">
                        <h6>Phone Number</h6>
                        <div>+234 911 919 4182</div>
                    </div>

                    <!-- Email -->
                    <div class="my-2">
                        <h6>Email</h6>
                        <div>support@lemney.com</div>
                    </div>
                </div>

                <!-- Services -->
                <div class="col-md-3 my-3">
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('user.honey') }}" class="link">Honey Sale</a></li>
                        <li><a href="{{ route('user.logistics') }}" class="link">Logistics</a></li>
                        <li><a href="{{ route('user.homeservice') }}" class="link">Home Service</a></li>
                        <li><a href="" class="link">Consultancy</a></li>
                    </ul>
                </div>

                <!-- Policy -->
                <div class="col-md-3 my-3">
                    <h5>Policy</h5>
                    <ul class="list-unstyled">
                        <li><a href="" class="link">FAQ</a></li>
                        <li><a href="" class="link">Terms and Condition</a></li>
                        <li><a href="" class="link">Privacy Policy</a></li>
                        <li><a href="" class="link">About Us</a></li>
                    </ul>
                </div>

                <!-- Get Help -->
                <div class="col-md-3 my-3">
                    <h5>Get Help</h5>
                    <ul class="list-unstyled">
                        <li><a href="" class="link">Track Order</a></li>
                        <li><a href="" class="link">Shipping and Delivery</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</footer>
</body>

</html>
