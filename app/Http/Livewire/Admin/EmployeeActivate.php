<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Education;
use App\Models\Qualification;

class EmployeeActivate extends Component
{
    public $employee_id;

    # Education and Qualifications
    public $education_institution, $education_course, $education_from, 
            $education_to, $qualification_institition, 
            $qualification_certification, 
            $qualification_date;
 
    //protected $queryString = ['employee_id'];

  
    public function saveEducation()
    {
        $formData = [
            'employee_id' => $this->employee_id,
            'institution' => $this->education_institution,
            'course' => $this->education_course,
            'start_date' => $this->education_from,
            'end_date' => $this->education_to,
        ];

        $this->emit('addEducation', $formData);
    }

    public function saveQualification()
    {
        $formData = [
            'employee_id' => $this->employee_id,
            'institution' => $this->qualification_institition,
            'certification' => $this->qualification_certification,
            'certification_date' => $this->qualification_date,
            
        ];

        $this->emit('addQualification', $formData);  
    }

    public function activate_account()
    {
        // Insert login data into users table and activate account
        $new_user = User::create([

        ]);
        // Trigger onboarding email to employees personal email

        // Redirect to Full employee profile
        session()->flash('message', 'Employee Profile Activated.');
        return redirect()->route('employee-profile',['id' => $this->employee_id]);

    }

    public function mount($id)
    {
        $this->employee_id = $id;
    }

    public function render()
    {
        return view('livewire.admin.employee-activate')->layout('layouts.admin-layout');
    }
}
