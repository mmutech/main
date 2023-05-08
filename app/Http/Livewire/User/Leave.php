<?php

namespace App\Http\Livewire\User;
use App\Models\LeaveApplication;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Leave extends Component
{
    use LivewireAlert;
    use WithPagination;

    //public $myApplications;

    public $search = '';
 
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount() {
        //$this->myApplications = LeaveApplication::where('employee_id', auth()->user()->id)->paginate(10);
    }
    public function render()
    {
        $myApplications3 = LeaveApplication::where('employee_id', auth()->user()->id)
        //->join('leave_t', 'users.id', '=', 'contacts.user_id')
        ->get();

        $myApplications = DB::table('leave_applications')
            ->where('leave_applications.employee_id', auth()->user()->id)
            ->join('leave_types', 'leave_applications.leave_type', '=', 'leave_types.id')
            ->get();
        
        return view('livewire.user.leave', [
            'myApplications' => $myApplications
        ])->layout('layouts.user-layout');
    }
}
