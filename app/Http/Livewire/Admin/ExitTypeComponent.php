<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ExitTypeModel;
use App\Models\statusModel;

class ExitTypeComponent extends Component
{
    public $exitType, $discription, $exit_type, $exitTypeId, $status, $addedBy;

    // Get all Record
    public function render()
    {
        $status = $this->status = statusModel::all();
        $this->exitType = ExitTypeModel::select("exit_type.id", "exit_type.description", "exit_type.exit_type", "status.status_name AS status")
        ->join('status', 'status.id', "=", 'exit_type.status')
        ->orderByRaw('id DESC')->get();
        
        return view('livewire.admin.exit-type-component')->layout('layouts.admin-layout');
    }

    // Get Active Record
    public function mount()
    {
        $status = $this->status = statusModel::all();
        $this->exitType = ExitTypeModel::where('status', 1)
        ->select("exit_type.id", "exit_type.description", "exit_type.exit_type", "status.status_name AS status")
        ->join('status', 'status.id', "=", 'exit_type.status')
        ->orderByRaw('id DESC')->get();

        return view('livewire.admin.exit-type-component')->layout('layouts.admin-layout');
    }

    // validation
    protected $rules = [
        'discription' => 'required',
        'status' => 'required',
        'exit_type' => 'required'
    ];

    // Create exitType
    public function createExitType()
    {
        $this->validate();
        $exitType = ExitTypeModel::create([
            'exit_type' => $this->exit_type,
            'description' => $this->discription, 
            'status' => 1,
            'added_by' => 1
        ]);

        session()->flash('message', 'Exit Type Added Successfully!');

        return redirect()->to('/exit-type-component');
    }

    // Delete exitType
    public function remove($exitTypeId)
    {
        $exitType = ExitTypeModel::find($exitTypeId);
        $exitType->delete();
        $this->exitType = $this->exitType->except($exitTypeId);

        session()->flash('message', 'Exit Type Deleted Successfully!');
        return redirect()->to('/exit-type-component');
    }

    // Get Edit exitType
    public function edit($exitTypeId)
    {
        $exitType = ExitTypeModel::find($exitTypeId);
        if($exitType){
            $this->exitTypeId = $exitType->id;
            $this->exit_type = $exitType->exit_type;
            $this->discription = $exitType->description;
            $this->status = $exitType->status;
            $this->added_by = $exitType->added_by;
        }else{
            return redirect()->to('/exit-type-component');
        }
        // dd($exitType);

        $this->dispatchBrowserEvent('close-modal');
    }

    // Update exitType
    public function updateExitType()
    {
        $validateData = $this->validate();
        ExitTypeModel::where('id', $this->exitTypeId)->update([
            'exit_type' => $validateData['exit_type'], 
            'description' => $validateData['discription'], 
            'status' => $validateData['status'],
            'added_by' => 1
        ]);

        session()->flash('message', 'Exit Type Updated Successfully!');
        $this->dispatchBrowserEvent('close-modal');
        return redirect()->to('/exit-type-component');
    }

}
