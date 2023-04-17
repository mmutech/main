<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\DB;

use Livewire\Component;
use App\Models\Biodata;
use App\Models\NextOfKin;
use App\Models\MedicalHistory;
use App\Models\Deployment;
use App\Models\Bank;
use App\Models\LocationModel;
use App\Models\UnitModel;
use App\Models\JobRoleModel;
use App\Models\GradeLevelModel;

class FormWizard extends Component
{
    public $step = 1;
    public $lastNumber = 0;
    public $disability_status;

    //Biodata
    public $title, $nationaIDNumber, $surname, $first_name, $other_name, $personal_mail, 
            $phone, $date_of_birth, $gender, $marital_status, $official_mail, $address, 
            $nationality, $state, $lga, $job_role, $grade_level, $gradeLevel, $jobRole, $criminal_record, $debt_status;
             
    
    // NextOfKin    
    public $nok_firstname, $nok_surname, $nok_relationship, $nok_phone, $nok_mail, $nok_address;    
    
    // MedicalHistory
    public $blood_group, $genotype, $medical_condition;
    
    //Deployment
    public $deployment_location,
            $deployment_unit, $deployment_date, $deployment_comment;
    //Bank
    public $bank_name, $bank_account_name, $bank_account_number, 
            $pfa_name, $pfa_account_name, $pfa_account_number, 
            $mortgage_bank_name, $mortgage_account_name, $mortgage_account_number;

    

    /**
    * Write code on Method
    */

    public function mount()
    {
        $deployment_location = $this->deployment_location = LocationModel::where('status', 1)->get();
        $deployment_unit = $this->deployment_unit = UnitModel::where('status', 1)->get();
        $gradeLevel = $this->gradeLevel = GradeLevelModel::where('status', 1)->get();
        $jobRole = $this->jobRole = JobRoleModel::where('status', 1)->get();
        $lastRecord = DB::table('biodatas')->orderBy('id', 'desc')->latest()->first();
        $this->lastNumber = $lastRecord ? $lastRecord->staff_id + 1 : 1;
    }


    public function render()
    {
        
        return view('livewire.admin.form-wizard')->layout('layouts.admin-layout');
    }

    protected $rules = [
        'deployment_location'   => 'required',
        'deployment_unit'       => 'required',
        'deployment_date'       => 'required'
    ];


    public function nextStep()
    {
        switch ($this->step) {
            case 1:
                $this->validate([
                    'title'                     => 'nullable',
                    'nationaIDNumber'           => 'required',
                    'surname'                   => 'string|required',
                    'first_name'                => 'string|required',
                    'other_name'                => 'string|nullable',
                    'personal_mail'             => 'required|email',
                    'phone'                     => 'required',
                    'date_of_birth'             => 'required',
                    'gender'                    => 'required',
                    'marital_status'            => 'required',
                    'address'                   => 'required',
                    'nationality'               => 'required',
                    'state'                     => 'required',
                    'lga'                       => 'required',
                    'job_role'                  => 'required',
                    'grade_level'               => 'required',
                    'official_mail'             => 'email|nullable',
                    //
                    'nok_firstname'             => 'required',
                    'nok_surname'               => 'required',
                    'nok_relationship'          => 'required',
                    'nok_mail'                  => 'nullable|email',
                    'nok_phone'                 => 'required',
                    'nok_address'               => 'required',
                    //
                    'disability_status'         => 'required',
                    'criminal_record'           => 'required',
                    'debt_status'               => 'required',
                    
                ]);
                break;
            case 2:
                $this->validate([
                    //
                    'blood_group'       => 'required',
                    'genotype'          => 'required',
                    'medical_condition' => 'nullable'
                ]);
                break;
            case 3:
                
                 $this->validate([
                     'deployment_location'   => 'required',
                     'deployment_unit'       => 'required',
                     'deployment_date'       => 'required'
                  
                 ]);
                break;
            case 4:
                //$this->validate([
                //    'bank_name'                 => 'required',
                //    'bank_account_name'         => 'required',
                //    'bank_account_number'       => 'required',
                //    'pfa_name'                  => 'nullable',
                //    'pfa_account_name'          => 'nullable',
                //    'pfa_account_number'        => 'nullable',
                //    'mortgage_bank_name'        => 'nullable',
                //    'mortgage_account_name'     => 'nullable',
                //    'mortgage_account_number'   => 'nullable',
                //    
                //]);
                break;
            default:
                // handle invalid step number
                break;
        }
    
        // proceed to next step
        $this->step++;
    }


    public function prevStep()
    {
        $this->step--;
    }


    public function submitForm()
    {
        
        $this->validate([
            'bank_name'                 => 'required',
            'bank_account_name'         => 'required',
            'bank_account_number'       => 'required',
            'pfa_name'                  => 'nullable',
            'pfa_account_name'          => 'nullable',
            'pfa_account_number'        => 'nullable',
            'mortgage_bank_name'        => 'nullable',
            'mortgage_account_name'     => 'nullable',
            'mortgage_account_number'   => 'nullable',
        ]);
        
        // ...
        DB::transaction(function () {
            // Insert into table 1
            $userId = auth()->user()->id;
            $user = DB::table('biodatas')->insertGetId([
                'title'             => $this->title,
                'surname'           => $this->surname,
                'first_name'        => $this->first_name,
                'other_name'        => $this->other_name,
                'personal_email'     => $this->personal_mail,
                'phone'             => $this->phone,
                'date_of_birth'     => $this->date_of_birth,
                'gender'            => $this->gender,
                'marital_status'    => $this->marital_status,
                'address'           => $this->address,
                'nationality'       => $this->nationality,
                'state'             => $this->state,
                'lga'               => $this->lga,
                'job_role'          => $this->job_role,
                'grade_level'          => $this->grade_level,
                'official_email'     => $this->official_mail,
                'staff_id'          => $this->lastNumber,
                'added_by'          => $userId,
            ]);

            // Insert into table 2
            NextOfKin::create([
                'biodata_id'    => $user,
                'first_name'    => $this->nok_firstname,
                'surname'       => $this->nok_surname,
                'phone'         => $this->nok_phone,
                'email'         => $this->nok_mail,
                'address'       => $this->nok_address,
                'relationship'  => $this->nok_relationship,
            ]);

            // Table 3
            MedicalHistory::create([
                'biodata_id'        => $user,
                'blood_group'       => $this->blood_group,
                'genotype'          => $this->genotype,
                'medical_condition' => $this->medical_condition,
            ]);

            // Table 4
            Deployment::create([
                'biodata_id'        => $user,
                'location_id'       => $this->deployment_location,
                'unit_id'           => $this->deployment_unit,
                //'status'            => $this->deployment_status,
                'deployment_date'   => $this->deployment_date,
                'comment'           => $this->deployment_comment,
            ]);

            // Table 5
            Bank::create([
                'biodata_id'                => $user,
                'bank_name'                 => $this->bank_name,
                'account_name'              => $this->bank_account_name,
                'account_number'            => $this->bank_account_number,
                'pfa_name'                  => $this->pfa_name,
                'pfa_account_name'          => $this->pfa_account_name,
                'rsa'                       => $this->pfa_account_number,
                'mortgage_account_name'     => $this->mortgage_account_name,
                'mortgage_account_number'   => $this->mortgage_account_number,
                
            ]);
            //$uid = $user;
            
            session()->flash('success', 'Please add employee qualifications and activate profile!');
            return redirect()->route('employee-activate',['id' =>  $user]);

            //clear form
            
        });

       
    }
    /**
     * Write code on Method
     */
   
     public function clearForm()
    {
        $this->name = '';
        $this->price = '';
        $this->detail = '';
        $this->status = 1;
    }
    
}
