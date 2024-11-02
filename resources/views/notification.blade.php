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
                        <div class="max-w-5xl space-y-4">
                            <!-- Notification 1 -->
                            <div class="p-4 bg-gray-100 rounded shadow">
                                <h3 class="font-semibold text-gray-800 ">Notification title Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dol</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Help Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore hic atque illum eos ut facere officia Help Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore hic atque illum eos ut facere officia Help Lorem
                                </p>
                            </div>
                            <!-- Notification 2 -->
                            <div class="p-4 bg-gray-100 rounded shadow">
                                <h3 class="text-lg font-semibold text-gray-800">Notification title Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dol</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Help Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore hic atque illum eos ut facere officia Help Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore hic atque illum eos ut facere officia Help Lorem
                                </p>
                            </div>
                            <!-- Notification 3 -->
                            <div class="p-4 bg-gray-100 rounded shadow">
                                <h3 class="text-lg font-semibold text-gray-800">Notification title Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dol</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Help Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore hic atque illum eos ut facere officia Help Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore hic atque illum eos ut facere officia Help Lorem
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>
            </x-slot>
        </x-table>


        <x-modal id="blog-modal">
            <x-slot name="title">Add Notifications </x-slot>
            <x-slot name="modal_width">max-w-4xl</x-slot>
            <x-slot name="body">
                <form action="">
                    <div class="">
                        <div class="flex p-6">
                            <!-- Form Fields -->
                            <div class="flex-1 ml-6">
                                <div class="mb-4">
                                    <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
                                    <input type="text" id="title" placeholder="Enter Title"
                                        class="block w-full px-3 py-2 mt-1 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
                                </div>

                                <div class="mb-4">
                                    <label for="category"
                                        class="block text-sm font-medium text-gray-700">Type:</label>
                                    <select id="category"
                                        class="block w-full px-3 py-2 mt-1 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
                                        <option>Select</option>
                                        <!-- Add options here -->
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="description"
                                        class="block text-sm font-medium text-gray-700">Message:</label>
                                    <textarea id="description" rows="3" placeholder="Start writing here"
                                        class="block w-full px-3 py-2 mt-1 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm"></textarea>
                                </div>
                                <div class="mt-4">
                                    <x-modal-button :title="'Add Notification '"></x-modal-button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="w-full h-full ">
                        <x-input id="title" label="Title:" placeholder="Enter Title " name='market_name'
                        type="text"></x-input>
                        <x-input id="category" label="Category:" placeholder="Enter Category " name='market_name'
                        type="text"></x-input>
                        <label for="">
                            <textarea name="" id="" cols="30" placeholder="Start writing from here" rows="10"></textarea>
                        </label>

                    </div> --}}

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
