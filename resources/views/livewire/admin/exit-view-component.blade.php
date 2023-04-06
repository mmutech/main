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
                                <div class="text">John Doe</div>
                            </li>
                            <li>
                                <div class="title">Staff ID:</div>
                                <div class="text">0001</div>
                            </li>
                            <li>
                                <div class="title">Personal Email:</div>
                                <div class="text"><a href="">johndoe@google.com</a></div>
                            </li>
                            <li>
                                <div class="title">Last Working Date:</div>
                                <div class="text">24th July</div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="personal-info">
                            <li>
                                <div class="title">Division:</div>
                                <div class="text">Operation Support</div>
                            </li>
                            <li>
                                <div class="title">Department:</div>
                                <div class="text">Human Resource</div>
                            </li>
                            <li>
                                <div class="title">Grade/Job Role:</div>
                                <div class="text">JT_1/Marketer</div>
                            </li>
                            <li>
                                <div class="title">Location:</div>
                                <div class="text">Dogon Dutse</div>
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
                                    <th>Status</th>
                                    <th class="text-end">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        {{-- <td>#</td> --}}
                                        <td>Human Resource</td>
                                        <td>John Doe - 0001</td>
                                        <td>Pending</td>
                                        <td>0000-00-00</td>
                                        {{-- @if ($div->status == 'Approved')
                                        <td>
                                            <span class="badge bg-inverse-success">{{$div->status}}</span>
                                        </td>
                                        @elseif ($div->status == 'Pending')
                                        <td>
                                            <span class="badge bg-inverse-warning">{{$div->status}}</span>
                                        </td>
                                        @endif --}}
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Clearance -->
    </div>
        <!-- End of modal backdrop -->
        <!-- End Qual Modal custom -->
    
    @push('all-assets-js')
        <!-- Select2 JS -->
        <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    
        <!-- Datetimepicker JS -->
        <script src="{{ asset('assets/js/moment.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    @endpush
    </div>