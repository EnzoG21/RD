<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kit;
use App\Models\Jersey;

class ManagementController extends Controller
{
    public function index()
    {
        
        return view('admin.management');
    }

    public function storeKit(Request $request)
    {
        $kit = new Kit();
        $kit->brand = $request->brand;
        $kit->model = $request->model;
        $kit->size = $request->size;
        $kit->status = $request->status;
        $kit->date = $request->date;
        $kit->save();

       
    }

    public function updateKit(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'kit_id' => 'required|exists:kit,KitID', // Ensure the provided KitID exists in the database
            // Add validation rules for other fields if necessary
        ]);

        // Find the kit by ID
        $kit = Kit::findOrFail($request->kit_id);

        // Update kit fields
        $kit->brand = $request->brand;
        $kit->model = $request->model;
        $kit->size = $request->size;
        $kit->status = $request->status;
       

        // Save the updated kit
        $kit->save();

        
    }

    public function deleteKit(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'kit_id_delete' => 'required|exists:kit,KitID', // Ensure the provided Kit ID exists in the database
        ]);

        // Find the kit by ID and delete it
        Kit::findOrFail($request->kit_id_delete)->delete();

        
    }

    public function storeJersey(Request $request)
    {
        $jersey = new Jersey();
        $jersey->number = $request->number;
        $jersey->size = $request->size;
        $jersey->save();

        
    }

    

    public function updateJersey(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'jersey_id' => 'required|exists:jersey,JerseyID', // Ensure the provided Jersey ID exists in the database
            // Add validation rules for other fields if necessary
        ]);

        // Find the jersey by ID
        $jersey = Jersey::findOrFail($request->jersey_id);

        // Update jersey fields
        $jersey->number = $request->number;
        $jersey->size = $request->size;
        // Add other fields if needed

        // Save the updated jersey
        $jersey->save();

        
    }

    public function deleteJersey(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'jersey_id_delete' => 'required|exists:jersey,JerseyID', // Ensure the provided Jersey ID exists in the database
        ]);

        // Find the jersey by ID and delete it
        Jersey::findOrFail($request->jersey_id_delete)->delete();

    
    }


    
}
