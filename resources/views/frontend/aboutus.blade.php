@include('layouts.authheader')

<main class="container py-5">
    <section class="text-center">
        <h1>About Us – Lemney.com Ltd</h1>
        <p>At Lemney.com Ltd, we are dedicated to simplifying life and delivering exceptional services that meet the diverse needs of our customers.</p>
    </section>

    <section>
        <h2>Who We Are</h2>
        <p>Lemney.com Ltd is a multi-service company registered under the Corporate Affairs Commission of Nigeria with the registration number RC: 8152401. Since our inception, we have grown into a trusted brand known for our commitment to excellence, integrity, and innovation.</p>
    </section>

    <section>
        <h2>Our Services</h2>
        <ul>
            <li><strong>Dispatch Riders Services:</strong> Fast and reliable delivery solutions.</li>
            <li><strong>Sales of Honey:</strong> 100% natural honey for a healthy lifestyle.</li>
            <li><strong>House Cleaning Services:</strong> Professional home and office cleaning.</li>
            <li><strong>Barbing Services:</strong> Premium grooming and haircuts.</li>
            <li><strong>House Agency Services:</strong> Seamless property rental and sales.</li>
            <li><strong>Pedicure and Manicure Services:</strong> Nail care and spa treatments.</li>
            <li><strong>Dry Cleaning and Laundry Services:</strong> Expert garment cleaning and care.</li>
            <li><strong>Consultancy Services:</strong> Business strategy and market analysis.</li>
        </ul>
    </section>

    <section>
        <h2>Our Mission</h2>
        <p>Our mission is to deliver exceptional services that enhance the quality of life for our customers.</p>
    </section>

    <section>
        <h2>Our Vision</h2>
        <p>We aim to become the leading provider of multi-service solutions in Nigeria.</p>
    </section>

    <section>
        <h2>Why Choose Us?</h2>
        <ul>
            <li>Quality Assurance</li>
            <li>Customer-Centric Approach</li>
            <li>Nationwide Reach</li>
            <li>Affordable and Transparent</li>
            <li>Trusted and Reliable</li>
        </ul>
    </section>

    <section>
        <h2>Our Values</h2>
        <ul>
            <li>Integrity</li>
            <li>Innovation</li>
            <li>Community</li>
            <li>Excellence</li>
        </ul>
    </section>

    <section>
        <h2>Our Story</h2>
        <p>Lemney.com Ltd was founded with a vision to simplify life for Nigerians by offering diverse and reliable services.</p>
    </section>

    <section>
        <h2>Get in Touch</h2>
        <p><strong>Address:</strong> No 5 Nwafor Orizu Street, Independence Layout, Enugu, Nigeria.</p>
        <p><strong>Email:</strong> customercare@gmail.com</p>
        <p><strong>Phone:</strong> +234 911 919 4182 | +234 704 578 3144</p>
    </section>
</main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var swiper = new Swiper(".swiperMain", {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        });
    </script>
@include('layouts.authfooter')
