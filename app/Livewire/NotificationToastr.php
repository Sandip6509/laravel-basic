<?php

namespace App\Livewire;

use Livewire\Component;

class NotificationToastr extends Component
{
    public function render()
    {
        return view('livewire.notification-toastr');
    }

    public function success()
    {
        $this->dispatch('alert', [
            'type' => 'success',
            'message' => 'User Created Successfully!'
        ]);
    }

    public function info()
    {
        $this->dispatch('alert', [
            'type' => 'info',
            'message' => 'Going Well!'
        ]);
    }
    public function error()
    {
        $this->dispatch('alert', [
            'type' => 'error',
            'message' => 'Something went wrong!'
        ]);
    }
}
