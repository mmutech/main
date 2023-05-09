<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Biodata;
use App\Models\LeaveApplication;


class Dashboard extends Component
{
    public $emp, $leave, $requests;
    
    public function mount() 
    {
        $this->emp = Biodata::count();
        $this->leave = LeaveApplication::where('status', 'Approved')->count();
        $this->requests = LeaveApplication::count();
    }
    
    public function render()
    {
        return view('livewire.admin.dashboard')->layout('layouts.admin-layout');
    }
}
