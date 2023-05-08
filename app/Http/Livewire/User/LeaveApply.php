<?php

namespace App\Http\Livewire\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\LeaveType;
use App\Models\LeaveApplication;

class LeaveApply extends Component
{
    use LivewireAlert;
    public $leaveApply = false;

    public $leaveTypes, $relievers;
    public $formData;

    public $NumberOfDays=0, $LeaveDays, $RemainingDays=0, $SelectedType, $startDate, $endDate, $reason, $reliever;

    protected $rules = [
            'SelectedType'      => 'required',
            'startDate'         => 'required',
            'endDate'           => 'required',
            'reason'            => 'nullable',
            'NumberOfDays'      => 'required',
            //'LeaveDays'         => 'required',
            'reliever'          => 'required',
    ];
    
    public function updatedSelectedType($id)
    {
        $this->LeaveDays = LeaveType::where('id', $id)->value('number_of_days');
        //$this->NumberOfDays = $id;
    }

    public function updatedendDate()
    {
        // Compute Number of days
        $start = Carbon::parse($this->startDate);
        $end = Carbon::parse($this->endDate);
        $this->NumberOfDays = $end->diffInDays($start);

        // compute remaining days

        $this->RemainingDays = $this->LeaveDays - $this->NumberOfDays;

        // ToDo: Implement logic to account for weekends

    }
    
    
    public function saveLeave() 
    {
        
        $this->validate();
        
        $formData = [
            'employee_id'           => auth()->user()->id,
            'leave_type'            => $this->SelectedType,
            'start_date'            => $this->startDate,
            'end_date'              => $this->endDate,
            'reason'                => $this->reason,
            'number_of_days_taken'  => $this->NumberOfDays,
            //'leave_days'            => $this->LeaveDays,
            'reliever'              => $this->reliever,            
        
        ];

        LeaveApplication::create($formData);

        // success message, clear & close form
        $this->alert('success', 'Leave Application Sent');
       
        // Clear form and close modal
        $this->clearForm();
        $this->emit('closeModal');
        
        
        
        // Emit event to show flash message
        
        
        

        
  
    }

    public function clearForm() {
        $this->NumberOfDays     = '';
        $this->LeaveDays        = '';
        $this->RemainingDays    = '';
        $this->SelectedType     = '';
        $this->startDate        = '';
        $this->endDate          = '';
        $this->reason           = '';
        $this->reliever         = '';
    }

    public function mount() {
        //$this->no = $this->ToDate - $this->FromDate;
        $this->leaveTypes = LeaveType::all();
        
        
    }

    public function render()
    {
         //$ss = LeaveType::where('id', 1)->value('number_of_days');
        return view('livewire.user.leave-apply');
    }
}
