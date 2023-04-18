<div x-data="{ addModal: @entangle('addModal').defer }">
    <div>
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
        <!-- End Update Exit Initiation -->
        
        <div class="card mb-0">
            <div class="card-header">
                Head Human Resource Approval
            </div>
            <div class="card-body">
                <div class="row">
                    @if(@empty($this->ViewAdminComment))
                    <div class="col-md-6">
                        <form wire:submit.prevent="updateIntiation">
                            <div class="row">
                                <input wire:model.defer="ViewexitIntId" class="form-control" type="hidden" readonly>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Exit Type Name</label>
                                        <input wire:model.defer="ViewexitTypeId"
                                            class="border-gray-300 rounded-sm form-control" type="text" readonly>
                                            {{-- @error('exit_type_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror --}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select wire:model.defer="overallStatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Select...</option>
                                            @foreach($status as $stat)
                                                <option value="{{$stat->id}}">{{$stat->status_name}}</option>
                                            @endforeach
                                          </select>
                                            @error('overallStatus') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                    </div>                                   
                                </div>  
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <textarea wire:model.defer="adminComment" id="adminComment" rows="4" 
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Comment.."></textarea>
                                    @error('adminComment') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>                         
                                
                                <div class="submit-section">
                                    <button wire:loading.remove
                                    class="btn btn-primary submit-btn">Update</button>
                                    <button wire:loading wire:target="updateIntiation"
                                    class="btn btn-primary submit-btn">Updating..</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endif
                    {{-- <div class="col-md-6">
                        
                    </div> --}}
                </div>
            </div>
        </div><br>        
       
        <!-- End Update Exit Initiation -->

        <!-- Staff Detais -->
        <div class="card mb-0">
            <div class="card-header">
                <h1 class="title">Staff Details</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="personal-info">
                            <li>
                                <div class="title">Staff Name:</div>
                                <div class="text">{{$this->ViewSurname}} {{$this->ViewFirstName}} {{$this->ViewOtherName}}</div>
                            </li>
                            <li>
                                <div class="title">Staff ID:</div>
                                <div class="text">{{$this->ViewStaffId}}</div>
                            </li>
                            <li>
                                <div class="title">Personal Email:</div>
                                <div class="text"><a href="">{{$this->ViewPersonalEmail}}</a></div>
                            </li>
                            <li>
                                <div class="title">Grade/Job Role:</div>
                                <div class="text">{{$this->ViewGradeLevel}} / {{$this->ViewJobRole}}</div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="personal-info">
                            <li>
                                <div class="title">Location:</div>
                                <div class="text">{{$this->ViewLocationId}}</div>
                            </li>
                            <li>
                                <div class="title">Division:</div>
                                <div class="text">{{$this->ViewDivision}}</div>
                            </li>
                            <li>
                                <div class="title">Department:</div>
                                <div class="text">{{$this->ViewDepartment}}</div>
                            </li>
                            <li>
                                <div class="title">Unit:</div>
                                <div class="text">{{$this->ViewUnitId}}</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><br>
        <!-- End Staff Detais -->

        <!-- Exit Procedures -->
        <div class="card mb-0">
            <div class="card-header">
                Exit Procedure Details
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="personal-info">
                            <li>
                                <div class="title">Exit Type:</div>
                                <div class="text">{{$this->ViewexitTypeId}}</div>
                            </li>
                            <li>
                                <div class="title">Comment:</div>
                                <div class="text">{{$this->Viewcomment}}</div>
                            </li>
                            <li>
                                <div class="title">Last Working Date:</div>
                                <div class="text">{{$this->Viewldate}}</div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="personal-info">
                            <li>
                                <div class="title">Raised on:</div>
                                <div class="text">{{$this->Viewrdate}}</div>
                            </li>
                            <li>
                                <div class="title">Process Status:</div>
                                <div class="text">{{$this->Viewstatus}}</div>
                            </li>
                            <li>
                                <div class="title">HR Comment:</div>
                                <div class="text">{{$this->ViewAdminComment}}</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><br>
        <!-- End Exit Procedures -->

        <!-- Clearance -->
        <div class="card mb-0">
            <div class="card-header">
               Clearance Form
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    {{-- <th>#</th> --}}
                                    <th>Department / Unit</th>
                                    <th>Name & Staff ID</th>
                                    <th>Comment</th>
                                    <th>Status / Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clearance as $key => $value)
                                <tr>
                                    {{-- <td>#</td> --}}
                                    <td>{{$value->department}}</td>
                                    @if (empty($clearedById->clearedBy))
                                    <td>{{$value->surName}} {{$value->firstName}} {{$value->otherName}} / {{$value->staffid}}</td>
                                    @else
                                        
                                    @endif
                                    <td>{{$value->Comments}}</td>
                                    @if ($value->status == 'Approved')
                                    <td>
                                        <span class="badge bg-inverse-success">{{$value->status}} / {{$value->cleared_date}}</span>
                                    </td>
                                    @elseif ($value->status == 'Pending')
                                    <td>
                                        <span class="badge bg-inverse-warning">{{$value->status}} / {{$value->cleared_date}}</span>
                                    </td>
                                    @endif
                                    <td>
                                        <a @click="addModal = true" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#add_clearance" wire:click="editClearance({{$value->id}})"><i class="fa fa-pencil" style="color:white"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                            <h5 class="text-lg">Add Clearance</h5>
                        </div>
                        <div class="modal-body">
                            <form wire:submit.prevent="updateClearance">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select wire:model.defer="clr_status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                               <option value="">Select...</option>
                                               @foreach($status as $stat)
                                                   <option value="{{$stat->id}}">{{$stat->status_name}}</option>
                                               @endforeach
                                             </select>
                                               @error('clr_status') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
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
                                        class="btn btn-primary submit-btn">Update</button>
                                        <button wire:loading wire:target="updateClearance"
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
        {{-- <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script> --}}
        <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Select2 JS -->
        <script src="{{ asset('assets/js/select2.min.js') }}"></script>

        <!-- Datetimepicker JS -->
        <script src="{{ asset('assets/js/moment.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    @endpush
</div>