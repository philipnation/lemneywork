@include('layouts.admin.header')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
    .table-header {
      background-color: #f57c00;
      color: white;
    }
    .table-row {
      background-color: #ffecb3;
    }
    .btn-save {
      background-color: #f57c00;
      color: white;
      border-radius: 999px;
      padding: 0.25rem 1rem;
      font-weight: 600;
    }
    .status {
      color: #f57c00;
      font-weight: 600;
    }
  </style>
            <!-- Main content -->
            <div class="flex-grow-1">

                <br>
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @elseif (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif


                <div class="container my-4">
                    <h2 class="p-2 m-2">Home Services</h2>
                    <button class="btn btn-lemney-primary" data-bs-toggle="modal" data-bs-target="#reviewModal">Add Service</button>

                    <div class="table-responsive">
                        <table class="table text-center align-middle">
                        <thead class="table-header">
                            <tr>
                            <th>Service</th>
                            <th>Pre. Price</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Repeat rows as needed -->
                            @foreach ($services as $service)

                            <tr class="table-row">
                                <td>{{ $service->name }}</td>
                            <td>NGN {{ number_format($service->preprice, 2) }}</td>
                            <td>NGN {{ number_format($service->price, 2) }}</td>
                            <td>{{ $service->created_at }}</td>
                            <td class="status">{{ $service->status }}</td>
                            <td><button class="btn btn-save" data-bs-toggle="modal" data-bs-target="#servicesingleModal{{ $service->id }}"><a href="#" class="text-white text-decoration-none">Edit</a></button>
                                <button class="btn btn-danger" data-bs-toggle="modal"><a href="{{ route('admin.service.delete', $service->id) }}" class="text-white text-decoration-none">Delete</a></button>
                            </td>
                            </tr>


                            <form method="post" action="{{ route('admin.service.update') }}">
                                @csrf

                                <div class="modal fade" id="servicesingleModal{{ $service->id }}" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="Cancel Order Confirmation Modal" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable mx-auto rounded-3"
                                        style="max-width: 360px;">
                                        <div class="modal-content p-3">
                                            <!-- Modal header -->
                                            <!--<div class="modal-header border-0 p-2">
                                                <h2 class="text-uppercase fs-4 my-0">Review</h2>
                                            </div>-->
                                            <!-- Modal body -->
                                            <div class="modal-body p-2">

                                                <input type="text" name="id" id="" value="{{ $service->id }}" hidden>
                                                <!-- Email address -->
                                                <div class="my-2">
                                                    <label for="email" class="form-label fw-bold">Service</label>
                                                    <input type="text" name="name" id="email" placeholder="Service"
                                                        value="{{ $service->name }}"
                                                        class="form-control">
                                                </div>

                                                <!-- Email address -->
                                                <div class="my-2">
                                                    <label for="email" class="form-label fw-bold">Slashed Price</label>
                                                    <input type="number" name="preprice" id="email" placeholder="Slashed Price"
                                                        value="{{ $service->preprice }}"
                                                        class="form-control">
                                                </div>

                                                <!-- Summary -->
                                                <div class="my-2">
                                                    <label for="summary" class="form-label fw-bold">Price</label>

                                                    <input type="number" name="price" id="summary" placeholder="Price"
                                                        value="{{ $service->price }}"
                                                        class="form-control">
                                                </div>

                                                <div class="my-2">
                                                    <label for="summary" class="form-label fw-bold">Description</label>

                                                    <textarea class="form-control" name="description" id="summary" placeholder="Service Description"
                                                        rows="3">{{ $service->description }}</textarea>
                                                </div>


                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer border-0 p-2">
                                                <button type="submit" class="btn btn-lemney-primary px-4">Update Service</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>

                            @endforeach

                        </tbody>
                        </table>
                    </div>

                    <!-- Review Modal -->
                    <form method="post" action="{{ route('admin.service') }}">
                        @csrf

                        <div class="modal fade" id="reviewModal" data-bs-keyboard="false" tabindex="-1"
                            aria-labelledby="Cancel Order Confirmation Modal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable mx-auto rounded-3"
                                style="max-width: 360px;">
                                <div class="modal-content p-3">
                                    <!-- Modal header -->
                                    <!--<div class="modal-header border-0 p-2">
                                        <h2 class="text-uppercase fs-4 my-0">Review</h2>
                                    </div>-->
                                    <!-- Modal body -->
                                    <div class="modal-body p-2">

                                        <!-- Email address -->
                                        <div class="my-2">
                                            <label for="email" class="form-label fw-bold">Service</label>
                                            <input type="text" name="name" id="email" placeholder="Service"
                                                class="form-control">
                                        </div>

                                        <!-- Email address -->
                                        <div class="my-2">
                                            <label for="email" class="form-label fw-bold">Slashed Price</label>
                                            <input type="number" name="preprice" id="email" placeholder="Slashed Price"
                                                class="form-control">
                                        </div>

                                        <!-- Summary -->
                                        <div class="my-2">
                                            <label for="summary" class="form-label fw-bold">Price</label>

                                            <input type="number" name="price" id="summary" placeholder="Price"
                                                class="form-control">
                                        </div>

                                        <div class="my-2">
                                            <label for="summary" class="form-label fw-bold">Description</label>

                                            <textarea class="form-control" name="description" id="summary" placeholder="Service Description"
                                                rows="3"></textarea>
                                        </div>


                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer border-0 p-2">
                                        <button type="submit" class="btn btn-lemney-primary px-4">Add Service</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>

                    <!-- Review Modal Ends here -->

                </div>


                <div class="container my-4">
                    <h2 class="p-2 m-2">Honey Prices</h2>
                    <button class="btn btn-lemney-primary" data-bs-toggle="modal" data-bs-target="#quantityModal">Add Quantity</button>

                    <div class="table-responsive">
                        <table class="table text-center align-middle">
                        <thead class="table-header">
                            <tr>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Repeat rows as needed -->
                            @foreach ($honeyprices as $honeyprice)

                            <tr class="table-row">
                                <td>{{ $honeyprice->name }}</td>
                            <td>NGN {{ number_format($honeyprice->price, 2) }}</td>
                            <td>{{ $honeyprice->created_at }}</td>
                            <td class="status">{{ $honeyprice->status }}</td>
                            <td class="m-2"><button class="btn btn-save" data-bs-toggle="modal" data-bs-target="#quantitysingleModal{{ $honeyprice->id }}"><a href="#" class="text-white text-decoration-none">Edit</a></button>
                                <button class="btn btn-danger" data-bs-toggle="modal"><a href="{{ route('admin.service.honey.delete', $honeyprice->id) }}" class="text-white text-decoration-none">Delete</a></button>
                            </td>
                            </tr>


                            <form method="post" action="{{ route('admin.service.honey.update') }}">
                                @csrf

                                <div class="modal fade" id="quantitysingleModal{{ $honeyprice->id }}" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="Cancel Order Confirmation Modal" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable mx-auto rounded-3"
                                        style="max-width: 360px;">
                                        <div class="modal-content p-3">
                                            <!-- Modal header -->
                                            <!--<div class="modal-header border-0 p-2">
                                                <h2 class="text-uppercase fs-4 my-0">Review</h2>
                                            </div>-->
                                            <!-- Modal body -->
                                            <div class="modal-body p-2">

                                                <input type="text" name="id" id="" value="{{ $honeyprice->id }}" hidden>
                                                <!-- Email address -->
                                                <div class="my-2">
                                                    <label for="email" class="form-label fw-bold">Quantity</label>
                                                    <input type="text" name="name" id="email" placeholder="Quantity"
                                                        value="{{ $honeyprice->name }}"
                                                        class="form-control">
                                                </div>

                                                <!-- Summary -->
                                                <div class="my-2">
                                                    <label for="summary" class="form-label fw-bold">Price</label>

                                                    <input type="number" name="price" id="summary" placeholder="Price"
                                                        value="{{ $honeyprice->price }}"
                                                        class="form-control">
                                                </div>

                                                <div class="my-2">
                                                    <label for="summary" class="form-label fw-bold">Distributor Price</label>

                                                    <input type="number" name="dprice" id="summary" placeholder="Distributor Price"
                                                        value="{{ $honeyprice->dprice }}"
                                                        class="form-control">
                                                </div>


                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer border-0 p-2">
                                                <button type="submit" class="btn btn-lemney-primary px-4">Update Quantity</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>

                            @endforeach

                        </tbody>
                        </table>
                    </div>

                    <!-- Review Modal -->
                    <form method="post" action="{{ route('admin.service.honey') }}">
                        @csrf

                        <div class="modal fade" id="quantityModal" data-bs-keyboard="false" tabindex="-1"
                            aria-labelledby="Cancel Order Confirmation Modal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable mx-auto rounded-3"
                                style="max-width: 360px;">
                                <div class="modal-content p-3">
                                    <!-- Modal header -->
                                    <!--<div class="modal-header border-0 p-2">
                                        <h2 class="text-uppercase fs-4 my-0">Review</h2>
                                    </div>-->
                                    <!-- Modal body -->
                                    <div class="modal-body p-2">

                                        <!-- Email address -->
                                        <div class="my-2">
                                            <label for="email" class="form-label fw-bold">Quantity</label>
                                            <input type="text" name="name" id="email" placeholder="Quantity"
                                                class="form-control">
                                        </div>

                                        <!-- Summary -->
                                        <div class="my-2">
                                            <label for="summary" class="form-label fw-bold">Price</label>

                                            <input type="number" name="price" id="summary" placeholder="Price"
                                                class="form-control">
                                        </div>

                                        <div class="my-2">
                                            <label for="summary" class="form-label fw-bold">Distributor Price</label>

                                            <input type="number" name="dprice" id="summary" placeholder="Distributor Price"
                                                class="form-control">
                                        </div>


                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer border-0 p-2">
                                        <button type="submit" class="btn btn-lemney-primary px-4">Add Quantity</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>

                    <!-- Review Modal Ends here -->

                </div>

                <div class="container my-4">
                    <h2 class="p-2 m-2">Account Details</h2>
                    {{-- <button class="btn btn-lemney-primary" data-bs-toggle="modal" data-bs-target="#quantityModal">Add Quantity</button> --}}

                    <div class="table-responsive">
                        <table class="table text-center align-middle">
                        <thead class="table-header">
                            <tr>
                            <th>Account Name</th>
                            <th>Account Number</th>
                            <th>Bank Name</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Repeat rows as needed -->

                            <tr class="table-row">
                            <td>{{ $accountdetails->accountname }}</td>
                            <td>{{ $accountdetails->accountnumber }}</td>
                            <td>{{ $accountdetails->bankname }}</td>
                            <td><button class="btn btn-save" data-bs-toggle="modal" data-bs-target="#accountModal"><a href="#" class="text-white text-decoration-none">Edit</a></button></td>
                            </tr>

                        </tbody>
                        </table>
                    </div>

                    <!-- Review Modal -->
                    <form method="post" action="{{ route('admin.service.account') }}">
                        @csrf

                        <div class="modal fade" id="accountModal" data-bs-keyboard="false" tabindex="-1"
                            aria-labelledby="Cancel Order Confirmation Modal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable mx-auto rounded-3"
                                style="max-width: 360px;">
                                <div class="modal-content p-3">
                                    <!-- Modal header -->
                                    <!--<div class="modal-header border-0 p-2">
                                        <h2 class="text-uppercase fs-4 my-0">Review</h2>
                                    </div>-->
                                    <!-- Modal body -->
                                    <div class="modal-body p-2">

                                        <input type="text" name="id" id="" value="{{ $accountdetails->id }}" hidden>
                                        <!-- Email address -->
                                        <div class="my-2">
                                            <label for="email" class="form-label fw-bold">Account Name</label>
                                            <input type="text" name="accountname" id="email" placeholder="Account Name" value="{{ $accountdetails->accountname }}"
                                                class="form-control">
                                        </div>

                                        <!-- Summary -->
                                        <div class="my-2">
                                            <label for="summary" class="form-label fw-bold">Account Number</label>

                                            <input type="number" name="accountnumber" id="summary" placeholder="Account Number" value="{{ $accountdetails->accountnumber }}"
                                                class="form-control">
                                        </div>

                                        <div class="my-2">
                                            <label for="summary" class="form-label fw-bold">Bank Name</label>

                                            <input type="text" name="bankname" id="summary" placeholder="Bank Name" value="{{ $accountdetails->bankname }}"
                                                class="form-control">
                                        </div>


                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer border-0 p-2">
                                        <button type="submit" class="btn btn-lemney-primary px-4">Update Account</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>

                    <!-- Review Modal Ends here -->

                </div>

            </div>
        </div>
    </main>


@include('layouts.admin.footer')
