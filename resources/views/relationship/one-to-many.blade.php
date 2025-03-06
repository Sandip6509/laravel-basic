@extends('layouts.app')
@section('title', 'One to Many Relationship')
@section('content')
    <div class="max-w-5xl mx-auto p-6">
        <div class="flex justify-between mb-3">
            <h1 class="text-2xl font-bold text-gray-800">One to Many Relationship</h1>
            <a href="{{ url('/') }}"><i class="fa-regular fa-circle-left text-indigo-500 h-5"></i></a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition-shadow duration-300">
            <p class="text-gray-700 mb-4">In this example, I will create a "posts" table and "comments" table. both tables
                are connected with each other. now we will create one to many relationships with each other by using the
                laravel Eloquent Model. We will first create database migration, then model, retrieve records and then how
                to create records too.</p>
        </div>
    </div>
@endsection
