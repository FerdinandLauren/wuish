<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    public function index()
    {
        $stations = Station::all();
        return view('stations.index', compact('stations'));
    }

    public function create()
    {
        return view('stations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        Station::create($request->all());

        return redirect()->route('stations.index')->with('success', 'Station created successfully.');
    }

    public function show(Station $station)
    {
        return view('stations.show', compact('station'));
    }

    public function edit(Station $station)
    {
        return view('stations.edit', compact('station'));
    }

    public function update(Request $request, Station $station)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $station->update($request->all());

        return redirect()->route('stations.index')->with('success', 'Station updated successfully.');
    }

    public function destroy(Station $station)
    {
        $station->delete();
        return redirect()->route('stations.index')->with('success', 'Station deleted successfully.');
    }
}
