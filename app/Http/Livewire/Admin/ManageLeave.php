<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\LeaveApplication;

class ManageLeave extends Component
{
    public $leave, $pending, $approved;
    public function mount()
    {
        $this->leave = LeaveApplication::all();
        $this->pending = collect($this->leave)->filter(function ($item) {
            return $item['status']  == "Pending"; })->count();
        $this->approved = collect($this->leave)->filter(function ($item) {
            return $item['status']  == "Approved"; })->count();
        
        
    }
    public function render()
    {
        return view('livewire.admin.manage-leave')->layout('layouts.admin-layout');
    }
}
