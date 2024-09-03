<?php

namespace App\Livewire\Client;

use App\Models\Client;
use Livewire\Component;

class Index extends Component
{
    public $search;

    public function delete($clientId)
    {
        $client = Client::where('id', $clientId)->first();

        $client->delete();
    }

    public function render()
    {
        $clients = Client::where('name', 'like', "%{$this->search}%")->get();

        return view('livewire.client.index', [
            'clients' => $clients
        ]);
    }
}
