@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold text-gray-800 my-5">Create New Station</h1>
    
    <form action="{{ route('stations.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" id="name">
        </div>
        <div class="mb-4">
            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
            <input type="text" name="city" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" id="city">
        </div>
        <div>
            <button type="submit" class="inline-block px-4 py-2 text-sm bg-blue-600 text-white rounded hover:bg-blue-700">Submit</button>
        </div>
    </form>
</div>
@endsection
