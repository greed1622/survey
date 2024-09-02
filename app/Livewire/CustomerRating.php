<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Models\Rating;

class Customerrating extends Component
{
    public $Rating1;
    public $Rating2;
    public $Rating3;
    public $Rating4;
    public $Rating5;
    public $Rating6;
    public $lastInsertedId;

    public function mount()
    {
        $this->lastInsertedId = Session::get('lastid');
        if ($this->lastInsertedId == null) {
            return $this->redirect('/profile', navigate: true);
        }
    }

    public function save()
    {
        $validated = $this->validate([
            'Rating1' => 'required|string|max:255',
            'Rating2' => 'required|string|max:255',
            'Rating3' => 'required|string|max:255',
            'Rating4' => 'required|string|max:255',
            'Rating5' => 'required|string|max:255',
            'Rating6' => 'required|string|max:255',
        ]);

        $dataToSave = [
            'customers_id' => $this->lastInsertedId,
            'Rating1' => $validated['Rating1'],
            'Rating2' => $validated['Rating2'],
            'Rating3' => $validated['Rating3'],
            'Rating4' => $validated['Rating4'],
            'Rating5' => $validated['Rating5'],
            'Rating6' => $validated['Rating6'],
        ];

        Rating::create($dataToSave);
        return $this->redirect('/feedback', navigate: true);
    }

    public function render()
    {
        return view('livewire.customer-rating');
    }
}
