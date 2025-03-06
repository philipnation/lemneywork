@include('layouts.authheader')

    <!-- Body -->
    <main>

        @include('layouts.user.sidebar')
            <!-- Main content -->
            <div class="flex-grow-1">

                <!--  -->
                <div class="px-3">

                    <!--  -->
                    <p class="pt-3 fw-semibold">
                        Your Submissions will be pending until approved to proceed working with us. You can apply to
                        work in our preferred location or register your business as we will help you organise your
                        scheduling through our partnerships
                    </p>

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @elseif (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('user.partnership.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <!-- Surname -->
                            <div class="col-6 col-md-4 my-2">
                                <label for="surname" class="form-label fw-semibold">Surname</label>
                                <input type="text" name="surname" id="surname" class="form-control" required>
                            </div>

                            <!-- First Name -->
                            <div class="col-6 col-md-4 my-2">
                                <label for="firstname" class="form-label fw-semibold">Firstname</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" required>
                            </div>

                            <!-- Middle Name -->
                            <div class="col-6 col-md-4 my-2">
                                <label for="middlename" class="form-label fw-semibold">Middle Name</label>
                                <input type="text" name="middlename" id="middlename" class="form-control" required>
                            </div>

                            <!-- Business Name/Name -->
                            <div class="col-6 col-md-4 my-2">
                                <label for="business-name" class="form-label fw-semibold">Business Name</label>
                                <input type="text" name="business_name" id="business-name" class="form-control" required>
                            </div>

                            <!-- Business Type -->
                            <div class="col-6 col-md-4 my-2">
                                <label for="business-type" class="form-label fw-semibold">Business Type</label>
                                <select name="business_type" id="business-type" class="form-select" required>
                                    <option value="" disabled selected>Property Condition</option>
                                    <option value="dry-cleaning">Dry Cleaning</option>
                                    <option value="salon">Salon</option>
                                </select>
                            </div>

                            <!-- Business Address -->
                            <div class="col-6 col-md-4 my-2">
                                <label for="business-address" class="form-label fw-semibold">Business Address</label>
                                <input type="text" name="business_address" id="business-address" class="form-control" required>
                            </div>

                            <!-- Phone Number -->
                            <div class="col-md-4 my-2">
                                <label for="phone-no" class="form-label fw-semibold">Phone Number</label>
                                <input type="text" name="phone" id="phone-no" class="form-control" required>
                            </div>


                            <!-- Years of Experience -->
                            <div class="col-6 col-md-4 my-2">
                                <label for="years-of-experience" class="form-label fw-semibold">Years of
                                    Experience</label>
                                <select name="years_of_experience" id="years-of-experience" class="form-select" required>
                                    <option value="" disabled selected>Years of Experience</option>
                                    <option value="less-1">Less than A Year</option>
                                    <option value="1-to-3">One to Three Years</option>
                                    <option value="3-to-5">Three to Five Years</option>
                                    <option value="more-5">More than five Years</option>
                                </select>
                            </div>

                            <!-- Email Address -->
                            <div class="col-6 col-md-4 my-2">
                                <label for="email" class="form-label fw-semibold">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <!-- Working Days -->
                            <div class="col-6 col-md-3 my-2">
                                <label for="working-days" class="form-label fw-semibold">Working Days</label>
                                <select name="working_days[]" id="working-days" class="form-select" multiple required>
                                    <option value="" disabled selected>Working Days</option>
                                    <option value="monday">Monday</option>
                                    <option value="tuesday">Tuesday</option>
                                    <option value="wednesday">Wednesday</option>
                                    <option value="thursday">Thursday</option>
                                    <option value="friday">Friday</option>
                                    <option value="saturday">Saturday</option>
                                    <option value="sunday">Sunday</option>
                                </select>
                            </div>

                            <!-- Preferred Working Location -->
                            <div class="col-6 col-md-3 my-2">
                                <label for="preferred-working-location" class="form-label fw-semibold">Preferred Working
                                    Location</label>
                                <input type="text" name="preferred_working_location" id="preferred-working-location" required
                                    class="form-control">
                            </div>

                            <!-- State -->
                            <div class="col-6 col-md-3 my-2">
                                <label for="state" class="form-label fw-semibold">State</label>
                                <input type="text" name="state" id="state" class="form-control" required>
                            </div>

                            <!-- L.G.A -->
                            <div class="col-6 col-md-3 my-2">
                                <label for="lga" class="form-label fw-semibold">L.G.A</label>
                                <input type="text" name="lga" id="lga" class="form-control" required>
                            </div>

                            <!-- Additional Information -->
                            <div class="my-2">
                                <label for="additional-information" class="form-label fw-semibold">Additional
                                    Information</label>
                                <textarea name="additional_information" id="additional-information" required
                                    class="form-control"></textarea>
                            </div>

                            <!-- Attach Relevant Work Documents -->
                            <div class="col-12 my-2">
                                <label for="house-images" class="form-label fw-semibold">Attach Relevant Work documents
                                    (2 Min)</label>
                                <p class="text-muted small">Your submissions can a business portfolio, skill acquisition
                                    certificate, client testimonial, job images, awards etc.</p>
                                <input type="file" name="house_images[]" id="house-images" class="form-control" multiple required accept="image/*">
                            </div>

                        </div>

                        <div class="d-flex align-items-center justify-content-between my-3" (2 min)>
                            <button type="submit"
                                class="btn btn-lemney-outline-primary text-uppercase" name="later" value="yes">Save for
                                Later</button>
                            <button type="button" class="btn btn-lemney-primary text-uppercase" data-bs-toggle="modal"
                                data-bs-target="#partnershipSubmissionConfirmationModal">Submit Now</button>

                            <!-- Partnership Submission Confirmation Modal -->
                            <div class="modal fade" id="partnershipSubmissionConfirmationModal"
                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="Listing Submission Confirmation Modal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered mx-auto rounded-3"
                                    style="max-width: 360px;">
                                    <div class="modal-content p-3">
                                        <div class="text-center fw-bold">
                                            <p class="mb-4">Are you sure you want to <span
                                                    class="fw-bold">Submit</span>?</p>

                                            <div class="d-flex align-items-center justify-content-between mt-4">
                                                <button type="submit"
                                                    class="btn btn-lemney-primary fw-bold px-5">Yes</button>
                                                <button type="button"
                                                    class="btn btn-lemney-outline-primary fw-bold px-5"
                                                    data-bs-dismiss="modal">No</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </main>
@include('layouts.authfooter')
