@extends('layouts.layout')
@section('title')
    Operators
@endsection
@section('content')
    <div class="w-full pt-10 min-h-[88vh] gradient-border  rounded-lg">
        <div class="flex justify-between px-5">
            <h1 class="text-3xl font-bold ">Notifications</h1>
            <button data-modal-target="city-modal" data-modal-toggle="city-modal"
                class="px-3 py-2 font-semibold text-white rounded-full shadow-md gradient-bg">Add City + </button>
        </div>
        @php
            $headers = ['Sr.', 'Name', 'province', 'Action'];
            $body = '';
        @endphp



        <x-modal id="city-modal">
            <x-slot name="title">Add Cities</x-slot>
            <x-slot name="modal_width">max-w-4xl</x-slot>
            <x-slot name="body">
                <form id="dataForm" action="saveCities" method="post">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <x-input id="cityName" label="City Name" placeholder="Enter City" name='city_name'
                            type="text"></x-input>
                        <x-input id="cityProvince" label="city Province" placeholder=" Enter City Province"
                            name='city_province' type="text"></x-input>
                    </div>
                    <div class="mt-4">
                        <x-modal-button :title="'Add City'"></x-modal-button>
                    </div>
                </form>
            </x-slot>
        </x-modal>
    </div>
@endsection

@section('js')
    <script>
        // Listen for the custom form submission response event
        $(document).on("formSubmissionResponse", function(event, response, Alert) {
            if (response.success) {
                $('.modalCloseBtn').click();
                Alert;
            } else {
                Alert;
            }
        });
    </script>
@endsection
