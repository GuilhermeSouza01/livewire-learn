<?php

namespace App\Livewire;

use Livewire\Component;

class Count extends Component
{
    public int $total = 0;

    public ?string $name = 'Guilherme';

    public function sum()
    {
        $this->total = $this->total + 1;
    }

    public function toggleCaseName(string $type)
    {
        if ($type == 'LOWER') {
            $this->name = str($this->name)->lower()->toString();
        } else {
            $this->name = str($this->name)->upper()->toString();
        }
    }

    public function sendName()
    {
        $this->dispatch(event: 'changeName', name: $this->name)->to(Todo::class);
    }

    public function render()
    {
        return view('livewire.count');
    }
}
