@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-[800px]">
        <div class="bg-white p-6">
            <h1 class="text-4xl font-bold text-black mb-8 text-center">Forms</h1>
            
            <!-- Forms Table -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-black mb-4 text-center">Forms Table</h2>
                <div class="overflow-x-auto">
                    <table class="table-auto bg-gray-100 w-full rounded-lg">
                        <thead>
                            <tr class="bg-gray-800 text-white">
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Surname</th>
                                <th class="px-4 py-2">KitID</th>
                                <th class="px-4 py-2">JerseyID</th>
                                <th class="px-4 py-2">Textbox</th>
                                <th class="px-4 py-2">Issue</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($forms as $form)
                                <tr>
                                    <td class="border px-4 py-2">{{ $form->name }}</td>
                                    <td class="border px-4 py-2">{{ $form->surname }}</td>
                                    <td class="border px-4 py-2">{{ $form->KitID }}</td>
                                    <td class="border px-4 py-2">{{ $form->JerseyID }}</td>
                                    <td class="border px-4 py-2">{{ $form->textbox }}</td>
                                    <td class="border px-4 py-2">{{ $form->issue }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
