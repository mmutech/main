<div x-data="{ addEdu: @entangle('addEdu').defer }">
<div x-data="{ addQual: @entangle('addQual').defer }">
    @push('all-assets-css')
        <!-- Datatable CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">

        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    @endpush

    @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif                    
<div class="row">  

    <div class="col-md-6">
        <livewire:admin.educations :employee_id="$employee_id" />
        

    </div>
    <div class="col-md-6">
        <livewire:admin.qualifications :employee_id="$employee_id" />
    </div>
</div>

<div class="row">
<div class="mt-3 col-md-6">
<div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Documents </h3>
<form wire:submit.prevent="saveDocument">
        <div class="form-group">
            <label>Document Type <span class="text-danger">*</span></label>
            <input type="text" class="border rounded" wire:model.defer="document_type" placeholder="Enter Document Type" />
            <x-input-error for="document_type"></x-input-error>
        </div>
   
    
        <div class="form-group">
            <label>Document <span class="text-danger">*</span></label>
            <input type="file" wire:model="document" class="form-control border rounded" />
            <x-input-error for="document"></x-input-error>
        </div>
    
        <div wire:loading wire:target="document">Uploading...</div>
    
        <button type="submit">Save document</button>
</form>
</div>
</div>
</div>
<div class="col-lg-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title mb-0">Uploads</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table mb-0">
											<thead>
												<tr>
													<th>S/N</th>
                                                    <th>File Type</th>
													<th>Filename</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>#</td>
													<td>Certificate</td>
													<td>certificate.png</td>
												</tr>
												<tr>
													<td>#</td>
													<td>ID Card</td>
													<td>id.pdf</td>
												</tr>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
</div>

<div class="row">
    <div class="pagination-box d-flex justify-content-center align-items-center">
        <button wire:model="emit" class="btn add-btn">Activate Account</button>
    </div>
</div>
            
            

 <!-- Add Education Modal custom -->
    <!-- Modal backdrop. This what you want to place close to the closing body tag -->
    <div x-cloak x-show="addEdu"
        class="fixed inset-0 z-30 overflow-y-scroll pt-26 flex items-center bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div x-show="addEdu" x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="addEdu = false"
            @keydown.escape="addEdu = false"
            class="w-full mx-auto px-6 py-2 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
            role="dialog" id="modal">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-end">
                <button
                    class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                    aria-label="close" @click="addEdu = false">
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
                            <h5 class="text-lg">Add Education</h5>
                        </div>
                        <div class="modal-body">
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
                                
                                <div class="submit-section">
                                    <button wire:loading.remove
                                        class="btn btn-primary submit-btn">Submit</button>
                                    <button wire:loading wire:target="saveEducation"
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
    <!-- End Education Modal custom -->

    <!-- Add Qual Modal custom -->
    <!-- Modal backdrop. This what you want to place close to the closing body tag -->
    <div x-cloak x-show="addQual"
        class="fixed inset-0 z-30 overflow-y-scroll pt-26 flex items-center bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div x-show="addQual" x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="addQual = false"
            @keydown.escape="addQual = false"
            class="w-full mx-auto px-6 py-2 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
            role="dialog" id="modal">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-end">
                <button
                    class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                    aria-label="close" @click="addQual = false">
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
                            <h5 class="text-lg">Add Qualification</h5>
                        </div>
                        <div class="modal-body">
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
                               
                            </div>
                                
                                <div class="submit-section">
                                    <button wire:loading.remove
                                        class="btn btn-primary submit-btn">Submit</button>
                                    <button wire:loading wire:target="saveQualification"
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
    <!-- End Qual Modal custom -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
    Livewire.on('created', function (type, message) {
        swal.fire({
            title: message,
            icon: type,
            timer: 3000,
            timerProgressBar: true,
        });
    });
</script>
