<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class LoadMore extends Component
{
    use WithPagination;

    public $perPage = 10;

    protected $listeners = ['load-more' => 'loadMore'];

    public function loadMore()
    {
        $this->perPage += 5;
    }

    public function render()
    {
        $users = User::latest()->paginate($this->perPage);

        return view('livewire.load-more', compact('users'));
    }
}
