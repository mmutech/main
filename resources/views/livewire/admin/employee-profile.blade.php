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

    <!-- Page Content -->
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
                                <a href="#"><img alt="" src="{{asset('assets/img/profiles/avatar-02.jpg')}}"></a>
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
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div x-data="{ tab: '#emp_profile' }" class="">

    <div class="card tab-box">
        <div class="row user-tabs">
            <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                <ul class="nav nav-tabs nav-tabs-bottom" role="tablist">
                    <li class="nav-item" role="presentation"><a href="#emp_profile" data-bs-toggle="tab" class="nav-link active" x-on:click.prevent="tab='#emp_profile'">Personal Information</a>
                    </li>
                    
                    <li class="nav-item" role="presentation"><a href="#deployment" data-bs-toggle="tab" class="nav-link" x-on:click.prevent="tab='#deployment'">Employment
                            <small class="text-danger">(Admin Only)</small></a></li>

                    <li class="nav-item" role="presentation"><a href="#bank_statutory" data-bs-toggle="tab" class="nav-link" x-on:click.prevent="tab='#bank'">Bank Details
                            <small class="text-danger">(Admin Only)</small></a></li>

                    <li class="nav-item" role="presentation"><a href="#education" data-bs-toggle="tab" class="nav-link" x-on:click.prevent="tab='#education'">Education & Qualifications
                            <small class="text-danger">(Admin Only)</small></a></li>    
                </ul>
            </div>
        </div>
    </div>
    
    <form wire:submit.prevent="createProfile">
    <div class="tab-content">	   
        <div x-show="tab == '#emp_profile'" x-cloak>
            <!-- Profile Info Tab -->
            <div class="pro-overview tab-pane fade active show">
                        <div class="row">
                            <div class="col-md-12 d-flex">
                                <div class="card profile-box flex-fill">
                                    <div class="card-body">
                                        <h3 class="card-title">Personal Informations </h3>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Title:</label>
                                                    <input type="text" class="form-control" wire:model.defer="title" id ="title"
                                                            class="border-gray-300 rounded-sm form-control" type="text">
                                                    <x-input-error for="title">
                                                    </x-input-error>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Surname:</label>
                                                    <input type="text" class="form-control" wire:model.defer="surname" id ="surname"
                                                            class="border-gray-300 rounded-sm form-control" type="text">
                                                    <x-input-error for="surname">
                                                    </x-input-error>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>First Name:</label>
                                                    <input type="text" class="form-control" wire:model.defer="first_name" id ="first_name"
                                                            class="border-gray-300 rounded-sm form-control" type="text">
                                                    <x-input-error for="first_name">
                                                    </x-input-error>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Other Name:</label>
                                                    <input type="text" class="form-control" wire:model.defer="other_name" id ="other_name"
                                                            class="border-gray-300 rounded-sm form-control" type="text">
                                                    <x-input-error for="other_name">
                                                    </x-input-error>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Date of Birth: </label>
                                                    <div class="cal-icon">
                                                        <input class="border-gray-300 rounded-sm form-control floating datetimepicker" id="date_of_birth"
                                                            wire:model.defer="date_of_birth" type="text">
                                                    </div>
                                                    <x-input-error for="date_of_birth">
                                                    </x-input-error>
                                                </div>
                                            </div>    
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Gender: </label>
                                                    <select wire:model.defer="gender" class="form-control">
                                                        <option value="">Choose</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Personal Email:</label>
                                                    <input type="text" class="form-control" wire:model.defer="personal_mail" id ="personal_email"
                                                            class="border-gray-300 rounded-sm form-control" type="text">
                                                    <x-input-error for="personal_email">
                                                    </x-input-error>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Official Email:</label>
                                                    <input type="text" class="form-control" wire:model.defer="official_mail" id ="official_email"
                                                            class="border-gray-300 rounded-sm form-control" type="text">
                                                    <x-input-error for="official_email">
                                                    </x-input-error>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone:</label>
                                                    <input type="text" class="form-control" wire:model.defer="phone" id ="phone"
                                                            class="border-gray-300 rounded-sm form-control" type="text">
                                                    <x-input-error for="phone">
                                                    </x-input-error>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nationality:</label>
                                                    <input type="text" class="form-control" wire:model.defer="nationality" id ="nationality"
                                                            class="border-gray-300 rounded-sm form-control" type="text">
                                                    <x-input-error for="nationality">
                                                    </x-input-error>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>State:</label>
                                                    <select class="form-control" wire:model.defer="state">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>LGA:</label>
                                                    <input type="text" class="form-control" wire:model.defer="lga" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address line:</label>
                                                    <textarea class="form-control" wire:model.defer="address" id="address" class="border-gray-300 rounded-sm form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <!-- /Profile Info Tab -->
        </div>

        <!-- Deployment Tab -->
        <div x-show="tab == '#deployment'" x-cloak>
        <div class="row">
            
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Deployment</h3>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Unit:</label>
                                    <select type="text" class="form-control" wire:model.defer="unit">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Location:</label>
                                    <input type="text" class="form-control" wire:model.defer="location">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>status: </label>
                                    <input type="text" class="form-control" wire:model.defer="deployment_status">
                                </div>
                            </div>

                        </div>    
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Job Role: </label>
                                    <input type="text" class="form-control" wire:model.defer="job_role">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Deployment Date: </label>
                                        <div class="cal-icon">
                                            <input class="border-gray-300 rounded-sm form-control floating datetimepicker" id="deployment_date"
                                                wire:model.defer="deployment_date" type="text">
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Comment: </label>
                                    <input type="text" class="form-control" wire:model.defer="deployment_comment">
                                </div>
                            </div>
                        </div>        
                </div>
            </div>
            
        </div>
        </div>
        <!-- /Deployment Tab -->

        <!-- Bank Details tab -->
        <div x-show="tab == '#bank'" x-cloak>
        <div class="row">
            <div class="col-md-6 d-flex">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Bank information</h3>
                        <ul class="personal-info">
                            <li>
                                <div class="form-group">
                                    <label>Bank Name:</label>
                                    <input type="text" class="form-control" wire:model.defer="bank_name">
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label>Account Name:</label>
                                    <input type="text" class="form-control" wire:model.defer="bank_account_name">
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label>Account No:</label>
                                    <input type="text" class="form-control" wire:model.defer="bank_account_number">
                                </div>
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
                                <div class="form-group">
                                    <label>PFA Name:</label>
                                    <input type="text" class="form-control" wire:model.defer="pfa_name">
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label>Account Name:</label>
                                    <input type="text" class="form-control" wire:model.defer="pfa_account_name">
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label>PIN No:</label>
                                    <input type="text" class="form-control" wire:model.defer="pfa_account_number">
                                </div>
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
                        <h3 class="card-title">Mortgage information</h3>
                        <ul class="personal-info">
                            <li>
                                <div class="form-group">
                                    <label>Bank Name:</label>
                                    <input type="text" class="form-control" wire:model.defer="mortage_bank_name">
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label>Account Name:</label>
                                    <input type="text" class="form-control" wire:model.defer="mortgage_account_name">
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label>Account No:</label>
                                    <input type="text" class="form-control" wire:model.defer="mortgage_account_number">
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>

        </div>

        <div x-show="tab == '#education'" x-cloak>
            <div class="row">
                <div class="col-md-6 d-flex">
                    <livewire:admin.educations />
                </div>
            </div>
       
            <div class="col-md-6 d-flex">
                    <livewire:admin.qualifications />
            </div>
        </div>
        <div class="row">
            <div class="submit-section">
                <button wire:loading.remove
                    class="btn btn-primary submit-btn">Submit</button>
                <button wire:loading wire:target="#"
                    class="btn btn-primary submit-btn">Submitting..</button>
            </div>

        </div>
        </div>
    
    </div>
    </form>
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



@push('all-assets-js')
    <!-- Select2 JS -->
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
@endpush
</div>