<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function create()
    {
        return view('dashboard');
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
