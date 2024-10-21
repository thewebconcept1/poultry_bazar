@extends('layouts.layout')
@section('title')
    Operators
@endsection
@section('content')
    <div class="w-full pt-10 min-h-[88vh] gradient-border  rounded-lg">
        <div>
            <h1 class="text-3xl font-bold ps-5">Operators</h1>
        </div>
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
                <td><span class='text-blue-500'>active</span></td>
                <td>
                    <span class='flex justify-center'><button>
                        <img  src='" .
                asset('assets/icons/edit icon.png') .
                "' alt=''>
                    </button></span>
                    </td>
        </tr>";
        @endphp

        <x-table :headers="$headers" :body="$body" />
    </div>
@endsection
