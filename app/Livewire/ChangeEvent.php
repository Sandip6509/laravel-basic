<?php

namespace App\Livewire;

use Livewire\Component;

class ChangeEvent extends Component
{
    public $cities = [
        1 => 'Rajkot',
        2 => 'Surat',
        3 => 'Vadodara'
    ];

    public $cityName = '';
    
    public function render()
    {
        return view('livewire.change-event');
    }

    public function changeEvent($value)
    {
        $this->cityName = $this->cities[$value];
    }
}
