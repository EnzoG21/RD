@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 grid grid-cols-2 gap-8">
    <div class="flex justify-center">
        <div class="mr-4">
            <h2 class="text-white">Add Kit</h2>
            <form class="mt-4" method="POST" action="{{ route('management.storeKit') }}">
                @csrf
                <div class="mb-4">
                    <label for="brand" class="text-white">Brand:</label>
                    <input type="text" id="brand" name="brand" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="model" class="text-white">Model:</label>
                    <input type="text" id="model" name="model" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="size" class="text-white">Size:</label>
                    <input type="text" id="size" name="size" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="status" class="text-white">Status:</label>
                    <input type="text" id="status" name="status" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="date" class="text-white">Date:</label>
                    <input type="date" id="date" name="date" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Add Kit</button>
            </form>
        </div>

        <div>
            <h2 class="text-white">Add Jersey</h2>
            <form class="mt-4" method="POST" action="{{ route('management.storeJersey') }}">
                @csrf
                <div class="mb-4">
                    <label for="number" class="text-white">Number:</label>
                    <input type="number" id="number" name="number" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="size" class="text-white">Size:</label>
                    <input type="text" id="size" name="size" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Add Jersey</button>
            </form>
        </div>
    </div>

    <div class="flex justify-center">
        <div class="mr-4">
            <h2 class="text-white">Update Kit</h2>
            <form class="mt-4" method="POST" action="{{ route('management.updateKit') }}">
                @csrf
                <div class="mb-4">
                    <label for="kit_id" class="text-white">Kit ID:</label>
                    <input type="text" id="kit_id" name="kit_id" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="brand" class="text-white">Brand:</label>
                    <input type="text" id="brand" name="brand" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="model" class="text-white">Model:</label>
                    <input type="text" id="model" name="model" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="size" class="text-white">Size:</label>
                    <input type="text" id="size" name="size" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="status" class="text-white">Status:</label>
                    <input type="text" id="status" name="status" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Update Kit</button>
            </form>
        </div>

        <div>
            <h2 class="text-white">Update Jersey</h2>
            <form class="mt-4" method="POST" action="{{ route('management.updateJersey') }}">
                @csrf
                <div class="mb-4">
                    <label for="jersey_id" class="text-white">Jersey ID:</label>
                    <input type="text" id="jersey_id" name="jersey_id" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="number" class="text-white">Number:</label>
                    <input type="number" id="number" name="number" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="size" class="text-white">Size:</label>
                    <input type="text" id="size" name="size" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Update Jersey</button>
            </form>
        </div>
    </div>

    <div class="flex justify-center">
        <div class="mr-4">
            <h2 class="text-white">Delete Kit</h2>
            <form class="mt-4" method="POST" action="{{ route('management.deleteKit') }}">
                @csrf
                <div class="mb-4">
                    <label for="kit_id_delete" class="text-white">Kit ID:</label>
                    <input type="text" id="kit_id_delete" name="kit_id_delete" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <button type="submit"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4">Delete Kit</button>
            </form>
        </div>

        <div>
            <h2 class="text-white">Delete Jersey</h2>
            <form class="mt-4" method="POST" action="{{ route('management.deleteJersey') }}">
                @csrf
                <div class="mb-4">
                    <label for="jersey_id_delete" class="text-white">Jersey ID:</label>
                    <input type="text" id="jersey_id_delete" name="jersey_id_delete" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <button type="submit"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4">Delete Jersey</button>
            </form>
        </div>
    </div>

    <div class="flex justify-center">
        <div class="mr-4">
            <h2 class="text-white">Allocate Kit</h2>
            <form class="mt-4" method="POST" action="{{ route('management.allocateKit') }}">
                @csrf
                <div class="mb-4">
                    <label for="user_id" class="text-white">User ID:</label>
                    <input type="text" id="user_id" name="user_id" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="kit_id" class="text-white">Kit ID:</label>
                    <input type="text" id="kit_id" name="kit_id" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="jersey_id" class="text-white">Jersey ID:</label>
                    <input type="text" id="jersey_id" name="jersey_id" required
                        class="bg-black text-white border border-gray-400 rounded px-4 py-2 w-full">
                </div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Allocate Kit</button>
            </form>
        </div>
    </div>
</div>
@endsection
