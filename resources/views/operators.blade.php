@extends('layouts.layout')
@section('content')
    <div class="w-full pt-10 min-h-[88vh] gradient-border  rounded-lg">
        <div>
            <h1 class="text-3xl font-bold ps-5">Operators</h1>
        </div>

        <a href=""></a>
        @php
            $headers = ['Sr.', 'Image', 'Name', 'Email', 'Phone Number', 'Last Active', 'status', 'Action'];
            $body =
                "<tr>
                <td>1</td>
                <td><img src='" .
                asset('assets/Profile photo (1) 1.png') .
                "' alt=''></td>
                <td>Kurt Weissnat</td>
                <td>KurtWeissnat@email.com</td>
                <td>1234564</td>
                <td>1234564</td>
                <td>1234564zz</td>
                <td>1234564zz</td>
        </tr>";
        @endphp

        <x-table :headers="$headers" :body="$body" />
    </div>
    <img src="" alt="">
@endsection
