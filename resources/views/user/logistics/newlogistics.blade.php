@include('layouts.authheader')

    <!-- Body -->
    <main>

        @include('layouts.user.sidebar')
            <!-- Main content -->
            <div class="flex-grow-1">

                <div class="p-3">
                    <div class="p-2">
                        <h3 class="fs-4">Welcome, Username</h3>
                        <p class="lead text-muted fs-6">Ship item to any location,
                            you can also track order to keep you calm
                        </p>
                    </div>

                    <!-- Order Logistics Form -->
                    <div class="row m-0 p-2">

                        <div class="col-5 order-last d-none d-md-block">
                            <div>
                                <img src="../../assets/img/order_logistics_google_map.png" alt="" srcset=""
                                    class="img-fluid">
                            </div>
                        </div>

                        <div class="col-12 col-md-7">

                            <div>
                                <!--  -->
                                <form action="javascript:void('')" method="post">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <!-- Sender full name -->
                                            <div class="my-2">
                                                <label for="sender-fullname" class="form-label fw-semibold">Sender Full
                                                    Name</label>
                                                <input type="text" name="sender-fullname" id="sender-fullname"
                                                    class="form-control">
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <!-- Sender phone number -->
                                            <div class="my-2">
                                                <label for="sender-phone-number" class="form-label fw-semibold">Phone
                                                    Number</label>
                                                <input type="text" name="sender-phone-number" id="sender-phone-number"
                                                    class="form-control">
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <!-- Sender Pickup Address -->
                                            <div class="my-2">
                                                <label for="sender-address" class="form-label fw-semibold">Sender Pickup
                                                    Address</label>
                                                <input type="text" name="sender-address" id="sender-address"
                                                    class="form-control">
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <!-- Pickup date -->
                                            <div class="my-2">
                                                <label for="pickup-date" class="form-label fw-semibold">Pickup
                                                    Date</label>
                                                <input type="datetime" name="pickup-date" id="pickup-date"
                                                    class="form-control">
                                            </div>

                                        </div>

                                        <div>

                                            <!-- Divider -->
                                            <div class="my-2">
                                                <hr class=" border-dark-subtle">
                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <!-- Recipient State  -->
                                            <div class="my-2">
                                                <label for="recipient-state" class="form-label fw-semibold">Recipient
                                                    State</label>
                                                <select name="recipient-state" id="recipient-state" class="form-select">
                                                    <option value="state1" selected>State 1</option>
                                                    <option value="state2">State 2</option>
                                                    <option value="state3">State 3</option>
                                                    <option value="state4">State 4</option>
                                                    <option value="state5">State 5</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <!-- Recipient Local Government -->
                                            <div class="my-2">
                                                <label for="recipient-lga" class="form-label fw-semibold">Recipient
                                                    Local
                                                    Government</label>
                                                <select name="recipient-lga" id="recipient-lga" class="form-select">
                                                    <option value="lga1" selected>LGA 1</option>
                                                    <option value="lga2">LGA 2</option>
                                                    <option value="lga3">LGA 3</option>
                                                    <option value="lga4">LGA 4</option>
                                                    <option value="lga5">LGA 5</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <!-- Recipient full name -->
                                            <div class="my-2">
                                                <label for="recipient-fullname" class="form-label fw-semibold">Recipient
                                                    Full
                                                    Name</label>
                                                <input type="text" name="recipient-fullname" id="recipient-fullname"
                                                    class="form-control">
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <!-- Recipient phone number -->
                                            <div class="my-2">
                                                <label for="recipient-phone-number" class="form-label fw-semibold">Phone
                                                    Number</label>
                                                <input type="text" name="recipient-phone-number"
                                                    id="recipient-phone-number" class="form-control">
                                            </div>

                                        </div>

                                        <div class="">

                                            <!-- Recipient Pickup Address -->
                                            <div class="my-2">
                                                <label for="recipient-address" class="form-label fw-semibold">Recipient
                                                    Pickup Address</label>
                                                <select name="recipient-address" id="recipient-address"
                                                    class="form-select">
                                                    <option value="address1" selected>Address 1</option>
                                                    <option value="address2">Address 2</option>
                                                    <option value="address3">Address 3</option>
                                                    <option value="address4">Address 4</option>
                                                    <option value="address5">Address 5</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <!-- Goods Type -->
                                            <div class="my-2">
                                                <label for=goods-type" class="form-label fw-semibold">Goods Type</label>
                                                <select name="goods-type" id="goods-type" class="form-select">
                                                    <option value="type1" selected>Type 1</option>
                                                    <option value="type2">Type 2</option>
                                                    <option value="type3">Type 3</option>
                                                    <option value="type4">Type 4</option>
                                                    <option value="type5">Type 5</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <!-- Goods Type -->
                                            <div class="my-2">
                                                <label for=delivery-type" class="form-label fw-semibold">Delivery
                                                    Type</label>
                                                <select name="delivery-type" id="delivery-type" class="form-select">
                                                    <option value="type1" selected>Type 1</option>
                                                    <option value="type2">Type 2</option>
                                                    <option value="type3">Type 3</option>
                                                    <option value="type4">Type 4</option>
                                                    <option value="type5">Type 5</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div>

                                        <!-- Brief Item Description -->
                                        <div class="my-2">
                                            <label for="item-description" class="form-label fw-semibold">Brief Item
                                                Description</label>
                                            <textarea name="item-description" id="item-description" class="form-control"
                                                rows="3"></textarea>
                                        </div>
                                    </div>


                                    <div>

                                        <div class="my-2">
                                            <button class="btn btn-lemney-primary">Approve Shipping</button>

                                        </div>
                                    </div>


                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

@include('layouts.authfooter')
