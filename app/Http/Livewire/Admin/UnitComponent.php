<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\DepartmentModel;
use App\Models\UnitModel;
use App\Models\statusModel;

class UnitComponent extends Component
{
    public $unit, $discription, $comment, $unitId, $status, $addedBy, $departmentId;

    // Get all Record
    public function render()
    {
        $status = $this->status = statusModel::all();
        $departmentId = $this->departmentId = DepartmentModel::where('status', 1)->get();
        $this->unit = unitModel::select("unit.id", "unit.description", "unit.comment", "status.status_name AS status", "department.description AS departmentId")
        ->join('status', 'status.id', "=", 'unit.status')
        ->join('department', 'department.id', "=", 'unit.department_id')
        ->orderByRaw('id DESC')
        ->get();
        
        return view('livewire.admin.unit-component')->layout('layouts.admin-layout');
    }

    // Get Active Record
    // public function mount()
    // {
    //     $status = $this->status = statusModel::all();
    //     $departmentId = $this->departmentId = DepartmentModel::all();
    //     $this->unit = unitModel::
    //     select("unit.id", "unit.description", "unit.comment", "status.status_name AS status", "division.description AS departmentId")
    //     ->join('status', 'status.id', "=", 'unit.status')
    //     ->join('division', 'division.id', "=", 'unit.departmentId')
    //     ->orderByRaw('id DESC')
    //     ->get();

    //     return view('livewire.admin.unit-component')->layout('layouts.admin-layout');
    // }

    // validation
    protected $rules = [
        'discription' => 'required',
        'departmentId' => 'required',
        'comment' => 'required',
        'status' => 'required',
        // 'addedBy' => 'required'
    ];

    // Create unit
    public function createUnit()
    {
        $userId = auth()->user()->id;
        $this->validate();
        $unit = unitModel::create([
            'description' => $this->discription, 
            'department_id' => $this->departmentId, 
            'comment' => $this->comment, 
            'status' => 1,
            'added_by' => $userId
        ]);

        session()->flash('message', 'Unit Added Successfully!');

        return redirect()->to('/unit-component');
    }

    // Delete unit
    public function remove($unitId)
    {
        $unit = unitModel::find($unitId);
        $unit->delete();
        $this->unit = $this->unit->except($unitId);

        session()->flash('message', 'Unit Deleted Successfully!');
        return redirect()->to('/unit-component');
    }

    // Get Edit unit
    public function edit($unitId)
    {
        $unit = unitModel::find($unitId);
        if($unit){
            $this->unitId = $unit->id;
            $this->discription = $unit->description;
            $this->departmentId = $unit->departmentId;
            $this->comment = $unit->comment;
            $this->status = $unit->status;
            $this->added_by = $unit->added_by;
        }else{
            return redirect()->to('/unit-component');
        }
        // dd($unit);

        // $this->dispatchBrowserEvent('close-modal');
    }

    // Update unit
    public function updateUnit()
    {
        $userId = auth()->user()->id;
        $validateData = $this->validate();
        unitModel::where('id', $this->unitId)->update([
            'description' => $validateData['discription'],
            'department_id' => $validateData['departmentId'], 
            'comment' => $validateData['comment'], 
            'status' => $validateData['status'],
            'updated_by' => $userId
        ]);

        session()->flash('message', 'Unit Updated Successfully!');
        $this->dispatchBrowserEvent('close-modal');
        return redirect()->to('/unit-component');
    }

}
