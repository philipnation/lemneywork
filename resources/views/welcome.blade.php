@include('layouts.authheader')

    <!-- Body -->
    <main>

        <!-- Hero Area -->
        <section>
            <!-- Carousel -->
            <div>
                <!-- Swiper -->
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper swiperMain">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/home_service_banner.png') }}" class="img-fluid"
                                alt="Home Service Banner" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/honey_service_banner.png') }}" class="img-fluid"
                                alt="Honey Service Banner" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/logistics_banner.png') }}" class="img-fluid" alt="Logistics Banner" />
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Features Section -->
        <section class="container-fluid px-3 px-md-5 py-5">

            <div class="row align-items-stretch">

                <!-- On time delivery -->
                <div class="col-md-4 px-2 px-md-4 py-3">
                    <div class="shadow rounded-3 p-3 h-100">
                        <!-- Title -->
                        <div class="mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <span>
                                    <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M30.3016 11.4781C30.1224 11.0437 29.9203 10.6182 29.6953 10.2016C29.5688 9.96563 29.4344 9.73125 29.2922 9.50156C28.6812 8.51094 27.9359 7.575 27.0562 6.69531C24.1766 3.81562 20.6984 2.375 16.625 2.375C12.5516 2.375 9.075 3.81562 6.19531 6.69531C3.31562 9.575 1.875 13.0516 1.875 17.125C1.875 21.1984 3.31562 24.6766 6.19531 27.5562C9.075 30.4359 12.5516 31.875 16.625 31.875C20.6984 31.875 24.1766 30.4359 27.0562 27.5562C28.6422 25.9688 29.7922 24.2 30.5047 22.2516C31.0844 20.6625 31.375 18.9547 31.375 17.125C31.375 15.7219 31.2047 14.3891 30.8625 13.1266C30.8234 12.9844 30.7828 12.8422 30.7406 12.7016C30.6125 12.2859 30.4656 11.8781 30.3016 11.4781Z"
                                            fill="black" fill-opacity="0.0980392" />
                                        <path
                                            d="M30.191 12.3266C30.1598 12.2203 30.1285 12.1125 30.0926 11.9985C30.0426 11.8375 29.9863 11.6703 29.927 11.5031C29.7254 10.9328 29.4848 10.3766 29.2035 9.82659C29.0848 9.59534 28.9551 9.3594 28.8191 9.12659C28.1848 8.04846 27.3879 7.02659 26.4332 6.0719C24.1645 3.80315 21.5223 2.42659 18.5066 1.94534C17.9988 1.86409 17.4816 1.80784 16.9426 1.77815C16.6395 1.76096 16.3223 1.75159 16.002 1.75159C15.7098 1.75159 15.4207 1.7594 15.1301 1.77502C11.4316 1.96565 8.2457 3.39846 5.57227 6.0719C2.69206 8.95211 1.25195 12.4287 1.25195 16.5016C1.25195 20.575 2.69258 24.0531 5.57227 26.9328C7.34414 28.7031 9.33945 29.9297 11.5441 30.6063C12.6926 30.9578 13.8816 31.1641 15.1301 31.2297C15.1348 31.2297 15.1379 31.2297 15.1426 31.2297C15.4082 31.2438 15.6613 31.2516 15.9082 31.2516C15.9457 31.2516 15.9738 31.2516 16.002 31.2516C16.3238 31.2516 16.6426 31.2422 16.9426 31.2266C17.0207 31.2219 17.091 31.2172 17.1598 31.2125C17.791 31.1672 18.4066 31.086 18.9941 30.9719C19.2426 30.9235 19.4879 30.8688 19.7254 30.811C22.2504 30.1766 24.4801 28.886 26.4332 26.9328C27.952 25.4141 29.0707 23.7297 29.7879 21.8766C30.3645 20.3875 30.6832 18.7891 30.7426 17.0797C30.7488 16.8906 30.752 16.6969 30.752 16.5016C30.752 16.4813 30.752 16.4594 30.752 16.4391C30.752 16.4281 30.752 16.4188 30.752 16.4078C30.7457 15.1375 30.5973 13.9235 30.3051 12.7516C30.2707 12.6156 30.2316 12.4703 30.191 12.3266Z"
                                            fill="#FFEBD8" />
                                        <path
                                            d="M25.1346 11.6938L23.9424 10.7344L8.42285 10.9398L11.5018 14.0188L6.88379 12.382L7.09082 21.8344L16.501 31.2445C16.6491 31.2404 16.7962 31.2344 16.9424 31.2266C17.0205 31.2219 17.0908 31.2172 17.1596 31.2125C17.7908 31.1672 18.4064 31.0859 18.9939 30.9719C19.2424 30.9234 19.4877 30.8687 19.7252 30.8109C22.2502 30.1766 24.4799 28.8859 26.433 26.9328C27.9518 25.4141 29.0705 23.7297 29.7877 21.8766C30.3393 20.4516 30.6549 18.9266 30.7346 17.2938L30.7338 17.293L25.1346 11.6938Z"
                                            fill="black" fill-opacity="0.0980392" />
                                        <path
                                            d="M23.9426 10.9422C24.1254 10.8719 24.1254 10.8047 23.9426 10.7344L16.3504 7.85782C16.1707 7.79064 15.991 7.79064 15.8098 7.85782L8.21758 10.7344C8.03789 10.8047 8.03789 10.8719 8.21758 10.9422L15.8098 13.8188C15.991 13.886 16.1707 13.886 16.3504 13.8188L23.9426 10.9422ZM25.1348 11.6938C25.1348 11.5125 25.0598 11.4516 24.9098 11.511L16.7332 14.7125C16.5816 14.7719 16.5082 14.8906 16.5082 15.0719V21.3914L18.0184 20.8047H18.0191C18.1848 20.7406 18.3488 20.7438 18.5129 20.8172C18.677 20.8891 18.791 21.0078 18.8551 21.175C18.9191 21.3406 18.916 21.5047 18.8441 21.6688C18.7707 21.8328 18.652 21.9469 18.4863 22.0109H18.4855L16.5082 22.7789V24.9922C16.5082 25.1734 16.5816 25.2344 16.7332 25.175L24.9098 21.9735C25.0598 21.9156 25.1348 21.7938 25.1348 21.6125V11.6938ZM20.3785 16.4188V14.2094L24.4363 12.7094V14.9188L20.3785 16.4188ZM7.09414 11.511C6.94414 11.4516 6.86914 11.5125 6.86914 11.6938V21.6125C6.86914 21.7938 6.94414 21.9156 7.09414 21.9735L15.2707 25.175C15.4191 25.2344 15.4957 25.1734 15.4957 24.9922V22.7789L13.5176 22.0109C13.3504 21.9453 13.2316 21.8313 13.1598 21.6672C13.0879 21.5031 13.0848 21.3375 13.1504 21.1719C13.2145 21.0063 13.3301 20.8875 13.4941 20.8156C13.6582 20.7438 13.8223 20.7406 13.9863 20.8047L15.4957 21.3906V15.0719C15.4957 14.8906 15.4191 14.7719 15.2707 14.7125L7.09414 11.511Z"
                                            fill="#DE8654" />
                                    </svg>
                                </span>
                                <h3 class="fs-5 fw-bold mb-0">On time Delivery</h3>
                            </div>
                        </div>

                        <div class="text-muted px-3 ms-2">
                            On time delivery is ensured to meet up with your schedule on all out services or you can
                            pick a date you want on all your orders to match your schedule.
                        </div>
                    </div>
                </div>

                <!-- Customer Satisfaction -->
                <div class="col-md-4 px-2 px-md-4 py-3">
                    <div class="shadow rounded-3 p-3 h-100">
                        <!-- Title -->
                        <div class="mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <span>
                                    <svg width="33" height="32" viewBox="0 0 33 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.5272 5.52797C11.5564 5.4458 12.5334 5.04098 13.3192 4.37117C14.2066 3.61532 15.3343 3.2002 16.5 3.2002C17.6657 3.2002 18.7933 3.61532 19.6808 4.37117C20.4665 5.04098 21.4436 5.4458 22.4728 5.52797C23.6351 5.62086 24.7263 6.12471 25.5507 6.9492C26.3752 7.77368 26.8791 8.86488 26.972 10.0272C27.0536 11.056 27.4584 12.0336 28.1288 12.8192C28.8846 13.7066 29.2997 14.8343 29.2997 16C29.2997 17.1657 28.8846 18.2933 28.1288 19.1808C27.459 19.9665 27.0541 20.9436 26.972 21.9728C26.8791 23.1351 26.3752 24.2263 25.5507 25.0507C24.7263 25.8752 23.6351 26.3791 22.4728 26.472C21.4436 26.5541 20.4665 26.959 19.6808 27.6288C18.7933 28.3846 17.6657 28.7997 16.5 28.7997C15.3343 28.7997 14.2066 28.3846 13.3192 27.6288C12.5334 26.959 11.5564 26.5541 10.5272 26.472C9.36488 26.3791 8.27368 25.8752 7.4492 25.0507C6.62471 24.2263 6.12086 23.1351 6.02797 21.9728C5.9458 20.9436 5.54098 19.9665 4.87117 19.1808C4.11532 18.2933 3.7002 17.1657 3.7002 16C3.7002 14.8343 4.11532 13.7066 4.87117 12.8192C5.54098 12.0334 5.9458 11.0564 6.02797 10.0272C6.12086 8.86488 6.62471 7.77368 7.4492 6.9492C8.27368 6.12471 9.36488 5.62086 10.5272 5.52797ZM22.4312 13.9312C22.7226 13.6294 22.8839 13.2252 22.8802 12.8057C22.8766 12.3862 22.7083 11.9849 22.4117 11.6883C22.115 11.3916 21.7137 11.2233 21.2942 11.2197C20.8747 11.216 20.4705 11.3773 20.1688 11.6688L14.9 16.9376L12.8312 14.8688C12.5294 14.5773 12.1252 14.416 11.7057 14.4197C11.2862 14.4233 10.8849 14.5916 10.5883 14.8883C10.2916 15.1849 10.1233 15.5862 10.1197 16.0057C10.116 16.4252 10.2773 16.8294 10.5688 17.1312L13.7688 20.3312C14.0688 20.6311 14.4757 20.7996 14.9 20.7996C15.3242 20.7996 15.7311 20.6311 16.0312 20.3312L22.4312 13.9312Z"
                                            fill="#F37E21" />
                                    </svg>
                                </span>
                                <h3 class="fs-5 fw-bold mb-0">Customer Satisfaction</h3>
                            </div>
                        </div>

                        <div class="text-muted px-3 ms-2">
                            We ensure to meet up with our customer expectations as well as making sure to improve our
                            service offers to make sure our customers are well served.
                        </div>
                    </div>
                </div>

                <!-- Transparency -->
                <div class="col-md-4 px-2 px-md-4 py-3">
                    <div class="shadow rounded-3 p-3 h-100">
                        <!-- Title -->
                        <div class="mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <span>
                                    <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M30.3016 11.4781C30.1224 11.0437 29.9203 10.6182 29.6953 10.2016C29.5688 9.96563 29.4344 9.73125 29.2922 9.50156C28.6812 8.51094 27.9359 7.575 27.0562 6.69531C24.1766 3.81562 20.6984 2.375 16.625 2.375C12.5516 2.375 9.075 3.81562 6.19531 6.69531C3.31562 9.575 1.875 13.0516 1.875 17.125C1.875 21.1984 3.31562 24.6766 6.19531 27.5562C9.075 30.4359 12.5516 31.875 16.625 31.875C20.6984 31.875 24.1766 30.4359 27.0562 27.5562C28.6422 25.9688 29.7922 24.2 30.5047 22.2516C31.0844 20.6625 31.375 18.9547 31.375 17.125C31.375 15.7219 31.2047 14.3891 30.8625 13.1266C30.8234 12.9844 30.7828 12.8422 30.7406 12.7016C30.6125 12.2859 30.4656 11.8781 30.3016 11.4781Z"
                                            fill="black" fill-opacity="0.0980392" />
                                        <path
                                            d="M30.191 12.3266C30.1598 12.2203 30.1285 12.1125 30.0926 11.9985C30.0426 11.8375 29.9863 11.6703 29.927 11.5031C29.7254 10.9328 29.4848 10.3766 29.2035 9.82659C29.0848 9.59534 28.9551 9.3594 28.8191 9.12659C28.1848 8.04846 27.3879 7.02659 26.4332 6.0719C24.1645 3.80315 21.5223 2.42659 18.5066 1.94534C17.9988 1.86409 17.4816 1.80784 16.9426 1.77815C16.6395 1.76096 16.3223 1.75159 16.002 1.75159C15.7098 1.75159 15.4207 1.7594 15.1301 1.77502C11.4316 1.96565 8.2457 3.39846 5.57227 6.0719C2.69206 8.95211 1.25195 12.4287 1.25195 16.5016C1.25195 20.575 2.69258 24.0531 5.57227 26.9328C7.34414 28.7031 9.33945 29.9297 11.5441 30.6063C12.6926 30.9578 13.8816 31.1641 15.1301 31.2297C15.1348 31.2297 15.1379 31.2297 15.1426 31.2297C15.4082 31.2438 15.6613 31.2516 15.9082 31.2516C15.9457 31.2516 15.9738 31.2516 16.002 31.2516C16.3238 31.2516 16.6426 31.2422 16.9426 31.2266C17.0207 31.2219 17.091 31.2172 17.1598 31.2125C17.791 31.1672 18.4066 31.086 18.9941 30.9719C19.2426 30.9235 19.4879 30.8688 19.7254 30.811C22.2504 30.1766 24.4801 28.886 26.4332 26.9328C27.952 25.4141 29.0707 23.7297 29.7879 21.8766C30.3645 20.3875 30.6832 18.7891 30.7426 17.0797C30.7488 16.8906 30.752 16.6969 30.752 16.5016C30.752 16.4813 30.752 16.4594 30.752 16.4391C30.752 16.4281 30.752 16.4188 30.752 16.4078C30.7457 15.1375 30.5973 13.9235 30.3051 12.7516C30.2707 12.6156 30.2316 12.4703 30.191 12.3266Z"
                                            fill="#FFEBD8" />
                                        <path
                                            d="M25.1346 11.6938L23.9424 10.7344L8.42285 10.9398L11.5018 14.0188L6.88379 12.382L7.09082 21.8344L16.501 31.2445C16.6491 31.2404 16.7962 31.2344 16.9424 31.2266C17.0205 31.2219 17.0908 31.2172 17.1596 31.2125C17.7908 31.1672 18.4064 31.0859 18.9939 30.9719C19.2424 30.9234 19.4877 30.8687 19.7252 30.8109C22.2502 30.1766 24.4799 28.8859 26.433 26.9328C27.9518 25.4141 29.0705 23.7297 29.7877 21.8766C30.3393 20.4516 30.6549 18.9266 30.7346 17.2938L30.7338 17.293L25.1346 11.6938Z"
                                            fill="black" fill-opacity="0.0980392" />
                                        <path
                                            d="M23.9426 10.9422C24.1254 10.8719 24.1254 10.8047 23.9426 10.7344L16.3504 7.85782C16.1707 7.79064 15.991 7.79064 15.8098 7.85782L8.21758 10.7344C8.03789 10.8047 8.03789 10.8719 8.21758 10.9422L15.8098 13.8188C15.991 13.886 16.1707 13.886 16.3504 13.8188L23.9426 10.9422ZM25.1348 11.6938C25.1348 11.5125 25.0598 11.4516 24.9098 11.511L16.7332 14.7125C16.5816 14.7719 16.5082 14.8906 16.5082 15.0719V21.3914L18.0184 20.8047H18.0191C18.1848 20.7406 18.3488 20.7438 18.5129 20.8172C18.677 20.8891 18.791 21.0078 18.8551 21.175C18.9191 21.3406 18.916 21.5047 18.8441 21.6688C18.7707 21.8328 18.652 21.9469 18.4863 22.0109H18.4855L16.5082 22.7789V24.9922C16.5082 25.1734 16.5816 25.2344 16.7332 25.175L24.9098 21.9735C25.0598 21.9156 25.1348 21.7938 25.1348 21.6125V11.6938ZM20.3785 16.4188V14.2094L24.4363 12.7094V14.9188L20.3785 16.4188ZM7.09414 11.511C6.94414 11.4516 6.86914 11.5125 6.86914 11.6938V21.6125C6.86914 21.7938 6.94414 21.9156 7.09414 21.9735L15.2707 25.175C15.4191 25.2344 15.4957 25.1734 15.4957 24.9922V22.7789L13.5176 22.0109C13.3504 21.9453 13.2316 21.8313 13.1598 21.6672C13.0879 21.5031 13.0848 21.3375 13.1504 21.1719C13.2145 21.0063 13.3301 20.8875 13.4941 20.8156C13.6582 20.7438 13.8223 20.7406 13.9863 20.8047L15.4957 21.3906V15.0719C15.4957 14.8906 15.4191 14.7719 15.2707 14.7125L7.09414 11.511Z"
                                            fill="#DE8654" />
                                    </svg>
                                </span>
                                <h3 class="fs-5 fw-bold mb-0">Transparency</h3>
                            </div>
                        </div>

                        <div class="text-muted px-3 ms-2">
                            View all your order status in real time. To understand where and when your arrivals are.
                            Trust us to do the job.
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!-- Our Service Options -->
        <section class="container-fluid px-3 px-md-5 py-5">

            <div class="d-none d-md-block text-uppercase my-3">
                <h3 class="fw-bold">Our Service Options</h3>
            </div>

            <div class="row justify-content-center">


                <div class="col-md-6 order-md-last text-center">
                    <img src="{{ asset('assets/img/honey_sale_offer.png') }}" alt="" class="img-fluid" style="max-height: 400px;">
                </div>

                <div class="col-md-6">

                    <!-- Card -->
                    <div class="card shadow border-0 mx-auto mx-md-0">
                        <form action="{{ route('user.honey.home.store') }}" method="post">
                            @csrf
                            <div class="card-body">

                                <!-- Cars title -->
                                <div>
                                    <h4 class="text-lemney-primary fs-3 text-uppercase fw-semibold card-title">Honey Sale
                                        <br>
                                        Offers
                                    </h4>
                                </div>

                                <!-- Text -->
                                <p class="card-text small">Make a choice on our honey measurement options. With our weight
                                    based
                                    measurement option you can opt in to order your honey and we give you a price estimate
                                    as well as delivery to your door step.</p>


                                <!-- Price Checker -->
                                <div class="my-3">
                                    <div class="d-flex align-items-center justify-content-between py-2 small">
                                        <span>Input Amount</span>
                                        <span>Price: <span class="text-lemney-primary">&#x20A6;6000</span></span>
                                    </div>

                                    <!-- Input -->
                                    <div class="input-group py-2">
                                        <input type="text" name="price" value="100" hidden>
                                        <input type="number" name="amount" id="amount"
                                            class="form-control flex-fill flex-grow-1 w-auto">
                                        <select name="option" id="option" class="form-select">
                                            <option value="litre">Litre</option>
                                            <option value="bottle">Bottle</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="d-flex align-items-center justify-content-between gap-2">
                                    <button class="btn btn-lemney-primary text-uppercase px-md-4">Buy Now</button>
                                    <button class="btn btn-lemney-outline-primary text-uppercase px-md-4" name="later" value="yes">Save for later</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

        <!---here-->


        <!-- Send That Package Flying Section -->
        <section class="container-fluid px-3 px-md-5 py-3">

            <div class="row">

                <div class="col-md-6 order-md-last">
                    <img src="{{ asset('assets/img/fast_delivery_logistics_illustration.png') }}" alt="" class="img-fluid">
                </div>

                <div class="col-md-6">

                    <!-- Title -->
                    <div class="d-none d-md-block text-uppercase my-3">
                        <h3 class="fw-bold">Send That Pakcage Flying</h3>
                    </div>

                    <!--  -->
                    <div>
                        <p>
                            We aim to deliver your package you with your schedule in mind with out friendly pick-up
                            options to serve you with ease. <br />
                            Just by the clik of a button and a few types we can get across to you and the package
                            receiver. <br />
                            Our logistics platform specializes in reliable and efficient package shipping solutions for
                            businesses and individuals. Offering real-time tracking, seamless delivery scheduling, and
                            optimised routes to ensure timely shipments. <br>
                            Our network guarantees safe handling and fast delivery of packages. From small parcels to
                            bulk shipments, we deliver excellence every step of the way
                        </p>
                    </div>

                    <div>
                        <div class="d-grid">
                            <a href="{{ route('user.logistics') }}" class="btn btn-lemney-primary text-uppercase fw-bold">Request Logistics</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Housing Solution Section -->
        <section class="container-fluid px-3 px-md-5 py-5">

            <!-- Title (Show on Mobile screen) -->
            <div class="d-md-none text-center">
                <h3 class="fw-bold text-uppercase">Housing Solution</h3>
            </div>

            <!--  -->
            <div class="row">

                <div class="col-md-6">
                    <img src="{{ asset('assets/img/housing_solution_mansion.png') }}" alt="" class="img-fluid">
                </div>

                <div class="col-md-6">

                    <!-- Title (Show on Desktop screen) -->
                    <div class="d-none d-md-block text-uppercase">
                        <h3 class="fw-bold">Housing Solution</h3>
                    </div>

                    <p>
                        Our house listing platform connects home seekers with property owners, offering a seamless and
                        user-friendly experience. With advanced filters, interactive maps, and detailed property
                        descriptions, users can find their ideal homes effortlessly. For property owners and agents, our
                        platform provides tools to showcase listings, manage inquiries, and reach a broad audience. With
                        a secure admin panel for efficient management, we ensure transparency, convenience, and
                        satisfaction for all users.
                    </p>

                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-md-4">
                        <a href="{{ route('user.houselisting') }}" class="btn btn-lemney-primary text-uppercase my-1 w-100">List a House</a>
                        <a href="" class="btn btn-lemney-outline-primary text-uppercase my-1 w-100">View Available
                            Houses</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Top House Listings Section -->
        <section class="container-fluid px-3 px-md-5 py-3">

            <div class="d-none d-md-block text-uppercase">
                <h3 class="fw-bold">Top House Listings</h3>
            </div>

            <!-- House Listings -->
            <div>

                <div class="row">


                    @foreach ($house_listings as $house_listing)
                    <style>
                        .img-all{
                            width: 50px;
                            height: 50px;
                            clip-path: circle();
                        }
                        .img-img{
                            height: 300px;
                        }
                    </style>
                    <!-- House Listing 1 -->
                    <div class="col-md-3 py-2 py-md-3">
                        <div>
                            <!-- Card -->
                            <div class="card border shadow-sm">
                                <div class="position-relative rounded-top">
                                    <img src="{{ asset('public/house_images') }}/{{ $house_listing->img }}" class="img-fluid card-img-top img-img"
                                        alt="Traditional Apartment">

                                    <div class="position-absolute top-0 h-100 w-100 d-flex flex-column justify-content-between small p-2"
                                        style="background-color: rgba(0, 0, 0, 0.6);">

                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <div class="bg-dark text-bg-dark p-2">
                                                    <span>{{ $house_listing->property_name }}</span>
                                                    <br>
                                                    <span class="fw-semibold">NGN {{ number_format($house_listing->price, 2) }}</span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="bg-lemney-primary-2 text-bg-dark p-2">
                                                    For {{ $house_listing->listing_type }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between text-white">
                                            <div>
                                                <div>
                                                    <i class="fa fa-location me-2"></i>
                                                    {{ $house_listing->location }}, {{ $house_listing->lga }}, {{ $house_listing->state }}
                                                </div>
                                                <div>
                                                    <i class="fa fa-house me-2"></i>
                                                    {{ $house_listing->no_of_bedrooms }} bedroom
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                {{-- <span>2<i class="fa fa-video ms-1"></i></span> --}}
                                                <span>2<i class="fa fa-image ms-1"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>

                                    <div class="d-flex align-items-center justify-content-between p-2">
                                        <div class="d-flex align-items-center gap-1">
                                            <div class="rounded-circle">
                                                <img class="img-all" src="{{ asset('public/profile_image') }}/{{ $house_listing->profile_picture }}" alt="">
                                            </div>
                                            <div>
                                                <div class="fw-semibold">{{ $house_listing->contact_name }}</div>
                                                <div class="small text-muted">{{ $house_listing->contact_role }}</div>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-lemney">
                                                <a href="tel: {{ $house_listing->contact_phone }}"><i class="fa fa-phone"></i></a>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </section>

        <!-- Commitment to Home Service -->
        <section class="container-fluid px-3 px-md-5 py-3">

            <div class="bg-lemney-primary-2 rounded-4 p-4 p-md-5">

                <div class="row">

                    <div class="col-md-6">

                        <div
                            class="d-flex align-items-center justify-content-end flex-wrap fw-semibold gap-3 my-3 text-uppercase text-white">
                            <div class="rounded-3 shadow px-4 py-2">Manicure</div>
                            <div class="rounded-3 shadow px-4 py-2">Cleaning Service</div>
                            <div class="rounded-3 shadow px-4 py-2">Dry Cleaning</div>
                            <div class="rounded-3 shadow px-4 py-2">Pedicure</div>
                        </div>

                        <div>
                            <h4 class="fw-bold">Explore Our Commitment to Home Service Experience</h4>
                        </div>

                        <div>
                            <p>Our home service options spans across multiple units. Offering home services of manicure
                                and pedicure. We are not just about offering services. We offer perfection and quality.
                            </p>
                            <p>Choose a day you want it done. We've got you!</p>
                        </div>

                        <div>
                            <button class="btn btn-light text-lemney-primary fw-semibold text-uppercase"><a class="text-black text-decoration-none" href="{{ route('user.homeservice') }}">Request
                                Service</a></button>
                        </div>
                    </div>

                    <div class="col-md-6 d-none d-md-block">
                        <img src="{{ asset('assets/img/commitment_to_home_service.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>


        </section>


        <!-- Partnership Experience -->
        <section class="container-fluid px-3 px-md-5 py-5">

            <div class="row">

                <div class="col-md-6">
                    <img src="{{ asset('assets/img/human_care_professionals.png') }}" alt="" class="img-fluid">
                </div>

                <div class="col-md-6">

                    <!--  -->
                    <div class="my-2">
                        <img src="{{ asset('assets/img/partnership_register_with_us.png') }}" alt="" class="img-fluid">
                    </div>

                    <!-- Title -->
                    <div class="d-none d-md-block my-3">
                        <h3 class="fw-bold">Explore Partnership Experience</h3>
                    </div>

                    <!--  -->
                    <div>
                        <p>
                            Our platform foster collaboration among professionals in styling and overall human care,
                            creating a network where skills meet opportunity. Whether you're a hairstylist, makeup
                            artist, fitness coach, or wellness expert, we offer a space to showcase your services,
                            connect with clients, and grow your brand. <br>
                            By registering, you gain access to tools for managing appointments, promoting your
                            expertise, and collaborating with peers, all while delivering personalised care that
                            enhances client well-being!
                        </p>
                    </div>

                    <div>
                        <div class="d-grid">
                            <a href="{{ route('user.partnership') }}" class="btn btn-lemney-primary text-uppercase fw-bold">Register with us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Customer Review -->
        <section class="container-fluid px-3 px-md-5 py-3">

            <div>

                <!-- Swiper -->
                <div class="swiper customerReviewSwiper">
                    <div class="swiper-wrapper p-2">
                        <div class="customer-swiper-slide swiper-slide">

                            <!-- Customer 1 -->
                            <div class="shadow-sm rounded-4 p-2">

                                <div class="d-flex">
                                    <!-- Customer profile picture -->
                                    <div class="p-2">
                                        <img src="{{ asset('assets/img/customer_pfp.png') }}" alt="" class="img-fluid" width="48">
                                    </div>

                                    <!-- Customer Review -->
                                    <div class="p-2 flex-grow-1">

                                        <!-- Review Header -->
                                        <div class="mb-2">
                                            <h5 class="fw-bold mb-0">Customer 1</h5>
                                            <div>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star"></i>
                                                <i class="i fa fa-star btn-lemney-review-star"></i>
                                            </div>
                                        </div>

                                        <div class="my-2 text-muted small">

                                            <div class="my-2 ">
                                                <p>
                                                    The services by Lemney is superb. The service is delivery is what is
                                                    required
                                                </p>
                                            </div>

                                            <div>
                                                Executed By <br>
                                                <span class="fw-bold">Get Styled Krib</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="customer-swiper-slide swiper-slide">

                            <!-- Customer 1 -->
                            <div class="shadow-sm rounded-4 p-2">

                                <div class="d-flex">
                                    <!-- Customer profile picture -->
                                    <div class="p-2">
                                        <img src="{{ asset('assets/img/customer_pfp.png') }}" alt="" class="img-fluid" width="48">
                                    </div>

                                    <!-- Customer Review -->
                                    <div class="p-2 flex-grow-1">

                                        <!-- Review Header -->
                                        <div class="mb-2">
                                            <h5 class="fw-bold mb-0">Customer 1</h5>
                                            <div>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                            </div>
                                        </div>

                                        <div class="my-2 text-muted small">

                                            <div class="my-2 ">
                                                <p>
                                                    The services by Lemney is superb. The service is delivery is what is
                                                    required
                                                </p>
                                            </div>

                                            <div>
                                                Executed By <br>
                                                <span class="fw-bold">Get Styled Krib</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="customer-swiper-slide swiper-slide">

                            <!-- Customer 1 -->
                            <div class="shadow-sm rounded-4 p-2">

                                <div class="d-flex">
                                    <!-- Customer profile picture -->
                                    <div class="p-2">
                                        <img src="{{ asset('assets/img/customer_pfp.png') }}" alt="" class="img-fluid" width="48">
                                    </div>

                                    <!-- Customer Review -->
                                    <div class="p-2 flex-grow-1">

                                        <!-- Review Header -->
                                        <div class="mb-2">
                                            <h5 class="fw-bold mb-0">Customer 1</h5>
                                            <div>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                            </div>
                                        </div>

                                        <div class="my-2 text-muted small">

                                            <div class="my-2 ">
                                                <p>
                                                    The services by Lemney is superb. The service is delivery is what is
                                                    required
                                                </p>
                                            </div>

                                            <div>
                                                Executed By <br>
                                                <span class="fw-bold">Get Styled Krib</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="customer-swiper-slide swiper-slide">

                            <!-- Customer 1 -->
                            <div class="shadow-sm rounded-4 p-2">

                                <div class="d-flex">
                                    <!-- Customer profile picture -->
                                    <div class="p-2">
                                        <img src="{{ asset('assets/img/customer_pfp.png') }}" alt="" class="img-fluid" width="48">
                                    </div>

                                    <!-- Customer Review -->
                                    <div class="p-2 flex-grow-1">

                                        <!-- Review Header -->
                                        <div class="mb-2">
                                            <h5 class="fw-bold mb-0">Customer 1</h5>
                                            <div>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                            </div>
                                        </div>

                                        <div class="my-2 text-muted small">

                                            <div class="my-2 ">
                                                <p>
                                                    The services by Lemney is superb. The service is delivery is what is
                                                    required
                                                </p>
                                            </div>

                                            <div>
                                                Executed By <br>
                                                <span class="fw-bold">Get Styled Krib</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="customer-swiper-slide swiper-slide">

                            <!-- Customer 1 -->
                            <div class="shadow-sm rounded-4 p-2">

                                <div class="d-flex">
                                    <!-- Customer profile picture -->
                                    <div class="p-2">
                                        <img src="{{ asset('assets/img/customer_pfp.png') }}" alt="" class="img-fluid" width="48">
                                    </div>

                                    <!-- Customer Review -->
                                    <div class="p-2 flex-grow-1">

                                        <!-- Review Header -->
                                        <div class="mb-2">
                                            <h5 class="fw-bold mb-0">Customer 1</h5>
                                            <div>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                            </div>
                                        </div>

                                        <div class="my-2 text-muted small">

                                            <div class="my-2 ">
                                                <p>
                                                    The services by Lemney is superb. The service is delivery is what is
                                                    required
                                                </p>
                                            </div>

                                            <div>
                                                Executed By <br>
                                                <span class="fw-bold">Get Styled Krib</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="customer-swiper-slide swiper-slide">

                            <!-- Customer 1 -->
                            <div class="shadow-sm rounded-4 p-2">

                                <div class="d-flex">
                                    <!-- Customer profile picture -->
                                    <div class="p-2">
                                        <img src="{{ asset('assets/img/customer_pfp.png') }}" alt="" class="img-fluid" width="48">
                                    </div>

                                    <!-- Customer Review -->
                                    <div class="p-2 flex-grow-1">

                                        <!-- Review Header -->
                                        <div class="mb-2">
                                            <h5 class="fw-bold mb-0">Customer 1</h5>
                                            <div>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                            </div>
                                        </div>

                                        <div class="my-2 text-muted small">

                                            <div class="my-2 ">
                                                <p>
                                                    The services by Lemney is superb. The service is delivery is what is
                                                    required
                                                </p>
                                            </div>

                                            <div>
                                                Executed By <br>
                                                <span class="fw-bold">Get Styled Krib</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="customer-swiper-slide swiper-slide">

                            <!-- Customer 1 -->
                            <div class="shadow-sm rounded-4 p-2">

                                <div class="d-flex">
                                    <!-- Customer profile picture -->
                                    <div class="p-2">
                                        <img src="{{ asset('assets/img/customer_pfp.png') }}" alt="" class="img-fluid" width="48">
                                    </div>

                                    <!-- Customer Review -->
                                    <div class="p-2 flex-grow-1">

                                        <!-- Review Header -->
                                        <div class="mb-2">
                                            <h5 class="fw-bold mb-0">Customer 1</h5>
                                            <div>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                            </div>
                                        </div>

                                        <div class="my-2 text-muted small">

                                            <div class="my-2 ">
                                                <p>
                                                    The services by Lemney is superb. The service is delivery is what is
                                                    required
                                                </p>
                                            </div>

                                            <div>
                                                Executed By <br>
                                                <span class="fw-bold">Get Styled Krib</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="customer-swiper-slide swiper-slide">

                            <!-- Customer 1 -->
                            <div class="shadow-sm rounded-4 p-2">

                                <div class="d-flex">
                                    <!-- Customer profile picture -->
                                    <div class="p-2">
                                        <img src="{{ asset('assets/img/customer_pfp.png') }}" alt="" class="img-fluid" width="48">
                                    </div>

                                    <!-- Customer Review -->
                                    <div class="p-2 flex-grow-1">

                                        <!-- Review Header -->
                                        <div class="mb-2">
                                            <h5 class="fw-bold mb-0">Customer 1</h5>
                                            <div>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                            </div>
                                        </div>

                                        <div class="my-2 text-muted small">

                                            <div class="my-2 ">
                                                <p>
                                                    The services by Lemney is superb. The service is delivery is what is
                                                    required
                                                </p>
                                            </div>

                                            <div>
                                                Executed By <br>
                                                <span class="fw-bold">Get Styled Krib</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="customer-swiper-slide swiper-slide">

                            <!-- Customer 1 -->
                            <div class="shadow-sm rounded-4 p-2">

                                <div class="d-flex">
                                    <!-- Customer profile picture -->
                                    <div class="p-2">
                                        <img src="{{ asset('assets/img/customer_pfp.png') }}" alt="" class="img-fluid" width="48">
                                    </div>

                                    <!-- Customer Review -->
                                    <div class="p-2 flex-grow-1">

                                        <!-- Review Header -->
                                        <div class="mb-2">
                                            <h5 class="fw-bold mb-0">Customer 1</h5>
                                            <div>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                                <i class="i fa fa-star btn-lemney-review-star active"></i>
                                            </div>
                                        </div>

                                        <div class="my-2 text-muted small">

                                            <div class="my-2 ">
                                                <p>
                                                    The services by Lemney is superb. The service is delivery is what is
                                                    required
                                                </p>
                                            </div>

                                            <div>
                                                Executed By <br>
                                                <span class="fw-bold">Get Styled Krib</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--<div class="customer-swiper-slide-next">
                        <button type="button" class="btn btn-lemney" title="Next">
                            <i class="fa fa-caret-right"></i>
                        </button>
                    </div>
                    <div class="customer-swiper-slide-prev">
                        <button type="button" class="btn btn-lemney" title="Prev">
                            <i class="fa fa-caret-left"></i>
                        </button>
                    </div>-->
                </div>
            </div>

        </section>

        <!-- Leave a Review -->
        <section class="container-fluid p-3 px-md-5 py-3">

            <div>
                <h3 class="fw-bold">Leave A Review</h3>
            </div>

            <div>

                <form action="{{ route('user.review.store') }}" method="post">
                    @csrf

                    <!-- Form Fields -->
                    <div class="row my-2">

                        <div class="col-md-6">
                            <div class="py-2">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="my-2">
                                <label for="comment">Comment</label>
                                <textarea name="comment" id="comment" class="form-control"></textarea>
                                </divcla>
                            </div>
                        </div>

                        <div
                            class="d-flex flex-column flex-md-row align-items-md-center justify-content-md-between my-2">

                            <!-- Rating input -->
                            <input type="hidden" name="rating" value="0" class="review-stars-input">

                            <!-- Rating -->
                            <div class="d-flex align-items-center gap-2 rating">
                                <div class="text-lemney-primary fw-semibold fs-5">Leave A Rating</div>
                                <div>
                                    <button type="button"
                                        class="btn btn-lg btn-lemney-review-star p-2 fa fa-star"></button>
                                    <button type="button"
                                        class="btn btn-lg btn-lemney-review-star p-2 fa fa-star"></button>
                                    <button type="button"
                                        class="btn btn-lg btn-lemney-review-star p-2 fa fa-star"></button>
                                    <button type="button"
                                        class="btn btn-lg btn-lemney-review-star p-2 fa fa-star"></button>
                                    <button type="button"
                                        class="btn btn-lg btn-lemney-review-star p-2 fa fa-star"></button>
                                </div>
                            </div>

                            <div class="my-1">
                                <button type="submit" class="btn btn-lemney-primary">Submit</button>
                            </div>
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                const stars = document.querySelectorAll(".btn-lemney-review-star");
                                const ratingInput = document.querySelector(".review-stars-input");

                                stars.forEach((star, index) => {
                                    star.addEventListener("click", function () {
                                        let rating = index + 1; // Since index starts from 0, we add 1
                                        ratingInput.value = rating;
                                        updateStars(rating);
                                    });
                                });

                                function updateStars(rating) {
                                    stars.forEach((star, index) => {
                                        if (index < rating) {
                                            star.classList.add("text-warning"); // Highlight selected stars
                                        } else {
                                            star.classList.remove("text-warning"); // Remove highlight from unselected stars
                                        }
                                    });
                                }
                            });

                        </script>
                </form>
            </div>
        </section>

        <!-- Tips Section -->
        <section class="container-fluid p-3 px-md-5 py-3">

            <div class="row">

                <!-- Cleaning Tips -->
                <div class="col-md-4 my-2">

                    <div>
                        <div class="card border-0 text-white">
                            <img src="{{ asset('assets/img/cleaning_tips.png') }}" class="card-img" alt="...">

                            <div class="card-img-overlay position-relative p-0">
                                <div class="position-absolute bottom-0 p-3 w-100"
                                    style="background-color: rgba(0, 0, 0, 0.671); backdrop-filter: blur(4px);">
                                    <h5 class="card-title text-uppercase fs-6 fw-bold">Cleaning Tips</h5>
                                    <p class="card-text small">Home cleaning tips at your disposal in case of emergency,
                                        we've
                                        got
                                        you covered</p>
                                    <p class="card-text"><a href="" class="link btn btn-sm btn-lemney">Discover More <i
                                                class="fa fa-arrow-right ms-2"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Honey Tips -->
                <div class="col-md-4 my-2">

                    <div>
                        <div class="card border-0 text-white">
                            <img src="{{ asset('assets/img/honey_tips.png') }}" class="card-img" alt="...">

                            <div class="card-img-overlay position-relative p-0">
                                <div class="position-absolute bottom-0 p-3 w-100"
                                    style="background-color: rgba(0, 0, 0, 0.671); backdrop-filter: blur(4px);">
                                    <h5 class="card-title text-uppercase fs-6 fw-bold">Honey Tips</h5>
                                    <p class="card-text small">Honey are gems made by one of earths fascinating
                                        creatures housing a lot of nutrients. We can show you food combos to enhance
                                        health status</p>
                                    <p class="card-text"><a href="" class="link btn btn-sm btn-lemney">Discover More <i
                                                class="fa fa-arrow-right ms-2"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Delivery Tips -->
                <div class="col-md-4 my-2">

                    <div>
                        <div class="card border-0 text-white">
                            <img src="{{ asset('assets/img/delivery_tips.png') }}" class="card-img" alt="...">

                            <div class="card-img-overlay position-relative p-0">
                                <div class="position-absolute bottom-0 p-3 w-100"
                                    style="background-color: rgba(0, 0, 0, 0.671); backdrop-filter: blur(4px);">
                                    <h5 class="card-title text-uppercase fs-6 fw-bold">Delivery Tips</h5>
                                    <p class="card-text small">Making sure your package delivery is smooth and safe
                                        starts from you. We'll give you tips to go about your package security.</p>
                                    <p class="card-text"><a href="" class="link btn btn-sm btn-lemney">Discover More <i
                                                class="fa fa-arrow-right ms-2"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="container-fluid p-3 px-md-5 pb-5">

            <form action="{{ route('user.newspaper.store') }}" method="post">

                <div class="d-flex align-items-center justify-content-center">

                    <div>

                        <div class="text-center">
                            <h5 class="mb-1">Follow the latest trends</h5>
                            <p class="lead fs-6 small">With our daily newsletter</p>
                        </div>

                        <div>
                                @csrf
                                <div class="d-flex gap-2">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="you@example.com" required>
                                    <button type="submit" class="btn btn-dark">Submit</button>
                                </div>
                        </div>
                    </div>

                </div>
            </form>
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
