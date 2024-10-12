@extends('layouts.layout')
@section('content')
    <div class="w-full min-h-[88vh] gradient-border space-x-2  rounded-lg">
        <div class="flex items-center p-8 gap-2 ">
            <img class="h-[50px] w-[50px]" src="{{ asset('assets/Ellipse 2.png') }}" alt="">
            <div class="">
                <div class="text-sm font-semibold text-black">Lorem Ipsum</div>
                <div class="text-[10px] text-black">Administrator</div>
            </div>
        </div>
        <div id="extraSection" class="flex    w-full h-full mx-auto">
            <div class="relative z-10 grid grid-cols-2 lg:grid-cols-4 md:grid-cols-1 gap-6 mb-8 text-center xl:grid-cols-4">
                <!-- Market Box 1 -->
                <div class="relative">
                    <input type="checkbox" name="market" id="market1" class="sr-only peer" checked>
                    <label for="market1"
                        class="block h-full p-4 transition-all bg-white border-2 border-gray-200 cursor-pointer rounded-tl-xl shadow-lg peer-checked:bg-orange-100 peer-checked:border-orange-300">
                        <img src="{{ asset('assets/icons/market update.png') }}" alt="Market icon">
                        <h3 class="text-xl font-semibold text-customGrayColorDark">Total Markets</h3>
                    </label>
                    <div
                        class="absolute w-6 h-6 transition-all border-2 border-gray-300 rounded-full top-4 right-4 peer-checked:border-customOrangeDark peer-checked:bg-customOrangeDark">
                    </div>
                </div>


                <!-- Market Box 2 -->
                <div class="relative">
                    <input type="checkbox" name="market" id="market2" class="sr-only peer">
                    <label for="market2"
                        class="block h-full p-4 transition-all bg-white border-2 border-gray-200 cursor-pointer  shadow-lg peer-checked:bg-orange-100 peer-checked:border-orange-300">
                        <img src="{{ asset('assets/icons/pos.png') }}" alt="Market icon">
                        <h3 class="text-xl font-semibold text-customGrayColorDark">Total Markets</h3>
                    </label>
                    <div
                        class="absolute w-6 h-6 transition-all border-2 border-gray-300 rounded-full top-4 right-4 peer-checked:border-customOrangeDark peer-checked:bg-customOrangeDark">
                    </div>
                </div>


                <!-- Market Box 3 -->
                <div class="relative">
                    <input type="checkbox" name="market" id="market3" class="sr-only peer">
                    <label for="market3"
                        class="block h-full p-4 transition-all bg-white border-2 border-gray-200 shadow-lg cursor-pointer
                         peer-checked:bg-orange-100 peer-checked:border-orange-300">
                        <img src="{{ asset('assets/icons/floks.png') }}" alt="Market icon">
                        <h3 class="text-xl font-semibold text-customGrayColorDark">Total Markets</h3>
                    </label>
                    <div
                        class="absolute w-6 h-6 transition-all border-2 border-gray-300 rounded-full top-4 right-4 peer-checked:border-customOrangeDark peer-checked:bg-customOrangeDark">
                    </div>
                </div>

                <!-- Market Box 4 -->
                <div class="relative">
                    <input type="checkbox" name="market" id="market4" class="sr-only peer">
                    <label for="market4"
                        class="block h-full p-4 transition-all bg-white border-2 border-gray-200 cursor-pointer  shadow-xl  rounded-tr-xl peer-checked:bg-orange-100 peer-checked:border-orange-300">
                        <img src="{{ asset('assets/icons/e-commerce.png') }}" alt="Market icon">
                        <h3 class="text-xl font-semibold text-customGrayColorDark">Total Markets</h3>
                    </label>
                    <div
                        class="absolute w-6 h-6 transition-all border-2 border-gray-300 rounded-full top-4 right-4 peer-checked:border-customOrangeDark peer-checked:bg-customOrangeDark">
                    </div>
                </div>
            </div>
        </div>
    @endsection
