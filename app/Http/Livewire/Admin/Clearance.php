<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ClearanceModel;
use App\Models\statusModel;

class Clearance extends Component
{
    public $status, $formData, $clearanceId, $ViewClearanceId, $comment, $clr_status,
           $ViewFirstName, $ViewSurname, $ViewOtherName, $ViewStaffId, $ViewPersonalEmail,
           $ViewGradeLevel, $ViewJobRole, $ViewLocationId, $ViewDivision, $ViewDepartment,
           $ViewUnitId, $ViewexitTypeId, $Viewcomment, $Viewldate, $Viewrdate, $Viewstatus, $ViewAdminComment;

    protected $listeners = ['updateClearance'];

    public function update($formData)
    {
        $this->formData = $formData;
        $userId = auth()->user()->id;

        $rec = [
            'comment'     => $this->formData['comment'],
            'clr_status'  => $this->formData['clr_status'],
            'cleared_by'  => $userId,
            'clr_date'    => now()
        ];
        
        //print_r($rec);
        ClearanceModel::where('id', $this->ViewClearanceId)->update($rec);
        session()->flash('message', 'Clearance successfully updated.');
    }

    public function render()
    {
        $status = $this->status = statusModel::all();
        return view('livewire.admin.exit-view-component')->layout('layouts.admin-layout');
    }

}
