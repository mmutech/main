<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\LocationModel;
use App\Models\statusModel;


class LocationComponent extends Component
{
    public $location, $discription, $locationId, $status, $addedBy;

    // Get all Record
    public function render()
    {
        $status = $this->status = statusModel::all();
        $this->location = LocationModel::select("location.id", "location.description", "status.status_name AS status")
        ->join('status', 'status.id', "=", 'location.status')
        ->orderByRaw('id ASC')->get();
        
        return view('livewire.admin.location-component')->layout('layouts.admin-layout');
    }

    // Get Active Record
    public function mount()
    {
        $status = $this->status = statusModel::all();
        $this->location = LocationModel::where('status', 1)
        ->select("location.id", "location.description", "status.status_name AS status")
        ->join('status', 'status.id', "=", 'location.status')
        ->orderByRaw('id ASC')->get();

        return view('livewire.admin.location-component')->layout('layouts.admin-layout');
    }

    // validation
    protected $rules = [
        'discription' => 'required',
        'status' => 'required',
        // 'added_by' => 'required'
    ];

    // Create location
    public function createlocation()
    {
        $userId = auth()->user()->id;
        $this->validate();
        $location = LocationModel::create([
            'description' => $this->discription,  
            'status' => 1,
            'added_by' => $userId
        ]);

        session()->flash('message', 'Location Added Successfully!');

        return redirect()->to('/location-component');
    }

    // Delete location
    public function remove($locationId)
    {
        $location = LocationModel::find($locationId);
        $location->delete();
        $this->location = $this->location->except($locationId);

        session()->flash('message', 'Location Deleted Successfully!');
        return redirect()->to('/location-component');
    }

    // Get Edit location
    public function edit($locationId)
    {
        $location = LocationModel::find($locationId);
        if($location){
            $this->locationId = $location->id;
            $this->discription = $location->description;
            $this->status = $location->status;
            $this->added_by = $location->added_by;
        }else{
            return redirect()->to('/location-component');
        }
        // dd($location);

        $this->dispatchBrowserEvent('close-modal');
    }

    // Update location
    public function updatelocation()
    {
        $userId = auth()->user()->id;
        $validateData = $this->validate();
        LocationModel::where('id', $this->locationId)->update([
            'description' => $validateData['discription'], 
            'status' => $validateData['status'],
            'updated_by' => $userId
        ]);

        session()->flash('message', 'Location Updated Successfully!');
        $this->dispatchBrowserEvent('close-modal');
        return redirect()->to('/location-component');
    }
}
