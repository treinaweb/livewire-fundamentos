<?php

namespace App\Livewire\Client;

use App\Livewire\Forms\Client as ClientForm;
use App\Models\Client;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    public ClientForm $form;

    public function store()
    {
        $this->validate();

        Client::create(
            $this->form->all()
        );

        $this->redirectRoute('clients.index');
    }

    public function render()
    {
        return view('livewire.client.create');
    }
}
