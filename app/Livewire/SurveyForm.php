<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SurveyForm extends Component
{
    public $FirstName;
    public $MiddleName;
    public $LastName;
    public $Suffix;


    public function render()
    {
        return view('livewire.survey-form');
    }

    public function save()
    {
        // No need to start a transaction here, it's handled in the Survey component
        // DB::beginTransaction();

        $validatedData = $this->validate([
            'FirstName' => 'required|max:255|string',
            'MiddleName' => 'nullable|max:255|string',
            'LastName' => 'required|max:255|string',
            'Suffix' => 'nullable|max:255|string',

        ]);

        // Store all validated data in the session
        Session::put('customer_data', $validatedData);

        return redirect('/survey'); 
    }
}