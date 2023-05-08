<?php

namespace App\Http\Livewire\User;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class UserDashboard extends Component
{

    use LivewireAlert;
    //protected $listeners = ['addLeave', 'refreshUserDashboard' => '$refresh'];
    

    public $leaveApply=false;

    public function addLeave(){
        $this->validate([
            
            'SelectedType'      => 'required',
            'startDate'         => 'required',
            'endDate'           => 'required',
            'reason'            => 'nullable',
            'NumberOfDays'      => 'required',
            //'LeaveDays'         => 'required',
            'reliever'          => 'required',
        ]);
        
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

        
        
        // success message, clear & close form
       
        $this->alert('success', 'Basic Alert');
        

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

    

public function flashMessage($message)
{
    session()->flash('message', $message);
}

    public function render()
    {
        return view('livewire.user.dashboard')->layout('layouts.user-layout');
    }
}
