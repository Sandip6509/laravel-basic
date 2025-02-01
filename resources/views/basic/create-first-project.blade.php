@extends('layouts.app')
@section('content')
    <div class="max-w-5xl mx-auto p-6">
        <div class="flex justify-between mb-3">
            <h1 class="text-2xl font-bold text-gray-800">Create your first project</h1>
            <a href="{{ url('/') }}"><i class="fa-regular fa-circle-left text-indigo-500 h-5"></i></a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-bold text-center text-gray-800">Step 1: Prerequisites</h2>
            <p class="text-gray-600 text-center mt-2">Before starting, ensure you have the following installed:</p>

            <ul class="mt-4 space-y-3 text-gray-700">
                <li class="flex items-center gap-2">
                    <i class="fas fa-check text-green-500"></i> <span><strong>PHP 8.2+</strong> (Laravel 11 requires PHP 8.2 or higher)</span>
                </li>
                <li class="flex items-center gap-2">
                    <i class="fas fa-check text-green-500"></i> <span><strong>Composer</strong> (PHP dependency manager)</span>
                </li>
                <li class="flex items-center gap-2">
                    <i class="fas fa-check text-green-500"></i> <span><strong>Node.js</strong> (for frontend tools like Vite)</span>
                </li>
                <li class="flex items-center gap-2">
                    <i class="fas fa-check text-green-500"></i> <span><strong>Database</strong> (e.g., MySQL, PostgreSQL, SQLite)</span>
                </li>
                <li class="flex items-center gap-2">
                    <i class="fas fa-check text-green-500"></i> <span><strong>Web Server</strong> (e.g., Apache, Nginx, or Laravel's built-in server)</span>
                </li>
                <li class="flex items-center gap-2">
                    <i class="fas fa-check text-green-500"></i> <span>Open your terminal or command prompt.</span>
                </li>
                ```
                Run the following command:
                ```
            </ul>
        </div>
    </div>
@endsection
