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

        return redirect()->back();
    }

    public function updateKit(Request $request)
    {
        
        $request->validate([
            'kit_id' => 'required|exists:kit,KitID', 
        ]);

        
        $kit = Kit::findOrFail($request->kit_id);

        
        $kit->brand = $request->brand;
        $kit->model = $request->model;
        $kit->size = $request->size;
        $kit->status = $request->status;
       

    
        $kit->save();

        return redirect()->back();
    }

    public function deleteKit(Request $request)
    {
        
        $request->validate([
            'kit_id_delete' => 'required|exists:kit,KitID', // Ensure the provided Kit ID exists in the database
        ]);

        
        Kit::findOrFail($request->kit_id_delete)->delete();

        return redirect()->back();
    }

    public function storeJersey(Request $request)
    {
        $jersey = new Jersey();
        $jersey->number = $request->number;
        $jersey->size = $request->size;
        $jersey->save();

        return redirect()->back();
    }

    

    public function updateJersey(Request $request)
    {
        
        $request->validate([
            'jersey_id' => 'required|exists:jersey,JerseyID', 
            
        ]);

        
        $jersey = Jersey::findOrFail($request->jersey_id);

       
        $jersey->number = $request->number;
        $jersey->size = $request->size;
        

        
        $jersey->save();

        return redirect()->back();
    }

    public function deleteJersey(Request $request)
    {
        
        $request->validate([
            'jersey_id_delete' => 'required|exists:jersey,JerseyID', // Ensure the provided Jersey ID exists in the database
        ]);

    
        Jersey::findOrFail($request->jersey_id_delete)->delete();

        return redirect()->back();
    }


    
}
