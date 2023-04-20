<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Biodata;

class Employees extends Component
{
    public $employees;
    public $employee_id;
    /**
     * Edit only collect basic info to enable account creation.
     * other Biodata should be collected after creating user account 
     * **/

    public $surname, $first_name, $other_name, $personal_mail, $phone, $date_of_birth;
    
    //, $address, $nationality, $state, $lga;
    
    public $addModal = false, $editModal = false;

    
    public function render()
    {
        $this->employees = Biodata::all();
        return view('livewire.admin.employees')->layout('layouts.admin-layout');
    }
}
