<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class SurveyForm extends Component
{
    public $customers;

    public function mount()
    {
        $this->customers = Customer::select(
                'customers.FirstName', 
                'customers.MiddleName', 
                'customers.LastName', 
                'customers.Suffix', 
                'addresses.Barangay', 
                'addresses.Municipality', 
                'addresses.Province',
                'services.ServiceAvailed',
                'services.Purpose',

            )
            ->join('addresses', 'addresses.customers_id', '=', 'customers.id')
            ->join('services','services.customers_id', '=', 'customers.id')
            ->get();
    }

    public function render()
    {
        return view('livewire.survey-form', ['customers' => $this->customers]);
    }
}
