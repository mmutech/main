<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Myprofile extends Component
{
    public function render()
    {
        return view('livewire.user.myprofile')->layout('layouts.user-layout');
    }
}
