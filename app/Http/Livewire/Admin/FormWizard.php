<?php

namespace App\Http\Livewire\Admin;
use Jantinnerezo\LivewireAlert\LivewireAlert;

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
use App\Models\Feeder;
use App\Models\AreaOffice;
use App\Models\DepartmentModel;
use App\Models\DivisionModel;

class FormWizard extends Component
{
    use LivewireAlert;

    public $step = 1;
    public $lastNumber = 0;
    
    //
public $divisions;
public $departments;
public $units;
//
public $locations;
public $area_offices;
public $feeders;

//
public $selectedDivision    = null;
public $selectedDepartment  = null;
public $selectedUnit        = null;

//
public $selectedLocation    = null;
public $selectedAreaOffice  = null;
public $selectedFeeder      = null;
    
    //Biodata
    public $title, $nationalIDNumber, $surname, $first_name, $other_name, $personal_mail, 
            $phone, $date_of_birth, $religion, $gender, $marital_status, $official_mail, 
            $address, $contact_address, $nationality, $selectedState, $lga =null, $job_role, $grade_level, 
            $gradeLevel, $date_of_first_appointment, $date_of_confirmation, $date_of_last_promotion,
            $jobRole, $disability_status, $disability_type, $criminal_record, $debt_status;
             
    
    // NextOfKin    
    public $nok_firstname, $nok_surname, $nok_relationship, $nok_phone, $nok_mail, $nok_address;    
    
    // MedicalHistory
    public $blood_group, $genotype, $medical_condition;
    
    //Deployment
    public $deployment_division, $deployment_location, $feeder, $area_office,
            $deployment_department=null, $deployment_unit=null, $deployment_date, $deployment_comment;
    
    public $deploy_location, $lgas, $deploy_unit, 
            $deploy_area_office, $deploy_feeder, $department, $division;
    //Bank
    public $bank_name, $bank_account_name, $bank_account_number, 
            $pfa_name, $pfa_account_name, $pfa_account_number, 
            $mortgage_bank_name, $mortgage_account_name, $mortgage_account_number;

    

    /**
    * Write code on Method
    */

    public function mount($selectedUnit = null, $selectedFeeder = null)
    {        
        $states = $this->states = State::all();
        //$lgas = $this->lgas = lga::all();
        
        $gradeLevel = $this->gradeLevel = GradeLevelModel::where('status', 1)->get();
        $jobRole = $this->jobRole = JobRoleModel::where('status', 1)->get();
        
        $lastRecord = DB::table('biodatas')->orderBy('id', 'desc')->latest()->first();
        $this->lastNumber = $lastRecord ? $lastRecord->staff_id + 1 : 1;

        //
        $this->divisions        = DivisionModel::all();
        $this->departments      = collect();
        $this->units            = collect();
        
        $this->selectedUnit     = $selectedUnit;

        if (!is_null($selectedUnit)) {
            $unit = UnitModel::with('department.division')->find($selectedUnit);
            if ($unit) {
                $this->units = UnitModel::where('department_id', $unit->department_id)->get();
                $this->departments = DepartmentModel::where('division_id', $unit->department->country_id)->get();
                $this->selectedDivision = $unit->department->division_id;
                $this->selectedDepartment = $unit->department_id;
            }
        }
        
        $this->locations        = LocationModel::all();
        $this->area_offices     = collect();
        $this->feeders          = collect();

        $this->selectedFeeder   = $selectedFeeder;

    }


    public function render()
    {
               
        return view('livewire.admin.form-wizard')->layout('layouts.admin-layout');
    }

    /** Cascade Select fxns */
    public function updatedSelectedState($state_id)
    {
        $this->lgas = lga::where('state_id', $state_id)->get();
    }
    public function updatedSelectedDivision($division) 
    {
        $this->departments = DepartmentModel::where('division_id', $division)->get();
        $this->selectedDepartment = Null;
    }

    public function updatedSelectedDepartment($department) 
    {
        if(!is_null($department)) {
        $this->units = UnitModel::where('department_id', $department)->get();
        }
        
    }
    
     //
     public function updatedSelectedLocation($location) {
        $this->area_offices = AreaOffice::where('location_id', $location)->get();
        $this->selectedAreaOffice = Null;
    }
    public function updatedSelectedAreaOffice($area_office) 
    {
        if(!is_null($area_office)) {
        $this->feeders = Feeder::all();
        }
    }

    public function nextStep()
    {
        switch ($this->step) {
            case 1:
                $this->validate([
                    'title'                     => 'nullable',
                    'nationalIDNumber'          => 'required|digits:11',
                    'surname'                   => 'string|required',
                    'first_name'                => 'string|required',
                    'other_name'                => 'string|nullable',
                    'personal_mail'             => 'required|email',
                    'phone'                     => 'required|digits:11',
                    'date_of_birth'             => 'required|date',
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
                    'date_of_first_appointment' => 'required|date',
                    'date_of_confirmation'      => 'nullable|date',
                    'date_of_last_promotion'    => 'nullable|date',
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
                    'selectedDivision'      => 'required',
                    'selectedDepartment'    => 'required',
                    'selectedLocation'      => 'required',
                    'selectedUnit'          => 'required',
                    'selectedAreaOffice'    => 'required',
                    'selectedFeeder'        => 'required',
                    'deployment_date'       => 'required',
                    'deployment_comment'    => 'required',
                  
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
                'title'                     => $this->title,
                'nationalIDNumber'           => $this->nationalIDNumber,
                'surname'                   => $this->surname,
                'first_name'                => $this->first_name,
                'other_name'                => $this->other_name,
                'personal_email'            => $this->personal_mail,
                'phone'                     => $this->phone,
                'date_of_birth'             => $this->date_of_birth,
                'gender'                    => $this->gender,
                'marital_status'            => $this->marital_status,
                'address'                   => $this->address,
                'nationality'               => $this->nationality,
                'state'                     => $this->selectedState,
                'lga'                       => $this->lga,
                'job_role'                  => $this->job_role,
                'grade_level'               => $this->grade_level,
                'date_of_first_appointment' => $this->date_of_first_appointment,
                'date_of_confirmation'      => date('Y-m-d H:i:s', strtotime($this->date_of_confirmation)),
                'date_of_last_promotion'    => date('Y-m-d H:i:s', strtotime($this->date_of_last_promotion)),
                'official_email'            => $this->official_mail,
                'disability_status'         => $this->disability_status,
                'disability_type'           => $this->disability_type,
                'criminal_record'           => $this->criminal_record,
                'debt_status'               => $this->debt_status,  
                'staff_id'                  => $this->lastNumber,
                'created_by'                => $userId,
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
                'division_id'       => $this->selectedDivision,
                'department_id'     => $this->selectedDepartment,
                'unit_id'           => $this->selectedUnit,
                'location_id'       => $this->selectedLocation,
                'area_office_id'    => $this->selectedAreaOffice,
                'feeder_id'         => $this->selectedFeeder,
                //'status'          => $this->deployment_status,
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
            
            //session()->flash('success', 'Employee records saved. Update qualifications and upload document to activate Employee account.');
            //return redirect()->route('employee-activate',['id' =>  $user]);
            $this->flash('success', 'Successfully saved', [], 'employee-activate/'.$user);
            //clear form
            
        });

       
    }
    /**
     * Write code on Method
     */
   
     public function clearForm()
    {
        //$this->name = '';
        //$this->price = '';
        //$this->detail = '';
        //$this->status = 1;
    }
    
}
