<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KitCheck;
use App\Models\Kit;
use App\Models\Invoice;
use App\Models\Order;

// Definition of the PanelController class, which extends the Controller class
class PanelController extends Controller
{
    // Method responsible for displaying the index page of the panel
    public function index()
    {
        // Retrieving all kit checks, kits, invoices, and orders
        $kitChecks = KitCheck::all();
        $kits = Kit::all();
        $invoices = Invoice::all();
        $orders = Order::all(); 

        // Returning the 'admin.panel' view, passing the retrieved data to the view
        return view('admin.panel', compact('kitChecks', 'kits', 'invoices', 'orders'));
    }

    // Method responsible for storing a new kit check
    public function store(Request $request)
    {
        // Validating the request data
        $request->validate([
            'KitID' => 'required|exists:kit,KitID',
            'result' => 'required|in:Pass,Fail',
            'note' => 'nullable|string',
        ]);

        // Creating a new KitCheck instance
        $kitCheck = new KitCheck();

        // Assigning values from the request to the kit check attributes
        $kitCheck->KitID = $request->KitID;
        $kitCheck->Results = $request->result;
        $kitCheck->notes = $request->note;
        $kitCheck->Date = now();

        // Saving the kit check
        $kitCheck->save();

        // Redirecting back to the previous page
        return redirect()->back();
    }

    // Method responsible for storing a new invoice
    public function storeInvoice(Request $request)
    {
        // Validating the request data
        $request->validate([
            'Date' => 'required|date',
            'user_id' => 'required|exists:users,id',
            'KitID' => 'required|exists:kit,KitID',
            'FormID' => 'required|exists:form,FormID',
            'Price' => 'required|numeric',
        ]);

        // Creating a new Invoice instance
        $invoice = new Invoice();

        // Assigning values from the request to the invoice attributes
        $invoice->Date = $request->Date;
        $invoice->user_id = $request->user_id;
        $invoice->KitID = $request->KitID;
        $invoice->FormID = $request->FormID;
        $invoice->Price = $request->Price;

        // Saving the invoice
        $invoice->save();

        // Redirecting back to the previous page
        return redirect()->back();
    }

    // Method responsible for storing a new order
    public function storeOrder(Request $request)
    {
        // Validating the request data
        $request->validate([
            'Date' => 'required|date',
            'user_id' => 'required|exists:users,id',
            'FormID' => 'required|exists:form,FormID',
            'Status' => 'required|string',
        ]);

        // Creating a new Order instance
        $order = new Order();

        // Assigning values from the request to the order attributes
        $order->Date = $request->Date;
        $order->user_id = $request->user_id;
        $order->FormID = $request->FormID;
        $order->Status = $request->Status;

        // Saving the order
        $order->save();

        // Redirecting back to the previous page
        return redirect()->back();
    }

    // Method responsible for updating the status of an order
    public function updateOrderStatus(Request $request)
    {
        // Validating the request data
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'new_status' => 'required|string',
        ]);

        // Finding the order by its ID
        $order = Order::findOrFail($request->order_id);

        // Updating the order status
        $order->Status = $request->new_status;

        // Saving the updated order
        $order->save();

        // Redirecting back to the previous page
        return redirect()->back();
    }
}
