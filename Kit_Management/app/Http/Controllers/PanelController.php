<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KitCheck;
use App\Models\Kit;
use App\Models\Invoice;
use App\Models\Order;

class PanelController extends Controller
{
    public function index()
    {
        $kitChecks = KitCheck::all();
        $kits = Kit::all();
        $invoices = Invoice::all();
        $orders = Order::all(); 
        return view('admin.panel', compact('kitChecks', 'kits', 'invoices', 'orders'));
        // return view('committee.panel', compact('kitChecks', 'kits', 'invoices', 'orders'));
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
    $kitCheck->Results = $request->result;
    $kitCheck->notes = $request->note;
    $kitCheck->Date = now();
    $kitCheck->save();

    return redirect()->back();
}

public function storeInvoice(Request $request)
{
    $request->validate([
        'Date' => 'required|date',
        'user_id' => 'required|exists:users,id',
        'KitID' => 'required|exists:kit,KitID',
        'FormID' => 'required|exists:form,FormID',
        'Price' => 'required|numeric',
    ]);

    $invoice = new Invoice();
    $invoice->Date = $request->Date;
    $invoice->user_id = $request->user_id;
    $invoice->KitID = $request->KitID;
    $invoice->FormID = $request->FormID;
    $invoice->Price = $request->Price;
    $invoice->save();

    return redirect()->back();
}

public function storeOrder(Request $request)
{
    $request->validate([
        'Date' => 'required|date',
        'user_id' => 'required|exists:users,id',
        'FormID' => 'required|exists:form,FormID',
        'Status' => 'required|string',
    ]);

    $order = new Order();
    $order->Date = $request->Date;
    $order->user_id = $request->user_id;
    $order->FormID = $request->FormID;
    $order->Status = $request->Status;
    $order->save();

    return redirect()->back();
}

public function updateOrderStatus(Request $request)
{
    $request->validate([
        'order_id' => 'required|exists:orders,id',
        'new_status' => 'required|string',
    ]);

    $order = Order::findOrFail($request->order_id);
    $order->Status = $request->new_status;
    $order->save();

    return redirect()->back();
}

}
