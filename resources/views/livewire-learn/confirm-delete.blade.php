@extends('layouts.app')
@section('title', 'Confirm Delete')
@section('content')
    <div class="max-w-5xl mx-auto p-6">
        <div class="flex justify-between mb-3">
            <h1 class="text-2xl font-bold text-gray-800">Confirm Delete</h1>
            <a href="{{ url('/') }}"><i class="fa-regular
            fa-circle-left text-indigo-500 h-5"></i></a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <livewire:confirm-delete />
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function showDeleteModal() {
        document.getElementById('deleteModal').classList.remove('hidden');
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.add('hidden');
    }

    window.addEventListener('show-delete-modal', event => {
        showDeleteModal();
    });

    window.addEventListener('close-delete-modal', event => {
        closeDeleteModal();
    });
    </script>
@endpush