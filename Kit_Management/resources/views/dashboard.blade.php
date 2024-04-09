@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900">
        <div class="w-full mx-auto" style="max-width: 500px;">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md mb-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-300 mb-4">Welcome to the Kit Management System Reporting Form</h2>
                <p class="text-sm text-gray-600 dark:text-gray-400">Please fill out the form below to submit your report.</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="post" action="{{ route('form.store') }}" class="mx-auto">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                        <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter Name">
                    </div>
                    <div class="mb-4">
                        <label for="surname" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Surname</label>
                        <input type="text" name="surname" id="surname" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter Surname">
                    </div>
                    <div class="mb-4">
                        <label for="KitID" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kit ID</label>
                        <select name="KitID" id="KitID" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @foreach($kits as $kit)
                                <option value="{{ $kit->KitID }}">{{ $kit->KitID }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="JerseyID" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Jersey ID</label>
                        <select name="JerseyID" id="JerseyID" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @foreach($jerseys as $jersey)
                                <option value="{{ $jersey->JerseyID }}">{{ $jersey->JerseyID }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="textbox" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Textbox</label>
                        <textarea name="textbox" id="textbox" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter Text"></textarea>
                    </div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
