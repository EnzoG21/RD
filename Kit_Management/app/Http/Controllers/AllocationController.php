<?php

namespace App\Http\Controllers;

use App\Models\Allocation;
use Illuminate\Http\Request;

class AllocationController extends Controller
{
    public function index()
    {
        $allocations = Allocation::with(['user', 'kit', 'jersey'])->get();

        return view('admin.allocations', compact('allocations'));
        
        
    }

    

}
