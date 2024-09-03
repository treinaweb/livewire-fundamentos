<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class Client extends Form
{
    #[Validate(['required', 'min:3'])]
    public $name;

    #[Validate(['required', 'email'])]
    public $email;
}
