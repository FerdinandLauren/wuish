<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $stations = Station::all();
    return view('stations.index', compact('stations'));
    }


    /**
     * Show the form for creating a new resource.
     */
   public function create()
    {
    return view('stations.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'city' => 'required|string|max:255',
    ]);

    Station::create($request->all());

    return redirect()->route('stations.index')
                     ->with('success', 'Station created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Station $station)
    {
    return view('stations.show', compact('station'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Station $station)
    {
    return view('stations.edit', compact('station'));
    }


    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Station $station)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'city' => 'required|string|max:255',
    ]);

    $station->update($request->all());

    return redirect()->route('stations.index')
                     ->with('success', 'Station updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Station $station)
    {
    $station->delete();

    return redirect()->route('stations.index')
                     ->with('success', 'Station deleted successfully.');
    }

}
