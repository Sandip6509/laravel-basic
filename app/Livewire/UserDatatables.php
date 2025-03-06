<?php

namespace App\Livewire;

use App\Models\User;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class UserDatatables extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setTableAttributes([
            'class' => 'table-auto w-full bg-white shadow rounded-lg',
        ]);
        $this->setPerPage(10);
        $this->setSearchDebounce(500);
        $this->setDefaultSort('id', 'desc');
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable()
                ->format(fn ($value) => "<span class='font-bold text-blue-600'>$value</span>")
                ->html(),
            Column::make('Name', 'name')
                ->sortable()
                ->searchable()
                ->format(fn ($value) => "<span class='text-gray-700'>$value</span>")
                ->html(),
            Column::make('Email', 'email')
                ->sortable()
                ->searchable(),
            Column::make('Created At', 'created_at')
                ->sortable()
                ->format(fn ($value) => \Carbon\Carbon::parse($value)->format('d M Y')),
            Column::make('Updated At', 'updated_at')
                ->sortable()
                ->format(fn ($value) => \Carbon\Carbon::parse($value)->diffForHumans()),
        ];
    }
}
