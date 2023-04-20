<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Biodata;

class EmployeeProfile extends Component

{
    public $employee;
    # Biodata
    public $surname, $first_name, $other_name, $personal_mail, $phone, 
            $staff_id, $date_of_birth, $gender, $marital_status, 
            $official_mail,$address, $nationality, $state, $lga;
    
            # Education and Qualifications
    public $education_institution, $education_course, $education_from, 
            $education_to, $qualification_institition, 
            $qualification_certification, 
            $qualification_date;
    
    
    public function mount($id)
    {
        $this->employee_id = $id;
    }
    public function render()
    {
        $this->employee = Biodata::find($this->employee_id);
        return view('livewire.admin.employee-profile')->layout('layouts.admin-layout');
    }

    public function update_biodata() {

    }

    public function saveEducation()
    {
        $formData = [
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
            'institution' => $this->qualification_institition,
            'certification' => $this->qualification_certification,
            'certification_date' => $this->qualification_date,
            
        ];

        $this->emit('addQualification', $formData);  
    }

    
}
