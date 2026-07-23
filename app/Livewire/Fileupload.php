<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Fileupload extends Component
{
    use WithFileUploads;
    public $avatar;
    public function render()
    {
        return view('livewire.fileupload');
    }

    public function save()
    {
        $this->validate([
            'avatar' => 'required|image|max:2048',
        ]);

        $path = $this->avatar->store('', 'public');

//        dd($path);
        $user = auth()->user();
        $user->avatar = $path;
        $user->save();
    }
}
