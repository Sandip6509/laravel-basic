@extends('layouts.app')
@section('title', 'Data Table')
@section('content')
    <div class="max-w-5xl mx-auto p-6">
        <div class="flex justify-between mb-3">
            <h1 class="text-2xl font-bold text-gray-800">Data Tables</h1>
            <a href="{{ url('/') }}"><i class="fa-regular fa-circle-left text-indigo-500 h-5"></i></a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <livewire:user-datatables />
        </div>
    </div>
@endsection