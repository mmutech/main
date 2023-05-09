<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

use App\Models\Biodata;
use App\Models\MedicalHistory;
use App\Models\NextOfKin;
use App\Models\Bank;
use App\Models\Deployment;
use App\Models\DivisionModel;
use App\Models\DepartmentModel;
use App\Models\UnitModel;
use App\Models\LocationModel;
use App\Models\AreaOffice;
use App\Models\Feeder;
use App\Models\Education;
use App\Models\Qualification;


class Myprofile extends Component
{
    public $user, $employee, $medical, $kin, $bank, $deployment, $division, $department, $unit, $location, $ao, $feeder, $employee_id;

    public function mount()
    {
        $this->user = auth()->user();
        $this->employee_id = $this->user->biodata_id;
        // $this->employee_id = 1;

        $this->employee = Biodata::find($this->employee_id);
        $this->medical = MedicalHistory::find($this->employee_id);
        $this->kin = NextOfKin::find($this->employee_id);
        $this->bank = Bank::find($this->employee_id);
        $this->deployment = Deployment::find($this->employee_id);

        $this->division = DivisionModel::find($this->deployment->division_id ?? null);
        $this->department = DepartmentModel::find($this->deployment->department_id ?? null);
        $this->unit = UnitModel::find($this->deployment->unit_id ?? null);
        $this->location = LocationModel::find($this->deployment->location_id ?? null);
        $this->ao = AreaOffice::find($this->deployment->area_office_id ?? null);
        $this->feeder = Feeder::find($this->deployment->feeder_id ?? null);
    }
    public function render()
    {
        return view('livewire.user.myprofile')->layout('layouts.user-layout');
    }
}
