<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Models\CustomerRating as CustomerRatingModel;

class CustomerRating extends Component
{

    public $Rating1=[];

    public $Rating2=[];
    public $Rating3=[];
    public $Rating4=[];
    public $Rating5=[];
    public $Rating6=[];
    public $lastInsertedId;

    public function mount()
    {
        $this->lastInsertedId = Session::get('lastid');
    }

    public function save()
    {
        $validated=$this->validate([
            'Rating1'=>'required|array',
            'Rating2'=>'required|array',
            'Rating3'=>'required|array',
            'Rating4'=>'required|array',
            'Rating5'=>'required|array',
            'Rating6'=>'required|array',
        ]);
        $datatoSave = [
            'customers_id' => $this->lastInsertedId,
            'Rating1' => implode(', ', $validated['Rating1']),
            'Rating2' => implode(', ', $validated['Rating2']),
            'Rating3' => implode(', ', $validated['Rating3']),
            'Rating4' => implode(', ', $validated['Rating4']),
            'Rating5' => implode(', ', $validated['Rating5']),
            'Rating6' => implode(', ', $validated['Rating6']),
        ];
        CustomerRatingModel::create($datatoSave);
        return $this->redirect('/feedback', navigate:true);
    }

    public function render()
    {
        return view('livewire.customer-rating');
    }
}
