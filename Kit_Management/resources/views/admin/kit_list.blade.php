@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-[800px]">
        <div class="bg-white p-6">
            <h1 class="text-xl font-bold text-black mb-8 text-center">Kit List</h1>
            
            <!-- Kits Table -->
            <div class="mb-12">
                <h2 class="text-xl md:text-3xl font-bold text-black mb-4 text-center">Kits Table</h2>
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead>
                            <tr class="bg-gray-800 text-white">
                                <th class="px-4 py-2">Kit ID</th>
                                <th class="px-4 py-2">Brand</th>
                                <th class="px-4 py-2">Model</th>
                                <th class="px-4 py-2">Size</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kits as $kit)
                                <tr>
                                    <td class="border px-4 py-2">{{ $kit->id }}</td>
                                    <td class="border px-4 py-2">{{ $kit->brand }}</td>
                                    <td class="border px-4 py-2">{{ $kit->model }}</td>
                                    <td class="border px-4 py-2">{{ $kit->size }}</td>
                                    <td class="border px-4 py-2">{{ $kit->status }}</td>
                                    <td class="border px-4 py-2">{{ $kit->date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Jerseys Table -->
            <div>
                <h2 class="text-xl md:text-3xl font-bold text-black mb-4 text-center">Jerseys Table</h2>
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead>
                            <tr class="bg-gray-800 text-white">
                                <th class="px-4 py-2">Jersey ID</th>
                                <th class="px-4 py-2">Number</th>
                                <th class="px-4 py-2">Size</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jerseys as $jersey)
                                <tr>
                                    <td class="border px-4 py-2">{{ $jersey->id }}</td>
                                    <td class="border px-4 py-2">{{ $jersey->number }}</td>
                                    <td class="border px-4 py-2">{{ $jersey->size }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
