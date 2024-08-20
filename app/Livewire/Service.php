<?php

namespace App\Livewire;

use App\Models\Service as ServiceModel;
use Livewire\Component;
use Illuminate\Support\Facades\Session;


class Service extends Component
{
    public $ServiceAvailed = []; // Initialized as an array to hold multiple values
    public $Purpose;
    public $PersonTransacted;
    public $OfficeTransacted;
    public $lastInsertedId;

    public function mount()
    {
        $this->lastInsertedId = Session::get('lastid');
    }

    public function save()
    {
        $validated = $this->validate(
            [
                'ServiceAvailed' => 'required|array', // Validating as an array
                'ServiceAvailed.*' => 'string', // Each item in the array should be a string
                'Purpose' => 'required|string',
                'PersonTransacted' => 'required|string',
                'OfficeTransacted' => 'required|string',
            ]
        );

        $datatoSave = [
            'customers_id' => $this->lastInsertedId,
            'ServiceAvailed' => implode(', ', $validated['ServiceAvailed']), // Convert array to a comma-separated string
            'Purpose' => $validated['Purpose'],
            'PersonTransacted' => $validated['PersonTransacted'],
            'OfficeTransacted' => $validated['OfficeTransacted'],
        ];

        ServiceModel::create($datatoSave);
        return $this->redirect('/profile', navigate:true);
    }

    public function render()
    {
        return view('livewire.service');
    }
}
