<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;

    public $email;

    public $body;

    public function submit()
    {
        $validated = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'body' => 'required',
        ]);

        Contact::create($validated);

        return redirect()->route('livewire.submit-form-request');
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
