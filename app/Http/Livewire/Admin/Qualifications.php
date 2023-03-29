<?php

namespace App\Http\Livewire\Admin;

use App\Models\Qualification;

use Livewire\Component;

class Qualifications extends Component
{
    public $formData;

    protected $listeners = ['addQualification'];

    public function addQualification($formData)
    {
        $this->formData = $formData;

        $rec = [
            'employee_id' => '12345',
            'institution' => $this->formData['institution'],
            'certification' => $this->formData['certification'],
            'certification_date' => $this->formData['certification_date'],
        ];
        
        //print_r($rec);
        Qualification::create($rec);
    }

    public function render()
    {
        return view('livewire.admin.qualifications');
    }
}
