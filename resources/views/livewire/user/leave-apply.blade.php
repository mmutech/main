<!-- Start of modal backdrop -->
    <!-- Start leaveApply Modal custom -->
    <div x-cloak x-show="leaveApply"
        class="fixed inset-0 z-30 overflow-y-scroll pt-26 flex items-center bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div x-show="leaveApply" x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="leaveApply = false"
            @keydown.escape="leaveApply = false" x-init="@this.on('closeModal', () => leaveApply = false)"
            class="w-full mx-auto px-6 py-2 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
            role="dialog" id="modal">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
           
            <!-- Modal body -->
            <div class="w-full border-4 border-red-500">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><b>Apply for Leave</b></h5>
                            <button type="button" @click="leaveApply = false" aria-label="Close" title="Close Form">
                                <span aria-hidden="true"><i class="fa fa-close"></i></span>
                            </button>
                        </div>
                        <div class="modal-body">
								<form wire:submit.prevent="saveLeave">
									<div class="form-group">
										<label>Leave Type <span class="text-danger">*</span></label>
										<select class="select form-control" wire:model.defer="SelectedType" required >
                                            <option value="">Select Leave Type</option>
                                            @foreach ($leaveTypes as $leaveType)
                                            <option value="{{ $leaveType->id }}">{{ $leaveType->name." (".$leaveType->number_of_days." Days)" }}</option>}}</option>}}">{{ $leaveType->name }}</option>
                                            @endforeach
										</select>
                                        <x-input-error for="SelectedType">
                                                </x-input-error>
									</div>
                                    <div class="row">
									<div class="form-group col-md-6">
										<label>From <span class="text-danger">*</span></label>
										<div class="">
											<input class="form-control datetimepicker" wire:model.lazy="startDate" type="date" required >
										</div>
									</div>
									<div class="form-group col-md-6">
										<label>To <span class="text-danger">*</span></label>
										<div class="">
											<input class="form-control datetimepicker" wire:model.lazy="endDate" type="date" required>
										</div>
									</div>
                                    </div>
									<div class="form-group">
										<label>Number of days <span class="text-danger">*</span></label>
										<input class="form-control" wire:model="NumberOfDays" readonly type="text">
									</div>
									<div class="form-group">
										<label>Remaining Days <span class="text-danger">*</span></label>
										<input class="form-control" readonly wire:model="RemainingDays" type="text">
									</div>
                                    <div class="form-group">
                                        <label>Reliever <span class="text-danger">*</span></label>
                                        <select class="form-control select" wire:model.defer="reliever" required>
                                            <option value="">Choose...</option>
                                            <option value="1">User 1</option>
                                        </select>
                                    </div>
									<div class="form-group">
										<label>Leave Reason <span class="text-danger">*</span></label>
										<textarea rows="4" wire:model.defer="reason" class="form-control"></textarea>
									</div>
                                    <!-- Disable submit if days remaining = 0 -->
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>

                    </div>
                    <!-- Modal Content -->
                </div>
            </div>
    <!-- End of modal backdrop -->
    <!-- End Document Modal custom -->
