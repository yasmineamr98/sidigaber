<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // You can use pagination or filters here as needed
        return view('users.index', compact('users'));
    }
}
