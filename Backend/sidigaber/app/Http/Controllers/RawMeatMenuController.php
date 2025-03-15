<?php

namespace App\Http\Controllers;

use App\Models\RawMeat;
use Illuminate\Http\Request;

class RawMeatMenuController extends Controller
{
    public function index()
    {
        $rawMeats = RawMeat::available()->paginate(9);
        return view('raw-meat-menu.index', compact('rawMeats'));
    }

    public function show(RawMeat $rawMeat)
    {
        return view('raw-meat-menu.show', compact('rawMeat'));
    }
}
