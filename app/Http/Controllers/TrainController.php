<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('trains.index', compact('trains'));
    }

    public function create()
    {
        return view('trains.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'capacity' => 'required|integer',
        ]);

        Train::create($request->all());

        return redirect()->route('trains.index')->with('success', 'Train created successfully.');
    }

    public function show(Train $train)
    {
        return view('trains.show', compact('train'));
    }

    public function edit(Train $train)
    {
        return view('trains.edit', compact('train'));
    }

    public function update(Request $request, Train $train)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'capacity' => 'required|integer',
        ]);

        $train->update($request->all());

        return redirect()->route('trains.index')->with('success', 'Train updated successfully.');
    }

    public function destroy(Train $train)
    {
        $train->delete();
        return redirect()->route('trains.index')->with('success', 'Train deleted successfully.');
    }
}
