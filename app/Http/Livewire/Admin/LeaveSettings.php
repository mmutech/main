<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class LeaveSettings extends Component
{
    public function render()
    {
        return view('livewire.admin.leave-settings')->layout('layouts.admin-layout');
    }
}
