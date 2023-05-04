<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Mail;


use App\Models\Education;
use App\Models\Qualification;
use App\Models\Uploads;
use App\Models\User;
use App\Models\Biodata;

class EmployeeActivate extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $employee, $employee_id;
    public $document, $document_type;

    # Education and Qualifications
    public $education_institution, $education_course, $education_from, 
            $education_to, $qualification_institition, 
            $qualification_certification, 
            $qualification_date;
 
    //protected $queryString = ['employee_id'];
    public $addDocument=false;

    public function clearForm() 
    {
        $this->education_institution = '';
        $this->education_course = '';
        $this->education_from = '';
        $this->education_to = '';
        $this->qualification_institition = '';
        $this->qualification_certification = '';
        $this->qualification_date = '';
        $this->document = '';
        $this->document_type = '';
    }

    public function sendEmailNotification()
    {
        // Your email sending logic here
        $emailData = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'message' => 'Hello, this is a test email!'
        ];

        Mail::send('emails.notification', $emailData, function($message) use ($emailData) {
            $message->to($emailData['email'], $emailData['name'])
                ->subject('Test email notification');
        });
    }


    // upload employee educational docuemnets as jpg and pdf
    public function uploadDocument() {
        $this->validate([
            'document' => 'image|max:2048', // 2MB Max
            'document_type' => 'required',
        ]);

        //upload document and insert data into uploads table
        $path = $this->document->storeAs('documents/others', $this->document->hashName());

        // save document info in documents database table
        Uploads::create([
            'name'          => $this->document->hashName(),
            'category'      => $this->document_type,
            'employee_id'   => $this->employee_id
        ]);

        $this->alert('success', 'Document Saved');
        $this->clearForm();
        
        $this->addDocument = false;
        
    }

    public function saveEducation()
    {
        $this->validate([
            'document' => 'image|max:2048', // 2MB Max
            //'document_type' => 'required',
            'education_institution'   => 'required',
            'education_course'        => 'required',
            'education_from'          => 'required',
            'education_to'            => 'required',
        ]);
        
        $formData = [
            'employee_id'   => $this->employee_id,
            'institution'   => $this->education_institution,
            'course'        => $this->education_course,
            'start_date'    => $this->education_from,
            'end_date'      => $this->education_to,
        ];

        $this->emit('addEducation', $formData);
        //upload document and insert data into uploads table
        $path = $this->document->storeAs('documents/education', $this->document->hashName());
        
        // save document info in documents database table
        Uploads::create([
            'name'          => $this->document->hashName(),
            'category'      => 'education',
            'employee_id'   => $this->employee_id
        ]);

        $this->alert('success', 'Education Saved');
        
        $this->clearForm();

        //$this->addEdu =false;
        $this->addDocument = false;      
    }

    public function saveQualification()
    {
        $this->validate([
            'document'      => 'image|max:2048', // 2MB Max
            //'document_type' => 'required',
            'qualification_institition'   => 'required',
            'qualification_certification'        => 'required',
            'qualification_date'    => 'required',
            
        ]);

        $formData = [
            'employee_id' => $this->employee_id,
            'institution' => $this->qualification_institition,
            'certification' => $this->qualification_certification,
            'certification_date' => $this->qualification_date,
            
        ];

        $this->emit('addQualification', $formData);

        //upload document and insert data into uploads table
        $path = $this->document->storeAs('documents/certification', $this->document->hashName());

        // save document info in documents database table
        Uploads::create([
            'name'          => $this->document->hashName(),
            'category'      => 'certification',
            'employee_id'   => $this->employee_id
        ]);

        $this->alert('success', 'Certification Saved');
        $this->clearForm();

        //$this->addQual =false;

        $this->addDocument = false;  
    }

    public function activate_account()
    {
        // Insert login data into users table and activate account
        $user = Biodata::find($this->employee_id, ['first_name', 'surname', 'personal_email']);
        $name = $user->first_name." ".$user->surname;
        // Generate Random password
        $password = "password";

        // Create User Account
        $new_user = User::updateOrInsert([
                'email' => $user->personal_email,
                'biodata_id' => $this->employee_id,
                'name' => $name,
                'password' => Hash::make($password),
                //'status' => 1,
        ]);
        
         // Trigger onboarding email to employees personal email
         $this->sendEmailNotification();

        // Redirect to Full employee profile
        $this->flash('success', 'Employee Profile Activated.', ['position' => 'center',  'toast' => false, 'timer' => 6000, 'text' => '.Account Activated. Onboarding mail was sent to the Employee'], 'employee-profile/'.$this->employee_id);

    }

    public function mount($id)
    {
        $this->employee_id = $id;
        
    }

    public function render()
    {
        //Load uploads by employee_id
        $uploads = Uploads::where('employee_id', $this->employee_id)->get();
        return view('livewire.admin.employee-activate', ['uploads'=>$uploads])->layout('layouts.admin-layout');
    }
}
