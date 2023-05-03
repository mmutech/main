<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Biodata;
use App\Models\MedicalHistory;
use App\Models\NextOfKin;
use App\Models\Bank;
use App\Models\Deployment;
use App\Models\DivisionModel;
use App\Models\DepartmentModel;
use App\Models\UnitModel;
use App\Models\LocationModel;
use App\Models\AreaOffice;
use App\Models\Feeder;
use App\Models\Education;
use App\Models\Qualification;

class  EmployeeProfile extends Component

{
    public $addEdu = false, $addQual=false;
    
    public $employee, $medical, $kin, $bank, $deployment, $division, $department, $unit, $location, $ao, $feeder, $employee_id;
    
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
        $this->employee = Biodata::find($this->employee_id);
        $this->medical = MedicalHistory::find($this->employee_id);
        $this->kin = NextOfKin::find($this->employee_id);
        $this->bank = Bank::find($this->employee_id);
        $this->deployment = Deployment::find($this->employee_id);

        $this->division = DivisionModel::find($this->deployment->division_id);
        $this->department = DepartmentModel::find($this->deployment->department_id);
        $this->unit = UnitModel::find($this->deployment->unit_id);
        $this->location = LocationModel::find($this->deployment->location_id);
        $this->ao = AreaOffice::find($this->deployment->area_office_id);
        $this->feeder = Feeder::find($this->deployment->feeder_id);
        
    }
    public function render()
    {
        //
        return view('livewire.admin.employee-profile')->layout('layouts.admin-layout');
    }

    public function update_biodata() {

    }

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
        
        $this->clearForm();

        $this->addEdu =false;       
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

        $this->clearForm();

        $this->addQual =false;  
    }

    public function clearForm() 
    {
        $this->education_institution = '';
        $this->education_course = '';
        $this->education_from = '';
        $this->education_to = '';
        $this->qualification_institition = '';
        $this->qualification_certification = '';
        $this->qualification_date = '';
    }
    
}
