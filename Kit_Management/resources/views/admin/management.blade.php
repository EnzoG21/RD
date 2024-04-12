@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h2 class="text-white">Add Kit</h2>
    <form class="mt-4" method="POST" action="{{ route('management.storeKit') }}">
        @csrf
        <label for="brand" class="text-white">Brand:</label>
        <input type="text" id="brand" name="brand" required
            class="bg-black text-white border border-gray-400 rounded px-4 py-2 mb-2">
        <br>
        <label for="model" class="text-white">Model:</label>
        <input type="text" id="model" name="model" required
            class="bg-black text-white border border-gray-400 rounded px-4 py-2 mb-2">
        <br>
        <label for="size" class="text-white">Size:</label>
        <input type="text" id="size" name="size" required
            class="bg-black text-white border border-gray-400 rounded px-4 py-2 mb-2">
        <br>
        <label for="status" class="text-white">Status:</label>
        <input type="text" id="status" name="status" required
            class="bg-black text-white border border-gray-400 rounded px-4 py-2 mb-2">
        <br>
        <label for="date" class="text-white">Date:</label>
        <input type="date" id="date" name="date" required
            class="bg-black text-white border border-gray-400 rounded px-4 py-2 mb-2">
        <br>
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Add Kit</button>
    </form>

    <h2 class="text-white mt-8">Update Kit</h2>
    <form class="mt-4" method="POST" action="{{ route('management.updateKit') }}">
        @csrf
        <label for="kit_id" class="text-white">Kit ID:</label>
        <input type="text" id="kit_id" name="kit_id" required
            class="bg-black text-white border border-gray-400 rounded px-4 py-2 mb-2">
        <br>
        <label for="brand" class="text-white">Brand:</label>
        <input type="text" id="brand" name="brand" required
            class="bg-black text-white border border-gray-400 rounded px-4 py-2 mb-2">
        <br>
        <label for="model" class="text-white">Model:</label>
        <input type="text" id="model" name="model" required
            class="bg-black text-white border border-gray-400 rounded px-4 py-2 mb-2">
        <br>
        <label for="size" class="text-white">Size:</label>
        <input type="text" id="size" name="size" required
            class="bg-black text-white border border-gray-400 rounded px-4 py-2 mb-2">
        <br>
        <label for="status" class="text-white">Status:</label>
        <input type="text" id="status" name="status" required
            class="bg-black text-white border border-gray-400 rounded px-4 py-2 mb-2">
            <br>
        
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Update Kit</button>
    </form>

    <h2 class="text-white mt-8">Delete Kit</h2>
    <form class="mt-4" method="POST" action="{{ route('management.deleteKit') }}">
        @csrf
        <label for="kit_id_delete" class="text-white">Kit ID:</label>
        <input type="text" id="kit_id_delete" name="kit_id_delete" required
            class="bg-black text-white border border-gray-400 rounded px-4 py-2 mb-2">
        <br>
        <button type="submit"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4">Delete Kit</button>
    </form>

    <h2 class="text-white mt-8">Add Jersey</h2>
    <form class="mt-4" method="POST" action="{{ route('management.storeJersey') }}">
        @csrf
        <label for="number" class="text-white">Number:</label>
        <input type="number" id="number" name="number" required
            class="bg-black text-white border border-gray-400 rounded px-4 py-2 mb-2">
        <br>
        <label for="size" class="text-white">Size:</label>
        <input type="text" id="size" name="size" required
            class="bg-black text-white border border-gray-400 rounded px-4 py-2 mb-2">
        <br>
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Add Jersey</button>
    </form>

    <h2 class="text-white mt-8">Update Jersey</h2>
    <form class="mt-4" method="POST" action="{{ route('management.updateJersey') }}">
        @csrf
        <label for="jersey_id" class="text-white">Jersey ID:</label>
        <input type="text" id="jersey_id" name="jersey_id" required
            class="bg-black text-white border border-gray-400 rounded px-4 py-2 mb-2">
        <br>
        <label for="number" class="text-white">Number:</label>
        <input type="number" id="number" name="number" required
            class="bg-black text-white border border-gray-400 rounded px-4 py-2 mb-2">
        <br>
        <label for="size" class="text-white">Size:</label>
        <input type="text" id="size" name="size" required
            class="bg-black text-white border border-gray-400 rounded px-4 py-2 mb-2">
        <br>
        <!-- Add other fields as needed -->
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Update Jersey</button>
    </form>

    <h2 class="text-white mt-8">Delete Jersey</h2>
    <form class="mt-4" method="POST" action="{{ route('management.deleteJersey') }}">
        @csrf
        <label for="jersey_id_delete" class="text-white">Jersey ID:</label>
        <input type="text" id="jersey_id_delete" name="jersey_id_delete" required
            class="bg-black text-white border border-gray-400 rounded px-4 py-2 mb-2">
        <br>
        <button type="submit"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4">Delete Jersey</button>
    </form>
    

    
</div>
@endsection
