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
