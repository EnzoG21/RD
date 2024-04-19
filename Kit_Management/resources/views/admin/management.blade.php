@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">

    <div class="bg-gray-800 p-6 rounded-lg">
        <h2 class="text-white text-lg mb-4">Add Kit</h2>
        <form method="POST" action="{{ route('management.storeKit') }}">
            @csrf
            <div class="mb-4">
                <label for="brand" class="text-white block">Brand:</label>
                <input type="text" id="brand" name="brand" required class="input-field">
            </div>
            <div class="mb-4">
                <label for="model" class="text-white block">Model:</label>
                <input type="text" id="model" name="model" required class="input-field">
            </div>
            <div class="mb-4">
                <label for="size" class="text-white block">Size:</label>
                <input type="text" id="size" name="size" required class="input-field">
            </div>
            <div class="mb-4">
                <label for="status" class="text-white block">Status:</label>
                <input type="text" id="status" name="status" required class="input-field">
            </div>
            <div class="mb-4">
                <label for="date" class="text-white block">Date:</label>
                <input type="date" id="date" name="date" required class="input-field">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Kit</button>
        </form>
    </div>

    
    <div class="bg-gray-800 p-6 rounded-lg">
        <h2 class="text-white text-lg mb-4">Add Jersey</h2>
        <form method="POST" action="{{ route('management.storeJersey') }}">
            @csrf
            <div class="mb-4">
                <label for="number" class="text-white block">Number:</label>
                <input type="number" id="number" name="number" required class="input-field">
            </div>
            <div class="mb-4">
                <label for="size" class="text-white block">Size:</label>
                <input type="text" id="size" name="size" required class="input-field">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Jersey</button>
        </form>
    </div>

    
    <div class="bg-gray-800 p-6 rounded-lg">
        <h2 class="text-white text-lg mb-4">Update Kit</h2>
        <form method="POST" action="{{ route('management.updateKit') }}">
            @csrf
            <div class="mb-4">
                <label for="kit_id" class="text-white block">Kit ID:</label>
                <input type="text" id="kit_id" name="kit_id" required class="input-field">
            </div>
            
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md">Update Kit</button>
        </form>
    </div>

    
    <div class="bg-gray-800 p-6 rounded-lg">
        <h2 class="text-white text-lg mb-4">Update Jersey</h2>
        <form method="POST" action="{{ route('management.updateJersey') }}">
            @csrf
            <div class="mb-4">
                <label for="jersey_id" class="text-white block">Jersey ID:</label>
                <input type="text" id="jersey_id" name="jersey_id" required class="input-field">
            </div>
            
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md">Update Jersey</button>
        </form>
    </div>

   
    <div class="bg-gray-800 p-6 rounded-lg">
        <h2 class="text-white text-lg mb-4">Delete Kit</h2>
        <form method="POST" action="{{ route('management.deleteKit') }}">
            @csrf
            <div class="mb-4">
                <label for="kit_id_delete" class="text-white block">Kit ID:</label>
                <input type="text" id="kit_id_delete" name="kit_id_delete" required class="input-field">
            </div>
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Delete Kit</button>
        </form>
    </div>

    
    <div class="bg-gray-800 p-6 rounded-lg">
        <h2 class="text-white text-lg mb-4">Delete Jersey</h2>
        <form method="POST" action="{{ route('management.deleteJersey') }}">
            @csrf
            <div class="mb-4">
                <label for="jersey_id_delete" class="text-white block">Jersey ID:</label>
                <input type="text" id="jersey_id_delete" name="jersey_id_delete" required class="input-field">
            </div>
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Delete Jersey</button>
        </form>
    </div>

  
    <div class="bg-gray-800 p-6 rounded-lg">
        <h2 class="text-white text-lg mb-4">Allocate Kit</h2>
        <form method="POST" action="{{ route('management.allocateKit') }}">
            @csrf
            <div class="mb-4">
                <label for="user_id" class="text-white block">User ID:</label>
                <input type="text" id="user_id" name="user_id" required class="input-field">
            </div>
            <div class="mb-4">
                <label for="kit_id" class="text-white block">Kit ID:</label>
                <input type="text" id="kit_id" name="kit_id" required class="input-field">
            </div>
            <div class="mb-4">
                <label for="jersey_id" class="text-white block">Jersey ID:</label>
                <input type="text" id="jersey_id" name="jersey_id" required class="input-field">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Allocate Kit</button>
        </form>
    </div>
</div>
@endsection
