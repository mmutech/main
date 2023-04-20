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
use App\Models\State;
use App\Models\lga;

class FormWizard extends Component
{
    public $step = 1;
    public $lastNumber = 0;
    public $deploy_location, $lgas, $deploy_unit;
    public  $selectedState=null, $lga =null;
    

    //Biodata
    public $title, $nationaIDNumber, $surname, $first_name, $other_name, $personal_mail, 
            $phone, $date_of_birth, $religion, $gender, $marital_status, $official_mail, $address, 
            $nationality, $state, $job_role, $grade_level, $gradeLevel, $jobRole, 
            $disability_status, $disability_type, $criminal_record, $debt_status;
             
    
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
        $states = $this->states = State::all();
        //$lgas = $this->lgas = lga::all();
        
        
        $deploy_location = $this->deploy_location = LocationModel::where('status', 1)->get();
        $deploy_unit = $this->deploy_unit = UnitModel::where('status', 1)->get();
        $gradeLevel = $this->gradeLevel = GradeLevelModel::where('status', 1)->get();
        $jobRole = $this->jobRole = JobRoleModel::where('status', 1)->get();
        $lastRecord = DB::table('biodatas')->orderBy('id', 'desc')->latest()->first();
        $this->lastNumber = $lastRecord ? $lastRecord->staff_id + 1 : 1;
    }


    public function render()
    {
               
        return view('livewire.admin.form-wizard')->layout('layouts.admin-layout');
    }

    public function updatedSelectedState($state_id)
    {
        $this->lgas = lga::where('state_id', $state_id)->get();
    }


    public function nextStep()
    {
        switch ($this->step) {
            case 1:
                $this->validate([
                    'title'                     => 'nullable',
                    'nationaIDNumber'           => 'required|digits:11',
                    'surname'                   => 'string|required',
                    'first_name'                => 'string|required',
                    'other_name'                => 'string|nullable',
                    'personal_mail'             => 'required|email',
                    'phone'                     => 'required|digits:11',
                    'date_of_birth'             => 'required',
                    'religion'                  => 'nullable',
                    'gender'                    => 'required',
                    'marital_status'            => 'required',
                    'address'                   => 'required',
                    'nationality'               => 'required',
                    'selectedState'             => 'required',
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
                    'disability_type'           => 'string|nullable',
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
                'nationaIDNumber'   => $this->nationaIDNumber,
                'surname'           => $this->surname,
                'first_name'        => $this->first_name,
                'other_name'        => $this->other_name,
                'personal_email'    => $this->personal_mail,
                'phone'             => $this->phone,
                'date_of_birth'     => $this->date_of_birth,
                'gender'            => $this->gender,
                'marital_status'    => $this->marital_status,
                'address'           => $this->address,
                'nationality'       => $this->nationality,
                'state'             => $this->selectedState,
                'lga'               => $this->lga,
                'job_role'          => $this->job_role,
                'grade_level'       => $this->grade_level,
                'official_email'    => $this->official_mail,
                'disability_status' => $this->disability_status,
                'criminal_record'   => $this->criminal_record,
                'debt_status'       => $this->debt_status,  
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
            
            session()->flash('success', 'Employee records saved. Update qualifications and upload document to activate Employee account.');
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
