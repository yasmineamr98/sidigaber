<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        // Get all users to pass into the dashboard view
        $users = User::all();
        return view('dashboard', compact('users')); // Pass the 'users' variable
    }
}