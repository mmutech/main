<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\DesignationModel;
use App\Models\statusModel;

class DesignationComponent extends Component
{
    public $designation, $discription, $comment, $designationId, $status, $addedBy;

    // Get all Record
    public function render()
    {
        $status = $this->status = statusModel::all();
        $this->designation = DesignationModel::select("designation.id", "designation.description", "designation.comment", "status.status_name AS status")
        ->join('status', 'status.id', "=", 'designation.status')
        ->orderByRaw('id DESC')->get();
        
        return view('livewire.admin.designation-component')->layout('layouts.admin-layout');
    }

    // Get Active Record
    public function mount()
    {
        $status = $this->status = statusModel::all();
        $this->designation = DesignationModel::where('status', 1)
        ->select("designation.id", "designation.description", "designation.comment", "status.status_name AS status")
        ->join('status', 'status.id', "=", 'designation.status')
        ->orderByRaw('id DESC')->get();

        return view('livewire.admin.designation-component')->layout('layouts.admin-layout');
    }

    // validation
    protected $rules = [
        'discription' => 'required',
        'comment' => 'required',
        'status' => 'required',
        // 'added_by' => 'required'
    ];

    // Create designation
    public function createDesignation()
    {
        $userId = auth()->user()->id;
        $this->validate();
        $designation = DesignationModel::create([
            'description' => $this->discription, 
            'comment' => $this->comment, 
            'status' => 1,
            'added_by' => $userId
        ]);

        session()->flash('message', 'Designation Added Successfully!');

        return redirect()->to('/designation-component');
    }

    // Delete designation
    public function remove($designationId)
    {
        $designation = DesignationModel::find($designationId);
        $designation->delete();
        $this->designation = $this->designation->except($designationId);

        session()->flash('message', 'Designation Deleted Successfully!');
        return redirect()->to('/designation-component');
    }

    // Get Edit designation
    public function edit($designationId)
    {
        $designation = DesignationModel::find($designationId);
        if($designation){
            $this->designationId = $designation->id;
            $this->discription = $designation->description;
            $this->comment = $designation->comment;
            $this->status = $designation->status;
            $this->added_by = $designation->added_by;
        }else{
            return redirect()->to('/designation-component');
        }
        // dd($designation);

        $this->dispatchBrowserEvent('close-modal');
    }

    // Update designation
    public function updateDesignation()
    {
        $userId = auth()->user()->id;
        $validateData = $this->validate();
        DesignationModel::where('id', $this->designationId)->update([
            'description' => $validateData['discription'], 
            'comment' => $validateData['comment'], 
            'status' => $validateData['status'],
            'updated_by' => $userId
        ]);

        session()->flash('message', 'Designation Updated Successfully!');
        $this->dispatchBrowserEvent('close-modal');
        return redirect()->to('/designation-component');
    }
   
}
