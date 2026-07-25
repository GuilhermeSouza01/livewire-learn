<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Todo extends Component
{

    public string $name = '';


    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.todo');
    }
    #[On('changeName')]
    public function ReceiveName(?string $name): void
    {
        $this->name = $name ?? '';
    }
}
