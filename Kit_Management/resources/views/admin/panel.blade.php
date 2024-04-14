@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
        <h2 class="text-2xl font-semibold mb-4">Kit Checks</h2>
        <div class="overflow-x-auto mb-4">
            <table class="table-auto border-collapse w-full">
                <thead>
                    <tr>
                        <th class="border border-gray-400 px-4 py-2">KitID</th>
                        <th class="border border-gray-400 px-4 py-2">Result</th>
                        <th class="border border-gray-400 px-4 py-2">Note</th>
                        <th class="border border-gray-400 px-4 py-2">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kitChecks as $kitCheck)
                    <tr>
                        <td class="border border-gray-400 px-4 py-2">{{ $kitCheck->KitID }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $kitCheck->Results }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $kitCheck->notes }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $kitCheck->Date }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <h2 class="text-2xl font-semibold my-4">Add Kit Check</h2>
        <form action="{{ route('admin.panel.kit-check.store') }}" method="POST" class="mb-8">
            @csrf
            <div class="flex flex-col mb-4">
                <label for="KitID" class="text-sm font-semibold mb-1">KitID:</label>
                <select name="KitID" id="KitID" class="border border-gray-400 rounded-md px-4 py-2">
                    @foreach($kits as $kit)
                        <option value="{{ $kit->KitID }}">{{ $kit->KitID }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col mb-4">
                <label for="result" class="text-sm font-semibold mb-1">Result:</label>
                <select name="result" id="result" class="border border-gray-400 rounded-md px-4 py-2">
                    <option value="Pass">Pass</option>
                    <option value="Fail">Fail</option>
                </select>
            </div>

            <div class="flex flex-col mb-4">
                <label for="note" class="text-sm font-semibold mb-1">Note:</label>
                <input type="text" name="note" id="note" class="border border-gray-400 rounded-md px-4 py-2 text-black">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Submit</button>
        </form>

        <h2 class="text-2xl font-semibold mb-4">Invoices</h2>
        <div class="overflow-x-auto mb-4">
            <table class="table-auto border-collapse w-full">
                <thead>
                    <tr>
                        <th class="border border-gray-400 px-4 py-2">Date</th>
                        <th class="border border-gray-400 px-4 py-2">User ID</th>
                        <th class="border border-gray-400 px-4 py-2">Kit ID</th>
                        <th class="border border-gray-400 px-4 py-2">Form ID</th>
                        <th class="border border-gray-400 px-4 py-2">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($invoices as $invoice)
                    <tr>
                        <td class="border border-gray-400 px-4 py-2">{{ $invoice->Date }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $invoice->user_id }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $invoice->KitID }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $invoice->FormID }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $invoice->Price }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <h2 class="text-2xl font-semibold my-4">Add Invoice</h2>
        <form action="{{ route('admin.panel.invoice.store') }}" method="POST" class="mb-8">
            @csrf
            <div class="flex flex-col mb-4">
                <label for="Date" class="text-sm font-semibold mb-1">Date:</label>
                <input type="date" name="Date" id="Date" class="border border-gray-400 rounded-md px-4 py-2">
            </div>

            <div class="flex flex-col mb-4">
                <label for="user_id" class="text-sm font-semibold mb-1">User ID:</label>
                <input type="text" name="user_id" id="user_id" class="border border-gray-400 rounded-md px-4 py-2">
            </div>

            <div class="flex flex-col mb-4">
                <label for="KitID" class="text-sm font-semibold mb-1">Kit ID:</label>
                <input type="text" name="KitID" id="KitID" class="border border-gray-400 rounded-md px-4 py-2">
            </div>

            <div class="flex flex-col mb-4">
                <label for="FormID" class="text-sm font-semibold mb-1">Form ID:</label>
                <input type="text" name="FormID" id="FormID" class="border border-gray-400 rounded-md px-4 py-2">
            </div>

            <div class="flex flex-col mb-4">
                <label for="Price" class="text-sm font-semibold mb-1">Price:</label>
                <input type="number" step="0.01" name="Price" id="Price" class="border border-gray-400 rounded-md px-4 py-2">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Submit</button>
        </form>

        <h2 class="text-2xl font-semibold mb-4">Orders</h2>
        <!-- Display existing orders -->
        <table class="table-auto border-collapse w-full mb-4">
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2">ID</th>
                    <th class="border border-gray-400 px-4 py-2">Date</th>
                    <th class="border border-gray-400 px-4 py-2">User ID</th>
                    <th class="border border-gray-400 px-4 py-2">Form ID</th>
                    <th class="border border-gray-400 px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">{{ $order->id }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $order->Date }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $order->user_id }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $order->FormID }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $order->Status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Input form to add a new order -->
        <h2 class="text-2xl font-semibold mb-4">Add Order</h2>
        <form action="{{ route('admin.panel.order.store') }}" method="POST" class="mb-8">
            @csrf
            <div class="flex flex-col mb-4">
                <label for="Date" class="text-sm font-semibold mb-1">Date:</label>
                <input type="date" name="Date" id="Date" class="border border-gray-400 rounded-md px-4 py-2 text-black">
            </div>

            <div class="flex flex-col mb-4">
                <label for="user_id" class="text-sm font-semibold mb-1">User ID:</label>
                <input type="text" name="user_id" id="user_id" class="border border-gray-400 rounded-md px-4 py-2 text-black">
            </div>

            <div class="flex flex-col mb-4">
                <label for="FormID" class="text-sm font-semibold mb-1">Form ID:</label>
                <input type="text" name="FormID" id="FormID" class="border border-gray-400 rounded-md px-4 py-2 text-black">
            </div>

            <div class="flex flex-col mb-4">
                <label for="Status" class="text-sm font-semibold mb-1">Status:</label>
                <input type="text" name="Status" id="Status" class="border border-gray-400 rounded-md px-4 py-2 text-black">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Submit</button>
        </form>

        <!-- Update form for changing order status -->
        <h2 class="text-2xl font-semibold mb-4">Update Order Status</h2>
        <form action="{{ route('admin.panel.order.update') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
                <label for="order_id" class="text-sm font-semibold mb-1">Select Order:</label>
                <select name="order_id" id="order_id" class="border border-gray-400 rounded-md px-4 py-2">
                    @foreach($orders as $order)
                        <option value="{{ $order->id }}">{{ $order->id }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col mb-4">
                <label for="new_status" class="text-sm font-semibold mb-1">New Status:</label>
                <input type="text" name="new_status" id="new_status" class="border border-gray-400 rounded-md px-4 py-2 text-black">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Update Status</button>
        </form>
    </div>
@endsection
