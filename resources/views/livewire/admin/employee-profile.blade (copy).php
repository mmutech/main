<div>

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Profile</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.html">Staff Profile</a></li>
                        <li class="breadcrumb-item active">Create|Edit</li>
                    </ul>
                </div>
                <div class="col-auto float-end ms-auto">
                    <a @click="addModal = true" class="btn add-btn" data-bs-toggle="modal"
                        data-bs-target="#add_asset"><i class="fa fa-plus"></i> Add Asset</a>
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
                                <a href="#"><img alt="" src="http://127.0.0.1:8001/assets/img/profiles/avatar-02.jpg"></a>
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 mb-0">John Doe</h3>
                                        <div class="staff-id">Male</div>
                                        <h6 class="text-muted">Department - Unit</h6>
                                        <small class="text-muted">Job Role</small>
                                        <div class="staff-id">Staff ID : FT-0001</div>
                                        <div class="small doj text-muted">Appoinment Date : 1st Jan 2013</div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Phone:</div>
                                            <div class="text"><a href="">9876543210</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Official Email:</div>
                                            <div class="text"><a href="">johndoe@jedplc.com</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Personal Email:</div>
                                            <div class="text"><a href="">johndoe@google.com</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Date of Birth:</div>
                                            <div class="text">24th July</div>
                                        </li>
                                        <li>
                                            <div class="title">Address:</div>
                                            <div class="text">1861 Bayonne Ave, Manchester Township, NJ, 08759</div>
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
                <ul class="nav nav-tabs nav-tabs-bottom" role="tablist">
                    <li class="nav-item" role="presentation"><a href="#emp_profile" data-bs-toggle="tab" class="nav-link active" aria-selected="true" role="tab">Personal Information</a>
                    </li>
                    
                    <li class="nav-item" role="presentation"><a href="#bank_statutory" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1" role="tab">Employment
                            <small class="text-danger">(Admin Only)</small></a></li>

                    <li class="nav-item" role="presentation"><a href="#bank_statutory" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1" role="tab">Bank &amp; Statutory
                            <small class="text-danger">(Admin Only)</small></a></li>

                    <li class="nav-item" role="presentation"><a href="#bank_statutory" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1" role="tab">Education & Qualifications
                            <small class="text-danger">(Admin Only)</small></a></li>    
                </ul>
            </div>
        </div>
    </div>

    <div class="tab-content">

        <!-- Profile Info Tab -->
        <div id="emp_profile" class="pro-overview tab-pane fade show active" role="tabpanel">
            <div class="row">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"> Employee Biodata</h3>
                    <form>
                        <div class="row">

                        <h4 class="card-title">Personal details</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name:</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name:</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address line:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country:</label>
                                        <select class="select select2-hidden-accessible" data-select2-id="select2-data-7-ce0h" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-9-otqk">Select Country</option>
                                            <option value="1">USA</option>
                                            <option value="2">France</option>
                                            <option value="3">India</option>
                                            <option value="4">Spain</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-8-4nyn" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-0je1-container" aria-controls="select2-0je1-container"><span class="select2-selection__rendered" id="select2-0je1-container" role="textbox" aria-readonly="true" title="Select Country">Select Country</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State/Province:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ZIP code:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <!-- 
                        <hr>
                        

                        <div class="submit-section">
                            <button class="btn add-btn">Next</button>
                        </div>
                    </form>-->
                </div>
            </div>


                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Contact Information  <small class="text-danger">(Incomplete)</small>
                                
                            </h3>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Nationality</div>
                                    <div class="text">Nigeria</div>
                                </li>
                                <li>
                                    <div class="title">State</div>
                                    <div class="text">Plateu</div>
                                </li>
                                <li>
                                    <div class="title">LGA</div>
                                    <div class="text">Jos North</div>
                                </li>
                                <li>
                                    <div class="title">Religion</div>
                                    <div class="text">Christian</div>
                                </li>
                                <li>
                                    <div class="title">Marital status</div>
                                    <div class="text">Married</div>
                                </li>
                                <li>
                                    <div class="title">Genotype</div>
                                    <div class="text">AA</div>
                                </li>
                                <li>
                                    <div class="title">Blood Group</div>
                                    <div class="text">O+</div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">
                                Medical Data <small class="text-success">(Complete)</small>
                            </h3>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Status</div>
                                    <div class="text">Active</div>
                                </li>
                                <li>
                                    <div class="title">Staff ID</div>
                                    <div class="text">00001</div>
                                </li>
                                <li>
                                    <div class="title">Appointment</div>
                                    <div class="text">27-03-2015</div>
                                </li>
                                
                                
                                <li>
                                    <div class="title">Years in Service</div>
                                    <div class="text">7</div>
                                </li>
                                
                                <li>
                                    <div class="title">Grade</div>
                                    <div class="text">Officer 2</div>
                                </li>
                                <li>
                                    <div class="title">Department</div>
                                    <div class="text">IT</div>
                                </li>
                                <li>
                                    <div class="title">Unit</div>
                                    <div class="text">Apps</div>
                                </li>
                                <li>
                                    <div class="title">Job Role</div>
                                    <div class="text">Software Developer</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Next of Kin
                                
                            </h3>
                            <h5 class="section-title">Primary</h5>
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
                            </ul>
                            <hr>
                            <h5 class="section-title">Secondary</h5>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Name</div>
                                    <div class="text">Karen Wills</div>
                                </li>
                                <li>
                                    <div class="title">Relationship</div>
                                    <div class="text">Brother</div>
                                </li>
                                <li>
                                    <div class="title">Phone </div>
                                    <div class="text">9876543210, 9876543210</div>
                                </li>
                            </ul>
                        </div>
                    </div>
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
                                    <div class="text">GT Bank</div>
                                </li>
                                <li>
                                    <div class="title">Bank account No.</div>
                                    <div class="text">159843014641</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Family Informations <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#family_info_modal"><i class="fa fa-pencil"></i></a></h3>
                            <div class="table-responsive">
                                <table class="table table-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Relationship</th>
                                            <th>Date of Birth</th>
                                            <th>Phone</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Leo</td>
                                            <td>Brother</td>
                                            <td>Feb 16th, 2019</td>
                                            <td>9876543210</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Education Informations <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#education_info"><i class="fa fa-pencil"></i></a></h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">International College of Arts and Science
                                                    (UG)</a>
                                                <div>Bsc Computer Science</div>
                                                <span class="time">2000 - 2003</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">International College of Arts and Science
                                                    (PG)</a>
                                                <div>Msc Computer Science</div>
                                                <span class="time">2000 - 2003</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Experience <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#experience_info"><i class="fa fa-pencil"></i></a></h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Web Designer at Zen Corporation</a>
                                                <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Web Designer at Ron-tech</a>
                                                <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Web Designer at Dalt Technology</a>
                                                <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- /Profile Info Tab -->

        <!-- Employment-->

        <!-- /Employment-->

        <!-- Bank Statutory Tab -->
        <div class="tab-pane fade" id="bank_statutory" role="tabpanel">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"> Basic Salary Information</h3>
                    <form>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Salary basis <span class="text-danger">*</span></label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-1-vku7" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-3-jor6">Select salary basis type</option>
                                        <option>Hourly</option>
                                        <option>Daily</option>
                                        <option>Weekly</option>
                                        <option>Monthly</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-3gge" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-6zum-container" aria-controls="select2-6zum-container"><span class="select2-selection__rendered" id="select2-6zum-container" role="textbox" aria-readonly="true" title="Select salary basis type">Select salary basis type</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Salary amount <small class="text-muted">per
                                            month</small></label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" placeholder="Type your salary amount" value="0.00">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Payment type</label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-4-dq3q" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-6-d3kx">Select payment type</option>
                                        <option>Bank transfer</option>
                                        <option>Check</option>
                                        <option>Cash</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-rdo3" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-visx-container" aria-controls="select2-visx-container"><span class="select2-selection__rendered" id="select2-visx-container" role="textbox" aria-readonly="true" title="Select payment type">Select payment type</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        

                        <div class="submit-section">
                            <button class="btn add-btn">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Bank Statutory Tab -->

        <!-- Education-->

        <!-- /Education-->

    </div>



</div>