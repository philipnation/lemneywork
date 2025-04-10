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
                    <h2 class="p-2 m-2">Users</h2>
                    {{-- <button class="btn btn-lemney-primary" data-bs-toggle="modal" data-bs-target="#reviewModal">Add Service</button> --}}

                    <div class="table-responsive">
                        <table class="table text-center align-middle">
                        <thead class="table-header">
                            <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Registration Date</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Repeat rows as needed -->
                            @foreach ($users as $user)

                            <tr class="table-row">
                                <td>{{ $user->surname }} {{ $user->lastname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td><button class="btn btn-save" data-bs-toggle="modal" data-bs-target="#servicesingleModal{{ $user->id }}"><a href="#" class="text-white text-decoration-none">Edit</a></button>
                                <button class="btn btn-danger" data-bs-toggle="modal"><a href="{{ route('admin.service.delete', $user->id) }}" class="text-white text-decoration-none">Delete Account</a></button>
                            </td>
                            </tr>


                            <form method="post" action="{{ route('admin.users.edit') }}">
                                @csrf

                                <div class="modal fade" id="servicesingleModal{{ $user->id }}" data-bs-keyboard="false" tabindex="-1"
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

                                                <input type="text" name="id" id="" value="{{ $user->id }}" hidden>
                                                <!-- Email address -->
                                                <div class="my-2">
                                                    <label for="email" class="form-label fw-bold">Surname</label>
                                                    <input type="text" name="surname" id="surname" placeholder="Service"
                                                        value="{{ $user->surname }}"
                                                        class="form-control">
                                                </div>

                                                <!-- Email address -->
                                                <div class="my-2">
                                                    <label for="email" class="form-label fw-bold">Firstname</label>
                                                    <input type="text" name="firstname" id="email" placeholder="Firstname"
                                                        value="{{ $user->firstname }}"
                                                        class="form-control">
                                                </div>

                                                <!-- Summary -->
                                                <div class="my-2">
                                                    <label for="summary" class="form-label fw-bold">Email</label>

                                                    <input type="email" name="email" id="summary" placeholder="Email"
                                                        value="{{ $user->email }}"
                                                        class="form-control">
                                                </div>

                                                <!-- Summary -->
                                                <div class="my-2">
                                                    <label for="summary" class="form-label fw-bold">Phone</label>

                                                    <input type="number" name="phone" id="summary" placeholder="Phone Number"
                                                        value="{{ $user->phone }}"
                                                        class="form-control">
                                                </div>

                                                <div class="my-2">
                                                    <label for="summary" class="form-label fw-bold">Address</label>

                                                    <input type="text" name="address" id="summary" placeholder="Address"
                                                        value="{{ $user->address }}"
                                                        class="form-control">
                                                </div>


                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer border-0 p-2">
                                                <button type="submit" class="btn btn-lemney-primary px-4">Update User Info</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>

                            @endforeach

                        </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </main>


@include('layouts.admin.footer')
