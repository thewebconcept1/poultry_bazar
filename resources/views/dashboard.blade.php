@extends('layouts.layout')

@section('title')
    Dasboard
@endsection
@section('content')
    <div class="min-h-[88vh] p-8 py-2 rounded-lg gradient-border ">
        @if (session('user_details')['user_role'] == 'admin')
            <h1 class="text-[32px] mt-[10px]  font-bold">Market Panel</h1>
            <div class="grid grid-cols-1 gap-4 mt-10 mb-4 xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-2">
                <div
                    class="flex items-center justify-between w-full h-full p-4 bg-orange-100 border-4 shadow-sm border-customOrangeLight rounded-xl">
                    <div>
                        <h2 class="mb-1 text-sm font-medium text-gray-400">Operators</h2>
                        <p class="text-2xl font-bold text-gray-800 ">72</p>
                    </div>
                    <div class="flex items-center justify-center rounded-full">
                        <img class="h-14 w-14" src="{{ asset('assets/icons/dex icon1.png') }}" alt="">
                    </div>
                </div>
                <div
                    class="flex items-center justify-between w-full h-full p-4 bg-orange-100 border-4 shadow-sm border-customOrangeLight rounded-xl">
                    <div>
                        <h2 class="mb-1 text-sm font-medium text-gray-400">Cities</h2>
                        <p class="text-2xl font-bold text-gray-800 ">5,732</p>
                    </div>
                    <div class="flex items-center justify-center rounded-full">
                        <img class="h-14 w-14" src="{{ asset('assets/icons/dex icon2.png') }}" alt="">
                    </div>
                </div>
                <div
                    class="flex items-center justify-between w-full h-full p-4 bg-orange-100 border-4 shadow-sm border-customOrangeLight rounded-xl">
                    <div>
                        <h2 class="mb-1 text-sm font-medium text-gray-400">Blogs</h2>
                        <p class="text-2xl font-bold text-gray-800 ">5,732</p>
                    </div>
                    <div class="flex items-center justify-center rounded-full">
                        <img class="h-14 w-14" src="{{ asset('assets/icons/dex icon3.png') }}" alt="">
                    </div>
                </div>
                <div
                    class="flex items-center justify-between w-full h-full p-4 bg-orange-100 border-4 shadow-sm border-customOrangeLight rounded-xl">
                    <div>
                        <h2 class="mb-1 text-sm font-medium text-gray-400">Diseases</h2>
                        <p class="text-2xl font-bold text-gray-800 ">10</p>
                    </div>
                    <div class="flex items-center justify-center rounded-full">
                        <img class="h-14 w-14" src="{{ asset('assets/icons/dex icon4.png') }}" alt="">
                    </div>
                </div>
            </div>
        @else
            <h1 class="text-[32px] mt-[10px]  font-bold">Dashboard</h1>
            <h1 class="text-[15px] mt-[7px] font-semibold">1, December 2024</h1>
            <div class="grid grid-cols-1 gap-4 mt-3 mb-4 xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-2">
                <div
                    class="flex items-center justify-between w-full h-full p-4 bg-orange-100 border-4 shadow-sm border-customOrangeLight rounded-xl">
                    <div>
                        <h2 class="mb-1 text-sm font-medium text-gray-400">Total Markets</h2>
                        <p class="text-2xl font-bold text-gray-800 ">72</p>
                    </div>
                    <div class="flex items-center justify-center rounded-full">
                        <img class="w-16 h-16" src="{{ asset('assets/icons/dex icon1.png') }}" alt="">
                    </div>
                </div>
                <div
                    class="flex items-center justify-between w-full h-full p-4 bg-orange-100 border-4 shadow-sm border-customOrangeLight rounded-xl">
                    <div>
                        <h2 class="mb-1 text-sm font-medium text-gray-400">Total Blogs</h2>
                        <p class="text-2xl font-bold text-gray-800 ">5,732</p>
                    </div>
                    <div class="flex items-center justify-center rounded-full">
                        <img class="w-16 h-16" src="{{ asset('assets/icons/dex icon2.png') }}" alt="">
                    </div>
                </div>
                <div
                    class="flex items-center justify-between w-full h-full p-4 bg-orange-100 border-4 shadow-sm border-customOrangeLight rounded-xl">
                    <div>
                        <h2 class="mb-1 text-sm font-medium text-gray-400">Diseases</h2>
                        <p class="text-2xl font-bold text-gray-800 ">5,732</p>
                    </div>
                    <div class="flex items-center justify-center rounded-full">
                        <img class="w-16 h-16" src="{{ asset('assets/icons/dex icon3.png') }}" alt="">
                    </div>
                </div>
                <div
                    class="flex items-center justify-between w-full h-full p-4 bg-orange-100 border-4 shadow-sm border-customOrangeLight rounded-xl">
                    <div>
                        <h2 class="mb-1 text-sm font-medium text-gray-400">Pending Queries</h2>
                        <p class="text-2xl font-bold text-gray-800 ">10</p>
                    </div>
                    <div class="flex items-center justify-center rounded-full">
                        <img class="w-16 h-16" src="{{ asset('assets/icons/dex icon4.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="mx-auto my-3 ">
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">

                    <!-- Blogs Section -->
                    <div class="bg-white border-2 rounded-lg shadow-lg border-customOrangeLight">
                        <div class="flex items-center justify-between p-3 mb-4 bg-orange-100 rounded-t-lg">
                            <h1 class="text-sm font-bold text-gray-800">Blogs</h1>
                            <button
                                class="py-1 px-2 text-[10px] shadow-md font-medium text-orange-500 transition-colors bg-white rounded-full ">
                                Add New
                            </button>
                        </div>

                        <div class="p-2 m-2 space-y-4 rounded-lg border-[2px] ">
                            <!-- Blog Item -->
                            <div class="flex items-start">
                                <img class="flex-shrink-0 object-cover w-20 h-20 rounded"
                                    src="{{ asset('assets/Rectangle 403.jpg') }}" alt="Blog Image">
                                <div class="ml-4">
                                    <h3 class="text-xs xl:text-[16px] font-semibold">Lorem ipsum dolor sit amet, consectetur
                                    </h3>
                                    <p class="text-[10px] text-gray-600 xl:text-[13px] mt-1">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing
                                        elit.</p>
                                </div>
                            </div>
                            <!-- Repeat similar blocks for more blogs -->
                        </div>
                        <div class="p-2 m-2 space-y-4 rounded-lg border-[2px] ">
                            <!-- Blog Item -->
                            <div class="flex items-start">
                                <img class="flex-shrink-0 object-cover w-20 h-20 rounded"
                                    src="{{ asset('assets/Rectangle 403.jpg') }}" alt="Blog Image">
                                <div class="ml-4">
                                    <h3 class="text-xs xl:text-[16px] font-semibold">Lorem ipsum dolor sit amet, consectetur
                                    </h3>
                                    <p class="text-[10px] text-gray-600 xl:text-[13px] mt-1">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing
                                        elit.</p>
                                </div>
                            </div>
                            <!-- Repeat similar blocks for more blogs -->
                        </div>
                    </div>

                    <!-- Diseases Section -->
                    <div class="bg-white border-2 rounded-lg shadow-lg border-customOrangeLight">
                        <div class="flex items-center justify-between p-3 mb-4 bg-orange-100 rounded-t-lg">
                            <h1 class="text-sm font-bold text-gray-800">Diseases</h1>
                            <button
                                class="py-1 px-2 text-[10px] shadow-md font-medium text-orange-500 transition-colors bg-white rounded-full ">
                                Add New
                            </button>
                        </div>

                        <div class="p-2 m-2 space-y-4 rounded-lg border-[2px] ">
                            <!-- Blog Item -->
                            <div class="flex items-start">
                                <img class="flex-shrink-0 object-cover w-20 h-20 rounded"
                                    src="{{ asset('assets/Rectangle 403.jpg') }}" alt="Blog Image">
                                <div class="ml-4">
                                    <h3 class="text-xs xl:text-[16px] font-semibold">Lorem ipsum dolor sit amet, consectetur
                                    </h3>
                                    <p class="text-[10px] text-gray-600 xl:text-[13px] mt-1">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing
                                        elit.</p>
                                </div>
                            </div>
                            <!-- Repeat similar blocks for more blogs -->
                        </div>
                        <div class="p-2 m-2 space-y-4 rounded-lg border-[2px] ">
                            <!-- Blog Item -->
                            <div class="flex items-start">
                                <img class="flex-shrink-0 object-cover w-20 h-20 rounded"
                                    src="{{ asset('assets/Rectangle 403.jpg') }}" alt="Blog Image">
                                <div class="ml-4">
                                    <h3 class="text-xs xl:text-[16px] font-semibold">Lorem ipsum dolor sit amet,
                                        consectetur
                                    </h3>
                                    <p class="text-[10px] text-gray-600 xl:text-[13px] mt-1">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing
                                        elit.</p>
                                </div>
                            </div>
                            <!-- Repeat similar blocks for more blogs -->
                        </div>
                    </div>

                    <!-- Consultancy Videos Section -->
                    <div class="bg-white border-2 rounded-lg shadow-lg border-customOrangeLight">
                        <div class="flex items-center justify-between p-3 mb-4 bg-orange-100 rounded-t-lg">
                            <h1 class="text-sm font-bold text-gray-800">Consultancy Videos</h1>
                            <button
                                class="py-1 px-2 text-[10px] shadow-md font-medium text-orange-500 transition-colors bg-white rounded-full ">
                                Add New
                            </button>
                        </div>

                        <div class="p-2 m-2 space-y-4 rounded-lg border-[2px] ">
                            <!-- Blog Item -->
                            <div class="flex items-start">
                                <img class="flex-shrink-0 object-cover w-20 h-20 rounded"
                                    src="{{ asset('assets/Rectangle 403.jpg') }}" alt="Blog Image">
                                <div class="ml-4">
                                    <h3 class="text-xs xl:text-[16px] font-semibold">Lorem ipsum dolor sit amet,
                                        consectetur
                                    </h3>
                                    <p class="text-[10px] text-gray-600 xl:text-[13px] mt-1">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing
                                        elit.</p>
                                </div>
                            </div>
                            <!-- Repeat similar blocks for more blogs -->
                        </div>
                        <div class="p-2 m-2 space-y-4 rounded-lg border-[2px] ">
                            <!-- Blog Item -->
                            <div class="flex items-start">
                                <img class="flex-shrink-0 object-cover w-20 h-20 rounded"
                                    src="{{ asset('assets/Rectangle 403.jpg') }}" alt="Blog Image">
                                <div class="ml-4">
                                    <h3 class="text-xs xl:text-[16px] font-semibold">Lorem ipsum dolor sit amet,
                                        consectetur
                                    </h3>
                                    <p class="text-[10px] text-gray-600 xl:text-[13px] mt-1">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing
                                        elit.</p>
                                </div>
                            </div>
                            <!-- Repeat similar blocks for more blogs -->
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- <div class="container p-4 mx-auto">
            <div class="grid-cols-1 gap-4 gird md:grid-cols-2">
                <div class="flex p-4 bg-white rounded-lg shadow-md">
                    <img class="rounded-lg" src="{{ asset('assets/Rectangle 403.jpg') }}" alt="">
                    <h2 class="mt-4 font-bold text-md">
                        Lorem ipsum dolor sit amet consectetur.
                    </h2>
                    <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>


                </div>

            </div>
        </div> --}}
    </div>
@endsection
