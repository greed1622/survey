<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Profile extends Component
{ 
    public $FirstName;
    public $MiddleName;
    public $LastName;
    public $Suffix;

    public function save()
    {
        $validated=$this->validate([
            'FirstName' => 'required|string|max:30',
            'MiddleName' => 'nullable|string|max:30',
            'LastName' => 'required|string|max:30',
            'Suffix' => 'nullable|string|max:30',
        ]);
        $customer=Customer::create($validated);
        Session::put('lastid',$customer->id);
        // return redirect()->to('/survey');
        return $this->redirect('/address',navigate:true);

    }

    public function render()
    {
        return view('livewire.profile');
    }
}
