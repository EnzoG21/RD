<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KitCheck;
use App\Models\Kit;

class PanelController extends Controller
{
    public function index()
    {
        $kitChecks = KitCheck::all();
        $kits = Kit::all(); // Fetch all kits
        return view('admin.panel', compact('kitChecks', 'kits'));
    }

    public function store(Request $request)
{
    $request->validate([
        'KitID' => 'required|exists:kit,KitID',
        'result' => 'required|in:Pass,Fail',
        'note' => 'nullable|string',
    ]);

    $kitCheck = new KitCheck();
    $kitCheck->KitID = $request->KitID;
    $kitCheck->Results = $request->result; // Corrected attribute name
    $kitCheck->notes = $request->note; // Corrected attribute name
    $kitCheck->Date = now(); // Corrected attribute name
    $kitCheck->save();

    return redirect()->back();
}

}
