<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class AdminHeader extends Component
{
    public function render()
    {
        return view('livewire.partials.admin-header');
    }

    public function logout(Request $request) 
    {
        auth('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
