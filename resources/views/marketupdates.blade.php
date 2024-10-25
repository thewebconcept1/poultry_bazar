@extends('layouts.layout')
@section('title')
    Operators
@endsection
@section('content')
    <div class="w-full pt-10 min-h-[88vh] gradient-border  rounded-lg">
        <div class="flex justify-between px-5">
            <h1 class="text-3xl font-bold ">Markets Rates</h1>
            <div class="flex gap-5">
                <button class="px-3 py-2 font-light text-[#B6B4B4] border-2 border-gray-200 rounded-full shadow-sm ">Clear
                    All </button>
                <button class="px-3 py-2 font-semibold text-white rounded-full shadow-md gradient-bg">Update All </button>
            </div>
        </div>
        @php
            $headers = ['Sr.', 'Markets', 'Rates', 'Open ', 'Close ', 'DOC ', 'Action'];
            $body = "<tr>
                <td>1</td>
               <td>Lahore</td>
                <td>
                    <input class='w-20 h-10 text-black rounded-md border-1' type='number' placeholder='00.0'>
                    </input>
                    </td>
                  <td>
                    <input class='w-20 h-10 text-black rounded-md border-1' type='number' placeholder='00.0'>
                    </input>
                    </td>
                  <td>
                    <input class='w-20 h-10 text-black rounded-md border-1' type='number' placeholder='00.0'>
                    </input>
                    </td>
                 <td>
                    <input class='w-20 h-10 text-black rounded-md border-1' type='number' placeholder='00.0'>
                    </input>
                    </td>

                <td>
                    <span class='flex justify-center gap-4'>
                        <button class='px-5 py-2 font-light text-[#B6B4B4] border-2 border-gray-[#B6B4B4] rounded-full shadow-sm'>Clear</button>

                       <button class='px-5 py-1 text-[13px] font-semibold text-white rounded-full shadow-md gradient-bg'>Update  </button>
                    </span>
                </td>
        </tr>";
        @endphp

        <x-table :headers="$headers" :body="$body" />


        <x-modal id="city-modal">
            <x-slot name="title">Add </x-slot>
            <x-slot name="modal_width">max-w-2xl</x-slot>
            <x-slot name="body">
                <form action="">
                    <div class="">
                        <div class="flex justify-start gap-2 ">
                            <label for="fileInput"
                                class="flex-row w-24 h-24 p-5 border-2 border-gray-300 rounded-md cursor-pointer">
                                <svg class="text-black w-9 h-9 ms-2" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                                <h1 class="text-sm text-center">Upload</h1>
                            </label>
                            <input type="file" id="fileInput" class="hidden" />
                            <div class="w-full mt-7">
                                <x-input id="Marketname" label="Title:" placeholder="Enter Market Name" name='market_name'
                                    type="text"></x-input>
                            </div>

                        </div>
                    </div>
                    <div class="mt-4">
                        <x-modal-button :title="'Add City'"></x-modal-button>
                    </div>
                </form>
            </x-slot>
        </x-modal>
    </div>
@endsection
