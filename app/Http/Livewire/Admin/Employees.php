<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Employee;

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


    public function createEmployee() {

        $validatedUser = $this->validate([
            //'staff_id'       => 'required',
            //'title'          => 'required',
            'surname'        => 'required', 
            'first_name'     => 'required', 
            'other_name'     => 'required',
            'date_of_birth'  => 'required',
            //'gender'         => 'required',
            //'marital_status' => 'required',
            'phone'          => 'required',
            //'official_mail'  => 'required',
            'personal_mail'  => 'required|email',
            //'address'        => 'required',
            //'nationality'    => 'required',
            //'state'          => 'required',
            //'lga'            => 'required',
            ////'religion'       => 'required',
        ]);

        $insert_user = Employee::create($validatedUser);
        $get_user_id = '';

        //$validatedDeploy = [];
        //$insert_deployment      = Employee::create($validatedDeploy);
//
        //$validatedBank = [];
        //$insert_bank            = Employee::create($validatedBank);
//
        //$validatedEducation = [];
        //$insert_education       = Employee::create($validatedEducation);
//
        //$validatedQualification = [];
        //$insert_qualification   = Employee::create($validatedQualification);

        session()->flash('message', 'Account successfully created.');

        return redirect()->to('/create-employee-profile');

    }

    public function render()
    {
        $this->employees = Employee::all();
        return view('livewire.admin.employees')->layout('layouts.admin-layout');
    }
}
