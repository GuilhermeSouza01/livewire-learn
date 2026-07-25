<?php

namespace App\Livewire;

use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\Component;
use Livewire\WithFileUploads;

class Fileupload extends Component
{
    use WithFileUploads;
    public ?TemporaryUploadedFile $avatar = null;
    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.fileupload');
    }

    public function save(): void
    {
        $this->validate([
            'avatar' => 'required|image|max:2048',
        ]);

        if (! $this->avatar instanceof TemporaryUploadedFile) {
            return;
        }

        $path = $this->avatar->store('', 'public');

//        dd($path);
        $user = auth()->user();
        $user->avatar = $path;
        $user->save();
    }
}
