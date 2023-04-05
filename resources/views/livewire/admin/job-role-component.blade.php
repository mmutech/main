<div x-data="{ addModal: @entangle('addModal').defer }">
    @push('dashboard-css')
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset("assets/plugins/fontawesome/css/fontawesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/plugins/fontawesome/css/all.min.css") }}">

    <!-- Material CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/material.css") }}">

    <!-- Chart CSS -->
    <link rel="stylesheet" href="{{ asset("assets/plugins/morris/morris.css") }}">
    @endpush
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Job Role</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Job Role List</li>
                </ul>
            </div>
            <div class="col-auto float-end ms-auto">
                <a @click="addModal = true" class="btn add-btn" data-bs-toggle="modal"
                    data-bs-target="#add_job_role"><i class="fa fa-plus"></i> Add Job Role</a>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
    {{-- /page content --}}
    <div class="row">
        <div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
             @endif
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Job Role Name</th>
                            <th>Discription</th>
                            <th>Status</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($job_role as $div)
                            <tr>
                                <td>#</td>
                                <td>{{$div->description}}</td>
                                <td>{{$div->comment}}</td>
                                @if ($div->status == 'Active')
                                <td>
                                    <span class="badge bg-inverse-success">{{$div->status}}</span>
                                </td>
                                @elseif ($div->status == 'Inactive')
                                <td>
                                    <span class="badge bg-inverse-danger">{{$div->status}}</span>
                                </td>
                                @endif
                                <td class="text-end">
                                    <a @click="editModal = true" class="btn btn-primary" data-bs-toggle="editjob_roleForm"
                                        data-bs-target="#edit_job_role" wire:click="edit({{$div->id}})"><i class="fa fa-pencil m-r-5"></i></a>
                                    
                                    {{-- <a class="btn btn-danger" style="color:white" href="#" data-bs-toggle="modal"
                                        data-bs-target="#delete_job_role" wire:click="remove({{$div->id}})"><i class="fa fa-trash-o m-r-5"></i>
                                        </a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- /end page content --}}

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
                            <h5 class="text-lg">Add Job Role</h5>
                        </div>
                        <div class="modal-body">
                            <form wire:submit.prevent="createJobRole">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Job Role Name</label>
                                            <input wire:model.defer="discription"
                                                class="border-gray-300 rounded-sm form-control" type="text">
                                                @error('discription') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Comment</label>
                                            <textarea wire:model.defer="comment" id="comment" rows="4" 
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Comment.."></textarea>
                                            @error('comment') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                        </div>                                   
                                    </div>                          
                                    
                                    <div class="submit-section">
                                        <button wire:loading.remove
                                        class="btn btn-primary submit-btn">Submit</button>
                                        <button wire:loading wire:target="createJobRole"
                                        class="btn btn-primary submit-btn">Submitting..</button>
                                    </div>
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

    {{-- Edit job_role --}}
<div x-cloak x-show="editModel"
    class="fixed inset-0 z-30 overflow-y-scroll pt-26 flex items-center bg-black bg-opacity-50 sm:items-center sm:justify-center">
    <!-- Modal -->
    <div x-show="editModal" x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="editModal = false"
        @keydown.escape="editModal = false"
        class="w-full mx-auto px-6 py-2 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
        role="dialog" id="modal">
        <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
        <header class="flex justify-end">
            <button
                class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                aria-label="close" @click="editModal = false">
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
                        <h5 class="text-lg">Edit Job Role</h5>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="updateJobRole">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Job Role Name</label>
                                        <input wire:model.defer="discription"
                                            class="border-gray-300 rounded-sm form-control" type="text">
                                            @error('discription') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <textarea wire:model.defer="comment" rows="4" 
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Comment.."></textarea>
                                            @error('comment') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                    </div>                                   
                                </div> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select wire:model.defer="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Select...</option>
                                            @foreach($status as $stat)
                                                <option value="{{$stat->id}}">{{$stat->status_name}}</option>
                                            @endforeach
                                          </select>
                                            @error('status') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                    </div>                                   
                                </div>                           
                                
                                <div class="submit-section">
                                    <button wire:loading.remove
                                    class="btn btn-primary submit-btn">Update</button>
                                    <button wire:loading wire:target="updateJobRole"
                                    class="btn btn-primary submit-btn">Updating..</button>
                                </div>
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
