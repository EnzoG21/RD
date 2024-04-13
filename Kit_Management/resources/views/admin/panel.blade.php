@extends('layouts.app')

@section('content')
    <h2>Kit Checks</h2>
    <table border="1">
        <thead>
            <tr>
                <th>KitID</th>
                <th>Result</th>
                <th>Note</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kitChecks as $kitCheck)
            <tr>
                <td>{{ $kitCheck->KitID }}</td>
                <td>{{ $kitCheck->Results }}</td>
                <td>{{ $kitCheck->notes }}</td>
                <td>{{ $kitCheck->Date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Input form to add a new kit check -->
    <h2>Add Kit Check</h2>
    <form action="{{ route('admin.panel.kit-check.store') }}" method="POST">
        @csrf
        <label for="KitID">KitID:</label>
        <select name="KitID" id="KitID">
            @foreach($kits as $kit)
                <option value="{{ $kit->KitID }}">{{ $kit->KitID }}</option>
            @endforeach
        </select><br>

        <label for="result">Result:</label>
        <select name="result" id="result">
            <option value="Pass">Pass</option>
            <option value="Fail">Fail</option>
        </select><br>

        <label for="note">Note:</label>
        <input type="text" name="note" id="note"><br>

        <button type="submit">Submit</button>
    </form>
@endsection
