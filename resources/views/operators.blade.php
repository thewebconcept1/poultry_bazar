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
            $headers = ['Sr.', 'Image', 'Name', 'Email', 'Phone Number', 'status', 'Action'];
        @endphp

        <x-table :headers="$headers">
            <x-slot name="tablebody">
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img class="h-16 w-16 rounded-full bg-black object-contain"
                                src="{{ asset('assets/Profile phoo (1) 1.png') }}" alt='{{ $user->name }}'></td>
                        <td>{{ $user->name }}</td>t
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->user_phone }}</td>
                        <td><button data-modal-target="status-modal"
                                data-modal-toggle="status-modal">{!! $user->user_status == 1
                                    ? "<span class='text-blue-500'>Active</span>"
                                    : "<span class='text-red-600'>Un-Active</span>" !!}</button>
                        </td>
                        <td>
                            <span class='flex justify-center'>
                                <a href="../priveleges/{{ $user->id }}">
                                    <button>
                                        <img src="{{ asset('assets/icons/edit icon.png') }}" alt=''>
                                    </button>
                                </a>
                            </span>
                        </td>
                    </tr>
                @endforeach

            </x-slot>
        </x-table>
    </div>

    <x-modal id="status-modal">
        <x-slot name="title">Add Cities</x-slot>
        <x-slot name="modal_width">max-w-4xl</x-slot>
        <x-slot name="body">
            <form id="postDataForm" url="saveCities" method="post">
                @csrf
                <input type="hidden" class="text" id="updateId" name="city_id">
                <div class="grid grid-cols-2 gap-4">
                    <x-input id="cityName" label="City Name" placeholder="Enter City" name='city_name'
                        type="text"></x-input>
                    <x-input id="cityProvince" label="city Province" placeholder=" Enter City Province" name='city_province'
                        type="text"></x-input>
                </div>
                <div class="mt-4">
                    <x-modal-button :title="'Add City'"></x-modal-button>
                </div>
            </form>
        </x-slot>
    </x-modal>
@endsection
