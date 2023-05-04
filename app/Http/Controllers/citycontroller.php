<?php

namespace App\Http\Controllers;

use App\Models\city;
use Illuminate\Http\Request;

class citycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $city = city::get();
        return view('city.index')->with('city', $city);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('city.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['code' => 'required', 'name' => 'required']);
        city::create($request->all());
        return redirect()->route('city.index')->with('add', 'Record Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(city $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(city $city)
    {
        return view('city.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, city $city)
    {
        $city->update($request->all());
        return redirect()->route('city.index')->with('add', 'Record Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(city $city)
    {
        $city->delete();
        return redirect()->route('city.index')->with('add', 'Record Deleted');
    }
}
