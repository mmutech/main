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
   

    //protected $listeners = ['addEducation'];

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

    public function mount($employee_id)
    {
      $this->employee_id = $employee_id;
    }
    
    public function render()
    {
        $edus = Education::where('employee_id', $this->employee_id)->orderBy('id', 'desc')->get();
        return view('livewire.admin.education', ['education' => $edus]);
    }
}
