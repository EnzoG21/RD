<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Kit;
use App\Models\Jersey;

class FormController extends Controller
{

    public function index()
    {
        $forms = Form::all();
        return view('admin.forms', compact('forms'));
    }
    public function create()
    {
        $kits = Kit::all();
        $jerseys = Jersey::all();

        return view('dashboard', compact('kits', 'jerseys'));
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
        'issue' => 'required',
    ]);

    Form::create($validatedData);

    
}
}
