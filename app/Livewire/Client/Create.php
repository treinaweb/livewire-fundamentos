<?php

namespace App\Livewire\Client;

use App\Models\Client;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate(['required', 'min:3'])]
    public $name;

    #[Validate(['required', 'email'])]
    public $email;

    public function store()
    {
        $this->validate();

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
