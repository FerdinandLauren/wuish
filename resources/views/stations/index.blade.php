@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold text-gray-800 my-5">Stations</h1>
    <a href="{{ route('stations.create') }}" class="mb-4 inline-block px-4 py-2 text-sm bg-blue-600 text-white rounded hover:bg-blue-700">Add New Station</a>
    
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">City</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($stations as $station)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $station->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $station->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $station->city }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('stations.show', $station->id) }}" class="text-blue-600 hover:text-blue-900 mr-4">View</a>
                            <a href="{{ route('stations.edit', $station->id) }}" class="text-yellow-600 hover:text-yellow-900 mr-4">Edit</a>
                            <form action="{{ route('stations.destroy', $station->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
