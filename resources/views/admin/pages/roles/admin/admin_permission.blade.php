<x-admin-app-layout :title="'Admin'">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!--begin::Content-->

    {{-- @if (Auth::guard('admin')->user()->can('all.admin')) --}}

        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">

        </div>
        <!--end::Toolbar-->

        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->

                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->

                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

                            <!--begin::Add product-->

                            <a href="" class="btn btn-light-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#addModal">Add
                                Admin</a>

                            <!--end::Add product-->

                        </div>
                        <!--end::Card toolbar-->

                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table id="kt_datatable_example_5"
                            class="table table-striped table-row-bordered gy-5 gs-7 border rounded">

                            <!--begin::Table head-->
                            <thead class="bg-dark text-white">
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 gs-0">

                                    <th style="width: 40px;">No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Mail Status</th>
                                    <th>Action</th>

                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">

                                <!--begin::Table row-->
                                @foreach ($users as $key => $user)
                                    <tr>

                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>

                                        <td>
                                            @forelse ($user->roles as $role)
                                                <span
                                                    class="badge badge-pill
                                                @switch($role->name)
                                                    @case('Super Admin')
                                                        bg-danger
                                                        @break
                                                    @case('Admin')
                                                        bg-warning
                                                        @break
                                                    @case('Site Testing')
                                                        bg-success
                                                        @break
                                                    @default
                                                        bg-secondary
                                                @endswitch">
                                                    {{ $role->name }}
                                                </span>
                                            @empty
                                                <span class="badge badge-pill bg-primary">No roles assigned</span>
                                            @endforelse
                                        </td>


                                        <td>
                                            @if ($user->status == 'active')
                                                <span class="badge badge-light-success">Active</span>
                                            @else
                                                <span class="badge badge-light-danger">inactive</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($user->mail_status == 'mail')
                                                <span class="badge badge-success">Mail</span>
                                            @else
                                                <span class="badge badge-danger">No Mail</span>
                                            @endif
                                        </td>


                                        <td>

                                            {{-- @if (Auth::guard('admin')->user()->can('status.admin'))
                                            @if ($user->status == 1)
                                                <a href="{{ route('admin.inactive', $user->id) }}" title="Inactive"><i
                                                        class="bi bi-hand-thumbs-down text-warning fs-3"></i></a>
                                            @else
                                                <a href="{{ route('admin.active', $user->id) }}" title="Active"><i
                                                        class="bi bi-hand-thumbs-up text-dark fs-3"></i></a>
                                            @endif
                                        @endif --}}

                                            {{-- @if (Auth::guard('admin')->user()->can('edit.admin')) --}}
                                            <a href="{{ route('edit.admin.permission', $user->id) }}" class="ms-1"
                                                title="Edit"><i class="bi bi-pencil-square fs-3 text-success"></i></a>
                                            {{-- @endif --}}

                                            {{-- @if (Auth::guard('admin')->user()->can('delete.admin')) --}}
                                            <a href="{{ route('delete.admin', $user->id) }}" class="ms-1"
                                                title="Delete"><i class="bi bi-trash fs-3 text-danger"></i></a>
                                            {{-- @endif --}}

                                        </td>

                                    </tr>
                                @endforeach
                                <!--end::Table row-->


                            </tbody>
                            <!--end::Table body-->

                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    {{-- @endif --}}

    {{-- Add Permission --}}

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header" style="background: #6196A6;height: 50px;">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Add Admin</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('store.admin.permission') }}" method="POST" id="myForm">

                    @csrf

                    <div class="modal-body">

                        <div class="row">

                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="">Name</label>
                                    <input type="text" name="name" autocomplete="off" placeholder="Name"
                                        class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="">Email</label>
                                    <input type="email" name="email" autocomplete="off" placeholder="Email"
                                        class="form-control form-control-sm">
                                </div>
                            </div>


                            <div class="col-4">
                                <div class="form-group mb-3">
                                    <label for="">Designation</label>
                                    <input type="text" name="designation" autocomplete="off"
                                        placeholder="Designation" class="form-control form-control-sm">
                                </div>
                            </div>


                            <div class="col-4">
                                <div class="form-group mb-3">
                                    <label for="">Company Name</label>
                                    <input type="text" name="company_name" autocomplete="off"
                                        placeholder="Company Name" class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group mb-3">
                                    <label for="">Phone</label>
                                    <input type="tel" name="phone" autocomplete="off" placeholder="Phone"
                                        class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="">Address</label>
                                    <input type="text" name="address" autocomplete="off" placeholder="Address"
                                        class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="">Password</label>
                                    <input type="password" name="password" autocomplete="off" placeholder="******"
                                        class="form-control form-control-sm">
                                </div>
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Role</label>

                                    <select class="form-select form-select-sm" name="roles">
                                        <option selected disabled>Select Role</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="col-4">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-select form-select-sm">
                                    <option selected disabled>Select Status</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                            <div class="col-4">
                                <label for="">Mail Status</label>
                                <select name="mail_status" id="" class="form-select form-select-sm">
                                    <option selected disabled>Select Mail Status</option>
                                    <option value="mail">Mail</option>
                                    <option value="no_mail">No Mail</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>

                    </div>

                </form>

            </div>
        </div>
    </div>

    {{-- Add Permission --}}



    {{-- DataTable  --}}
    @push('scripts')
        <script>
            $("#kt_datatable_example_5").DataTable({
                "language": {
                    "lengthMenu": "Show _MENU_",
                },
                "dom": "<'row'" +
                    "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                    "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                    ">" +

                    "<'table-responsive'tr>" +

                    "<'row'" +
                    "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                    "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                    ">"
            });
        </script>
    @endpush
</x-admin-app-layout>
