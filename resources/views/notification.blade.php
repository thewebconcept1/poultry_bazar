@extends('layouts.layout')
@section('title')
    Blogs
@endsection
@section('content')
    <div class="w-full pt-10 min-h-[88vh] gradient-border  rounded-lg">
        <div class="flex justify-between px-5">
            <h1 class="text-3xl font-bold ">Notifications</h1>
            <button data-modal-target="blog-modal" data-modal-toggle="blog-modal"
                class="px-3 py-2 font-semibold text-white rounded-full shadow-md gradient-bg">Add New + </button>
        </div>
        @php
            $headers = [''];
        @endphp

        <x-table :headers="$headers">
            <x-slot name="tablebody">
                <tr>
                    <td>
                        @foreach ($notifications as $notification)
                            <div class="p-4 bg-gray-100 rounded shadow mb-5">
                                <h3 class="text-lg font-semibold text-gray-800">{{ $notification->notification_title }}
                                </h3>
                                <p class="mt-1 text-sm text-gray-600">{{ $notification->notification_description }}</p>
                            </div>
                        @endforeach
                    </td>
                </tr>
            </x-slot>
        </x-table>


        <x-modal id="blog-modal">
            <x-slot name="title">Add Notifications </x-slot>
            <x-slot name="modal_width">max-w-4xl</x-slot>
            <x-slot name="body">
                <form id="postDataForm" url="addNotification" method="post">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <x-input id="NotificationTitle" label="Notification Title" placeholder="Enter Title"
                            name='notification_title' type="text"></x-input>
                        <x-select name="notification_type" id="NotificationType" label="Notification Type">
                            <x-slot name="options">
                                <option disabled selected>Select Notification Type</option>
                                <option value="important">Important</option>
                            </x-slot>
                        </x-select>
                        <div class="col-span-2">
                            <x-textarea id="NotificationDescription" label="Notification Description"
                                placeholder="Enter Description" name='notification_description' type="text"></x-textarea>
                        </div>
                    </div>
                    <div class="mt-4">
                        <x-modal-button :title="'Add Notification '"></x-modal-button>
                    </div>

                </form>
            </x-slot>
        </x-modal>
        <x-modal id="view-modal">
            <x-slot name="title">Details </x-slot>
            <x-slot name="modal_width">max-w-4xl</x-slot>
            <x-slot name="body">
                <div class="p-6">
                    <div class="flex">
                        <!-- Image Placeholder -->

                        <img class="w-40 h-40" src="{{ asset('assets/Surface 3 png.png') }}" alt="">


                        <!-- Text Details -->
                        <div class="ml-5">
                            <h3 class="text-xl font-semibold text-gray-800">Lorem Ipsum is simply dummy text of the
                                printing.</h3>
                            {{-- <div class="mt-4 ">
                          <p class="text-sm font-medium text-gray-600">Category: <span class="text-gray-800 ms-10">Campus Name</span></p>
                         <div class="mt-5 "> <p class="text-sm font-medium text-gray-600">Author: <span class="text-gray-80 ms-14">Author Name</span></p></div>
                         <div class="mt-5"> <p class="text-sm font-medium text-gray-600">Date: <span class="text-gray-800 ms-14">Dec 21, 2023</span></p></div>
                        </div> --}}
                            <div class="grid grid-cols-2 mt-5 md:grid-cols-3 ">
                                <div class="min-w-10">
                                    <p class="text-[12.9px] lg:text-lg md:text-lg">Category:</p>
                                    <p class="mt-4 text-[12.9px] lg:text-lg md:text-lg">Author:</p>
                                    <p class="mt-4 text-[12.9px] lg:text-lg md:text-lg">Date:</p>
                                </div>
                                <div class="min-w-10 md:col-span-2 ">
                                    <p class=" text-[#323C47] text-[12.9px] lg:text-lg md:text-lg">Campus Name</p>
                                    <p class="mt-4 text-[#323C47] text-[12.9px] lg:text-lg md:text-lg">Author Name</p>
                                    <p class="mt-4 text-[#323C47] text-[12.9px] lg:text-lg md:text-lg">Dec 21, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mt-6">
                        <h4 class="text-lg font-semibold text-gray-800">Description:</h4>
                        <p class="mt-2 text-sm text-gray-600">
                            Lorem Ipsum is simply dummy text
                            of the printing and typesetting Lorem Ipsum is simply dummy text
                            of the printing and typesetting text
                            Lorem Ipsum is simply dummy text
                            of the printing and typesetting Lorem Ipsum is simply Lorem Ipsum is simply dummy text of the.
                            Lorem Ipsum is simply dummy text
                            of the printing and typesetting Lorem Ipsum is simply dummy text
                            of the printing and typesetting text
                            Lorem Ipsum is simply dummy text
                            of the printing and typesetting Lorem Ipsum is simply Lorem Ipsum is simply dummy text of the.
                            Lorem Ipsum is simply dummy text
                            of the printing and typesetting Lorem Ipsum is simply dummy text
                            of the printing and typesetting text
                            Lorem Ipsum is simply dummy text
                            of the printing and typesetting Lorem Ipsum is simply Lorem Ipsum is simply dummy text of the.
                            Lorem Ipsum is simply dummy text
                            of the printing and typesetting Lorem Ipsum is simply dummy text
                            of the printing and typesetting text
                            Lorem Ipsum is simply dummy text
                            of the printing and typesetting Lorem Ipsum is simply Lorem Ipsum is simply dummy text of the.
                        </p>
                    </div>
                </div>
            </x-slot>
        </x-modal>
    </div>
@endsection

@section('js')
    <script>
        function updateDatafun() {

        }
        updateDatafun();

        $(document).on("formSubmissionResponse", function(event, response, Alert, SuccessAlert, WarningAlert) {
            // console.log(response);

            if (response.success) {
                $('.modalCloseBtn').click();
            } else {}
        });
    </script>
@endsection
