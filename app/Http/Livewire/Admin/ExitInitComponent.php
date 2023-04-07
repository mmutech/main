<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ExitInitModel;
use App\Models\ExitTypeModel;
use App\Models\statusModel;
use App\Models\User;
use App\Models\Biodata;

class ExitInitComponent extends Component
{
    public $exitType, $exit_type_id, $exitInt, $exitIntId, $status, $addedBy, $comment, $ldate, $exitInitionId, $exitInitionView;
    public $ViewexitType, $Viewexit_type_id, $ViewexitInt, $ViewexitIntId, $Viewstatus, $ViewaddedBy, $Viewcomment, $Viewldate, $ViewexitInitionId, $ViewexitInitionView;
    // Get all Record
    public function render()
    {
        $status = $this->status = statusModel::all();
        $exitType = $this->exitType = ExitTypeModel::all();
        $query = $this->exitInt = ExitInitModel::select("exit_initiation.id", "exit_initiation.ldate", "exit_initiation.rdate", "exit_initiation.comment", "exit_type.exit_type", "status.status_name AS status",
        "biodatas.staff_id", "biodatas.surname", "biodatas.first_name", "biodatas.other_name", "biodatas.personal_email")
        ->join('status', 'status.id', "=", 'exit_initiation.status')
        ->join('exit_type', 'exit_type.id', "=", 'exit_initiation.exit_type_id')
        ->join('biodatas', 'biodatas.id', "=", 'exit_initiation.added_by')
        ->orderByRaw('id DESC')->get();

        // dd($query);
        
        return view('livewire.admin.exit-init-component')->layout('layouts.admin-layout');
    }

    // Get Active Record
    // public function mount()
    // {
    //     $status = $this->status = statusModel::all();
    //     $this->exitType = ExitInitModel::where('status', 1)
    //     ->select("exit_initiation.id", "exit_initiation.comment", "exit_initiation.rdate", "exit_type.exit_type", "status.status_name AS status")
    //     ->join('status', 'status.id', "=", 'exit_initiation.status')
    //     ->join('exit_type', 'extit_type.id', "=", 'exit_initiation.exit_type_id')
    //     ->orderByRaw('id DESC')->get();

    //     return view('livewire.admin.exit-init-component')->layout('layouts.admin-layout');
    // }

    // validation
    protected $rules = [
        'exit_type_id' => 'required',
        'status' => 'required',
        'comment' => 'required',
        'ldate' => 'required'
    ];

    // Create exitType
    public function createExitInt()
    {
        $userId = auth()->user()->id;
        $this->validate();
        $exitType = ExitInitModel::create([
            'exit_type_id' => $this->exit_type_id,
            'comment' => $this->comment,
            'rdate' => now(),
            'ldate' => $this->ldate,
            'status' => 4,
            'added_by' => $userId
        ]);

        session()->flash('message', 'Exit Initiation Added Successfully!');

        return redirect()->to('/exit-init-component');
    }

    // Delete exitType
    public function remove($exitIntId)
    {
        $exitInt = ExitInitModel::find($exitIntId);
        $exitInt->delete();
        $this->exitInt = $this->exitInt->except($exitIntId);

        session()->flash('message', 'Exit Initiation Deleted Successfully!');
        return redirect()->to('/exit-init-component');
    }

    // Get Edit exitType
    public function edit($exitIntId)
    {
        $exitInt = ExitInitModel::find($exitIntId);
        if($exitInt){
            $this->exitIntId = $exitInt->id;
            $this->exit_type_id = $exitInt->exit_type_id;
            $this->comment = $exitInt->comment;
            $this->status = $exitInt->status;
            $this->rdate = $exitInt->rdate;
            $this->ldate = $exitInt->ldate;
            $this->added_by = $exitInt->added_by;
        }else{
            return redirect()->to('/exit-init-component');
        }
        // dd($exitType);

        $this->dispatchBrowserEvent('close-modal');
    }

    // Update exitType
    public function updateExitType()
    {
        $userId = auth()->user()->id;
        $validateData = $this->validate();
        ExitInitModel::where('id', $this->exitIntId)->update([
            'exit_type_id' => $validateData['exit_type_id'], 
            'comment' => $validateData['comment'], 
            'rdate' => $validateData['rdate'],
            'ldate' => $validateData['ldate'], 
            'status' => $validateData['status'],
            'updated_by' => $userId
        ]);

        session()->flash('message', 'Exit Initiation Updated Successfully!');
        $this->dispatchBrowserEvent('close-modal');
        return redirect()->to('/exit-init-component');
    }
    
}
