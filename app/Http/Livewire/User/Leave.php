<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Leave extends Component
{
    public function render()
    {
        return view('livewire.user.leave')->layout('layouts.user-layout');
    }
}
