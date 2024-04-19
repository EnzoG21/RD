<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Kit;
use App\Models\Jersey;

// Definition of the FormController class, which extends the Controller class
class FormController extends Controller
{

    // Method responsible for displaying the index page of forms
    public function index()
    {
        // Retrieving all forms
        $forms = Form::all(); 

        // Returning the 'admin.forms' view, passing the $forms data to the view
        return view('admin.forms', compact('forms'));   
    }

    // Method responsible for displaying the form creation page
    public function create()
    {
        // Retrieving all kits and jerseys
        $kits = Kit::all();
        $jerseys = Jersey::all();

        // Returning the 'dashboard' view, passing the $kits and $jerseys data to the view
        return view('dashboard', compact('kits', 'jerseys'));
    }

    // Method responsible for storing the form data
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

        // If KitID is empty, set it to null
        if (empty($validatedData['KitID'])) {
            $validatedData['KitID'] = null;
        }

        // If JerseyID is empty, set it to null
        if (empty($validatedData['JerseyID'])) {
            $validatedData['JerseyID'] = null;
        }

        // Create a new form record with the validated data
        Form::create($validatedData);

        // Redirect back to the previous page
        return redirect()->back();
    }
}
