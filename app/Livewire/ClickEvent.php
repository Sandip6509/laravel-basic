<?php

namespace App\Livewire;

use Livewire\Component;

class ClickEvent extends Component
{
    public $message = '';

    public $userId = 450;

    public function render()
    {
        return view('livewire.click-event');
    }

    public function showMessage()
    {
        $this->message = 'You clicked on button';
    }

    public function showUserId($userId)
    {
        $this->message = 'User ID is ' . $userId;
    }
}
