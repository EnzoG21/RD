<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="post" action="{{ route('form.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="surname">Surname</label>
                                <input type="text" name="surname" class="form-control" id="surname" placeholder="Enter Surname">
                            </div>
                            <div class="form-group">
                                <label for="KitID">Kit ID</label>
                                <select name="KitID" class="form-control" id="KitID">
                                    @foreach($kits as $kit)
                                        <option value="{{ $kit->KitID }}">{{ $kit->KitID }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="JerseyID">Jersey ID</label>
                                <select name="JerseyID" class="form-control" id="JerseyID">
                                    @foreach($jerseys as $jersey)
                                        <option value="{{ $jersey->JerseyID }}">{{ $jersey->JerseyID }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="textbox">Textbox</label>
                                <textarea name="textbox" class="form-control" id="textbox" placeholder="Enter Text"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    
</x-app-layout>
