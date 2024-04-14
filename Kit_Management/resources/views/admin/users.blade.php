@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-[800px] mt-8">
        <div class="bg-white p-6">
            <h1 class="text-4xl font-bold text-black mb-8 text-center">User List</h1>
            
            <!-- User List Table -->
            <div class="mb-12">
                <div class="overflow-x-auto">
                    <table class="table-auto bg-gray-100 w-full rounded-lg">
                        <thead>
                            <tr class="bg-gray-800 text-white">
                                <th class="px-4 py-2">#</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Role</th>
                                <th class="px-4 py-2">Created At</th>
                                <th class="px-4 py-2">Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="border px-4 py-2">{{ $user->id }}</td>
                                    <td class="border px-4 py-2">{{ $user->name }}</td>
                                    <td class="border px-4 py-2">{{ $user->email }}</td>
                                    <td class="border px-4 py-2">{{ $user->role }}</td>
                                    <td class="border px-4 py-2">{{ $user->created_at }}</td>
                                    <td class="border px-4 py-2">{{ $user->updated_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
