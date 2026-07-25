<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class EditarUsuario extends Component
{
    public ?User $user = null;
    public function mount(User $user): void
    {
        $this->user = $user;
    }
    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.editar-usuario');
    }

    public function edit(): void
    {
        $this->user->name = fake()->name;
        $this->user->save();
        $this->dispatch('user-updated');
    }

}
