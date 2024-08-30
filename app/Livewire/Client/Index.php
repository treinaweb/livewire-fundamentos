<?php

namespace App\Livewire\Client;

use App\Models\Client;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $clients = Client::get();

        return view('livewire.client.index', [
            'clients' => $clients
        ]);
    }
}
