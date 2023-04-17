 <div>
     <!--    <form>-->
     @if ($step == 1)
         <!-- Page Header -->
         <div class="page-header">
             <div class="row">
                 <div class="col-sm-12">
                     <h3 class="page-title">Employees</h3>
                     <ul class="breadcrumb">
                         <li class="breadcrumb-item">Add Employees</li>
                         <li class="breadcrumb-item btn p-0">Profile</li>
                     </ul>
                 </div>
             </div>
         </div>
         <!-- /Page Header -->

         <!-- Profile Info Tab -->
         <div class="pro-overview tab-pane fade active show">
             <div class="row">
                 <div class="col-md-12 d-flex">
                     <div class="card profile-box flex-fill">
                         <div class="card-body">
                             <h3 class="card-title">Personal Information </h3>
                             <hr />
                             <p>&nbsp;</p>
                             <div class="row">

                                 <div class="col-md-2">
                                     <div class="form-group">
                                         <label>Staff ID <span class="text-danger">*</span></label>
                                         <input wire:model="lastNumber" type="text" readonly class="form-control border rounded" />
                                     </div>
                                 </div>

                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label>Title <span class="text-danger">*</span></label>
                                         <select class="form-control" wire:model.defer="title" id="title"
                                             class="border-gray-300 rounded-sm form-control">
                                             <option value="Mr">Mr.</option>
                                             <option value="Dr">Dr.</option>
                                             <option value="Engr">Engr.</option>
                                         </select>

                                         @error('title')
                                             <span class="error">{{ $message }}</span>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label>National ID Number <span class="text-danger">*</span></label>
                                         <input type="text" class="form-control border rounded" wire:model.defer="nationaIDNumber"
                                             id="nationaIDNumber" class="border-gray-300 rounded-sm form-control"
                                             type="text">
                                         <x-input-error for="nationaIDNumber">
                                         </x-input-error>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                         <label>Surname <span class="text-danger">*</span></label>
                                         <input type="text" class="form-control border rounded" wire:model.defer="surname"
                                             id="surname" class="border-gray-300 rounded-sm form-control" placeholder="Enter surname"
                                             type="text">
                                         <x-input-error for="surname">
                                         </x-input-error>
                                     </div>
                                 </div>

                             </div>
                             <div class="row">

                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label>First Name <span class="text-danger">*</span></label>
                                         <input type="text" class="form-control border rounded" wire:model.defer="first_name"
                                             id="first_name" class="border-gray-300 rounded-sm form-control" placeholder="Enter first name"
                                             type="text">
                                         <x-input-error for="first_name">
                                         </x-input-error>
                                     </div>
                                 </div>

                             </div>
                             <div class="row">

                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label>Other Name <span class="text-danger">*</span></label>
                                         <input type="text" class="form-control border rounded" wire:model.defer="other_name"
                                             id="other_name" class="border-gray-300 rounded-sm form-control" placeholder="Enter orther name"
                                             type="text">
                                         <x-input-error for="other_name">
                                         </x-input-error>
                                     </div>
                                 </div>

                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label>Date of Birth <span class="text-danger">*</span></label>
                                         <div class="cal-icon">

                                             <input class="form-control border rounded" id="date_of_birth"
                                                 wire:model.defer="date_of_birth" type="date">
                                         <x-input-error for="date_of_birth"> </x-input-error>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <label>Gender <span class="text-danger">*</span></label>
                                         <select wire:model.defer="gender" id="gender" class="form-control">
                                             <option value="">Choose...</option>
                                             <option value="Female">Female</option>
                                             <option value="Male">Male</option>
                                             <option value="Female">Female</option>
                                         </select>
                                         <x-input-error for="gender"></x-input-error>
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <label>Marital Status <span class="text-danger">*</span></label>
                                         <select wire:model.defer="marital_status" id="marital_status"
                                             class="form-control">
                                             <option>Choose......</option>
                                             <option value="Single">Single</option>
                                             <option value="Married">Married</option>
                                             <option value="Divorced">Divorced</option>
                                             <option value="Widowed">Widowed</option>
                                         </select>
                                         <x-input-error for="marital_status"></x-input-error>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label>Phone <span class="text-danger">*</span></label>
                                         <input type="text" class="form-control border rounded" wire:model.defer="phone" placeholder="Enter phone number"
                                             id="phone" class="border-gray-300 rounded-sm form-control">
                                         <x-input-error for="phone">
                                         </x-input-error>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label>Personal Email <span class="text-danger">*</span></label>
                                         <input type="text" class="form-control border rounded" wire:model.defer="personal_mail"
                                             id="personal_email" class="border-gray-300 rounded-sm form-control" placeholder="Enter personal email"
                                             type="text">
                                         <x-input-error for="personal_mail">
                                         </x-input-error>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label>Official Email <span class="text-danger">*</span></label>
                                         <input type="text" class="form-control border rounded" wire:model.defer="official_mail" placeholder="Enter official mail"
                                             id="official_email" class="border-gray-300 rounded-sm form-control"
                                             type="text">
                                         <x-input-error for="official_mail">
                                         </x-input-error>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">

                                         <label>State <span class="text-danger">*</span></label>
                                         <select class="form-control" id="state" wire:model.defer="state">
                                             <option>Choose......</option>
                                             <option value="1">Abia</option>
                                         </select>
                                         <x-input-error for="state"></x-input-error>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label>LGA <span class="text-danger">*</span></label>
                                         <select class="form-control" id="lga" wire:model.defer="lga">
                                             <option>Choose......</option>
                                             <option value="1">Umuahia</option>
                                         </select>
                                         <x-input-error for="lga"></x-input-error>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                         <label>Nationality <span class="text-danger">*</span></label>
                                         <input type="text" class="form-control border rounded" wire:model.defer="nationality"
                                             id="nationality" class="border-gray-300 rounded-sm form-control"
                                             type="text">
                                         <x-input-error for="nationality">
                                         </x-input-error>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label>Address line <span class="text-danger">*</span></label>
                                         <textarea class="form-control border rounded" wire:model.defer="address" id="address" placeholder="Enter your address"
                                             class="border-gray-300 rounded-sm form-control"></textarea>
                                         <x-input-error for="address"></x-input-error>
                                     </div>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label>Job Role <span class="text-danger">*</span></label>
                                         <select class="form-control" id="job_role" wire:model.defer="job_role">
                                             <option>Choose...</option>
                                             @foreach ($jobRole as $stat)
                                                 <option value="{{ $stat->id }}">{{ $stat->description }}</option>
                                             @endforeach
                                         </select>
                                         <x-input-error for="job_role"></x-input-error>
                                     </div>
                                     
                                  </div>
                               
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label>Grade Level <span class="text-danger">*</span></label>
                                         <select class="form-control" id="grade_level"
                                             wire:model.defer="grade_level">
                                             <option>Choose...</option>
                                             @foreach ($gradeLevel as $stat)
                                                 <option value="{{ $stat->id }}">{{ $stat->description }}</option>
                                             @endforeach
                                         </select>
                                         <x-input-error for="grade_level"></x-input-error>
                                     </div>
                                 </div>
                             </div>
                             <h3 class="card-title">Next of Kin</h3>
                             <hr />
                             <div class="row mt-3">
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label>First Name <span class="text-danger">*</span></label>
                                         <input type="text" class="form-control border rounded" wire:model.defer="nok_firstname" placeholder="Enter next of kin  first name" />
                                         <x-input-error for="nok_firstname"></x-input-error>
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label>Surname <span class="text-danger">*</span></label>
                                         <input type="text" class="form-control border rounded" wire:model.defer="nok_surname" placeholder="Enter next of kin surname" />
                                         <x-input-error for="nok_surname"></x-input-error>
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group">

                                         <label>Relationship <span class="text-danger">*</span></label>
                                         <select class="form-control border rounded" wire:model.defer="nok_relationship">
                                             <option>...</option>
                                             <option value="Sibling">Sibling</option>
                                             <option value="Parent">Parent</option>
                                             <option value="Spouse">Spouse</option>
                                             <option value="Child">Child</option>
                                         </select>
                                         <x-input-error for="nok_relationship"></x-input-error>
                                     </div>
                                 </div>
                                 

                             </div>
                             <div class="row">
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label>Email <span class="text-danger">*</span></label>
                                         <input type="email" class="form-control border rounded" id="" placeholder="Enter next of kin email"
                                             wire:model.defer="nok_mail" />
                                         <x-input-error for="nok_mail"></x-input-error>
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group">
                                          <label>Phone <span class="text-danger">*</span></label>
                                         <input type="text" class="form-control border rounded" wire:model.defer="nok_phone" placeholder="Enter next of kin phone number" id="nok_phone" />
                                         <x-input-error for="nok_phone"></x-input-error>
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label>Address <span class="text-danger">*</span></label>
                                         <textarea class="form-control border rounded" wire:model.defer="nok_address" placeholder="Enter next of kin address"></textarea>
                                         <x-input-error for="nok_address"></x-input-error>
                                     </div>
                                 </div>

                             </div>
                             
                             <h3 class="card-title">Declaration</h3>
                                        <hr />
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <div class="form-group" x-data="{ open: false }">
                                                    <label>Do you have any disabily?</label>
                                                    <div class="radio">	
                                                        <input x-on:click="open = false" type="radio" wire:model="disability_status" value="no"> No
                                                    </div>
                                                    <div class="radio">
                                                        <input x-on:click="open = ! open" type="radio" wire:model="disability_status" value="yes"> Yes
                                                    </div>  
                                                    <input x-cloak x-show="open" type="text" wire:model.defer="disability_type" class="form-control border rounded" placeholder="Disability type" />
                                                    <x-input-error for="disability_status"></x-input-error>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
											                              <label>Do you have any criminal record(s)?</label>
											        
                                                    <div class="radio">
                                                        <input type="radio" wire:model="criminal_record" value="no"> No
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" wire:model="criminal_record" vlaue="yes"> Yes
                                                    </div> 
                                                    <x-input-error for="criminal_record"></x-input-error>
										                             </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Are you indebted to any indivual/organization?</label>
                                                    <div class="radio">	
                                                        <input type="radio" wire:model="debt_status" value="no"> No
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" wire:model="debt_status" value="yes"> Yes
                                                    </div>  
                                                    <x-input-error for="debt_status"></x-input-error>
                                                </div>
                                            </div>

                                        </div>
                         </div>

                     </div>
                 </div>


             </div>
         </div>
         <!-- /Profile Info Tab -->

         <div class="pagination-box d-flex justify-content-center align-items-center">
             <div>
                 <ul class="pagination pagination-lg">
                     <li class="page-item">
                         <button class="btn btn-primary" wire:click="nextStep">Next</button>
                     </li>
                 </ul>
             </div>
         </div>
     @endif

     @if ($step == 2)
         <!-- Page Header -->
         <div class="page-header">
             <div class="row">
                 <div class="col-sm-12">
                     <h3 class="page-title">Employees</h3>
                     <ul class="breadcrumb">
                         <li class="breadcrumb-item">Add Employees</li>
                         <li class="breadcrumb-item">Profile</li>
                         <li class="breadcrumb-item btn p-0">Medical History</li>
                     </ul>
                 </div>
             </div>
         </div>
         <!-- /Page Header -->

         <!-- Medical History -->
         <div class="row">

             <div class="card profile-box flex-fill">
                 <div class="card-body">
                     <h3 class="card-title">Medical History</h3>
                     <div class="row">
                         <div class="col-md-3">
                             <div class="form-group">
                                 <label>Blood Group <span class="text-danger">*</span></label>
                                 <select class="form-control" wire:model.defer="blood_group">
                                     <option value="">Choose...</option>
                                     <option value="A+">A+</option>
                                 </select>
                                 <x-input-error for="blood_group"></x-input-error>
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="form-group">
                                 <label>Genotype <span class="text-danger">*</span></label>
                                 <select type="text" class="form-control border rounded" wire:model.defer="genotype">
                                     <option value="">Choose...</option>
                                     <option value="AA">AA</option>
                                 </select>
                                 <x-input-error for="genotype"></x-input-error>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label>Pre-existing Condidtion <span class="text-danger">*</span></label>
                                 <textarea class="form-control" id="medical_condition" wire:model.defer="medical_condition" placeholder="Enter current state of health"></textarea>
                                 <x-input-error for="medical_condition"></x-input-error>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>

         <div class="pagination-box d-flex justify-content-center align-items-center">
             <div>
                 <ul class="pagination pagination-lg">
                     <li class="page-item">
                         <button class="page-link" wire:click="prevStep">Previous</button>
                     </li>
                     <li class="page-item">
                         <button class="page-link" wire:click="nextStep">Next</button>
                     </li>
                 </ul>
             </div>
         </div>

         <!-- /Medical History -->
     @endif


     @if ($step == 3)
         <!-- Page Header -->
         <div class="page-header">
             <div class="row">
                 <div class="col-sm-12">
                     <h3 class="page-title">Employees</h3>
                     <ul class="breadcrumb">
                         <li class="breadcrumb-item">Add Employees</li>
                         <li class="breadcrumb-item">Profile</li>
                         <li class="breadcrumb-item">Medical History</li>
                         <li class="breadcrumb-item btn p-0">Deployment</li>
                     </ul>
                 </div>
             </div>
         </div>
         <!-- /Page Header -->

         <!-- Deployment -->
         <div class="row">

             <div class="card profile-box flex-fill">
                 <div class="card-body">
                     <h3 class="card-title">Deployment</h3>
                     <div class="row">

                         <div class="col-md-4">
                             <div class="form-group">
                                 <label>Unit <span class="text-danger">*</span></label>
                                 <select class="form-control" id="deployment_unit"
                                     wire:model.defer="deployment_unit">
                                     <option value="">Choose...</option>
                                     @foreach ($deployment_unit as $stat)
                                         <option value="{{ $stat->id }}">{{ $stat->description }}</option>
                                     @endforeach
                                 </select>
                                 <x-input-error for="deployment_unit"></x-input-error>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="form-group">
                                 <label>Location <span class="text-danger">*</span></label>
                                 <select class="form-control" id="deployment_location"
                                     wire:model.defer="deployment_location">
                                     <option value="">Choose...</option>
                                     @foreach ($deployment_location as $stat)
                                         <option value="{{ $stat->id }}">{{ $stat->description }}</option>
                                     @endforeach
                                 </select>
                                 <x-input-error for="deployment_location"></x-input-error>
                             </div>
                         </div>


                     </div>
                     <div class="row">

                         <div class="col-md-4">
                             <div class="form-group">
                                 <label>Deployment Date <span class="text-danger">*</span></label>
                                 <div class="cal-icon">
                                     <input class="orm-control border rounded" id="deployment_date" placeholder="Enter Date of Deployment"
                                         wire:model.defer="deployment_date" type="date">
                                     <x-input-error for="deployment_date"></x-input-error>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-8">
                             <div class="form-group">
                                 <label>Comment <span class="text-danger">*</span></label>
                                 <textarea class="form-control border rounded" wire:model.defer="deployment_comment" placeholder="Enter remark"></textarea>
                                 <x-input-error for="deployment_comment"></x-input-error>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>

         <div class="pagination-box d-flex justify-content-center align-items-center">
             <div>
                 <ul class="pagination pagination-lg">
                     <li class="page-item">
                         <button class="page-link" wire:click="prevStep">Previous</button>
                     </li>
                     <li class="page-item">
                         <button class="page-link" wire:click="nextStep">Next</button>
                     </li>
                 </ul>
             </div>
         </div>

         <!-- /Deployment -->
     @endif

     @if ($step == 4)
         <!-- Page Header -->
         <div class="page-header">
             <div class="row">
                 <div class="col-sm-12">
                     <h3 class="page-title">Employees</h3>
                     <ul class="breadcrumb">
                         <li class="breadcrumb-item">Add Employees</li>
                         <li class="breadcrumb-item">Profile</li>
                         <li class="breadcrumb-item">Medical History</li>
                         <li class="breadcrumb-item">Deployment</li>
                         <li class="breadcrumb-item btn p-0">Bank Details</li>
                     </ul>
                 </div>
             </div>
         </div>
         <!-- /Page Header -->


         <!-- Bank Details tab -->
         <div class="row">
             <div class="col-md-6 d-flex">
                 <div class="card profile-box flex-fill">
                     <div class="card-body">
                         <h3 class="card-title">Bank information</h3>
                         <ul class="personal-info">
                             <li>
                                 <div class="form-group">
                                     <label>Bank Name<span class="text-danger">*</span>:</label>
                                     <input type="text" class="form-control border rounded" placeholder="Enter bank name" wire:model.defer="bank_name">
                                     <x-input-error for="bank_name"></x-input-error>
                                 </div>
                             </li>
                             <li>
                                 <div class="form-group">
                                     <label>Account Name <span class="text-danger">*</span></label>
                                     <input type="text" class="form-control border rounded" wire:model.defer="bank_account_name" placeholder="Enter account name">
                                     <x-input-error for="bank_account_name"></x-input-error>
                                 </div>
                             </li>
                             <li>
                                 <div class="form-group">
                                     <label>Account No <span class="text-danger">*</span></label>
                                     <input type="text" class="form-control border rounded" placeholder="Enter account number"
                                         wire:model.defer="bank_account_number">
                                     <x-input-error for="bank_account_number"></x-input-error>
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
                                     <label>PFA Name <span class="text-danger">*</span></label>
                                     <input type="text" class="form-control border rounded" wire:model.defer="pfa_name" placeholder="Enter PFA">
                                     <x-input-error for="pfa_name"></x-input-error>
                                 </div>
                             </li>
                             <li>
                                 <div class="form-group">
                                     <label>Account Name <span class="text-danger">*</span></label>
                                     <input type="text" class="form-control border rounded" wire:model.defer="pfa_account_name" placeholder="Enter account name">
                                     <x-input-error for="pfa_account_name"></x-input-error>
                                 </div>
                             </li>
                             <li>
                                 <div class="form-group">
                                     <label>PIN No <span class="text-danger">*</span></label>
                                     <input type="text" class="form-control border rounded" placeholder="Enter PIN"
                                         wire:model.defer="pfa_account_number">
                                     <x-input-error for="pfa_account_number"></x-input-error>
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
                                     <label>Bank Name <span class="text-danger">*</span></label>
                                     <input type="text" class="form-control border rounded" placeholder="Enter bank name"
                                         wire:model.defer="mortgage_bank_name">
                                     <x-input-error for="mortgage_bank_name"></x-input-error>
                                 </div>
                             </li>
                             <li>
                                 <div class="form-group">
                                     <label>Account Name <span class="text-danger">*</span></label>
                                     <input type="text" class="form-control border rounded" placeholder="Enter account name"
                                         wire:model.defer="mortgage_account_name">
                                     <x-input-error for="mortagae_account_name"></x-input-error>
                                 </div>
                             </li>
                             <li>
                                 <div class="form-group">
                                     <label>Account No <span class="text-danger">*</span></label>
                                     <input type="text" class="form-control border rounded" placeholder="Enter account number"
                                         wire:model.defer="mortgage_account_number">
                                     <x-input-error for="mortgage_account_number"></x-input-error>
                                 </div>
                             </li>

                         </ul>
                     </div>
                 </div>
             </div>

         </div>

         <!-- /Bank Details tab -->

         <div class="pagination-box d-flex justify-content-center align-items-center">
             <div>
                 <ul class="pagination pagination-lg">
                     <li class="page-item">
                         <button class="page-link" wire:click="prevStep">Previous</button>
                     </li>
                     <li class="page-item">
                         <button class="page-link" wire:click="nextStep">Next</button>
                     </li>
                 </ul>
             </div>
         </div>
     @endif
     <!--</form>-->
     @if (session()->has('success'))
         <div class="success">{{ session('success') }}</div>
     @endif
 </div>

 @livewireScripts
