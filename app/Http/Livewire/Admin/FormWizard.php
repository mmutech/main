<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\DB;

use Livewire\Component;
use App\Models\Biodata;
use App\Models\NextOfKin;
use App\Models\MedicalHistory;
use App\Models\Deployment;
use App\Models\Bank;

class FormWizard extends Component
{
    public $step = 1;
    public $lastNumber = 0;

    //Biodata
    public $title, $surname, $first_name, $other_name, $personal_mail, 
            $phone, $date_of_birth, $gender, $marital_status,
            $official_mail, $address, $nationality, $state, $lga, $job_role, $nok_name, $nok_relationship, $nok_phone, $nok_mail, $nok_address;
    // NextOfKin        
    
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
        $lastRecord = DB::table('biodatas')->orderBy('id', 'desc')->latest()->first();
        $this->lastNumber = $lastRecord ? $lastRecord->staff_id + 1 : 1;
    }


    public function render()
    {
        
        return view('livewire.admin.form-wizard')->layout('layouts.admin-layout');
    }


    public function nextStep()
    {
        switch ($this->step) {
            case 1:
                $this->validate([
                    'title'             => 'nullable',
                    'surname'           => 'required',
                    'first_name'        => 'required',
                    'other_name'        => 'required',
                    'personal_mail'     => 'required|email',
                    'phone'             => 'required',
                    'date_of_birth'     => 'required',
                    'gender'            => 'required',
                    'marital_status'    => 'required',
                    'address'           => 'required',
                    'nationality'       => 'required',
                    'state'             => 'required',
                    'lga'               => 'required',
                    //'job_role'          => 'required',
                    'official_mail'     => 'email',
                    //
                    'nok_name'          => 'required',
                    'nok_relationship'  => 'required',
                    'nok_mail'          => 'nullable|email',
                    'nok_phone'         => 'required',
                    'nok_address'       => 'required'
                    
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
            /*case 4:
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
                break;*/
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
                //'job_role'          => $this->job_role,
                'official_email'     => $this->official_mail,
                'staff_id'          => $this->lastNumber,
            ]);

            // Insert into table 2
            NextOfKin::create([
                'biodata_id'    => $user,
                'name'          => $this->nok_name,
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

        // redirect to education & Qualification Page
       
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
