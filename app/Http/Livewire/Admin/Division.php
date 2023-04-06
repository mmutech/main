<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\DivisionModel;
use App\Models\statusModel;

class Division extends Component
{

    public $division, $discription, $comment, $divisionId, $status, $addedBy;

    // Get all Record
    public function render()
    {
        $status = $this->status = statusModel::all();
        $this->division = DivisionModel::select("division.id", "division.description", "division.comment", "status.status_name AS status")
        ->join('status', 'status.id', "=", 'division.status')
        ->orderByRaw('id DESC')->get();
        
        return view('livewire.admin.division')->layout('layouts.admin-layout');
    }

    // Get Active Record
    public function mount()
    {
        $status = $this->status = statusModel::all();
        $this->division = DivisionModel::where('status', 1)
        ->select("division.id", "division.description", "division.comment", "status.status_name AS status")
        ->join('status', 'status.id', "=", 'division.status')
        ->orderByRaw('id DESC')->get();

        return view('livewire.admin.division')->layout('layouts.admin-layout');
    }

    // validation
    protected $rules = [
        'discription' => 'required',
        'comment' => 'required',
        'status' => 'required',
        // 'added_by' => 'required'
    ];

    // Create Division
    public function createDivision()
    {
        $this->validate();
        $division = DivisionModel::create([
            'description' => $this->discription, 
            'comment' => $this->comment, 
            'status' => 1,
            'added_by' => 1
        ]);

        session()->flash('message', 'Division Added Successfully!');

        return redirect()->to('/division');
    }

    // Delete Division
    public function remove($divisionId)
    {
        $division = DivisionModel::find($divisionId);
        $division->delete();
        $this->division = $this->division->except($divisionId);

        session()->flash('message', 'Division Deleted Successfully!');
        return redirect()->to('/division');
    }

    // Get Edit Division
    public function edit($divisionId)
    {
        $division = DivisionModel::find($divisionId);
        if($division){
            $this->divisionId = $division->id;
            $this->discription = $division->description;
            $this->comment = $division->comment;
            $this->status = $division->status;
            $this->added_by = $division->added_by;
        }else{
            return redirect()->to('/division');
        }
        // dd($division);

        $this->dispatchBrowserEvent('close-modal');
    }

    // Update Division
    public function updateDivision()
    {
        $validateData = $this->validate();
        DivisionModel::where('id', $this->divisionId)->update([
            'description' => $validateData['discription'], 
            'comment' => $validateData['comment'], 
            'status' => $validateData['status'],
            'added_by' => 1
        ]);

        session()->flash('message', 'Division Updated Successfully!');
        $this->dispatchBrowserEvent('close-modal');
        return redirect()->to('/division');
    }

}
