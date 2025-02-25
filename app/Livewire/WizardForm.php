<?php

namespace App\Livewire;

use Livewire\Component;

class WizardForm extends Component
{
    public $currentStep = 1;
    public $name, $amount, $description, $status = true, $stock;

    public function firstStepSubmit()
    {
        $validated = $this->validate([
            'name' => 'required|unique:products',
            'amount' => 'required|numeric',
            'description' => 'required',
        ]);

        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $validated = $this->validate([
            'stock' => 'required|numeric',
            'status' => 'required|boolean',
        ]);

        $this->currentStep = 3;
    }

    public function submitForm()
    {

    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function resetForm()
    {
        $this->name = '';
        $this->amount = '';
        $this->description = '';
        $this->status = true;
        $this->stock = '';
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.wizard-form');
    }
}
