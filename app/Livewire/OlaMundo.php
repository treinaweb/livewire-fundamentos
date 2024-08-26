<?php

namespace App\Livewire;

use Livewire\Component;

class OlaMundo extends Component
{
    public $mensagem;

    public function render()
    {
        return view('livewire.ola-mundo');
    }
}
