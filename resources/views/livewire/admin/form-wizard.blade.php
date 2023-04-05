<div>
<!--    <form>-->
    @if ($step == 1)
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
                                                    <label>Staff ID:</label>
                                                    <input wire:model="lastNumber" type="text" readonly class="form-control" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Title:</label>
                                                    <select  class="form-control" wire:model.defer="title" id ="title"
                                                            class="border-gray-300 rounded-sm form-control">
                                                        <option value="Mr">Mr.</option>
                                                        <option value="Dr">Dr.</option>
                                                        <option value="Engr">Engr.</option>
                                                        </select>
                                                    
                                                            @error('title') <span class="error">{{ $message }}</span> @enderror
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
                                                        <input class="border-gray-300 rounded-sm form-control" id="date_of_birth"
                                                            wire:model.defer="date_of_birth" type="date">
                                                    </div>
                                                    <x-input-error for="date_of_birth">
                                                    </x-input-error>
                                                </div>
                                            </div>    
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Gender: </label>
                                                    <select wire:model.defer="gender" id="gender" class="form-control">
                                                        <option value="">Choose</option>
                                                        <option value="Male">Male</option>
                                                    </select>
                                                    <x-input-error for="gender"></x-input-error>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Marital Status: </label>
                                                    <select wire:model.defer="marital_status" id="marital_status" class="form-control">
                                                        <option value="">Choose</option>
                                                        <option value="Single">Single</option>
                                                    </select>
                                                    <x-input-error for="marital_status"></x-input-error>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Personal Email:</label>
                                                    <input type="text" class="form-control" wire:model.defer="personal_mail" id ="personal_email"
                                                            class="border-gray-300 rounded-sm form-control" type="text">
                                                    <x-input-error for="personal_mail">
                                                    </x-input-error>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Official Email:</label>
                                                    <input type="text" class="form-control" wire:model.defer="official_mail" id ="official_email"
                                                            class="border-gray-300 rounded-sm form-control" type="text">
                                                    <x-input-error for="official_mail">
                                                    </x-input-error>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone:</label>
                                                    <input type="text" class="form-control" wire:model.defer="phone" id ="phone"
                                                            class="border-gray-300 rounded-sm form-control">
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
                                                    <select class="form-control" id="state" wire:model.defer="state">
                                                        <option value="1">Abia</option>
                                                    </select>
                                                    <x-input-error for="state"></x-input-error>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>LGA:</label>
                                                    <select class="form-control" id="lga" wire:model.defer="lga">
                                                        <option value="1">Umuahia</option>
                                                    </select>
                                                    <x-input-error for="lga"></x-input-error>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address line:</label>
                                                    <textarea class="form-control" wire:model.defer="address" id="address" class="border-gray-300 rounded-sm form-control"></textarea>
                                                    <x-input-error for="address"></x-input-error>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Job Role: </label>
                                                    <input type="text" class="form-control" wire:model.defer="job_role">
                                                    <x-input-error for="job_role"></x-input-error>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="card-title">Next of Kin</h3>
                                        <hr />
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Name:</label>
                                                    <input type="text" class="form-control" wire:model.defer="nok_name" />
                                                    <x-input-error for="nok_name"></x-input-error>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Relationship:</label>
                                                    <input type="text" class="form-control" wire:model.defer="nok_relationship" />
                                                    <x-input-error for="nok_relationship"></x-input-error>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Phone:</label>
                                                    <input type="text" class="form-control" wire:model.defer="nok_phone" id ="nok_phone" />
                                                    <x-input-error for="nok_phone"></x-input-error>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email:</label>
                                                    <input type="email" class="form-control" id="" wire:model.defer="nok_mail" />
                                                    <x-input-error for="nok_mail"></x-input-error>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address:</label>
                                                    <textarea class="form-control" wire:model.defer="nok_address"></textarea>
                                                    <x-input-error for="nok_address"></x-input-error>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <!-- /Profile Info Tab -->
        <button wire:click="nextStep">Next</button>
    @endif

    @if ($step==2)
        <!-- Medical History --> 
        <div class="row">

        <div class="card profile-box flex-fill">
            <div class="card-body">
                <h3 class="card-title">Medical History</h3>
                <div class="row">
                    <div class="col-md-3">
                            <div class="form-group">
                                <label>Blood Group:</label>
                                <select class="form-control" wire:model.defer="blood_group">
                                    <option value="">Choose</option>
                                    <option value="A+">A+</option>
                                </select>
                                <x-input-error for="blood_group"></x-input-error>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Genotype:</label>
                                <select type="text" class="form-control" wire:model.defer="genotype">
                                    <option value="">Choose</option>
                                    <option value="AA">AA</option>
                                </select>
                                <x-input-error for="genotype"></x-input-error>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pre-existing Condidtion:</label>
                                <textarea class="form-control" id="medical_condition" wire:model.defer="medical_condition"></textarea>
                                <x-input-error for="medical_condition"></x-input-error>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        </div>
        <button wire:click="prevStep">Previous</button>
        <button wire:click="nextStep">Next</button>
        <!-- /Medical History -->
    @endif


    @if ($step == 3)
        <!-- Deployment -->
        <div class="row">
            
            <div class="card profile-box flex-fill">
                <div class="card-body">
                    <h3 class="card-title">Deployment</h3>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Unit:</label>
                                <select class="form-control" id="deployment_unit" wire:model.defer="deployment_unit">
                                    <option value="1">Unit 1</option>
                                </select>
                                <x-input-error for="deployment unit"></x-input-error>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Location:</label>
                                <select class="form-control" id="deployment_location" wire:model.defer="deployment_location">
                                    <option value="1">Location 1</option>
                                </select>
                                <x-input-error for="deployment location"></x-input-error>
                            </div>
                        </div>
                        

                    </div>    
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Deployment Date: </label>
                                    <div class="cal-icon">
                                        <input class="border-gray-300 rounded-sm form-control" id="deployment_date"
                                            wire:model.defer="deployment_date" type="date">
                                            <x-input-error for="deployment_date"></x-input-error>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Comment: </label>
                                <textarea class="form-control" wire:model.defer="deployment_comment"></textarea>
                                <x-input-error for="deployment_comment"></x-input-error>
                            </div>
                        </div>
                    </div>        
            </div>
        </div>
        
    </div>
    <button wire:click="prevStep">Previous</button>
    <button wire:click="nextStep">Next</button>
        <!-- /Deployment -->
    @endif

    @if ($step == 4)
    <!-- Bank Details tab -->
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
                                    <x-input-error for="bank_name"></x-input-error>
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label>Account Name:</label>
                                    <input type="text" class="form-control" wire:model.defer="bank_account_name">
                                    <x-input-error for="bank_account_name"></x-input-error>
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label>Account No:</label>
                                    <input type="text" class="form-control" wire:model.defer="bank_account_number">
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
                                    <label>PFA Name:</label>
                                    <input type="text" class="form-control" wire:model.defer="pfa_name">
                                    <x-input-error for="pfa_name"></x-input-error>
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label>Account Name:</label>
                                    <input type="text" class="form-control" wire:model.defer="pfa_account_name">
                                    <x-input-error for="pfa_account_name"></x-input-error>
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label>PIN No:</label>
                                    <input type="text" class="form-control" wire:model.defer="pfa_account_number">
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
                                    <label>Bank Name:</label>
                                    <input type="text" class="form-control" wire:model.defer="mortgage_bank_name">
                                    <x-input-error for="mortgage_bank_name"></x-input-error>
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label>Account Name:</label>
                                    <input type="text" class="form-control" wire:model.defer="mortgage_account_name">
                                    <x-input-error for="mortagae_account_name"></x-input-error>
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label>Account No:</label>
                                    <input type="text" class="form-control" wire:model.defer="mortgage_account_number">
                                    <x-input-error for="mortgage_account_number"></x-input-error>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>

    <!-- /Bank Details tab -->
        
        <button wire:click="prevStep">Previous</button>
        <button wire:click="submitForm">Submit</button>
    @endif
<!--</form>-->
@if (session()->has('success'))
    <div class="success">{{ session('success') }}</div>
@endif  
</div>

@livewireScripts