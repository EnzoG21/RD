<?php

namespace App\Http\Controllers;

use App\Models\Allocation;
use Illuminate\Http\Request;

// Definition of the AllocationController class, which extends the Controller class
class AllocationController extends Controller
{
    // Method responsible for displaying the index page of allocations
    public function index()
    {
        // Retrieving all allocations along with related user, kit, and jersey data
        $allocations = Allocation::with(['user', 'kit', 'jersey'])->get();

        // Returning the 'admin.allocations' view, passing the $allocations data to the view
        return view('admin.allocations', compact('allocations'));
    }
}