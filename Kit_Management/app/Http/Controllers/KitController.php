<?php

namespace App\Http\Controllers;

use App\Models\Kit;
use App\Models\Jersey;
use Illuminate\Http\Request;

// Definition of the KitController class, which extends the Controller class
class KitController extends Controller
{
    // Method responsible for displaying the index page of kits
    public function index()
    {
        // Retrieving all kits and jerseys
        $kits = Kit::all();
        $jerseys = Jersey::all();
        
        // Returning the 'admin.kit_list' view, passing the $kits and $jerseys data to the view
        return view('admin.kit_list', compact('kits', 'jerseys'));
    }
}