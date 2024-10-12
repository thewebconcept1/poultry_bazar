@extends('layouts.layout')

@section('content')
    <div class="h-full p-8 py-2 rounded-lg gradient-border">
        <h1 class="text-[32px] mt-[10px]  font-bold">Market Panel</h1>
        <div class="grid grid-cols-1 gap-4 mt-10 mb-4 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2">
            <div
                class="flex items-center justify-between w-full h-full p-4 bg-orange-100 border-4 shadow-sm border-customOrangeLight rounded-xl">
                <div>
                    <h2 class="mb-1 text-sm font-medium text-gray-400">Operators</h2>
                    <p class=" text-2xl   font-bold text-gray-800">72</p>
                </div>
                <div class="flex justify-center items-center w-14 h-14  xl:p-5 rounded-full bg-customOrangeDark">
                    <img class="min-w-7" src="{{ asset('assets/icons/dashborad icons1.png') }}" alt="">
                </div>
            </div>
            <div
                class="flex items-center justify-between w-full h-full p-4 bg-orange-100 border-4 shadow-sm border-customOrangeLight rounded-xl">
                <div>
                    <h2 class="mb-1 text-sm font-medium text-gray-400">Cities</h2>
                    <p class=" text-2xl font-bold text-gray-800">5,732</p>
                </div>
                <div class="w-14 h-14 p-5 rounded-full bg-customOrangeDark flex justify-center items-center">
                    <img class="min-w-8 " src="{{ asset('assets/icons/dashborad icons2.png') }}" alt="">
                </div>
            </div>
            <div
                class="flex items-center justify-between w-full h-full p-4 bg-orange-100 border-4 shadow-sm border-customOrangeLight rounded-xl">
                <div>
                    <h2 class="mb-1 text-sm font-medium text-gray-400">Blogs</h2>
                    <p class=" text-2xl font-bold text-gray-800">5,732</p>
                </div>
                <div class="w-14 h-14 p-5 flex justify-center items-center rounded-full bg-customOrangeDark">
                    <img class="min-w-7" src="{{ asset('assets/icons/dashborad icons3.png') }}" alt="">
                </div>
            </div>
            <div
                class="flex items-center justify-between w-full h-full p-4 bg-orange-100 border-4 shadow-sm border-customOrangeLight rounded-xl">
                <div>
                    <h2 class="mb-1 text-sm font-medium text-gray-400">Diseases</h2>
                    <p class=" text-2xl font-bold text-gray-800">10</p>
                </div>
                <div class="w-14 h-14 p-5 flex justify-center items-center rounded-full bg-customOrangeDark">
                    <img class="min-w-7" src="{{ asset('assets/icons/dashborad icons4.png') }}" alt="">
                </div>
            </div>
        </div>

    </div>
@endsection
