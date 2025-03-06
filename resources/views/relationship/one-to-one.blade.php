@extends('layouts.app')
@section('title', 'One to One Relationship')
@section('content')
    <div class="max-w-5xl mx-auto p-6">
        <div class="flex justify-between mb-3">
            <h1 class="text-2xl font-bold text-gray-800">One to One Relationship</h1>
            <a href="{{ url('/') }}"><i class="fa-regular fa-circle-left text-indigo-500 h-5"></i></a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition-shadow duration-300">
            <p class="text-gray-700 mb-4">In this example, I will create "users" table and "phones" table. Both tables are connected with each other. Now we will create a one-to-one relationship with each other by using Laravel Eloquent Model. We will first create database migration, then model, retrieve records, and then how to create records too.</p>
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border p-2 hover:bg-gray-300 transition-colors duration-200">Name</th>
                        <th class="border p-2 hover:bg-gray-300 transition-colors duration-200">Email</th>
                        <th class="border p-2 hover:bg-gray-300 transition-colors duration-200">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="bg-white hover:bg-gray-100 transition-colors duration-200">
                            <td class="border p-2">{{ $user->name }}</td>
                            <td class="border p-2">{{ $user->email }}</td>
                            <td class="border p-2">{{ $user->phone->phone_number ?? 'N/A' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
