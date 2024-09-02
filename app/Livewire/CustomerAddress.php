<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Models\Address;

class CustomerAddress extends Component
{
    public $lastInsertedId;
    public $HouseNo;
    public $Street;
    public $Barangay;
    public $Municipality;
    public $Province;
    public $Zip;

    public function mount()
    {
        $this->lastInsertedId = Session::get('lastid');
        if ($this->lastInsertedId==null){
            return $this->redirect('/profile', navigate:true);
        }
    }
    public function save(){
        $validated=$this->validate([
            'HouseNo' => 'nullable|string|max:40',
            'Street' => 'nullable|string|max:40',
            'Barangay' => 'string|max:40',
            'Municipality' => 'string|max:40',
            'Province' => 'string|max:40',
            'Zip' => 'nullable|string|max:40',
        ]);
        // dump($validated);
        $dataToSave=[
            'customers_id' => $this->lastInsertedId,
            'HouseNo' => $validated['HouseNo'],
            'Street' => $validated['Street'],
            'Barangay' => $validated['Barangay'],
            'Municipality' => $validated['Municipality'],
            'Province' => $validated['Province'],
            'Zip' => $validated['Zip'],
        ];
        // dd($dataToSave);
        Address::create($dataToSave);
        // session()->flash('message', 'Address saved successfully!'); 
    return $this->redirect('/services', navigate:true);
    }

    public function render()
    {

        return view('livewire.customer-address');
    }
}
