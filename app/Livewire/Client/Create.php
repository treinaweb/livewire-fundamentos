<?php

namespace App\Livewire\Client;

use App\Models\Client;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $email;

    public function store()
    {
        Client::create([
            'name' => $this->name,
            'email' => $this->email
        ]);

        $this->redirectRoute('clients.index');
    }

    public function render()
    {
        return view('livewire.client.create');
    }
}
