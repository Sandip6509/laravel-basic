<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;

    public $file;

    public $title;

    public function submit()
    {
        $validated = $this->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
        ]);

        $validated['name'] = $this->file->store('images', 'public');

        Image::create($validated);

        session()->flash('message', 'Image successfully uploaded.');
    }

    public function render()
    {
        return view('livewire.image-upload');
    }
}
