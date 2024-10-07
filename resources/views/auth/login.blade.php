@extends('layouts.layout')
@section('content')
    <div class="relative h-screen w-screen">
        <div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  z-20">
                <img class="w-[500px] object-contain" style="transform: rotateY(180deg)"
                    src="{{ asset('assets/hen-avatar-withbg.png') }}" alt="hen">
            </div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  z-10">
                <div style="box-shadow: 0px 0px 179px 300px #FCB276A0;">

                </div>
            </div>

        </div>

        <div class="flex justify-between h-[80vh] pt-[10vh] mx-[50px] lg:mx-[100px] xl:mx-[180px] z-50 relative ">
            {{-- <div class=" max-w-[600px] px-8 flex flex-col justify-center items-center h-full w-full rounded-2xl "
                style="box-shadow: 0px 0px 8px 0px #00000026; background:rgba(255, 255, 255, 0.389)">
                <div class="w-full">
                    <div>
                        <h1 class="text-customBlackColor font-bold text-[44px] text-center">Log in</h1>
                    </div>
                    <div class="mt-20 ">
                        <div>
                            <label for="" class="block text-customGrayColorDark text-sm">Email</label>
                            <input type="text"
                                class="border border-gray-400 bg-white rounded-2xl mt-1  placeholder:text-customGrayColorDark w-full placeholder:text-sm "
                                placeholder="Enter your email">
                        </div>
                        <div class="mt-5">
                            <label for="" class="block text-customGrayColorDark text-sm ">Password</label>
                            <input type="text"
                                class="border border-customGrayColorDark bg-white rounded-2xl mt-1  placeholder:text-customGrayColorDark w-full placeholder:text-sm "
                                placeholder="Enter your password">
                        </div>
                        <div>
                            <p class="text-customOrangeDark text-xs text-right ">Forgot password?</p>
                        </div>
                        <button class="gradient-bg w-full text-white rounded-full text-lg font-semi-bold mt-8 h-14">Log
                            in</button>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="flex flex-col justify-center items-center h-full w-full relative z-50  max-w-[600px]">
                <div>
                    <h2 class="text-[60px] text-customOrangeDark  font-bold leading-none "><span class="text-[50px]">Welcome
                            to</span> <br> Poultry Bazar</h2>
                    <p class="text-black text-custom16 font-normal mt-4 flex justify-start ">Start your new journey with
                        us and
                        join <br> our
                        community
                    </p>
                </div>
                <button class="gradient-bg w-[300px] text-white rounded-full text-lg font-semibold  h-14 mt-40">Get
                    Access</button>
            </div> --}}


            <div class="flex flex-col justify-center items-center h-full w-full relative z-50  max-w-[600px]">
                <div>
                    <h2 class="text-[60px] text-customOrangeDark  font-bold leading-none "><span class="text-[50px]">Welcome
                            to</span> <br> Poultry Bazar</h2>
                    <p class="text-black text-custom16 font-normal mt-4 flex justify-start ">Start your new journey with
                        us and
                        join <br> our
                        community
                    </p>
                </div>
                <button
                    class="gradient-bg w-[300px] text-white rounded-full text-lg font-semibold  h-14 mt-40">Login</button>
            </div>

            <div class=" max-w-[600px] px-8 flex flex-col justify-center items-center h-full w-full rounded-2xl "
                style="box-shadow: 0px 0px 8px 0px #00000026;  background:rgba(255, 255, 255, 0.389)">
                <div class="w-full">
                    <div>
                        <h1 class="text-customBlackColor font-bold text-[44px] text-center">Get Access</h1>
                    </div>
                    <form action="">
                        <div class="mt-20 ">
                            <div>
                                <label for="" class="block text-customGrayColorDark text-sm">Email</label>
                                <input type="text"
                                    class="border border-gray-400 bg-white rounded-2xl mt-1  placeholder:text-customGrayColorDark w-full placeholder:text-sm "
                                    placeholder="Enter your email">
                            </div>
                            <div>
                                <label for="" class="block text-customGrayColorDark text-sm mt-5">Email</label>
                                <input type="text"
                                    class="border border-gray-400 bg-white rounded-2xl mt-1  placeholder:text-customGrayColorDark w-full placeholder:text-sm "
                                    placeholder="Enter your email">
                            </div>
                            <div>
                                <label for="" class="block text-customGrayColorDark text-sm mt-5">Email</label>
                                <input type="text"
                                    class="border border-gray-400 bg-white rounded-2xl mt-1  placeholder:text-customGrayColorDark w-full placeholder:text-sm "
                                    placeholder="Enter your email">
                            </div>
                            <div class="mt-5">
                                <label for="" class="block text-customGrayColorDark text-sm mt-5 ">Password</label>
                                <input type="text"
                                    class="border border-customGrayColorDark bg-white rounded-2xl mt-1  placeholder:text-customGrayColorDark w-full placeholder:text-sm "
                                    placeholder="Enter your password">
                            </div>

                            <button
                                class="gradient-bg w-full text-white rounded-full text-lg font-semi-bold mt-8 h-14">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="absolute bottom-5 flex justify-center  w-screen">

            <p class="text-black text-sm "> Powered by <span class="text-customOrangeDark">Poul3yBazar</span> &
                Developed by
                <a target="_blank" class="text-blue-500" href="https://thewebconcept.com/">TheWebConcept</a>.
            </p>
        </div>
    </div>
@endsection
