<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kit;
use App\Models\Jersey;
use App\Models\Allocation;

// Definition of the ManagementController class, which extends the Controller class
class ManagementController extends Controller
{
    // Method responsible for displaying the index page of management
    public function index()
    {
        // Returning the 'admin.management' view
        return view('admin.management');
    }

    // Method responsible for storing a new kit
    public function storeKit(Request $request)
    {
        // Creating a new Kit instance
        $kit = new Kit();

        // Assigning values from the request to the kit attributes
        $kit->brand = $request->brand;
        $kit->model = $request->model;
        $kit->size = $request->size;
        $kit->status = $request->status;
        $kit->date = $request->date;

        // Saving the kit
        $kit->save();

        // Redirecting back to the previous page
        return redirect()->back();
    }

    // Method responsible for updating an existing kit
    public function updateKit(Request $request)
    {
        // Validating the request data
        $request->validate([
            'kit_id' => 'required|exists:kit,KitID', // Ensure the provided kit_id exists in the database
        ]);

        // Finding the kit by its ID
        $kit = Kit::findOrFail($request->kit_id);

        // Updating the kit attributes
        $kit->brand = $request->brand;
        $kit->model = $request->model;
        $kit->size = $request->size;
        $kit->status = $request->status;

        // Saving the updated kit
        $kit->save();

        // Redirecting back to the previous page
        return redirect()->back();
    }

    // Method responsible for deleting an existing kit
    public function deleteKit(Request $request)
    {
        // Validating the request data
        $request->validate([
            'kit_id_delete' => 'required|exists:kit,KitID', // Ensure the provided kit_id exists in the database
        ]);

        // Deleting the kit
        Kit::findOrFail($request->kit_id_delete)->delete();

        // Redirecting back to the previous page
        return redirect()->back();
    }

    // Method responsible for storing a new jersey
    public function storeJersey(Request $request)
    {
        // Creating a new Jersey instance
        $jersey = new Jersey();

        // Assigning values from the request to the jersey attributes
        $jersey->number = $request->number;
        $jersey->size = $request->size;

        // Saving the jersey
        $jersey->save();

        // Redirecting back to the previous page
        return redirect()->back();
    }

    // Method responsible for updating an existing jersey
    public function updateJersey(Request $request)
    {
        // Validating the request data
        $request->validate([
            'jersey_id' => 'required|exists:jersey,JerseyID', // Ensure the provided jersey_id exists in the database
        ]);

        // Finding the jersey by its ID
        $jersey = Jersey::findOrFail($request->jersey_id);

        // Updating the jersey attributes
        $jersey->number = $request->number;
        $jersey->size = $request->size;

        // Saving the updated jersey
        $jersey->save();

        // Redirecting back to the previous page
        return redirect()->back();
    }

    // Method responsible for deleting an existing jersey
    public function deleteJersey(Request $request)
    {
        // Validating the request data
        $request->validate([
            'jersey_id_delete' => 'required|exists:jersey,JerseyID', // Ensure the provided jersey_id exists in the database
        ]);

        // Deleting the jersey
        Jersey::findOrFail($request->jersey_id_delete)->delete();

        // Redirecting back to the previous page
        return redirect()->back();
    }

    // Method responsible for allocating a kit to a user
    public function allocateKit(Request $request)
    {
        // Validating the request data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id', // Ensure the provided user_id exists in the database
            'kit_id' => 'required|exists:kit,KitID', // Ensure the provided kit_id exists in the database
            'jersey_id' => 'required|exists:jersey,JerseyID', // Ensure the provided jersey_id exists in the database
        ]);

        // Creating a new Allocation instance
        $allocation = new Allocation();

        // Assigning values from the validated data to the allocation attributes
        $allocation->user_id = $validatedData['user_id'];
        $allocation->KitID = $validatedData['kit_id'];
        $allocation->JerseyID = $validatedData['jersey_id'];

        // Saving the allocation
        $allocation->save();

        // Redirecting back to the previous page
        return redirect()->back();
    }
}