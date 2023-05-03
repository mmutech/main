<div x-data="{ addEdu: @entangle('addEdu').defer }">
    <div x-data="{ addQual: @entangle('addQual').defer }">

        <div class="content container-fluid">
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
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img alt=""
                                                src="{{ asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0">
                                                    {{ $employee->first_name . ' ' . $employee->surname . ' ' . $employee->other_name }}
                                                </h3>
                                                <h6 class="text-muted">Gender: {{ $employee->gender ?: 'N/A' }}</h6>
                                                <h6 class="text-muted">Birthday: {{ $employee->date_of_birth ?: 'N/A' }}
                                                </h6>
                                                <ul class="personal-info">
                                                    <li>
                                                        <div class="title">Phone:</div>
                                                        <div class="text"><a
                                                                href="">{{ $employee->phone ?: 'N/A' }}</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Email:</div>
                                                        <div class="text"><a
                                                                href="">{{ $employee->personal_email ?: 'N/A' }}</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Official Email:</div>
                                                        <div class="text">{{ $employee->official_email ?: 'N/A' }}
                                                        </div>
                                                    </li>
                                                </ul>
                                                {{-- <div class="title">Supervisor: <a href="profile.html">Jeffery Lalor</a>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <div class="title">Employee ID:</div>
                                                    <div class="text">{{ $employee->staff_id ?: 'N/A' }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">Job Role:</div>
                                                    <div class="text">{{ $employee->job_role }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">Grade:</div>
                                                    <div class="text">{{ $employee->grade_level }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">Appointment:</div>
                                                    <div class="text">
                                                        {{ $employee->date_of_first_appointment ?: 'N/A' }}
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">Confirmation:</div>
                                                    <div class="text">{{ $employee->date_of_confirmation ?: 'N/A' }}
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">Last Promotion:</div>
                                                    <div class="text">
                                                        {{ $employee->date_of_last_promotion ?: 'N/A' }}</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card tab-box">
                <div class="row user-tabs">
                    <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                        <ul class="nav nav-tabs nav-tabs-bottom">
                            <li class="nav-item"><a href="#emp_profile" data-bs-toggle="tab"
                                    class="nav-link active">Profile</a></li>
                            <li class="nav-item"><a href="#emp_deployment" data-bs-toggle="tab"
                                    class="nav-link">Deployment</a></li>
                            <li class="nav-item"><a href="#emp_projects" data-bs-toggle="tab"
                                    class="nav-link">Documents</a></li>
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
                                    <h3 class="card-title">Personal Information</h3>
                                    <h5 class="section-title fw-bold text-decoration-underline">Bio Info:</h5>
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Gender</div>
                                            <div class="text">{{ $employee->gender ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Marital Status</div>
                                            <div class="text">{{ $employee->marital_status ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Date of Birth</div>
                                            <div class="text">{{ $employee->date_of_birth ?: 'N/A' }}</div>
                                        </li>
                                    </ul>
                                    <h5 class="section-title fw-bold text-decoration-underline">Addresses:</h5>
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Home</div>
                                            <div class="text">{{ $employee->address ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Contact</div>
                                            <div class="text">{{ $employee->contact_address ?: 'N/A' }}</div>
                                        </li>
                                    </ul>
                                    <h5 class="section-title fw-bold text-decoration-underline">Background Info:</h5>
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">LGA</div>
                                            <div class="text">{{ $employee->lga ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">State</div>
                                            <div class="text">{{ $employee->state ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Nationality</div>
                                            <div class="text">{{ $employee->nationality ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">NIN</div>
                                            <div class="text">{{ $employee->nationalIDNumber ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Religion</div>
                                            <div class="text">{{ $employee->religion ?: 'N/A' }}</div>
                                        </li>
                                    </ul>
                                    </ul>
                                    <h5 class="section-title fw-bold text-decoration-underline">Disability:</h5>
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Status</div>
                                            <div class="text">{{ $employee->disability_status ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Type</div>
                                            <div class="text">{{ $employee->disability_type ?: 'N/A' }}</div>
                                        </li>
                                        <h5 class="section-title fw-bold text-decoration-underline">Disability:</h5>
                                        <ul class="personal-info">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">Debt status: <span
                                                            class="text">{{ $employee->debt_status ?: 'N/A' }}</span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">Criminal Record: <span
                                                            class="text">{{ $employee->criminal_record ?: 'N/A' }}</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title">Emergency</h3>
                                    <h5 class="section-title fw-bold text-decoration-underline">Next of Kin</h5>
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Name</div>
                                            <div class="text">
                                                {{ $kin->first_name . ' ' . $kin->surname }}
                                            </div>
                                        </li>
                                        <li>
                                            <div class="title">Relationship</div>
                                            <div class="text">{{ $kin->relationship ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Address </div>
                                            <div class="text">{{ $kin->address ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Phone </div>
                                            <div class="text">{{ $kin->phone ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Email </div>
                                            <div class="text">{{ $kin->email ?: 'N/A' }}</div>
                                        </li>
                                    </ul>
                                    <hr>
                                    <br />
                                    <h5 class="section-title fw-bold text-decoration-underline">Medical Data</h5>
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Blood Group</div>
                                            <div class="text">{{ $medical->blood_group ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Genotype</div>
                                            <div class="text">{{ $medical->genotype ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Pre-existing Condition </div>
                                            <div class="text">{{ $medical->medical_condition ?: 'N/A' }}</div>
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
                                            <div class="text">{{ $bank->bank_name ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Account Name</div>
                                            <div class="text">{{ $bank->account_name ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Account No.</div>
                                            <div class="text">{{ $bank->account_number ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">RSA</div>
                                            <div class="text">{{ $bank->rsa ?: 'N/A' }}</div>
                                        </li>
                                    </ul>
                                    <h5 class="section-title fw-bold text-decoration-underline">Mortgage Info:</h5>
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Account Name</div>
                                            <div class="text">{{ $bank->mortgage_account_name ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Account No.</div>
                                            <div class="text">{{ $bank->mortgage_account_number ?: 'N/A' }}</div>
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
                                            <div class="text">{{ $bank->pfa_name ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Account Name</div>
                                            <div class="text">{{ $bank->pfa_name ?: 'N/A' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Account No.</div>
                                            <div class="text">{{ $bank->pfa_account_name ?: 'N/A' }}</div>
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

                                <h3 class="card-title">Deployment</h3>

                                <ul class="personal-info">
                                    <li>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">Division: <span
                                                    class="text">{{ $division->description ?: 'N/A' }}</span>
                                            </div>
                                            <div class="col-md-4 col-sm-12">Department: <span
                                                    class="text">{{ $department->description ?: 'N/A' }}</span>
                                            </div>
                                            <div class="col-md-4 col-sm-12">Unit: <span
                                                    class="text">{{ $unit->description ?: 'N/A' }}</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">Location: <span
                                                    class="text">{{ $location->description ?: 'N/A' }}</span>
                                            </div>
                                            <div class="col-md-4 col-sm-12">Area Unit: <span
                                                    class="text">{{ $ao->description ?: 'N/A' }}</span>
                                            </div>
                                            <div class="col-md-4 col-sm-12">Feeder: <span
                                                    class="text">{{ $feeder->description ?: 'N/A' }}</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">Status: <span
                                                    class="text">{{ $deployment->status ?: 'N/A' }}</span>
                                            </div>
                                            <div class="col-md-4 col-sm-12">Deployment Date: <span
                                                    class="text">{{ $deployment->deployment_date ?: 'N/A' }}</span>
                                            </div>
                                            <div class="col-md-4 col-sm-12">Comment: <span
                                                    class="text">{{ $deployment->comment ?: 'N/A' }}</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- /Deployment Tab -->

                <!-- Documents Tab -->
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
                                            <input type="text" class="form-control rounded-pill"
                                                placeholder="Search">
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
                                                                <a href="" class="dropdown-link"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="fa fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View
                                                                        Details</a>
                                                                    <a href="#" class="dropdown-item">Share</a>
                                                                    <a href="#"
                                                                        class="dropdown-item">Download</a>
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
                                                                <span class="d-none d-sm-inline">Last Modified:
                                                                </span>1 min ago
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                        <div class="card card-file">
                                                            <div class="dropdown-file">
                                                                <a href="" class="dropdown-link"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="fa fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View
                                                                        Details</a>
                                                                    <a href="#" class="dropdown-item">Share</a>
                                                                    <a href="#"
                                                                        class="dropdown-item">Download</a>
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
                                                                <span class="d-none d-sm-inline">Last Modified:
                                                                </span>30 mins ago
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                        <div class="card card-file">
                                                            <div class="dropdown-file">
                                                                <a href="" class="dropdown-link"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="fa fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View
                                                                        Details</a>
                                                                    <a href="#" class="dropdown-item">Share</a>
                                                                    <a href="#"
                                                                        class="dropdown-item">Download</a>
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
                                                                <span class="d-none d-sm-inline">Last Modified:
                                                                </span>1 hour ago
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                        <div class="card card-file">
                                                            <div class="dropdown-file">
                                                                <a href="" class="dropdown-link"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="fa fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View
                                                                        Details</a>
                                                                    <a href="#" class="dropdown-item">Share</a>
                                                                    <a href="#"
                                                                        class="dropdown-item">Download</a>
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
                                                                <a href="" class="dropdown-link"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="fa fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View
                                                                        Details</a>
                                                                    <a href="#" class="dropdown-item">Share</a>
                                                                    <a href="#"
                                                                        class="dropdown-item">Download</a>
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
                                                                <a href="" class="dropdown-link"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="fa fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View
                                                                        Details</a>
                                                                    <a href="#" class="dropdown-item">Share</a>
                                                                    <a href="#"
                                                                        class="dropdown-item">Download</a>
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
                                                                <a href="" class="dropdown-link"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="fa fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View
                                                                        Details</a>
                                                                    <a href="#" class="dropdown-item">Share</a>
                                                                    <a href="#"
                                                                        class="dropdown-item">Download</a>
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
                                                                <span class="d-none d-sm-inline">Last Modified:
                                                                </span>30 Jul 9:00 PM
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                        <div class="card card-file">
                                                            <div class="dropdown-file">
                                                                <a href="" class="dropdown-link"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="fa fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View
                                                                        Details</a>
                                                                    <a href="#" class="dropdown-item">Share</a>
                                                                    <a href="#"
                                                                        class="dropdown-item">Download</a>
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
                                                                <a href="" class="dropdown-link"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="fa fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View
                                                                        Details</a>
                                                                    <a href="#" class="dropdown-item">Share</a>
                                                                    <a href="#"
                                                                        class="dropdown-item">Download</a>
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
                                                                <a href="" class="dropdown-link"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="fa fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View
                                                                        Details</a>
                                                                    <a href="#" class="dropdown-item">Share</a>
                                                                    <a href="#"
                                                                        class="dropdown-item">Download</a>
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
                                                                <a href="" class="dropdown-link"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="fa fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View
                                                                        Details</a>
                                                                    <a href="#" class="dropdown-item">Share</a>
                                                                    <a href="#"
                                                                        class="dropdown-item">Download</a>
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
                                                                <a href="" class="dropdown-link"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="fa fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View
                                                                        Details</a>
                                                                    <a href="#" class="dropdown-item">Share</a>
                                                                    <a href="#"
                                                                        class="dropdown-item">Download</a>
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
                                                                <a href="" class="dropdown-link"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="fa fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View
                                                                        Details</a>
                                                                    <a href="#" class="dropdown-item">Share</a>
                                                                    <a href="#"
                                                                        class="dropdown-item">Download</a>
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
                                                                <a href="" class="dropdown-link"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="fa fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View
                                                                        Details</a>
                                                                    <a href="#" class="dropdown-item">Share</a>
                                                                    <a href="#"
                                                                        class="dropdown-item">Download</a>
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
                                                                <a href="" class="dropdown-link"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="fa fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View
                                                                        Details</a>
                                                                    <a href="#" class="dropdown-item">Share</a>
                                                                    <a href="#"
                                                                        class="dropdown-item">Download</a>
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
                                                                <a href="" class="dropdown-link"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="fa fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View
                                                                        Details</a>
                                                                    <a href="#" class="dropdown-item">Share</a>
                                                                    <a href="#"
                                                                        class="dropdown-item">Download</a>
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

            </div>
        </div>
    </div>
</div>
