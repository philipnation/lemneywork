@include('layouts.authheader')

    <!-- Body -->
    <main>

        @include('layouts.user.sidebar')

            <!-- Main content -->
            <div class="flex-grow-1">

                <!-- House Listings -->
                <div class="px-3">

                    <div class="row">

                        <!-- House Listing 1 -->
                        <div class="col-md-4 py-2 py-md-3">
                            <div>
                                <!-- Card -->
                                <div class="card border shadow-sm">
                                    <div class="position-relative rounded-top">
                                        <img src="../../assets/img/card_img_overlay_room.png" class="card-img-top"
                                            alt="Traditional Apartment">

                                        <div class="position-absolute top-0 h-100 w-100 d-flex flex-column justify-content-between small p-2"
                                            style="background-color: rgba(0, 0, 0, 0.6);">

                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <div class="bg-dark text-bg-dark p-2">
                                                        <span>Traditional Apartment</span>
                                                        <br>
                                                        <span class="fw-semibold">NGN 38 Million</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="bg-lemney-primary-2 text-bg-dark p-2">
                                                        For sale
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-between text-white">
                                                <div>
                                                    <div>
                                                        <i class="fa fa-location me-2"></i>
                                                        Lekki, Lagos
                                                    </div>
                                                    <div>
                                                        <i class="fa fa-house me-2"></i>
                                                        3 Red Room Cottage
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>2<i class="fa fa-video ms-1"></i></span>
                                                    <span>2<i class="fa fa-image ms-1"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center justify-content-between p-2">
                                            <div class="d-flex align-items-center gap-1">
                                                <div class="rounded-circle">
                                                    <img src="../../assets/img/lhano_rano.png" alt="">
                                                </div>
                                                <div>
                                                    <div class="fw-semibold">Lharo Rano</div>
                                                    <div class="small text-muted">Agent</div>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="btn btn-lemney">
                                                    <i class="fa fa-phone"></i>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    @include('layouts.authfooter')
