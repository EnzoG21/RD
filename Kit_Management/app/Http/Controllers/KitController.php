<?php

namespace App\Http\Controllers;

use App\Models\Kit;
use App\Models\Jersey;
use Illuminate\Http\Request;

class KitController extends Controller
{
    public function index()
    {
        $kits = Kit::all();
        $jerseys = Jersey::all();
        return view('admin.kit_list', compact('kits', 'jerseys')); 
    }
}