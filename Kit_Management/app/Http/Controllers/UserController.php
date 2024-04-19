<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

// Definition of the UserController class, which extends the Controller class
class UserController extends Controller
{
    // Method responsible for displaying the index page of users
    public function index()
    {
        // Retrieving all users
        $users = User::all();

        // Returning the 'admin.users' view, passing the $users data to the view
        return view('admin.users', compact('users'));
    }
}
