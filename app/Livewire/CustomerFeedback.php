<?php

namespace App\Livewire;

use App\Models\Feedback;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class CustomerFeedback extends Component
{
    public $TypesOfFeedback = [];
    public $Details;
    public $Recommendation;
    public $lastInsertedId;

    public function mount()
    {
        $this->lastInsertedId = Session::get('lastid');
        if ($this->lastInsertedId==null){
            return $this->redirect('/profile', navigate:true);
        }   
     }

    public function save()
    {
        $validated = $this->validate(
            [
                'TypesOfFeedback' => 'required|array',
                'Details' => 'required|string|max:255',
                'Recommendation' => 'required|string|max:255',
            ]
        );
        $datatoSave = [
            'customers_id' => $this->lastInsertedId,
            'TypesOfFeedback' => implode(', ', $validated['TypesOfFeedback']),
            'Details' => $validated['Details'],
            'Recommendation' => $validated['Recommendation'],
        ];
        Feedback::create($datatoSave);
        return $this->redirect('/profile', navigate:true);

    }
    public function render()
    {
        return view('livewire.customer-feedback');
    }
}
