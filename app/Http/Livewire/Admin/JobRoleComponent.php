<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\JobRoleModel;
use App\Models\statusModel;

class JobRoleComponent extends Component
{
    public $job_role, $discription, $comment, $job_roleId, $status, $addedBy;

    // Get all Record
    public function render()
    {
        $status = $this->status = statusModel::all();
        $this->job_role = JobRoleModel::select("job_role.id", "job_role.description", "job_role.comment", "status.status_name AS status")
        ->join('status', 'status.id', "=", 'job_role.status')
        ->orderByRaw('id DESC')->get();
        
        return view('livewire.admin.job-role-component')->layout('layouts.admin-layout');
    }

    // Get Active Record
    public function mount()
    {
        $status = $this->status = statusModel::all();
        $this->job_role = JobRoleModel::where('status', 1)
        ->select("job_role.id", "job_role.description", "job_role.comment", "status.status_name AS status")
        ->join('status', 'status.id', "=", 'job_role.status')
        ->orderByRaw('id DESC')->get();

        return view('livewire.admin.job-role-component')->layout('layouts.admin-layout');
    }

    // validation
    protected $rules = [
        'discription' => 'required',
        'comment' => 'required',
        'status' => 'required',
        // 'added_by' => 'required'
    ];

    // Create job_role
    public function createJobRole()
    {
        $userId = auth()->user()->id;
        $this->validate();
        $job_role = JobRoleModel::create([
            'description' => $this->discription, 
            'comment' => $this->comment, 
            'status' => 1,
            'added_by' => $userId
        ]);

        session()->flash('message', 'Job Role Added Successfully!');

        return redirect()->to('/job-role-component');
    }

    // Delete job_role
    public function remove($job_roleId)
    {
        $job_role = JobRoleModel::find($job_roleId);
        $job_role->delete();
        $this->job_role = $this->job_role->except($job_roleId);

        session()->flash('message', 'Job Role Deleted Successfully!');
        return redirect()->to('/job-role-component');
    }

    // Get Edit job_role
    public function edit($job_roleId)
    {
        $job_role = JobRoleModel::find($job_roleId);
        if($job_role){
            $this->job_roleId = $job_role->id;
            $this->discription = $job_role->description;
            $this->comment = $job_role->comment;
            $this->status = $job_role->status;
            $this->added_by = $job_role->added_by;
        }else{
            return redirect()->to('/job-role-component');
        }
        // dd($job_role);

        $this->dispatchBrowserEvent('close-modal');
    }

    // Update job_role
    public function updateJobRole()
    {
        $userId = auth()->user()->id;
        $validateData = $this->validate();
        JobRoleModel::where('id', $this->job_roleId)->update([
            'description' => $validateData['discription'], 
            'comment' => $validateData['comment'], 
            'status' => $validateData['status'],
            'updated_by' => $userId
        ]);

        session()->flash('message', 'Job Role Updated Successfully!');
        $this->dispatchBrowserEvent('close-modal');
        return redirect()->to('/job-role-component');
    }
   
}
