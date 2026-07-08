<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Todo extends Component
{

    public $name = '';


    public function render()
    {
        return view('livewire.todo');
    }
    #[On('changeName')]
    public function ReceiveName($name)
    {
        $this->name = $name;
    }
}
