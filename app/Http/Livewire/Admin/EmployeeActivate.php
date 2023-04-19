<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithAlerts;

use App\Models\Education;
use App\Models\Qualification;


class EmployeeActivate extends Component
{
    use WithFileUploads;
    

    public $employee_id;
    public $document, $document_type;

    # Education and Qualifications
    public $education_institution, $education_course, $education_from, 
            $education_to, $qualification_institition, 
            $qualification_certification, 
            $qualification_date;
 
    //protected $queryString = ['employee_id'];
    public $addEdu = false, $addQual=false;

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

    public function saveDocument()
    {
        $this->validate([
            'document_type' => 'required',
            'document' => 'image|max:2048', // 2MB Max
        ]);
 
        //rename file and save details in db before upload
        $this->document->store('documents');

        $this->emit('created', [
            'title' => 'Anything',
            'icon' => 'success',
            'iconColor' => 'green',
        ]);
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

        //session()->flash('message', 'Record has been added');
        
        $this->dispatchBrowserEvent('swal:created', [
            'type' => 'info',
            'title' => 'Create new record',
            'text' => 'Enter the details below:',
        ]);
        
        
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

        // session()->flash('message', 'Record has been added');

        $this->dispatchBrowserEvent('created', [
            'title' => 'Anything',
            'icon' => 'success',
            'iconColor' => 'green',
        ]);
    }

    public function activate_account()
    {
        // Insert login data into users table and activate account
        // Generate Random password
        $password = "password";
        $new_user = User::create([
                'email' => $this->personal_email,
                'employee_id' => $this->employee_id,
                'password' => Hash::make($password),
                'active' => 0,
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
