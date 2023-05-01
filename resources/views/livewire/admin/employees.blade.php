<div x-data="{ addModal: @entangle('addModal').defer }">
    @push('all-assets-css')
        <!-- Datatable CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">

        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    @endpush

    <!-- Page Content -->
    <div>

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Employees</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Employee List</li>
                    </ul>
                </div>
                <div class="col-auto float-end ms-auto">
                    <!--<a @click="addModal = true" class="btn add-btn" data-bs-toggle="modal"
                        data-bs-target="#add_employee"><i class="fa fa-plus"></i> Add Employee</a>-->

                        <a href="{{url('create-employee')}}" class="btn add-btn"><i class="fa fa-plus"></i> Add New Employee</a>
                </div>

              
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Search Filter -->
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <input type="text" class="border-gray-300 rounded-sm form-control floating">
                    <label class="focus-label">Employee Name</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus select-focus">
                    <select class="select floating">
                        <option value=""> -- Select -- </option>
                        <option value="0"> Pending </option>
                        <option value="1"> Approved </option>
                        <option value="2"> Returned </option>
                    </select>
                    <label class="focus-label">Status</label>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-2">
                <div class="d-grid">
                    <a href="#" class="btn btn-success"> Search </a>
                </div>
            </div>
        </div>
        <!-- /Search Filter -->

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Staff Id</th>
                                <th>Name</th>
                                
                                <th>Personal Email</th>
                                <th class="text-center">Status</th>
                                <th class="text-end"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td> <a href="{{ url("employee-profile/$employee->id") }}">
                                            <strong>{{$employee->staff_id}}</strong>
                                        </a></td>
                                    <td>
                                        <a href="{{ url("employee-profile/$employee->id") }}">

                                            {{ $employee->first_name ." ".$employee->surname." ".$employee->other_name }}
                                        </a>
                                    </td>
                                    <td>{{ $employee->personal_email }}</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-info"></i> Pending
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ url("employee-profile/$employee->id") }}"><i class="fa fa-user m-r-5"></i>
                                                    View Profile</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#delete_asset"><i class="fa fa-trash-o m-r-5"></i>
                                                    Deactivate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->


    <!-- Add Asset Modal custom -->
    <!-- Modal backdrop. This what you want to place close to the closing body tag -->
    <div x-cloak x-show="addModal"
        class="fixed inset-0 z-30 overflow-y-scroll pt-26 flex items-center bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div x-show="addModal" x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="addModal = false"
            @keydown.escape="addModal = false"
            class="w-full mx-auto px-6 py-2 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
            role="dialog" id="modal">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-end">
                <button
                    class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                    aria-label="close" @click="addModal = false">
                    <svg class="w-5 h-5 text-lg bg-gray-400 hover:bg-gray-500 px-[1.5px] rounded-full text-white"
                        fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </header>
            
            <!-- Modal body -->
            <div class="w-full border-4 border-red-500">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h5 class="text-lg">Add Employee</h5>
                        </div>
                        <div class="modal-body">
                            <form wire:submit.prevent="createEmployee">
                              
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Surname</label>
                                            <input wire:model.defer="surname"
                                                class="border-gray-300 rounded-sm form-control" type="text">
                                            <x-input-error for="surname">
                                            </x-input-error>
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input wire:model.defer="first_name"
                                                class="border-gray-300 rounded-sm form-control" type="text">
                                            <x-input-error for="first_name">
                                            </x-input-error>
                                        </div>
                                    </div>                                    
                            </div>
                                   
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Other Name</label>
                                        <input wire:model.defer="other_name"
                                            class="border-gray-300 rounded-sm form-control" type="text">
                                        <x-input-error for="other_name">
                                        </x-input-error>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input wire:model.defer="date_of_birth"
                                            class="border-gray-300 rounded-sm form-control" type="date">
                                        <x-input-error for="date_of_birth">
                                        </x-input-error>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input wire:model.defer="phone"
                                            class="border-gray-300 rounded-sm form-control" type="text">
                                        <x-input-error for="phone">
                                        </x-input-error>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Personal Mail</label>
                                        <input wire:model.defer="personal_mail"
                                            class="border-gray-300 rounded-sm form-control" type="text">
                                        <x-input-error for="personal_mail">
                                        </x-input-error>
                                    </div>
                                </div>
                            </div>                            
                                
                                <div class="submit-section">
                                    <button wire:loading.remove
                                        class="btn btn-primary submit-btn">Submit</button>
                                    <button wire:loading wire:target="createEmployee"
                                        class="btn btn-primary submit-btn">Submitting..</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal body Ends -->

        </div>
    </div>
    <!-- End of modal backdrop -->
    <!-- End Asset Modal custom -->

    <!-- Delete Asset Modal -->
    <div class="modal custom-modal fade" id="delete_asset" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Deactivate Employee</h3>
                        <p class="text-warning">Are you sure want to Deactivate User?</p>
                        <span>Deactivated users will no longer have access to this system</span>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                    class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Asset Modal -->

    @push('all-assets-js')
        <!-- Datatable JS -->
        <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Select2 JS -->
        <script src="{{ asset('assets/js/select2.min.js') }}"></script>

        <!-- Datetimepicker JS -->
        <script src="{{ asset('assets/js/moment.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    @endpush
</div>
<!-- /Page Wrapper -->