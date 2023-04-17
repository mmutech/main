<div>
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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Exit Type Name</label>
                                        <input wire:model.defer="ViewexitTypeId"
                                            class="border-gray-300 rounded-sm form-control" type="text" readonly>
                                            {{-- @error('exit_type_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror --}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    @if ($upload)
                                        File Preview:
                                        <img src="{{ $upload->temporaryUrl() }}">
                                    @endif
                                    <div class="form-group">
                                        <label>Upload Clearance Form</label>
                                        <div
                                            x-data="{ isUploading: false, progress: 0 }"
                                            x-on:livewire-upload-start="isUploading = true"
                                            x-on:livewire-upload-finish="isUploading = false"
                                            x-on:livewire-upload-error="isUploading = false"
                                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                                        >
                                            <!-- File Input -->
                                            <input type="file" wire:model="upload">
                                        
                                            <!-- Progress Bar -->
                                            <div x-show="isUploading">
                                                <progress max="100" x-bind:value="progress"></progress>
                                            </div>
                                        </div>
                                            @error('upload') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                    <div class="col-md-6">
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
                                <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Date</label>
                                       <input wire:model.defer="clr_date"
                                           class="border-gray-300 rounded-sm form-control" type="date">
                                           @error('clr_date') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
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
                                    <button wire:loading wire:target="updateClearance"
                                    class="btn btn-primary submit-btn">Submitting..</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
                                        {{-- <a @click="addModal = true" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#add_clearance" wire:click="editClearance({{$value->id}})"><i class="fa fa-pencil" style="color:white"></i></a> --}}
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

    
    
    @push('all-assets-js')
        <!-- Select2 JS -->
        <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    
        <!-- Datetimepicker JS -->
        <script src="{{ asset('assets/js/moment.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
        <script>
            let file = document.querySelector('input[type="file"]').files[0]
         
            // Upload a file:
            @this.upload('upload', file, (uploadedFilename) => {
                // Success callback.
            }, () => {
                // Error callback.
            }, (event) => {
                // Progress callback.
                // event.detail.progress contains a number between 1 and 100 as the upload progresses.
            })
         
            // Upload multiple files:
            @this.uploadMultiple('uploads', [file], successCallback, errorCallback, progressCallback)
         
            // Remove single file from multiple uploaded files
            @this.removeUpload('uploads', uploadedFilename, successCallback)
        </script>
    @endpush
</div>