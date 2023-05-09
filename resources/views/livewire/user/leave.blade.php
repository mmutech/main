<div x-data="{ leaveApply: @entangle('leaveApply').defer }">
<div class="content container-fluid">
				
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
            <div class="col-auto float-end ms-auto">
                <a href="#" class="btn add-btn" @click="leaveApply = true"><i class="fa fa-plus"></i> Add Leave</a>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
					
    <!-- Leave Statistics -->
    <div class="row">
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Annual Leave</h6>
                <h4 class="text-warning">12 Days Used</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Remaining Leave</h6>
                <h4 class="text-success">5 Days</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Other Leave</h6>
                <h4>3</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Leave Approved {{date('Y')}}</h6>
                <h4>18 days</h4>
            </div>
        </div>
        
    </div>
    <!-- /Leave Statistics -->
					
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped custom-table mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="From: activate to sort column ascending" style="width: 25px;">#</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Leave Type: activate to sort column descending" style="width: 118.525px;">Leave Type</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="From: activate to sort column ascending" style="width: 92.175px;">From</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="To: activate to sort column ascending" style="width: 92.175px;">To</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="No of Days: activate to sort column ascending" style="width: 94.125px;">No of Days</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Reason: activate to sort column ascending" style="width: 134.538px;">Reason</th>
                            <th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 108.363px;">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Approved by: activate to sort column ascending" style="width: 140.113px;">Approved by</th>
                            <th class="text-end sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 65.1875px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($myApplications as $item)
                    <tr class="odd">
                            <td>{{$loop->index+1}}</td>
                            <td class="sorting_1">{{$item->name}}</td>
                            <td>{{$item->start_date}}</td>
                            <td>{{$item->end_date}}</td>
                            <td>{{$item->number_of_days_taken}}</td>
                            <td>{{$item->reason}}</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    
                                    
                                        @if($item->status == 'Approved')
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                        @elseif($item->status == 'Declined')
                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                        @else
                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                        
                                        @endif
                                    
                                </div>
                                
                            </td>
                            <td>
                                <h2 class="table-avatar">
                                    @if(is_null($item->approved_by))
                                    ------
                                    @else
                                    <a href="#" class="avatar avatar-xs"><img src="{{asset('assets/img/profiles/avatar-09.jpg')}}" alt=""></a>
                                    <a href="#">{{$item->approved_by}}</a>
                                    @endif
                                </h2>
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
                </table></div></div>
                
                
                <div>
                
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<livewire:user.leave-apply />

