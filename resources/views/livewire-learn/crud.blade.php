@extends('layouts.app')
@section('title', 'CRUD Operations')
@section('content')
    <div class="max-w-5xl mx-auto p-6">
        <div class="flex justify-between mb-3">
            <h1 class="text-2xl font-bold text-gray-800">CRUD Operations</h1>
            <a href="{{ url('/') }}"><i class="fa-regular fa-circle-left text-indigo-500 h-5"></i></a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <livewire:post />
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        document.addEventListener('alert', event => {
            console.log(event.detail[0].type);
            window.toastr[event.detail[0].type](event.detail[0].message, event.detail[0].title ?? ''),window.toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
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
                    Livewire.dispatch('deleteConfirmed',{'post': event.detail[0].post});
                }
            });
        });
        document.addEventListener('swal:deleted', function(event) {
            Swal.fire("Deleted!", "Your record has been deleted.", "success");
        });
    </script>
@endpush
