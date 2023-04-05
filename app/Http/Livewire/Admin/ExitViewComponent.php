<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ExitInitModel;
use App\Models\ExitTypeModel;
use App\Models\statusModel;

class ExitViewComponent extends Component
{
    public $ViewexitType, $Viewexit_type_id, $ViewexitInt, $ViewexitIntId, $Viewstatus, $ViewaddedBy, $Viewcomment, $Viewldate, $Viewrdate, $ViewexitInitionId, $ViewexitInitionView;
    
    // Get Single Record

    public function mount($id)
    {
        // $this->intID = $id;
        $exitInitionView = ExitInitModel::where('exit_initiation.id', $id)->select("exit_initiation.id", "exit_initiation.added_by", "exit_initiation.ldate", "exit_initiation.rdate", "exit_initiation.comment", "exit_type.exit_type", "status.status_name AS status")
        ->join('status', 'status.id', "=", 'exit_initiation.status')
        ->join('exit_type', 'exit_type.id', "=", 'exit_initiation.exit_type_id')
        ->first(); 
        
        $this->ViewexitIntId = $exitInitionView->id;
        $this->ViewexitTypeId = $exitInitionView->exit_type;
        $this->Viewcomment = $exitInitionView->comment;
        $this->Viewstatus = $exitInitionView->status;
        $this->Viewrdate = $exitInitionView->rdate;
        $this->Viewldate = $exitInitionView->ldate;
        $this->Viewadded_by = $exitInitionView->added_by;

        // dd($this->ViewexitTypeId);
        // return view('livewire.admin.exit-view-component')->layout('layouts.admin-layout');

    }

    public function render()
    {

        return view('livewire.admin.exit-view-component')->layout('layouts.admin-layout');
    }
    
}
