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
        // return view('committee.forms', compact('forms'));
        
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
        'KitID' => 'nullable',
        'JerseyID' => 'nullable',
        'textbox' => 'required',
        'issue' => 'required',
    ]);

    if (empty($validatedData['KitID'])) {
        $validatedData['KitID'] = null;
    }


    if (empty($validatedData['JerseyID'])) {
        $validatedData['JerseyID'] = null;
    }

    Form::create($validatedData);
    return redirect()->back();
    
}
}
