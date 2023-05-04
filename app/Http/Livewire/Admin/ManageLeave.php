<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ManageLeave extends Component
{
    public function render()
    {
        return view('livewire.admin.manage-leave')->layout('layouts.admin-layout');
    }
}
