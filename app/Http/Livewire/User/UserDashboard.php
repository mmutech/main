<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserDashboard extends Component
{
    public function render()
    {
        return view('livewire.user.dashboard')->layout('layouts.user-layout');
    }
}
