<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

// Definition of the AdminController class, which extends the Controller class
class AdminController extends Controller
{
    // Method responsible for displaying the dashboard view
    public function dashboard(){
        // Returning the 'admin.dashboard' view
        return view('admin.dashboard');
    }
}