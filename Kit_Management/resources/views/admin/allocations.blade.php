@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-[800px] mt-8">
        <div class="bg-white p-6">
            <h1 class="text-4xl font-bold text-black mb-8 text-center">Kit Allocation</h1>
            
            
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-black mb-4 text-center">Kit Allocation Table</h2>
                <div class="overflow-x-auto">
                    <table class="table-auto bg-gray-100 w-full rounded-lg">
                        <thead>
                            <tr class="bg-gray-800 text-white">
                                <th class="px-4 py-2">#</th>
                                <th class="px-4 py-2">User</th>
                                <th class="px-4 py-2">Kit</th>
                                <th class="px-4 py-2">Jersey</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allocations as $allocation)
                                <tr>
                                    <td class="border px-4 py-2">{{ $allocation->id }}</td>
                                    <td class="border px-4 py-2">{{ $allocation->user_id }}</td>
                                    <td class="border px-4 py-2">{{ $allocation->KitID }}</td>
                                    <td class="border px-4 py-2">{{ $allocation->JerseyID }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
