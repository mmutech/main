<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ExitInterviewModel;
use App\Models\ExitTypeModel;
use App\Models\statusModel;

class ExitInterviewComponent extends Component
{
    public $exitType, $exit_type_id, $exitInt, $exitIntId, $status, $addedBy, $comment, $question, $exitInitionId, $exitInitionView;
    public $ViewexitType, $Viewexit_type_id, $ViewexitInt, $ViewexitIntId, $Viewstatus, $ViewaddedBy, $Viewcomment, $Viewquestion, $ViewexitInitionId, $ViewexitInitionView;
    // Get all Record
    public function render()
    {
        $status = $this->status = statusModel::all();
        $exitType = $this->exitType = ExitTypeModel::where('status', 1)->get();
        $this->exitInt = ExitInterviewModel::select("exit_int_question.id", "exit_int_question.added_by", "exit_int_question.question", "exit_int_question.comment", "exit_type.exit_type", "status.status_name AS status")
        ->join('status', 'status.id', "=", 'exit_int_question.status')
        ->join('exit_type', 'exit_type.id', "=", 'exit_int_question.exit_type_id')
        ->orderByRaw('id DESC')->get();
        
        return view('livewire.admin.exit-interview-component')->layout('layouts.admin-layout');
    }

    // validation
    protected $rules = [
        'exit_type_id' => 'required',
        'status' => 'required',
        'comment' => 'required',
        'question' => 'required'
    ];

    // Create exitType
    public function createExitInterview()
    {
        $userId = auth()->user()->id;
        $this->validate();
        $exitType = ExitInterviewModel::create([
            'exit_type_id' => $this->exit_type_id,
            'comment' => $this->comment,
            'question' => $this->question,
            'status' => 1,
            'added_by' => $userId
        ]);

        session()->flash('message', 'Exit Interview Question Added Successfully!');

        return redirect()->to('/exit-interview-component');
    }

    // Delete exitType
    public function remove($exitIntId)
    {
        $exitInt = ExitInterviewModel::find($exitIntId);
        $exitInt->delete();
        $this->exitInt = $this->exitInt->except($exitIntId);

        session()->flash('message', 'Exit Interview Question Deleted Successfully!');
        return redirect()->to('/exit-interview-component');
    }

    // Get Edit exitType
    public function edit($exitIntId)
    {
        $exitInt = ExitInterviewModel::find($exitIntId);
        if($exitInt){
            $this->exitIntId = $exitInt->id;
            $this->exit_type_id = $exitInt->exit_type_id;
            $this->comment = $exitInt->comment;
            $this->status = $exitInt->status;
            $this->question = $exitInt->question;
            $this->added_by = $exitInt->added_by;
        }else{
            return redirect()->to('/exit-interview-component');
        }
        // dd($exitType);

        $this->dispatchBrowserEvent('close-modal');
    }

    // Update exitType
    public function updateExitInterview()
    {
        $userId = auth()->user()->id;
        $validateData = $this->validate();
        ExitInterviewModel::where('id', $this->exitIntId)->update([
            'exit_type_id' => $validateData['exit_type_id'], 
            'comment' => $validateData['comment'], 
            'question' => $validateData['question'],
            'status' => $validateData['status'],
            'updated_by' => $userId
        ]);

        session()->flash('message', 'Exit Interview Question Updated Successfully!');
        $this->dispatchBrowserEvent('close-modal');
        return redirect()->to('/exit-interview-component');
    }
}
