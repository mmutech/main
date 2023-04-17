<?php

namespace App\Http\Livewire\Admin;

use App\Models\Education;
//use Illuminate\Support\Facades\DB;
//use Carbon\Carbon;

use Livewire\Component;

class Educations extends Component
{
    public $formData;
    public $employee_id;
   

    protected $listeners = ['addEducation', 'refreshActivateEmployee' => '$refresh'];
    
    public function mount()
    {
        
    }

    public function addEducation($formData)
    {
        $this->formData = $formData;
        //$this->employee_id = $employee_id;

        $rec = [
            'employee_id' => $this->formData['employee_id'],
            'institution' => $this->formData['institution'],
            'course' => $this->formData['course'],
            'start_date' => $this->formData['start_date'],
            'end_date' => $this->formData['end_date'],
        ];

        Education::create($rec);
            
    }


    public function render()
    {
        #$this->emit('employee_id', $this->employee_id);
        return view('livewire.admin.education', ['education' => Education::where('employee_id', $this->employee_id)->orderBy('end_date','desc')->get()]);
    }
}
