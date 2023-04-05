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