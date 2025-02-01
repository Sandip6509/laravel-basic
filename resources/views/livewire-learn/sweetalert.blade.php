@extends('layouts.app')
@section('title', 'Notification SweetAlert')
@section('content')
    <div class="max-w-5xl mx-auto p-6">
        <div class="flex justify-between mb-3">
            <h1 class="text-2xl font-bold text-gray-800">Notification SweetAlert</h1>
            <a href="{{ url('/') }}"><i class="fa-regular fa-circle-left text-indigo-500 h-5"></i></a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <livewire:notification-sweet-alert />
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('swal:modal', event => {
            Swal.fire({
                title: event.detail[0].message,
                text: event.detail[0].text,
                icon: event.detail[0].type,
                confirmButtonColor: "#3085d6",
                confirmButtonText: "OK"
            });
        });
        document.addEventListener('swal:confirm', event => {
            Swal.fire({
                icon: event.detail[0].type,
                title: event.detail[0].message,
                text: event.detail[0].text,
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('remove');
                }
            });
        });
    </script>
@endpush