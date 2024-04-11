<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kit;
use App\Models\Jersey;

class ManagementController extends Controller
{
    public function index()
    {
        // Retrieve all kits and jerseys from the database
        $kits = Kit::all();
        $jerseys = Jersey::all();

        // Return a view with the data
        return view('admin.management', compact('kits', 'jerseys'));
    }
    public function addKit(Request $request)
    {
        $kit = new Kit();
        $kit->Brand = $request->input('brand');
        $kit->Model = $request->input('model');
        $kit->Size = $request->input('size');
        $kit->Status = $request->input('status');
        $kit->Date = $request->input('date');
        $kit->save();

        return response()->json(['message' => 'Kit added successfully', 'data' => $kit], 200);
    }

    public function updateKit(Request $request, $id)
    {
        $kit = Kit::findOrFail($id);
        $kit->Brand = $request->input('brand');
        $kit->Model = $request->input('model');
        $kit->Size = $request->input('size');
        $kit->Status = $request->input('status');
        $kit->Date = $request->input('date');
        $kit->save();

        return response()->json(['message' => 'Kit updated successfully', 'data' => $kit], 200);
    }

    public function deleteKit($id)
    {
        $kit = Kit::findOrFail($id);
        $kit->delete();

        return response()->json(['message' => 'Kit deleted successfully'], 200);
    }

    
    public function addJersey(Request $request)
    {
        $jersey = new Jersey();
        $jersey->Number = $request->input('number');
        $jersey->Size = $request->input('size');
        $jersey->save();

        return response()->json(['message' => 'Jersey added successfully', 'data' => $jersey], 200);
    }

    public function updateJersey(Request $request, $id)
    {
        $jersey = Jersey::findOrFail($id);
        $jersey->Number = $request->input('number');
        $jersey->Size = $request->input('size');
        $jersey->save();

        return response()->json(['message' => 'Jersey updated successfully', 'data' => $jersey], 200);
    }

    public function deleteJersey($id)
    {
        $jersey = Jersey::findOrFail($id);
        $jersey->delete();

        return response()->json(['message' => 'Jersey deleted successfully'], 200);
    }
}
