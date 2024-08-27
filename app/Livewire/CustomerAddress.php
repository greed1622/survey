<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Models\Address;

class CustomerAddress extends Component
{
    public $lastInsertedId;
    public $Barangay;
    public $Municipality;
    public $Province;

    public function mount()
    {
        $this->lastInsertedId = Session::get('lastid');
    }
    public function save(){
        $validated=$this->validate([
            'Barangay' => 'string:max40',
            'Municipality' => 'string:max40',
            'Province' => 'string:max40',

        ]);
        // dump($validated);
        $dataToSave=[
            'customers_id' => $this->lastInsertedId,
            'Barangay' => $validated['Barangay'],
            'Municipality' => $validated['Municipality'],
            'Province' => $validated['Province'],
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
