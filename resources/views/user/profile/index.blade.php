@include('layouts.authheader')

    <!-- Body -->
    <main>

        @include('layouts.user.sidebar')

            <!-- Main content -->
            <div class="container p-2 p-md-3">

                <!-- Welcome  -->
                <div class="d-flex align-items-center justify-content-between p-2 p-md-3">
                    <div>
                        <!-- Greet user -->
                        <h2 class="fs-5">Welcome, <span class="fw-bold">{{ Auth::user()->firstname }}</span></h2>
                    </div>

                    <div>
                        <button type="button" class="btn btn-lemney" data-bs-toggle="modal"
                            data-bs-target="#confirmationModal">Delete Account <i
                                class="fa fa-trash-alt ms-1"></i></button>

                        <!-- Delete Account Confirmation Modal -->
                        <div class="modal fade" id="confirmationModal" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="Cancel Order Confirmation Modal"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered mx-auto rounded-3" style="max-width: 360px;">
                                <div class="modal-content p-3">
                                    <div class="text-center fw-bold">
                                        <p class="mb-4">Are you sure you want to delete your account?</p>

                                        <div class="d-flex align-items-center justify-content-between mt-4">
                                            <button class="btn btn-lemney-primary fw-bold px-5">Yes</button>
                                            <button class="btn btn-lemney-outline-primary fw-bold px-5"
                                                data-bs-dismiss="modal">No</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- User Information Display -->
                <div class="p-3">

                    <!-- Some action button  -->
                    <div class="d-flex gap-2 align-items-center justify-content-end">
                        <a href="{{ route('user.profile.password.edit') }}" class="btn btn-lemney">Change Password</a>
                        <a href="{{ route('user.profile.edit') }}" class="btn btn-lemney">Edit <i class="fa fa-edit"></i></a>
                    </div>

                    <!-- User details -->
                    <div class="py-2">
                        <ul class="list-unstyled">

                            <!-- Name -->
                            <li class="py-2">
                                <b>Name:</b>
                                {{ Auth::user()->firstname }} {{ Auth::user()->surname }}
                            </li>

                            <!-- Email -->
                            <li class="py-2">
                                <b>Email:</b>
                                {{ Auth::user()->email }}
                            </li>

                            <!-- Phone Number -->
                            <li class="py-2">
                                <b>Phone Number:</b>
                                {{ Auth::user()->phone }}
                            </li>

                            <!-- Default address -->
                            <li class="py-2">
                                <b>Address:</b>
                                {{ Auth::user()->address }}
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </main>

@include('layouts.authfooter')
