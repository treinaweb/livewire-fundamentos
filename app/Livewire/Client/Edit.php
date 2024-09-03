<?php

namespace App\Livewire\Client;

use App\Livewire\Forms\Client as ClientForm;
use App\Models\Client;
use Livewire\Component;

class Edit extends Component
{
    public Client $client;

    public ClientForm $form;

    public function mount()
    {
        $this->form->fill($this->client);
    }

    public function update()
    {
        $this->client->update(
            $this->form->all()
        );

        $this->redirectRoute('clients.index');
    }

    public function render()
    {
        return view('livewire.client.edit');
    }
}
