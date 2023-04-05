<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\DepartmentModel;
use App\Models\DivisionModel;
use App\Models\statusModel;

class DepartmentComponent extends Component
{
    public $department, $discription, $comment, $departmentId, $status, $addedBy, $division_id;

    // Get all Record
    public function render()
    {
        $status = $this->status = statusModel::all();
        $division_id = $this->division_id = DivisionModel::all();
        $this->department = DepartmentModel::select("department.id", "department.description", "department.comment", "status.status_name AS status", "division.description AS division_id")
        ->join('status', 'status.id', "=", 'department.status')
        ->join('division', 'division.id', "=", 'department.division_id')
        ->orderByRaw('id DESC')
        ->get();
        
        return view('livewire.admin.department-component')->layout('layouts.admin-layout');
    }

    // Get Active Record
    // public function mount()
    // {
    //     $status = $this->status = statusModel::all();
    //     $division_id = $this->division_id = DivisionModel::all();
    //     $this->department = DepartmentModel::
    //     select("department.id", "department.description", "department.comment", "status.status_name AS status", "division.description AS division_id")
    //     ->join('status', 'status.id', "=", 'department.status')
    //     ->join('division', 'division.id', "=", 'department.division_id')
    //     ->orderByRaw('id DESC')
    //     ->get();

    //     return view('livewire.admin.department-component')->layout('layouts.admin-layout');
    // }

    // validation
    protected $rules = [
        'discription' => 'required',
        'division_id' => 'required',
        'comment' => 'required',
        'status' => 'required',
        // 'addedBy' => 'required'
    ];

    // Create department
    public function createdepartment()
    {
        $this->validate();
        $department = DepartmentModel::create([
            'description' => $this->discription, 
            'division_id' => $this->division_id, 
            'comment' => $this->comment, 
            'status' => 1,
            'added_by' => 1
        ]);

        session()->flash('message', 'Department Added Successfully!');

        return redirect()->to('/department-component');
    }

    // Delete department
    public function remove($departmentId)
    {
        $department = DepartmentModel::find($departmentId);
        $department->delete();
        $this->department = $this->department->except($departmentId);

        session()->flash('message', 'Department Deleted Successfully!');
        return redirect()->to('/department-component');
    }

    // Get Edit department
    public function edit($departmentId)
    {
        $department = DepartmentModel::find($departmentId);
        if($department){
            $this->departmentId = $department->id;
            $this->discription = $department->description;
            $this->division_id = $department->division_id;
            $this->comment = $department->comment;
            $this->status = $department->status;
            $this->added_by = $department->added_by;
        }else{
            return redirect()->to('/department-component');
        }
        // dd($department);

        // $this->dispatchBrowserEvent('close-modal');
    }

    // Update department
    public function updateDepartment()
    {
        $validateData = $this->validate();
        DepartmentModel::where('id', $this->departmentId)->update([
            'description' => $validateData['discription'],
            'division_id' => $validateData['division_id'], 
            'comment' => $validateData['comment'], 
            'status' => $validateData['status'],
            'added_by' => 1
        ]);

        session()->flash('message', 'Department Updated Successfully!');
        $this->dispatchBrowserEvent('close-modal');
        return redirect()->to('/department-component');
    }

}
