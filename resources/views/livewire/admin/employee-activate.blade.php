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
<form wire:submit.prevent="uploadDocument">
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
									<h4 class="card-title mb-0">Document Uploads</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
                                    <form wire:submit.prevent="uploadDocument">
                                        <input type="file" />
                                        <select wire:model.defer="document_type">
                                            <option value="">Pol</option>
                                            <option value="">Pot</option>
                                        </select>
                                    </form>
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
        
<!-- New Design -->
<div class="row">
						<div class="col-sm-12">
							<div class="file-wrap">
								<div class="file-sidebar">
									<div class="file-header justify-content-center">
										<span>Projects</span>
										<a href="javascript:void(0);" class="file-side-close"><i class="fa fa-times"></i></a>
									</div>
									<form class="file-search">
										<div class="input-group">
											<div class="input-group-prepend">
												<i class="fa fa-search"></i>
											</div>
											<input type="text" class="form-control rounded-pill" placeholder="Search">
										</div>
									</form>
									<div class="file-pro-list">
										<div class="file-scroll">
											<ul class="file-menu">
												<li class="active">
													<a href="#">All Projects</a>
												</li>
												<li>
													<a href="#">Office Management</a>
												</li>
												<li>
													<a href="#">Video Calling App</a>
												</li>
												<li>
													<a href="#">Hospital Administration</a>
												</li>
												<li>
													<a href="#">Virtual Host</a>
												</li>
											</ul>
											<div class="show-more">
												<a href="#">Show More</a>
											</div>
										</div>
									</div>
								</div>
								<div class="file-cont-wrap">
									<div class="file-cont-inner">
										<div class="file-cont-header">
											<div class="file-options">
												<a href="javascript:void(0)" id="file_sidebar_toggle" class="file-sidebar-toggle">
													<i class="fa fa-bars"></i>
												</a>
											</div>
											<span>File Manager</span>
											<div class="file-options">
												<span class="btn-file"><input type="file" class="upload"><i class="fa fa-upload"></i></span>
											</div>
										</div>
										<div class="file-content">
											<form class="file-search">
												<div class="input-group">
													<div class="input-group-prepend">
														<i class="fa fa-search"></i>
													</div>
													<input type="text" class="form-control rounded-pill" placeholder="Search">
												</div>
											</form>
											<div class="file-body">
												<div class="file-scroll">
													<div class="file-content-inner">
														<h4>Recent Files</h4>
														<div class="row row-sm">
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a href="#" class="dropdown-item">View Details</a>
																			<a href="#" class="dropdown-item">Share</a>
																			<a href="#" class="dropdown-item">Download</a>
																			<a href="#" class="dropdown-item">Rename</a>
																			<a href="#" class="dropdown-item">Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																		<i class="fa fa-file-pdf-o"></i>
																	</div>
																	<div class="card-body">
																		<h6><a href="">Sample.pdf</a></h6>
																		<span>10.45kb</span>
																	</div>
																	<div class="card-footer">
																		<span class="d-none d-sm-inline">Last Modified: </span>1 min ago
																	</div>
																</div>
															</div>

															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a href="#" class="dropdown-item">View Details</a>
																			<a href="#" class="dropdown-item">Share</a>
																			<a href="#" class="dropdown-item">Download</a>
																			<a href="#" class="dropdown-item">Rename</a>
																			<a href="#" class="dropdown-item">Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																		<i class="fa fa-file-word-o"></i>
																	</div>
																	<div class="card-body">
																		<h6><a href="">Document.docx</a></h6>
																		<span>22.67kb</span>
																	</div>
																	<div class="card-footer">
																		<span class="d-none d-sm-inline">Last Modified: </span>30 mins ago
																	</div>
																</div>
															</div>
															
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a href="#" class="dropdown-item">View Details</a>
																			<a href="#" class="dropdown-item">Share</a>
																			<a href="#" class="dropdown-item">Download</a>
																			<a href="#" class="dropdown-item">Rename</a>
																			<a href="#" class="dropdown-item">Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																		<i class="fa fa-file-image-o"></i>
																	</div>
																	<div class="card-body">
																		<h6><a href="">icon.png</a></h6>
																		<span>12.47kb</span>
																	</div>
																	<div class="card-footer">
																		<span class="d-none d-sm-inline">Last Modified: </span>1 hour ago
																	</div>
																</div>
															</div>
															
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a href="#" class="dropdown-item">View Details</a>
																			<a href="#" class="dropdown-item">Share</a>
																			<a href="#" class="dropdown-item">Download</a>
																			<a href="#" class="dropdown-item">Rename</a>
																			<a href="#" class="dropdown-item">Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																		<i class="fa fa-file-excel-o"></i>
																	</div>
																	<div class="card-body">
																		<h6><a href="">Users.xls</a></h6>
																		<span>35.11kb</span>
																	</div>
																	<div class="card-footer">23 Jul 6:30 PM</div>
																</div>
															</div>

														</div>

														<h4>Files</h4>
														<div class="row row-sm">
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a href="#" class="dropdown-item">View Details</a>
																			<a href="#" class="dropdown-item">Share</a>
																			<a href="#" class="dropdown-item">Download</a>
																			<a href="#" class="dropdown-item">Rename</a>
																			<a href="#" class="dropdown-item">Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																		<i class="fa fa-file-word-o"></i>
																	</div>
																	<div class="card-body">
																		<h6><a href="">Updates.docx</a></h6>
																		<span>12mb</span>
																	</div>
																	<div class="card-footer">9 Aug 1:17 PM</div>
																</div>
															</div>
															
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a href="#" class="dropdown-item">View Details</a>
																			<a href="#" class="dropdown-item">Share</a>
																			<a href="#" class="dropdown-item">Download</a>
																			<a href="#" class="dropdown-item">Rename</a>
																			<a href="#" class="dropdown-item">Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																		<i class="fa fa-file-powerpoint-o"></i>
																	</div>
																	<div class="card-body">
																		<h6><a href="">Vision.ppt</a></h6>
																		<span>72.50kb</span>
																	</div>
																	<div class="card-footer">6 Aug 11:42 AM</div>
																</div>
															</div>
															
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a href="#" class="dropdown-item">View Details</a>
																			<a href="#" class="dropdown-item">Share</a>
																			<a href="#" class="dropdown-item">Download</a>
																			<a href="#" class="dropdown-item">Rename</a>
																			<a href="#" class="dropdown-item">Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																		<i class="fa fa-file-audio-o"></i>
																	</div>
																	<div class="card-body">
																		<h6><a href="">Voice.mp3</a></h6>
																		<span>2.17mb</span>
																	</div>
																	<div class="card-footer">
																		<span class="d-none d-sm-inline">Last Modified: </span>30 Jul 9:00 PM
																	</div>
																</div>
															</div>
															
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a href="#" class="dropdown-item">View Details</a>
																			<a href="#" class="dropdown-item">Share</a>
																			<a href="#" class="dropdown-item">Download</a>
																			<a href="#" class="dropdown-item">Rename</a>
																			<a href="#" class="dropdown-item">Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																		<i class="fa fa-file-pdf-o"></i>
																	</div>
																	<div class="card-body">
																		<h6><a href="">Tutorials.pdf</a></h6>
																		<span>8.2mb</span>
																	</div>
																	<div class="card-footer">21 Jul 10:45 PM</div>
																</div>
															</div>
															
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a href="#" class="dropdown-item">View Details</a>
																			<a href="#" class="dropdown-item">Share</a>
																			<a href="#" class="dropdown-item">Download</a>
																			<a href="#" class="dropdown-item">Rename</a>
																			<a href="#" class="dropdown-item">Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																		<i class="fa fa-file-excel-o"></i>
																	</div>
																	<div class="card-body">
																		<h6><a href="">Tasks.xls</a></h6>
																		<span>92.82kb</span>
																	</div>
																	<div class="card-footer">16 Jun 4:59 PM</div>
																</div>
															</div>
															
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a href="#" class="dropdown-item">View Details</a>
																			<a href="#" class="dropdown-item">Share</a>
																			<a href="#" class="dropdown-item">Download</a>
																			<a href="#" class="dropdown-item">Rename</a>
																			<a href="#" class="dropdown-item">Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																		<i class="fa fa-file-image-o"></i>
																	</div>
																	<div class="card-body">
																		<h6><a href="">Page.psd</a></h6>
																		<span>118.71mb</span>
																	</div>
																	<div class="card-footer">14 Jun 9:00 AM</div>
																</div>
															</div>
															
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a href="#" class="dropdown-item">View Details</a>
																			<a href="#" class="dropdown-item">Share</a>
																			<a href="#" class="dropdown-item">Download</a>
																			<a href="#" class="dropdown-item">Rename</a>
																			<a href="#" class="dropdown-item">Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																		<i class="fa fa-file-text-o"></i>
																	</div>
																	<div class="card-body">
																		<h6><a href="">License.txt</a></h6>
																		<span>18.7kb</span>
																	</div>
																	<div class="card-footer">5 May 8:21 PM</div>
																</div>
															</div>
															
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a href="#" class="dropdown-item">View Details</a>
																			<a href="#" class="dropdown-item">Share</a>
																			<a href="#" class="dropdown-item">Download</a>
																			<a href="#" class="dropdown-item">Rename</a>
																			<a href="#" class="dropdown-item">Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																		<i class="fa fa-file-word-o"></i>
																	</div>
																	<div class="card-body">
																		<h6><a href="">Expenses.docx</a></h6>
																		<span>66.2kb</span>
																	</div>
																	<div class="card-footer">24 Apr 7:50 PM</div>
																</div>
															</div>
															
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a href="#" class="dropdown-item">View Details</a>
																			<a href="#" class="dropdown-item">Share</a>
																			<a href="#" class="dropdown-item">Download</a>
																			<a href="#" class="dropdown-item">Rename</a>
																			<a href="#" class="dropdown-item">Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																		<i class="fa fa-file-audio-o"></i>
																	</div>
																	<div class="card-body">
																		<h6><a href="">Music.mp3</a></h6>
																		<span>3.6mb</span>
																	</div>
																	<div class="card-footer">13 Mar 2:00 PM</div>
																</div>
															</div>
															
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a href="#" class="dropdown-item">View Details</a>
																			<a href="#" class="dropdown-item">Share</a>
																			<a href="#" class="dropdown-item">Download</a>
																			<a href="#" class="dropdown-item">Rename</a>
																			<a href="#" class="dropdown-item">Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																		<i class="fa fa-file-text-o"></i>
																	</div>
																	<div class="card-body">
																		<h6><a href="">Installation.txt</a></h6>
																		<span>43.9kb</span>
																	</div>
																	<div class="card-footer">26 Feb 5:01 PM</div>
																</div>
															</div>
															
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a href="#" class="dropdown-item">View Details</a>
																			<a href="#" class="dropdown-item">Share</a>
																			<a href="#" class="dropdown-item">Download</a>
																			<a href="#" class="dropdown-item">Rename</a>
																			<a href="#" class="dropdown-item">Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																		<i class="fa fa-file-video-o"></i>
																	</div>
																	<div class="card-body">
																		<h6><a href="">Workflow.mp4</a></h6>
																		<span>47.65mb</span>
																	</div>
																	<div class="card-footer">3 Jan 11:35 AM</div>
																</div>
															</div>
															
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a href="#" class="dropdown-item">View Details</a>
																			<a href="#" class="dropdown-item">Share</a>
																			<a href="#" class="dropdown-item">Download</a>
																			<a href="#" class="dropdown-item">Rename</a>
																			<a href="#" class="dropdown-item">Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																		<i class="fa fa-file-code-o"></i>
																	</div>
																	<div class="card-body">
																		<h6><a href="">index.html</a></h6>
																		<span>23.7kb</span>
																	</div>
																	<div class="card-footer">1 Jan 8:55 AM</div>
																</div>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
<!-- /New Design -->
            

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
   