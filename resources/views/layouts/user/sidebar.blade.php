<!-- Breadcrumbs -->
<div class="d-flex align-items-center px-4 px-md-5 bg-lemney-primary-1">
    <!-- Toggle (mobile) sidebar -->
    <a class="btn px-0 me-3 d-md-none border-0" data-bs-toggle="offcanvas" href="#offcanvasExample"
        role="button" aria-controls="offcanvasExample">
        <i class="fa fa-bars"></i>
    </a>

    <div class="py-3" style="--bs-breadcrumb-divider: '⋙';" aria-label="breadcrumb">
        <ol class="breadcrumb fw-bold my-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="link">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page" id="current-page"></li>
            {{-- <li class="breadcrumb-item active">House Cleaning</li> --}}
        </ol>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let path = window.location.pathname;
        let page = path.split("/").pop().replace(".html", "").replace("-", " ");
        page = page.charAt(0).toUpperCase() + page.slice(1); // Capitalize first letter

        document.getElementById("current-page").textContent = page;
    });
</script>

<!--  -->
<div class="d-md-flex ps-md-4">

    <!-- Side bar (Desktop) -->
    <div class="account-management-sidebar border-end px-4 py-3 d-none d-md-block" style="min-width: 240px;">
        <h5 class="my-2">Account Management</h5>
        <ul class="list-unstyled text-muted">
            <li class="py-1"><a href="{{ route('user.orderhistory') }}" class="link">My Order History</a></li>
            <li class="py-1"><a href="{{ route('user.profile') }}" class="link">Personal Information</a></li>
            <li class="py-1"><a href="{{ route('user.honey') }}" class="link">Honey Order</a></li>
            <li class="py-1"><a href="{{ route('user.review.index') }}" class="link">Product Review</a>
            </li>
            <li class="py-1"><a href="{{ route('user.logistics') }}" class="link">Logistics</a></li>
            <li class="py-1"><a href="{{ route('user.homeservice') }}" class="link">Home Service</a></li>
            {{-- <li class="py-1"><a href="./booked_service.html" class="link">Booked Service</a></li> --}}
            <li class="py-1"><a href="{{ route('user.notification') }}" class="link">Notifications</a></li>
            <li class="py-1"><a href="{{ route('user.partnership') }}" class="link">Partnership</a></li>
            <li class="py-1"><a href="{{ route('user.houselisting') }}" class="link">House Listing</a></li>
            <li class="py-1"><a href="{{ route('user.savedsubmission') }}" class="link">Saved Submission</a></li>
            <li class="py-1"><a href="{{ route('user.houselisted') }}" class="link">House Listed</a></li>
        </ul>
    </div>

    <!-- Side bar (mobile - open on click) -->
    <div class="container-fluid account-management-sidebar px-4 px-md-5 d-md-none">
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header py-2">
                <h5 class="offcanvas-title my-2" id="offcanvasExampleLabel">Account Management</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body py-0 my-0">
                <div>
                    <ul class="list-unstyled text-muted">
                        <li class="py-1"><a href="{{ route('user.orderhistory') }}" class="link">My Order History</a></li>
                        <li class="py-1"><a href="{{ route('user.profile') }}" class="link">Personal Information</a>
                        </li>
                        <li class="py-1"><a href="{{ route('user.honey') }}" class="link">Honey Order</a></li>
                        <li class="py-1"><a href="{{ route('user.review.index') }}" class="link">Product Review</a></li>
                        <li class="py-1"><a href="{{ route('user.logistics') }}" class="link">Logistics</a></li>
                        <li class="py-1"><a href="{{ route('user.homeservice') }}" class="link">Home Service</a></li>
                        {{-- <li class="py-1"><a href="./booked_service.html" class="link">Booked Service</a></li> --}}
                        <li class="py-1"><a href="{{ route('user.notification') }}" class="link">Notifications</a></li>
                        <li class="py-1"><a href="{{ route('user.partnership') }}" class="link">Partnership</a></li>
                        <li class="py-1"><a href="{{ route('user.houselisting') }}" class="link">House Listing</a></li>
                        <li class="py-1"><a href="{{ route('user.savedsubmission') }}." class="link">Saved Submission</a></li>
                        <li class="py-1"><a href="{{ route('user.houselisted') }}" class="link">House Listing</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
