<?php

namespace App\Http\Livewire\Admin;
use Illuminate\Support\Facades\DB;

use App\Models\Qualification;

use Livewire\Component;

class Qualifications extends Component
{
    public $formData;
    public $employee_id;
    public $user_qualifications;

    protected $listeners = ['addQualification'];

    public function addQualification($formData)
    {
        $this->formData = $formData;

        $rec = [
            'employee_id'           => $this->formData['employee_id'],
            'institution'           => $this->formData['institution'],
            'certification'         => $this->formData['certification'],
            'certification_date'    => $this->formData['certification_date'],
        ];
        
        //print_r($rec);
        Qualification::create($rec);
        session()->flash('message', 'Certification successfully updated.');
    }



    public function render()
    {
        
        //$this->emit('dataFetched', $user_qualifications);
        return view('livewire.admin.qualifications', ['qualification'=>Qualification::where('employee_id', $this->employee_id)->orderBy('certification_date','desc')->get()]);
    }
}
