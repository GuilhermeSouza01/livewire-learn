<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class CriarUsuario extends Component
{
    #[Validate('required|min:3|max:255')]
    public ?string $name = null;
    #[Validate('required|email|max:255')]
    public ?string $email = null;
    public function render()
    {
        return view('livewire.criar-usuario');
    }
    public function save()
    {
        $this->validate();
        $name = $this->name;
        $email = $this->email;

        dd($name, $email);
    }
}
