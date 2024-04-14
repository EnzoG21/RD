<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kit;
use App\Models\Jersey;
use App\Models\Allocation;

class ManagementController extends Controller
{
    public function index()
    {
        
        return view('admin.management');
        // return view('committee.management');
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
            'kit_id_delete' => 'required|exists:kit,KitID',
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
            'jersey_id_delete' => 'required|exists:jersey,JerseyID',
        ]);

    
        Jersey::findOrFail($request->jersey_id_delete)->delete();

        return redirect()->back();
    }

    public function allocateKit(Request $request)
    {
        
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'kit_id' => 'required|exists:kit,KitID',
            'jersey_id' => 'required|exists:jersey,JerseyID',
        ]);

        
        $allocation = new Allocation();
        $allocation->user_id = $validatedData['user_id'];
        $allocation->KitID = $validatedData['kit_id'];
        $allocation->JerseyID = $validatedData['jersey_id'];
        $allocation->save();

        
        return redirect()->back();
    }


    
}
