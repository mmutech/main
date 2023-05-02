<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

use App\Models\Biodata;

class Myprofile extends Component
{
    public $employee;

    public function mount()
    {
        $user = auth()->user();
        $this->employee = Biodata::find(1);
        // $this->employee = Biodata::find($user->biodata_id);
    }
    public function render()
    {
        $user = auth()->user();

        return view('livewire.user.myprofile')->layout('layouts.user-layout');
    }
}
