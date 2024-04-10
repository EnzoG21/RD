@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-8 text-white bg-gray-900 rounded-lg shadow-lg">
        <div class="w-full">
            <h1 class="text-3xl font-semibold mb-6 text-center">Kit List</h1>
            
            <!-- Kits Table -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold mb-4 text-center">Kits Table</h2>
                <div class="overflow-x-auto">
                    <table class="table-auto border-collapse border border-gray-400 mx-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 bg-gray-800 text-white border border-gray-400">Kit ID</th>
                                <th class="px-4 py-2 bg-gray-800 text-white border border-gray-400">Brand</th>
                                <th class="px-4 py-2 bg-gray-800 text-white border border-gray-400">Model</th>
                                <th class="px-4 py-2 bg-gray-800 text-white border border-gray-400">Size</th>
                                <th class="px-4 py-2 bg-gray-800 text-white border border-gray-400">Status</th>
                                <th class="px-4 py-2 bg-gray-800 text-white border border-gray-400">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kits as $kit)
                                <tr>
                                    <td class="px-4 py-2 border border-gray-400">{{ $kit->id }}</td>
                                    <td class="px-4 py-2 border border-gray-400">{{ $kit->brand }}</td>
                                    <td class="px-4 py-2 border border-gray-400">{{ $kit->model }}</td>
                                    <td class="px-4 py-2 border border-gray-400">{{ $kit->size }}</td>
                                    <td class="px-4 py-2 border border-gray-400">{{ $kit->status }}</td>
                                    <td class="px-4 py-2 border border-gray-400">{{ $kit->date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Jerseys Table -->
            <div>
                <h2 class="text-xl font-semibold mb-4 text-center">Jerseys Table</h2>
                <div class="overflow-x-auto">
                    <table class="table-auto border-collapse border border-gray-400 mx-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 bg-gray-800 text-white border border-gray-400">Jersey ID</th>
                                <th class="px-4 py-2 bg-gray-800 text-white border border-gray-400">Number</th>
                                <th class="px-4 py-2 bg-gray-800 text-white border border-gray-400">Size</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jerseys as $jersey)
                                <tr>
                                    <td class="px-4 py-2 border border-gray-400">{{ $jersey->id }}</td>
                                    <td class="px-4 py-2 border border-gray-400">{{ $jersey->number }}</td>
                                    <td class="px-4 py-2 border border-gray-400">{{ $jersey->size }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
