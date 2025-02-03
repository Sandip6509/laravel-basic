<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\{City, State};
use Livewire\Attributes\Computed;

class StateCityDropdown extends Component
{
    public $state;

    public $city;

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function updatedState()
    {
        $this->city = null;
    }

    #[Computed()]
    public function states()
    {
        return State::all();
    }

    #[Computed()]
    public function cities()
    {
        return City::where('state_id', $this->state)->get();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.state-city-dropdown');
    }
}
