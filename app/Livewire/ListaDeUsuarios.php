<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class ListaDeUsuarios extends Component
{
    #[On('user-updated')]
    public function refreshUsersList(): void {}

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.lista-de-usuarios', [
            'users' => User::all(),
        ]);
    }
}
