<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\DesignationModel;
use App\Models\GradeLevelModel;
use App\Models\statusModel;

class GradeLevelComponent extends Component
{
    public $gradeLevel, $discription, $comment, $gradeLevelId, $status, $addedBy, $designationId, $monthly_gross;

    // Get all Record
    public function render()
    {
        $status = $this->status = statusModel::all();
        $designationId = $this->designationId = DesignationModel::where('status', 1)->get();
        $this->gradeLevel = GradeLevelModel::select("grade_level.id", "grade_level.monthly_gross", "grade_level.description", "grade_level.comment", "status.status_name AS status", "designation.description AS designationId")
        ->join('status', 'status.id', "=", 'grade_level.status')
        ->join('designation', 'designation.id', "=", 'grade_level.designation_id')
        ->orderByRaw('id DESC')
        ->get();
        
        return view('livewire.admin.grade-level-component')->layout('layouts.admin-layout');
    }

    // Get Active Record


    // validation
    protected $rules = [
        'discription' => 'required',
        'designationId' => 'required',
        'comment' => 'required',
        'status' => 'required',
        'monthly_gross' => 'required'
    ];

    // Create gradeLevel
    public function createGradeLevel()
    {
        $userId = auth()->user()->id;
        $this->validate();
        $gradeLevel = GradeLevelModel::create([
            'description' => $this->discription, 
            'designation_id' => $this->designationId, 
            'comment' => $this->comment, 
            'monthly_gross' => $this->monthly_gross,
            'status' => 1,
            'added_by' => $userId
        ]);

        session()->flash('message', 'Grade Level Added Successfully!');

        return redirect()->to('/grade-level-component');
    }

    // Delete gradeLevel
    public function remove($gradeLevelId)
    {
        $gradeLevel = GradeLevelModel::find($gradeLevelId);
        $gradeLevel->delete();
        $this->gradeLevel = $this->gradeLevel->except($gradeLevelId);

        session()->flash('message', 'Grade Level Deleted Successfully!');
        return redirect()->to('/grade-level-component');
    }

    // Get Edit gradeLevel
    public function edit($gradeLevelId)
    {
        $gradeLevel = GradeLevelModel::find($gradeLevelId);
        if($gradeLevel){
            $this->gradeLevelId = $gradeLevel->id;
            $this->discription = $gradeLevel->description;
            $this->designationId = $gradeLevel->designationId;
            $this->monthly_gross = $gradeLevel->monthly_gross;
            $this->comment = $gradeLevel->comment;
            $this->status = $gradeLevel->status;
            $this->added_by = $gradeLevel->added_by;
        }else{
            return redirect()->to('/grade-level-component');
        }
        // dd($gradeLevel);

        // $this->dispatchBrowserEvent('close-modal');
    }

    // Update gradeLevel
    public function updateGradeLevel()
    {
        $userId = auth()->user()->id;
        $validateData = $this->validate();
        GradeLevelModel::where('id', $this->gradeLevelId)->update([
            'description' => $validateData['discription'],
            'designation_id' => $validateData['designationId'], 
            'monthly_gross' => $validateData['monthly_gross'], 
            'comment' => $validateData['comment'], 
            'status' => $validateData['status'],
            'updated_by' => $userId
        ]);

        session()->flash('message', 'Grade Level Updated Successfully!');
        $this->dispatchBrowserEvent('close-modal');
        return redirect()->to('/grade-level-component');
    }
    
}
