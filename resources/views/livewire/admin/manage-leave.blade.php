<div class="content container-fluid" data-select2-id="select2-data-16-pz8p">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Leaves</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Leaves</li>
								</ul>
							</div>
							
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Leave Statistics -->
					<div class="row">
					<div class="col-md-3">
							<div class="stats-info">
								<h6>Pending Requests</h6>
								<h4>{{$pending}}</h4>
							</div>
						</div>						
						<div class="col-md-3">
							<div class="stats-info">
								<h6>Approved Leaves</h6>
								<h4>{{$approved}}</h4>
							</div>
						</div>
						<div class="col-md-3">
							<div class="stats-info">
								<h6>Today Presents</h6>
								<h4>12 / 60</h4>
							</div>
						</div>
						<div class="col-md-3">
							<div class="stats-info">
								<h6>Unplanned Leaves</h6>
								<h4>0 <span>Today</span></h4>
							</div>
						</div>
						
					</div>
					<!-- /Leave Statistics -->
					
					<!-- Search Filter 
					<div class="row filter-row" data-select2-id="select2-data-33-wi9f">
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Employee Name</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12" data-select2-id="select2-data-15-g5qf">  
							<div class="form-group form-focus select-focus focused" data-select2-id="select2-data-14-1r7g">
								<select class="select floating select2-hidden-accessible" data-select2-id="select2-data-1-i97y" tabindex="-1" aria-hidden="true"> 
									<option data-select2-id="select2-data-3-xmfh"> -- Select -- </option>
									<option data-select2-id="select2-data-21-u6lj">Casual Leave</option>
									<option data-select2-id="select2-data-22-zt34">Medical Leave</option>
									<option data-select2-id="select2-data-23-2bgy">Loss of Pay</option>
								</select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="select2-data-2-s9id" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-6fou-container" aria-controls="select2-6fou-container"><span class="select2-selection__rendered" id="select2-6fou-container" role="textbox" aria-readonly="true" title=" -- Select -- "> -- Select -- </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
								<label class="focus-label">Leave Type</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12" data-select2-id="select2-data-32-80o1"> 
							<div class="form-group form-focus select-focus focused" data-select2-id="select2-data-31-5ssd">
								<select class="select floating select2-hidden-accessible" data-select2-id="select2-data-4-hx28" tabindex="-1" aria-hidden="true"> 
									<option data-select2-id="select2-data-6-n0kp"> -- Select -- </option>
									<option data-select2-id="select2-data-34-gmum"> Pending </option>
									<option data-select2-id="select2-data-35-zsc2"> Approved </option>
									<option data-select2-id="select2-data-36-266k"> Rejected </option>
								</select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="select2-data-5-81wo" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-82dz-container" aria-controls="select2-82dz-container"><span class="select2-selection__rendered" id="select2-82dz-container" role="textbox" aria-readonly="true" title=" -- Select -- "> -- Select -- </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
								<label class="focus-label">Leave Status</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="form-group form-focus focused">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">From</label>
							</div>
						</div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="form-group form-focus focused">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">To</label>
							</div>
						</div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<a href="#" class="btn btn-success w-100"> Search </a>  
					   </div>     
                    </div>
					 /Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped custom-table mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
									<thead>
										<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Employee: activate to sort column descending" style="width: 269.413px;">Employee</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Leave Type: activate to sort column ascending" style="width: 107.625px;">Leave Type</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="From: activate to sort column ascending" style="width: 78.375px;">From</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="To: activate to sort column ascending" style="width: 77.5px;">To</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="No of Days: activate to sort column ascending" style="width: 76.4125px;">No of Days</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Reason: activate to sort column ascending" style="width: 116.387px;">Reason</th><th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 107.963px;">Status</th><th class="text-end sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 54.125px;">Actions</th></tr>
									</thead>
									<tbody>
										
									@foreach ($leave as $item)										
									<tr class="odd">
											<td class="sorting_1">
												<h2 class="table-avatar">
													<a href="#" class="avatar"><img alt="" src="{{asset('assets/img/profiles/avatar-02.jpg')}}"></a>
													<a>	{{$item->employee->first_name." ".$item->employee->surname}}  <small>(Job Role)</small></a>
												</h2>
											</td>
											<td>{{$item->leaveType->name}}</td>
											<td>{{$item->start_date}}</td>
											<td>{{$item->end_date}}</td>
											<td>{{$item->number_of_days_taken}}</td>
											<td>{{$item->reason}}</td>
											<td class="text-center">
												<div class="dropdown action-label">
													
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-success"></i> Approved
													</a>
													<div class="dropdown-menu dropdown-menu-right" style="">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
													</div>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										@endforeach
										</tbody>
								</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
							</div>
						</div>
					</div>
                </div>