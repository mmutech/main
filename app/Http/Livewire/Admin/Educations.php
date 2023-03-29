<?php

namespace App\Http\Livewire\Admin;

use App\Models\Education;
//use Illuminate\Support\Facades\DB;
//use Carbon\Carbon;

use Livewire\Component;

class Educations extends Component
{
    #protected $listeners = ['addEducation' => 'save'];
    public $formData;

    protected $listeners = ['addEducation'];

    public function addEducation($formData)
    {
        $this->formData = $formData;

        $rec = [
            'employee_id' => '12345',
            'institution' => $this->formData['institution'],
            'course' => $this->formData['course'],
            'start_date' => $this->formData['start_date'],
            'end_date' => $this->formData['end_date'],
        ];

        Education::create($rec);
    }


    public function render()
    {
        return view('livewire.admin.education');
    }
}
