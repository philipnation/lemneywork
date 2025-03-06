@include('layouts.authheader')

    <!-- Body -->
    <main>

        @include('layouts.user.sidebar')
            <!-- Main content -->
            <div class="flex-grow-1">

                <!--  -->
                <div class="px-3">

                    <!--  -->
                    <p class="py-3">
                        Your Submissions will be pending until approved to proceed working with us. All house listing
                        will be scrutinised before approval on the site. So sit back and relax. We've got you covered.
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

                    <form action="{{ route('user.houselisting.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">


                            <!-- Property Description -->
                            <div class="col-md-4 my-2">
                                <label for="description" class="form-label fw-semibold">Property Description</label>
                                <input type="text" name="description" id="description" class="form-control" required>
                            </div>

                            <!-- Listing Type -->
                            <div class="col-6 col-md-4 my-2">
                                <label for="listing-type" class="form-label fw-semibold">Listing Type</label>
                                <select name="listing_type" id="listing-type" class="form-select" required>
                                    <option value="" disabled selected>Listing Type</option>
                                    <option value="rent">Rent</option>
                                    <option value="sale">Sale</option>
                                </select>
                            </div>

                            <!-- Property Name -->
                            <div class="col-6 col-md-4 my-2">
                                <label for="property-name" class="form-label fw-semibold">Property Name</label>
                                <input type="text" name="property_name" id="property-name" class="form-control" required>
                            </div>

                            <!-- Property Type -->
                            <div class="col-6 col-md-4 my-2">
                                <label for="property-type" class="form-label fw-semibold">Property Type</label>
                                <select name="property_type" id="property-type" class="form-select" required>
                                    <option value="" disabled selected>Listing Type</option>
                                    <option value="bedroom-flat">Bedroom Flat</option>
                                    <option value="self-contain">Self Contain</option>
                                    <option value="single-room">Single Room</option>
                                </select>
                            </div>

                            <!-- Property Condition -->
                            <div class="col-6 col-md-4 my-2">
                                <label for="property-condition" class="form-label fw-semibold">Property
                                    Condition</label>
                                <select name="property_condition" id="property-condition" class="form-select" required>
                                    <option value="" disabled selected>Property Condition</option>
                                    <option value="newly-built">Newly Built</option>
                                    <option value="existing">Existing</option>
                                </select>
                            </div>

                            <!-- House Age -->
                            <div class="col-6 col-md-4 my-2">
                                <label for="house-age" class="form-label fw-semibold">House Age</label>
                                <input type="text" name="house_age" id="house-age" class="form-control" required>
                            </div>

                            <!-- Size -->
                            <div class="col-6 col-md-3 my-2">
                                <label for="size" class="form-label fw-semibold">Size (Square Footage)</label>
                                <input type="text" name="size" id="size" class="form-control" required>
                            </div>

                            <!-- Listing Price -->
                            <div class="col-6 col-md-3 my-2">
                                <label for="price" class="form-label fw-semibold">Listing Price</label>
                                <input type="text" name="price" id="price" class="form-control" required>
                            </div>

                            <!-- No. of Bedrooms -->
                            <div class="col-6 col-md-3 my-2">
                                <label for="no-of-bedrooms" class="form-label fw-semibold">No. of Bedrooms</label>
                                <input type="text" name="no_of_bedrooms" id="no-of-bedrooms" class="form-control" required>
                            </div>

                            <!-- No. of Bathrooms -->
                            <div class="col-6 col-md-3 my-2">
                                <label for="no-of-bathrooms" class="form-label fw-semibold">No. of Bathrooms</label>
                                <input type="text" name="no_of_bathrooms" id="no-of-bathrooms" class="form-control" required>
                            </div>

                            <!-- Parking Space -->
                            <div class="col-6 col-md-4 my-2">
                                <div class="form-label fw-semibold">Parking Space</div>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <input type="radio" name="parking_space" id="parking-space-yes" value="yes" required>
                                        <label for="parking-space-yes" class="form-label">Yes</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="parking_space" id="parking-space-no" value="no" required>
                                        <label for="parking-space-no" class="form-label">No</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Furnishing -->
                            <div class="col-6 col-md-4 my-2">
                                <div class="form-label fw-semibold">Furnishing</div>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <input type="radio" name="furnishing" id="furnishing-yes" value="yes" required>
                                        <label for="furnishing-yes" class="form-label">Yes</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="furnishing" id="furnishing-no" value="no" required>
                                        <label for="furnishing-no" class="form-label">No</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Negotiable -->
                            <div class="col-6 col-md-4 my-2">
                                <div class="form-label fw-semibold">Negotiable</div>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <input type="radio" name="negotiable" id="negotiable-yes" value="yes" required>
                                        <label for="negotiable-yes" class="form-label">Yes</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="negotiable" id="negotiable-no" value="no" required>
                                        <label for="negotiable-no" class="form-label">No</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Description -->
                            <div class="col-md-6 my-2">
                                <label for="additional-description" class="form-label fw-semibold">Additional
                                    Description</label>
                                <textarea name="additional_description" id="additional-description" required
                                    class="form-control"></textarea>
                            </div>

                            <!-- Location -->
                            <div class="col-md-6 my-2">

                                <div>
                                    <label for="location" class="form-label fw-semibold">Location</label>
                                    <input type="text" name="location" id="location" class="form-control" required>
                                </div>

                                <div class="row">

                                    <!-- L.G.A -->
                                    <div class="col-6 my-2">
                                        <label for="lga" class="form-label fw-semibold">L.G.A</label>
                                        <input type="text" name="lga" id="lga" class="form-control" required>
                                    </div>

                                    <!-- State -->
                                    <div class="col-6 my-2">
                                        <label for="state" class="form-label fw-semibold">State</label>
                                        <input type="text" name="state" id="state" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Name -->
                            <div class="col-md-4 my-2">
                                <label for="contact-name" class="form-label fw-semibold">Contact Name</label>
                                <input type="text" name="contact_name" id="contact-name" class="form-control" required>
                            </div>

                            <!-- Contact Role -->
                            <div class="col-6 col-md-4 my-2">
                                <label for="contact-role" class="form-label fw-semibold">Contact Role</label>
                                <select name="contact_role" id="contact-role" class="form-select" required>
                                    <option value="" disable selected>Contact Role</option>
                                    <option value="agent">Agent</option>
                                    <option value="owner">Owner</option>
                                </select>
                            </div>

                            <!-- Contact Phone Number -->
                            <div class="col-6 col-md-4 my-2">
                                <label for="contact-phone" class="form-label fw-semibold">Contact Phone Number</label>
                                <input type="text" name="contact_phone" id="contact-phone" class="form-control" required>
                            </div>

                            <!-- Profile Image -->
                            <div class="col-12 my-2">
                                <label for="profile-image" class="form-label fw-semibold">Profile Image</label>
                                <input type="file" name="profile_image" id="profile-image" class="form-control" required accept="image/*">
                            </div>

                            <!-- Attach House Images -->
                            <div class="col-12 my-2">
                                <label for="house-images" class="form-label fw-semibold">Attach House Images</label>
                                <p class="text-muted small">Your submissions can include videos to improve listing
                                    credibility</p>
                                <input type="file" name="house_images[]" id="house-images" class="form-control" multiple required accept="image/*">
                            </div>

                        </div>

                        <div class="d-flex align-items-center justify-content-between my-3">
                            <button type="submit"
                                class="btn btn-lemney-outline-primary text-uppercase" name="later" value="yes">Save for
                                Later</button>
                            <button type="submit" class="btn btn-lemney-primary text-uppercase" data-bs-toggle="modal"
                                data-bs-target="#listingSubmissionConfirmationModaloff">Submit Now</button>

                            <!-- Listing Submission Confirmation Modal -->
                            <div class="modal fade" id="listingSubmissionConfirmationModal" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1"
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
