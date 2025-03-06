@include('layouts.admin.header')
            <!-- Main content -->
            <div class="flex-grow-1">

                <!--  -->
                <div class="p-3">
                    <div class="d-flex align-items-center justify-content-between">

                        <div>
                            <div class="d-md-none">
                                <!--  -->
                            </div>
                        </div>

                        <!--  -->
                        <div>
                            <!-- Search Bar -->
                            <div class="header-search-bar input-group d-flex align-items-stretch rounded-pill p-1">
                                <span class="rounded-start-pill ps-2">
                                    <button class="btn d-md-none" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasExample">
                                        <i class="fa fa-bars"></i>
                                    </button>

                                    <button class="btn d-none d-md-inline-block">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                </span>
                                <input type="search" name="search-keyword" id="search-keyword" class="form-control"
                                    placeholder="Search">
                                <span class="px-3 rounded-end-pill">
                                    <label for="search-keyword"
                                        class="form-label h-100 d-flex align-items-center justify-content-center"><i
                                            class="fa fa-search"></i></label>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>

                <!--  -->
                <div class="p-3">

                    <!-- Notice -->
                    <div>
                        <p>All orders should be treated with scrutiny to avoid complications. Upon completion of
                            continue
                            progress report of materials to ensure delivery and client update</p>
                    </div>


                    <!-- Booked Services List -->
                    <!-- Awaiting Approval -->
                    <div>

                        <div>

                            <!-- Awaiting 1 -->
                            <div class="bg-lemney-secondary rounded-3 p-3 my-3">

                                <!--  -->
                                <div class="d-flex align-items-sm-center justify-content-between">
                                    <div>
                                        <span
                                            class="border bg-lemney-secondary-2 text-lemney-primary fw-semibold px-3 py-2 rounded-4 small user-select-none">
                                            <i class="fa fa-clock-rotate-left me-2"></i>
                                            Awaiting Approval
                                        </span>
                                    </div>
                                    <div>
                                        <button
                                            class="btn btn-outline-primary btn-lemney-outline-primary px-md-4">Decline</button>
                                        <button class="btn btn-lemney-primary px-md-4">Approve</button>
                                    </div>
                                </div>

                                <div class="py-2">
                                    <button class="btn btn-sm btn-lemney">Click to see View details</button>
                                </div>

                                <!-- Order Information -->
                                <div class="bg-white p-3 rounded-4">
                                    <!-- Order Details -->
                                    <div
                                        class="py-2 d-flex align-content-center justify-content-between gap-3 text-center">
                                        <div>
                                            <b>Style with Amaka</b><br>
                                            <span>Hair Styling</span>
                                        </div>
                                        <div>
                                            <b>Years of Experience</b><br>
                                            <span>5 years</span>
                                        </div>
                                        <div>
                                            <b>Cost</b><br>
                                            <span class="text-uppercase">NaN</span>
                                        </div>
                                        <div>
                                            <b>Service Location</b><br>
                                            <span>GetStyled Krib, Enugu</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Awaiting 2 -->
                            <div class="bg-lemney-secondary rounded-3 p-3 my-3">

                                <!--  -->
                                <div class="d-flex align-items-sm-center justify-content-between">
                                    <div>
                                        <span
                                            class="border bg-lemney-secondary-2 text-lemney-primary fw-semibold px-3 py-2 rounded-4 small user-select-none">
                                            <i class="fa fa-clock-rotate-left me-2"></i>
                                            Awaiting Approval
                                        </span>
                                    </div>
                                    <div>
                                        <button
                                            class="btn btn-outline-primary btn-lemney-outline-primary px-md-4">Decline</button>
                                        <button class="btn btn-lemney-primary px-md-4">Approve</button>
                                    </div>
                                </div>

                                <div class="py-2">
                                    <button class="btn btn-sm btn-lemney">Click to see View details</button>
                                </div>

                                <!-- Order Information -->
                                <div class="bg-white p-3 rounded-4">
                                    <!-- Order Details -->
                                    <div
                                        class="py-2 d-flex align-content-center justify-content-between gap-3 text-center">
                                        <div>
                                            <b>Style with Amaka</b><br>
                                            <span>Hair Styling</span>
                                        </div>
                                        <div>
                                            <b>Years of Experience</b><br>
                                            <span>5 years</span>
                                        </div>
                                        <div>
                                            <b>Cost</b><br>
                                            <span class="text-uppercase">NaN</span>
                                        </div>
                                        <div>
                                            <b>Service Location</b><br>
                                            <span>GetStyled Krib, Enugu</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="text-uppercase fw-bold">History</h5>
                        <div class="d-flex align-items-center gap-2">
                            <input type="date" name="service-date" id="service-date" class="form-control"
                                placeholder="Date">
                            <button type="button" class="btn btn-lemney"><i class="fa fa-filter"></i></button>
                        </div>
                    </div>

                    <!-- History / Completed -->
                    <!-- Booked Services List -->
                    <!-- Awaiting Approval -->
                    <div>

                        <div>

                            <!-- Awaiting 1 -->
                            <div class="bg-lemney-secondary rounded-3 p-3 my-3">

                                <!--  -->
                                <div class="d-flex align-items-sm-center justify-content-between">
                                    <div>
                                        <span
                                            class="border bg-lemney-secondary-2 text-lemney-primary fw-semibold px-3 py-2 rounded-4 small user-select-none">
                                            <i class="fa fa-clock-rotate-left me-2"></i>
                                            Awaiting Approval
                                        </span>
                                    </div>
                                    <div>
                                        <button class="btn btn-lemney-primary px-md-4">Terminate</button>
                                    </div>
                                </div>

                                <div class="py-2">
                                    <button class="btn btn-sm btn-lemney">Click to see View details</button>
                                </div>

                                <!-- Order Information -->
                                <div class="bg-white p-3 rounded-4">
                                    <!-- Order Details -->
                                    <div
                                        class="py-2 d-flex align-content-center justify-content-between gap-3 text-center">
                                        <div>
                                            <b>Style with Amaka</b><br>
                                            <span>Hair Styling</span>
                                        </div>
                                        <div>
                                            <b>Years of Experience</b><br>
                                            <span>5 years</span>
                                        </div>
                                        <div>
                                            <b>Cost</b><br>
                                            <span class="text-uppercase">NaN</span>
                                        </div>
                                        <div>
                                            <b>Service Location</b><br>
                                            <span>GetStyled Krib, Enugu</span>
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

@include('layouts.admin.footer')
