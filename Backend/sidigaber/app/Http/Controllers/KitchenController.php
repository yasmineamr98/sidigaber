<?php

namespace App\Http\Controllers;

use App\Models\Kitchen;
use Illuminate\Http\Request;

class KitchenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kitchens = Kitchen::paginate(10);  // ✅ Make sure this is correct
        return view('kitchen.index', compact('kitchens')); // ✅ Passing kitchens, not users
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kitchen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'item_name'     => 'required|string|max:255',
            'item_price'    => 'required|numeric|min:0',
            'item_picture'  => 'required|image|mimes:jpeg,png,jpg,gif',
            'review'        => 'nullable|string',
            'description'   => 'required|string',
        ]);

        // Handle file upload
        $imagePath = $request->file('item_picture')->store('kitchen_images', 'public');

        // Create new kitchen item
        Kitchen::create([
            'item_name'     => $request->item_name,
            'item_price'    => $request->item_price,
            'item_picture'  => $imagePath,
            'review'        => $request->review,
            'description'   => $request->description,
        ]);

        return redirect()->route('kitchen.index')->with('success', 'Item added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kitchen = Kitchen::findOrFail($id);
        return view('kitchen.show', compact('kitchen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kitchen = Kitchen::findOrFail($id);
        return view('kitchen.edit', compact('kitchen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kitchen = Kitchen::findOrFail($id);

        // Validate input data
        $request->validate([
            'item_name'     => 'required|string|max:255',
            'item_price'    => 'required|numeric|min:0',
            'item_picture'  => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'review'        => 'nullable|string',
            'description'   => 'required|string',
        ]);

        // Handle file update if a new image is uploaded
        if ($request->hasFile('item_picture')) {
            $imagePath = $request->file('item_picture')->store('kitchen_images', 'public');
            $kitchen->item_picture = $imagePath;
        }

        // Update kitchen item
        $kitchen->update([
            'item_name'     => $request->item_name,
            'item_price'    => $request->item_price,
            'review'        => $request->review,
            'description'   => $request->description,
        ]);

        return redirect()->route('kitchen.index')->with('success', 'Item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kitchen = Kitchen::findOrFail($id);
        $kitchen->delete();

        return redirect()->route('kitchen.index')->with('success', 'Item deleted successfully.');
    }
}