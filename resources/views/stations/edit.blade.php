@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-gray-800 my-5">Edit Station</h1>
        <form action="{{ route('stations.update', $station->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Station Name:</label>
                <input type="text" name="name" id="name" value="{{ $station->name }}" required 
                    class="border rounded-lg px-3 py-2 mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="city" class="block text-gray-700">City:</label>
                <input type="text" name="city" id="city" value="{{ $station->city }}" required 
                    class="border rounded-lg px-3 py-2 mt-1 block w-full">
            </div>

            <div class="flex space-x-2">
                <!-- Tombol Batal dengan background merah -->
                <a href="{{ route('stations.index') }}" 
                    class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                    Batal
                </a>

                <!-- Tombol Simpan -->
                <button type="submit" 
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endsection
