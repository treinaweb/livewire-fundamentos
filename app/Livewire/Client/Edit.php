<?php

namespace App\Livewire\Client;

use App\Models\Client;
use Livewire\Component;

class Edit extends Component
{
    public Client $client;

    public function render()
    {
        return view('livewire.client.edit');
    }
}
