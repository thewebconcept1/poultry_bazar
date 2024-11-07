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
                                src="{{ asset('assets/Profile photo (1) 1.png') }}"></td>
                        <td>{{ $user->name }}</td>
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
        <x-slot name="title">Change Status</x-slot>
        <x-slot name="modal_width">max-w-xl</x-slot>
        <x-slot name="body">
            <form id="postDataForm" url="" method="post">
                @csrf
                <input type="hidden" class="text" id="userId" name="user_id">
                <div>
                    <x-select name="user_status" id="status" label="Select Status">
                        <x-slot name="options">
                            <option disabled selected>Select status</option>
                            <option value="1">Active</option>
                            <option value="0">Un Active</option>
                        </x-slot>

                    </x-select>
                </div>
                <div class="mt-4">
                    <x-modal-button title="Change"></x-modal-button>
                </div>
            </form>
        </x-slot>
    </x-modal>
@endsection
