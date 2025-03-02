<?php

namespace App\Http\Controllers;

use App\Models\Kitchen;
use Illuminate\Http\Request;

class KitchenMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all kitchen items without pagination
        $kitchens = Kitchen::select('item_name', 'item_price')->get(); // Fetch all items without pagination

        return view('kitchen_menu.index', compact('kitchens'));  // Pass kitchens data to view
    }
}