@extends('layouts.layout')
@section('content')
    <div class="mx-6 my-4 min-h-[88vh] card-shadow rounded-lg">
        @php
            $headers = ['ID', 'Name', 'Email'];
            $body = '<tr><td>1</td><td>John Doe</td><td>john@example.com</td></tr>
         <tr><td>2</td><td>Jane Doe</td><td>jane@example.com</td></tr>';

        @endphp

        <x-table :headers="$headers" :body="$body" />
    </div>
@endsection
