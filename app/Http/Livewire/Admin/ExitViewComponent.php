<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ExitInitModel;
use App\Models\ExitTypeModel;
use App\Models\Deployment;
use App\Models\statusModel;
use App\Models\Biodata;
use App\Models\User;
use App\Models\LocationModel;
use App\Models\UnitModel;
use App\Models\DepartmentModel;
use App\Models\DivisionModel;

class ExitViewComponent extends Component
{
    public $exitIntId, $adminComment, $status, $ViewexitType, $Viewexit_type_id, $ViewexitInt, $ViewexitIntId, $Viewstatus, $ViewAddedBy, $Viewcomment, $Viewldate, $Viewrdate, $ViewexitInitionId, $ViewexitInitionView,
           $ViewLocationId, $ViewUnitId;
    
    // Get Single Record

    public function mount($id)
    {
        // Get Exit Initiation Data;
        $status = $this->status = statusModel::all();
        $exitInitionView = ExitInitModel::where('exit_initiation.id', $id)->select("exit_initiation.id", "exit_initiation.added_by", 
        "exit_initiation.ldate", "exit_initiation.rdate", "exit_initiation.comment", "exit_type.exit_type", "status.status_name AS status",
        "exit_initiation.adminComment")
        ->join('status', 'status.id', "=", 'exit_initiation.status')
        ->join('exit_type', 'exit_type.id', "=", 'exit_initiation.exit_type_id')
        ->first(); 

        // dd($exitInitionView);
        
        $this->ViewexitIntId = $exitInitionView->id;
        $this->ViewexitTypeId = $exitInitionView->exit_type;
        $this->Viewcomment = $exitInitionView->comment;
        $this->ViewAdminComment = $exitInitionView->adminComment;
        $this->Viewstatus = $exitInitionView->status;
        $this->Viewrdate = $exitInitionView->rdate;
        $this->Viewldate = $exitInitionView->ldate;
        $this->ViewAddedBy = $exitInitionView->added_by;
        
        // Get Biodata Id From Users Table
        $user = User::where('id', $this->ViewAddedBy)->first();

        $this->ViewBiodataId = $user->biodata_id;

        // Get Biodata
        $biodata = Biodata::where('biodatas.staff_id', $this->ViewBiodataId)
        ->select('biodatas.surname', 'biodatas.first_name', 'biodatas.other_name', 'biodatas.personal_email', 'biodatas.staff_id',
         'grade_level.description AS grade_level', 'job_role.description AS job_role')
        ->join('grade_level', 'grade_level.id', "=", 'biodatas.grade_level')
        ->join('job_role', 'job_role.id', "=", 'biodatas.job_role')
        ->first();
            $this->ViewSurname = $biodata->surname;
            $this->ViewFirstName = $biodata->first_name;
            $this->ViewOtherName = $biodata->other_name;
            $this->ViewPersonalEmail = $biodata->personal_email;
            $this->ViewStaffId = $biodata->staff_id;
            $this->ViewJobRole = $biodata->job_role;
            $this->ViewGradeLevel = $biodata->grade_level;

            // dd($biodata);

        // Get Deployment
        $deployment = Deployment::where('deployments.biodata_id', $this->ViewStaffId)
            ->select('deployments.id', 'location.description AS location_id', 'deployments.comment', 'deployments.biodata_id',
            'unit.description AS unit_id', 'unit.id AS unitId')
            ->join('location', 'location.id', "=", 'deployments.location_id')
            ->join('unit', 'unit.id', "=", 'deployments.unit_id')
            ->first();
            $this->ViewLocationId = $deployment->location_id;
            $this->ViewUnitId = $deployment->unit_id;
            $this->ViewUnit_Id = $deployment->unitId;

        // Get Department
        $department = UnitModel::where('unit.id', $this->ViewUnit_Id)
            ->select('unit.id', 'department.description', 'department.id')
            ->join('department', 'department.id', "=", 'unit.department_id')
            ->first();
            $this->ViewDepartmentId = $department->id;
            $this->ViewDepartment = $department->description;

        // Get Division
        $division = DepartmentModel::where('department.id', $this->ViewDepartmentId)
            ->select('department.id', 'division.description', 'division.id')
            ->join('division', 'division.id', "=", 'department.division_id')
            ->first();
            $this->ViewDivisiontId = $division->id;
            $this->ViewDivision = $division->description;

        // dd($this->ViewDivision);

    }

    // validation
    protected $rules = [
        'adminComment' => 'required',
        'status' => 'required'
    ];

    // Update Exit Initiation
    public function updateIntiation()
    {
        $userId = auth()->user()->id;
        $validateData = $this->validate();
        ExitInitModel::where('id', $this->ViewexitIntId)->update([
            'adminComment' => $validateData['adminComment'], 
            'status' => $validateData['status'],
            'updated_by' => $userId
        ]);

        // dd($exitIntId);

        session()->flash('message', 'Exit Initiation Updated Successfully!');
        return redirect()->to('/exit-init-component');
    }

    public function render()
    {

        return view('livewire.admin.exit-view-component')->layout('layouts.admin-layout');
    }
    
}
