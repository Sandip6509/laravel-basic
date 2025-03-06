<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ConfirmDelete extends Component
{
    public $deleteId;

    protected $listeners = ['confirmDelete' => 'handleConfirmDelete'];

    public function handleConfirmDelete($id)
    {
        $this->deleteId = $id;
        $this->dispatch('show-delete-modal');
    }

    public function delete()
    {
        User::find($this->deleteId)->delete();
        $this->dispatch('close-delete-modal');
    }

    public function render()
    {
        $users = User::all();

        return view('livewire.confirm-delete', compact('users'));
    }
}
