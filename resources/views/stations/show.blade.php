@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-gray-800 my-5">Station Details</h1>
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold">Station Name: {{ $station->name }}</h2>
            <p class="text-gray-600">City: {{ $station->city }}</p>
        </div>
        <div class="mt-4">
            <a href="{{ route('stations.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                Kembali
            </a>
        </div>
    </div>
@endsection
