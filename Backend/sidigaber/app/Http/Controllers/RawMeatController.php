<?php

namespace App\Http\Controllers;

use App\Models\RawMeat;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRawMeatRequest;
use App\Http\Requests\UpdateRawMeatRequest;

class RawMeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rawMeats = RawMeat::available()->paginate(10);
        return view('raw-meats.index', compact('rawMeats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('raw-meats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRawMeatRequest $request)
    {
        $validatedData = $request->validated();
        $rawMeat = RawMeat::create($validatedData);

        return redirect()->route('raw-meats.index')
            ->with('success', 'Raw meat added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(RawMeat $rawMeat)
    {
        return view('raw-meats.show', compact('rawMeat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RawMeat $rawMeat)
    {
        return view('raw-meats.edit', compact('rawMeat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRawMeatRequest $request, RawMeat $rawMeat)
    {
        $validatedData = $request->validated();
        $rawMeat->update($validatedData);

        return redirect()->route('raw-meats.index')
            ->with('success', 'Raw meat updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RawMeat $rawMeat)
    {
        $rawMeat->delete();

        return redirect()->route('raw-meats.index')
            ->with('success', 'Raw meat deleted successfully.');
    }
}
