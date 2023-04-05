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

    