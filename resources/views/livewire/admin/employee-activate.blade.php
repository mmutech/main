<div x-data="{ addEdu: @entangle('addEdu').defer }">
<div x-data="{ addQual: @entangle('addQual').defer }">
<div x-data="{ addDocument: @entangle('addDocument').defer }">
    @push('all-assets-css')
        <!-- Datatable CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">

        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    @endpush

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <span class="card-title mb-0 text-center">Document Uploads</span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <span>Docs</span>

                        <button class="btn add-btn mb-2" @click="addDocument = true"> <i class="fa fa-plus"></i>New Upload</button>
                    <table class="table mb-0">	
                    <thead>
                            <tr>
                                <th>S/N</th>
                                <th>File Type</th>
                                <th>Category</th>
                                    <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($uploads as $item)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ ucfirst($item->category) }}</td>
                                <td>&nbsp;</td>
                                <td>
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> View</a>
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
</div>

<div class="row">
    <div class="pagination-box d-flex justify-content-center align-items-center">
        
            <button wire:click="activate_account" class="btn add-btn">Activate Account</button>
        
    </div>
</div>

    <!-- Start of modal backdrop -->
    <!-- Start AddDocument Modal custom -->
    <div x-cloak x-show="addDocument"
        class="fixed inset-0 z-30 overflow-y-scroll pt-26 flex items-center bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div x-show="addDocument" x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="addDocument = false"
            @keydown.escape="addDocument = false"
            class="w-full mx-auto px-6 py-2 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
            role="dialog" id="modal">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-end">
                <button
                    class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                    aria-label="close" @click="addDocument = false">
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
                    <div class="modal-content" >
                        <span></span>
                        <div class="modal-body" x-data="{ tab: 'tab0' }">
                                                        
                            
                            <ul class="nav nav-tabs nav-tabs-bottom">
                                <li class="nav-item"><a class="nav-link" @click.prevent="tab = 'tab1'" data-bs-toggle="tab">Education</a></li>
                                <li class="nav-item"><a class="nav-link" @click.prevent="tab = 'tab2'" data-bs-toggle="tab">Certification</a></li>
                                <li class="nav-item"><a class="nav-link" @click.prevent="tab = 'tab3'" data-bs-toggle="tab">Others</a></li>
                            </ul>
                            <!-- Contents -->
                            <div x-show="tab == 'tab0'">
                                <h6 class="card-title mt-4 text-center"><strong>Choose Upload Type</strong></h6>
                            </div>
                            <!-- TAB 1 -->
                            <div x-cloak x-show="tab == 'tab1'">
                            <div class="modal-header ">
                                <h5 class="text-lg">Add Education</h5>
                            </div>
                            <form wire:submit.prevent="saveEducation">
                                
                                <input type="hidden" wire:model.defer="employee_id" wire:change="$emit('educations')" id="education_eid" />
    
                                <div class="row">
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Institution</label>
                                                <input wire:model.defer="education_institution" wire:change="$emit('educations')" id="education_institution"
                                                    class="border-gray-300 rounded-sm form-control"  type="text">
                                                <x-input-error for="education_institution">
                                                </x-input-error>
                                            </div>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Course</label>
                                            <input wire:model.defer="education_course" id="education_course"
                                                    class="border-gray-300 rounded-sm form-control" type="text">
                                                <x-input-error for="education_course">
                                                </x-input-error>
                                        </div>
                                    </div>
                                    
                                </div>
                                        
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>From</label>
                                            
                                                <input class="border-gray-300 rounded-sm form-control" id="education_from"
                                                    wire:model.defer="education_from" type="date"> 
                                            <x-input-error for="education_from">
                                            </x-input-error>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>To:</label>
                                            
                                                <input class="border-gray-300 rounded-sm form-control" id="education_to"
                                                    wire:model.defer="education_to" type="date">
                                            
                                            <x-input-error for="education_to">
                                            </x-input-error>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Upload <span class="text-danger">*</span></label>

                                            <input type="file" wire:model="document" class="form-control border rounded" />
                                            <x-input-error for="document"></x-input-error>
                                        </div>
                                    </div>
                                </div>
                                    
                                    <div class="submit-section">
                                        <button wire:loading.remove
                                            class="btn btn-primary submit-btn">Submit</button>
                                        <button wire:loading wire:target="saveEducation"
                                            class="btn btn-primary submit-btn">Submitting..</button>
                                    </div>
                                </form>
                            </div>
                            <!-- TAB 2 -->
                            <div x-cloak x-show="tab == 'tab2'">
                                <div class="modal-header ">
                                    <h5 class="text-lg">Add Certification</h5>
                                </div>
                                <form wire:submit.prevent="saveQualification">
                            
                        <input type="hidden" readonly wire:model.defer="employee_id" id="qualification_eid" />
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Institution</label>
                                            <input wire:model.defer="qualification_institition" id="qualification_institition"
                                                class="border-gray-300 rounded-sm form-control" type="text">
                                            <x-input-error for="qualification_institition">
                                            </x-input-error>
                                        </div>
                                </div>
                                                                   
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Certification</label>
                                        <input wire:model.defer="qualification_certification" id="qualification_certification"
                                            class="border-gray-300 rounded-sm form-control" type="text">
                                        <x-input-error for="qualification_certification">
                                        </x-input-error>
                                    </div>
                                </div>
                                
                            </div>
                                    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date Issued</label>
                                        
                                            <input class="border-gray-300 rounded-sm form-control" id="qualification_date"
                                                wire:model.defer="qualification_date" type="date">
                                        <x-input-error for="qualification_date">
                                        </x-input-error>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Upload <span class="text-danger">*</span></label>
                                        
                                        <input type="file" wire:model="document" class="form-control border rounded" />
                                        <x-input-error for="document"></x-input-error>
                                    </div>
                                </div>
                               
                            </div>
                                
                                <div class="submit-section">
                                    <button wire:loading.remove
                                        class="btn btn-primary submit-btn">Submit</button>
                                    <button wire:loading wire:target="saveQualification"
                                        class="btn btn-primary submit-btn">Submitting..</button>
                                </div>
                            </form>

                            </div>
                            <!-- TAB 3 -->
                            <div x-cloak x-show="tab == 'tab3'">
                                <div class="modal-header mb-3">
                                    <h5 class="text-lg">Other Documents</h5>
                                </div>
                                <form wire:submit.prevent="uploadDocument">
                                    <div class="form-group">
                                        <label>Document Type <span class="text-danger">*</span></label>
                                        <select class="form-control" wire:model="document_type">
                                            <option vlaue="">Choose...</option>
                                            <option value="National ID">National I.D</option>
                                            <option value="Birth Certficate">Birth Certificate</option>
                                        </select>
                                        <x-input-error for="document_type"></x-input-error>
                                    </div>
                                    <div class="form-group">
                                        <label>Document <span class="text-danger">*</span></label>
                                        <input type="file" wire:model="document" class="form-control border rounded" />
                                        <x-input-error for="document"></x-input-error>
                                    </div>

                                    <div class="submit-section">
                                    <button wire:loading.remove
                                        class="btn btn-primary submit-btn">Submit</button>
                                    <button wire:loading wire:target="saveDocument"
                                        class="btn btn-primary submit-btn">Submitting..</button>
                                </div>
                                </form>
                            </div>
                        </div>
                            <!-- Contents -->
                        </div>
                    </div>
                    <!-- content Ends -->
                </div>
            </div>
            <!-- Modal body Ends -->

        </div>
    </div>
    <!-- End of modal backdrop -->
    <!-- End Document Modal custom -->
   
