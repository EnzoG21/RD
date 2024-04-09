<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Kit;
use App\Models\Jersey;

class FormController extends Controller
{
    public function create()
    {
        $kits = Kit::all(); // Fetch all kits
        $jerseys = Jersey::all(); // Fetch all jerseys

        return view('dashboard', compact('kits', 'jerseys')); // Pass $kits and $jerseys variables to the view
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'KitID' => 'required',
            'JerseyID' => 'required',
            'textbox' => 'required',
        ]);

        Form::create($validatedData);

        return redirect()->route('dashboard')->with('success', 'Thank you for your Submission');
    }
}
