<div x-data="{ addEdu: @entangle('addEdu').defer }">
<div x-data="{ addQual: @entangle('addQual').defer }">

<div class="content container-fluid">
                    <div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="card mb-0">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="profile-view">
										<label for="profileImage">
											<i class="fa fa-image" title="change profile image"></i>
										</label>
										
										<input type="file" id="profileImage" style="display: none" wire:model="profileImage" accept="image/gif,image/jpeg,image/jpg,image/png" data-original-title="upload photo">
										
										<div class="profile-img-wrap">
											<div class="profile-img">
											@if ($profileImage)
    										    <img src="{{ $profileImage->temporaryUrl() }}">
											@elseif(is_null($profileImage))
											<img alt="" src="{{asset('assets/img/profiles/avatar-02.jpg')}}">
    										@endif
											<span class="position-absolute bottom-0 left-10 start-100 translate-middle badge rounded-pill bg-danger">
											<label for="profileImage">
											<i class="fa fa-image" title="change profile image"></i>
										</label>
    <span class="visually-hidden">unread messages</span>
  </span>	
												
											</div>
											
										</div>
								
										<div class="profile-basic">
											<div class="row">
												<div class="col-md-5">
													<div class="profile-info-left">
														<h3 class="user-name m-t-0 mb-0">{{ $employee->first_name." ".$employee->surname." ".$employee->other_name }}</h3>
														<h6 class="text-muted">Job Role: {{ $employee->job_role }}</h6>
														<small class="text-muted">Grade Level: {{ $employee->grade_level }}</small>
														<div class="staff-id">Employee ID : {{ $employee->staff_id }}</div>
														<div class="small doj text-muted">First Appointment : {{ $employee->date_of_first_appointment }}</div>
														<small class="text-muted">Confirmation Date: {{ $employee->grade_level }}</small> <br>
														<small class="text-muted">Last Promotion: {{ $employee->grade_level }}</small>
														<div class="title">Supervisor: <a href="profile.html">Jeffery Lalor</a></div>
													</div>
												</div>
												<div class="col-md-7">
													<ul class="personal-info">
														<li>
															<div class="title">Gender:</div>
															<div class="text">Male</div>
														</li>
														<li>
															<div class="title">Phone:</div>
															<div class="text"><a href="">{{ $employee->phone }}</a></div>
														</li>
														<li>
															<div class="title">Personal Email:</div>
															<div class="text"><a href="">johndoe@example.com</a></div>
														</li>
														<li>
															<div class="title">Official Email:</div>
															<div class="text">johndoe@jedplc.com</div>
														</li>
														<li>
															<div class="title">Birthday:</div>
															<div class="text">24th July</div>
														</li>
														
													</ul>
												</div>
											</div>
										</div>
										<div class="pro-edit"><a data-bs-target="#profile_info" data-bs-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="card tab-box">
						<div class="row user-tabs">
							<div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item"><a href="#emp_profile" data-bs-toggle="tab" class="nav-link active">Profile</a></li>
									<li class="nav-item"><a href="#emp_deployment" data-bs-toggle="tab" class="nav-link">Deployment</a></li>
									<li class="nav-item"><a href="#emp_projects" data-bs-toggle="tab" class="nav-link">Documents</a></li>
									<li class="nav-item"><a href="#bank_statutory" data-bs-toggle="tab" class="nav-link"><i class="text-info">Click the pen icon () to edit contents of each card</i> <small class="text-danger">(Admin Only)</small></a></li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="tab-content">
					
						<!-- Profile Info Tab -->
						<div id="emp_profile" class="pro-overview tab-pane fade active show">
							<div class="row">
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Personal Information <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#personal_info_modal"><i class="fa fa-pencil"></i></a></h3>
											<ul class="personal-info">
												<li>
													<div class="title">Contact Address </div>
													<div class="text">&nbsp;</div>
												</li>
												<li>
													<div class="title">Home Address </div>
													<div class="text">&nbsp;</div>
												</li>
												<li>
													<div class="title">State</div>
													<div class="text">&nbsp;</div>
												</li>
												<li>
													<div class="title">Local Government</div>
													<div class="text">Christian</div>
												</li>
												<li>
													<div class="row">
														<div class="title col-md-6 col-sm-12">Nationality: <span class="text">Nigerian</span></div>
														<div class="title col-md-6 col-sm-12">National ID No.: <span class="text">&nbsp;</span></div>
														
													</div>
												</li>
												<li>
													<div class="title">Marital Status</div>
													<div class="text">Married</div>
												</li>
												<li>
													<div class="title">Disability</div>
													<div class="text">No (..)</div>
												</li>
												<li>
													<div class="row">
														<div class="col-md-4 col-sm-12">Religion: <span class="text">NA</span></div>
														<div class="col-md-4 col-sm-12">Debt status: <span class="text">no</span></div>
														<div class="col-md-4 col-sm-12">Criminal Record: <span class="text">no</span></div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Emergency <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#emergency_contact_modal"><i class="fa fa-pencil"></i></a></h3>
											<h5 class="section-title fw-bold text-decoration-underline">Next of Kin</h5>
											<ul class="personal-info">
												<li>
													<div class="title">Name</div>
													<div class="text">John Doe</div>
												</li>
												<li>
													<div class="title">Relationship</div>
													<div class="text">Father</div>
												</li>
												<li>
													<div class="title">Phone </div>
													<div class="text">9876543210, 9876543210</div>
												</li>
												<li>
													<div class="title">Email </div>
													<div class="text">john@email.com</div>
												</li>
											</ul><hr>
											<br />
											<h5 class="section-title fw-bold text-decoration-underline">Medical Data</h5>
											
											
											<ul class="personal-info">
												<li>
													<div class="title">Blood Group</div>
													<div class="text">BG</div>
												</li>
												<li>
													<div class="title">Genotype</div>
													<div class="text">Gn</div>
												</li>
												<li>
													<div class="title">Pre-existing Condition </div>
													<div class="text">Details</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">  
								<div class="col-md-6">
									<livewire:admin.educations :employee_id="$employee_id" />
								</div>
								<div class="col-md-6">
									<livewire:admin.qualifications :employee_id="$employee_id" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Bank information</h3>
											<ul class="personal-info">
												<li>
													<div class="title">Bank name</div>
													<div class="text">ICICI Bank</div>
												</li>
												<li>
													<div class="title">Bank account No.</div>
													<div class="text">159843014641</div>
												</li>
												<li>
													<div class="title">Bank account Name</div>
													<div class="text">ICI24504</div>
												</li>
												
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
									<div class="card-body">
											<h3 class="card-title">Pension information</h3>
											<ul class="personal-info">
												<li>
													<div class="title">PFA name</div>
													<div class="text">ICICI Bank</div>
												</li>
												<li>
													<div class="title">PIN No.</div>
													<div class="text">159843014641</div>
												</li>
												<li>
													<div class="title">>Account Name</div>
													<div class="text">Name</div>
												</li>
												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Profile Info Tab -->
						
						<!-- Deployment Tab -->
						<div class="tab-pane fade" id="emp_deployment">
							<div class="row">
								<div class="card">
									<div class="card-body">
									
										<h3 class="card-title">Deployment <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#deployment_modal"><i class="fa fa-pencil"></i></a></h3>
											<ul class="personal-info">
												<div class="row">
													<li class="col-lg-4 col-sm-6 col-md-4 col-xl-4">
														<div class="title">Division</div>
														<div class="text">John Doe</div>
													</li>
													<li class="col-lg-4 col-sm-6 col-md-4 col-xl-4">
														<div class="title">Department</div>
														<div class="text">John Doe</div>
													</li>
													<li class="col-lg-4 col-sm-6 col-md-4 col-xl-4">
														<div class="title">Unit</div>
														<div class="text">John Doe</div>
													</li>
												</div>
												<br />
												<!-- ### -->
												<div class="row">
													<li class="col-lg-4 col-sm-6 col-md-4 col-xl-4">
														<div class="title">Location</div>
														<div class="text">John Doe</div>
													</li>
													<li class="col-lg-4 col-sm-6 col-md-4 col-xl-4">
														<div class="title">Area Unit</div>
														<div class="text">John Doe</div>
													</li>
													<li class="col-lg-4 col-sm-6 col-md-4 col-xl-4">
														<div class="title">Feeder</div>
														<div class="text">John Doe</div>
													</li>
												</div>
												<br />
												<!-- ### -->
												<div class="row">
													<li class="col-lg-5 col-sm-6 col-md-5 col-xl-5">
														<div class="title">Deployment Date</div>
														<div class="text">1/1/2020</div>
													</li>
													<li class="col-lg-7 col-sm-12 col-md-7 col-xl-7">
														<div class="title">Comment</div>
														<div class="text">Details</div>
													</li>
												</div>

											</ul>
									</div>
								
								</div>
								
							</div>
						</div>
						<!-- /Deployment Tab -->

						<!-- Projects Tab -->
						<div class="tab-pane fade" id="emp_projects">
							<div class="row">
							<div class="card">
								<div class="card-body">
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
						<!-- /Projects Tab -->
						
						<!-- Bank Statutory Tab -->
						<div class="tab-pane fade" id="bank_statutory">
							<div class="card">
								<div class="card-body">
									<h3 class="card-title"> Basic Salary Information</h3>
									<form>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Salary basis <span class="text-danger">*</span></label>
													<select class="select select2-hidden-accessible" data-select2-id="select2-data-1-vjx6" tabindex="-1" aria-hidden="true">
														<option data-select2-id="select2-data-3-ej52">Select salary basis type</option>
														<option>Hourly</option>
														<option>Daily</option>
														<option>Weekly</option>
														<option>Monthly</option>
													</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-fsgl" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-kbt4-container" aria-controls="select2-kbt4-container"><span class="select2-selection__rendered" id="select2-kbt4-container" role="textbox" aria-readonly="true" title="Select salary basis type">Select salary basis type</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
											   </div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Salary amount <small class="text-muted">per month</small></label>
													<div class="input-group">
														<span class="input-group-text">$</span>
														<input type="text" class="form-control" placeholder="Type your salary amount" value="0.00">
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Payment type</label>
													<select class="select select2-hidden-accessible" data-select2-id="select2-data-4-ixkb" tabindex="-1" aria-hidden="true">
														<option data-select2-id="select2-data-6-6rey">Select payment type</option>
														<option>Bank transfer</option>
														<option>Check</option>
														<option>Cash</option>
													</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-t8vc" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-hclc-container" aria-controls="select2-hclc-container"><span class="select2-selection__rendered" id="select2-hclc-container" role="textbox" aria-readonly="true" title="Select payment type">Select payment type</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
											   </div>
											</div>
										</div>
										<hr>
										<h3 class="card-title"> PF Information</h3>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">PF contribution</label>
													<select class="select select2-hidden-accessible" data-select2-id="select2-data-7-mu8i" tabindex="-1" aria-hidden="true">
														<option data-select2-id="select2-data-9-jf09">Select PF contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-8-pjrx" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-km96-container" aria-controls="select2-km96-container"><span class="select2-selection__rendered" id="select2-km96-container" role="textbox" aria-readonly="true" title="Select PF contribution">Select PF contribution</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">PF No. <span class="text-danger">*</span></label>
													<select class="select select2-hidden-accessible" data-select2-id="select2-data-10-hueu" tabindex="-1" aria-hidden="true">
														<option data-select2-id="select2-data-12-5c72">Select PF contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-11-fe3k" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-zqpg-container" aria-controls="select2-zqpg-container"><span class="select2-selection__rendered" id="select2-zqpg-container" role="textbox" aria-readonly="true" title="Select PF contribution">Select PF contribution</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Employee PF rate</label>
													<select class="select select2-hidden-accessible" data-select2-id="select2-data-13-94i8" tabindex="-1" aria-hidden="true">
														<option data-select2-id="select2-data-15-ttcs">Select PF contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-14-57xx" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-8alu-container" aria-controls="select2-8alu-container"><span class="select2-selection__rendered" id="select2-8alu-container" role="textbox" aria-readonly="true" title="Select PF contribution">Select PF contribution</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
													<select class="select select2-hidden-accessible" data-select2-id="select2-data-16-2vl0" tabindex="-1" aria-hidden="true">
														<option data-select2-id="select2-data-18-r1io">Select additional rate</option>
														<option>0%</option>
														<option>1%</option>
														<option>2%</option>
														<option>3%</option>
														<option>4%</option>
														<option>5%</option>
														<option>6%</option>
														<option>7%</option>
														<option>8%</option>
														<option>9%</option>
														<option>10%</option>
													</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-17-43v0" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-u5ff-container" aria-controls="select2-u5ff-container"><span class="select2-selection__rendered" id="select2-u5ff-container" role="textbox" aria-readonly="true" title="Select additional rate">Select additional rate</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Total rate</label>
													<input type="text" class="form-control" placeholder="N/A" value="11%">
												</div>
											</div>
									   </div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Employee PF rate</label>
													<select class="select select2-hidden-accessible" data-select2-id="select2-data-19-tofj" tabindex="-1" aria-hidden="true">
														<option data-select2-id="select2-data-21-nrqv">Select PF contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-20-6999" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-pe3u-container" aria-controls="select2-pe3u-container"><span class="select2-selection__rendered" id="select2-pe3u-container" role="textbox" aria-readonly="true" title="Select PF contribution">Select PF contribution</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
													<select class="select select2-hidden-accessible" data-select2-id="select2-data-22-i2hy" tabindex="-1" aria-hidden="true">
														<option data-select2-id="select2-data-24-9jmf">Select additional rate</option>
														<option>0%</option>
														<option>1%</option>
														<option>2%</option>
														<option>3%</option>
														<option>4%</option>
														<option>5%</option>
														<option>6%</option>
														<option>7%</option>
														<option>8%</option>
														<option>9%</option>
														<option>10%</option>
													</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-23-nnss" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-2qlx-container" aria-controls="select2-2qlx-container"><span class="select2-selection__rendered" id="select2-2qlx-container" role="textbox" aria-readonly="true" title="Select additional rate">Select additional rate</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Total rate</label>
													<input type="text" class="form-control" placeholder="N/A" value="11%">
												</div>
											</div>
										</div>
										
										<hr>
										<h3 class="card-title"> ESI Information</h3>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">ESI contribution</label>
													<select class="select select2-hidden-accessible" data-select2-id="select2-data-25-no31" tabindex="-1" aria-hidden="true">
														<option data-select2-id="select2-data-27-1gjp">Select ESI contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-26-mpma" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-03f3-container" aria-controls="select2-03f3-container"><span class="select2-selection__rendered" id="select2-03f3-container" role="textbox" aria-readonly="true" title="Select ESI contribution">Select ESI contribution</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">ESI No. <span class="text-danger">*</span></label>
													<select class="select select2-hidden-accessible" data-select2-id="select2-data-28-cpe0" tabindex="-1" aria-hidden="true">
														<option data-select2-id="select2-data-30-92nq">Select ESI contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-29-cf1e" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-6zap-container" aria-controls="select2-6zap-container"><span class="select2-selection__rendered" id="select2-6zap-container" role="textbox" aria-readonly="true" title="Select ESI contribution">Select ESI contribution</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Employee ESI rate</label>
													<select class="select select2-hidden-accessible" data-select2-id="select2-data-31-uwsj" tabindex="-1" aria-hidden="true">
														<option data-select2-id="select2-data-33-6rfe">Select ESI contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-32-frlt" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-i87r-container" aria-controls="select2-i87r-container"><span class="select2-selection__rendered" id="select2-i87r-container" role="textbox" aria-readonly="true" title="Select ESI contribution">Select ESI contribution</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
													<select class="select select2-hidden-accessible" data-select2-id="select2-data-34-a4qp" tabindex="-1" aria-hidden="true">
														<option data-select2-id="select2-data-36-6kxe">Select additional rate</option>
														<option>0%</option>
														<option>1%</option>
														<option>2%</option>
														<option>3%</option>
														<option>4%</option>
														<option>5%</option>
														<option>6%</option>
														<option>7%</option>
														<option>8%</option>
														<option>9%</option>
														<option>10%</option>
													</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-35-2a0u" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ovqr-container" aria-controls="select2-ovqr-container"><span class="select2-selection__rendered" id="select2-ovqr-container" role="textbox" aria-readonly="true" title="Select additional rate">Select additional rate</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Total rate</label>
													<input type="text" class="form-control" placeholder="N/A" value="11%">
												</div>
											</div>
									   </div>
										
										<div class="submit-section">
											<button class="btn btn-primary submit-btn" type="submit">Save</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- /Bank Statutory Tab -->
						
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
   