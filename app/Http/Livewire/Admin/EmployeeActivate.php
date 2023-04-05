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
    public function mount($id)
    {
      $this->employee_id = $id;
    }

    public function render()
    {
        return view('livewire.admin.employee-activate', [
            
            //'educations' => Education::where('employee_id', $this->employee_id)->get(),
            //'qualifications' => Qualification::where('employee_id', $this->id)->get(),
        ])->layout('layouts.admin-layout');
    }
}
