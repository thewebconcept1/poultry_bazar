<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', '') - Poultry Bazar</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        * {
            scroll-behavior: smooth;
        }

        #loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            z-index: 9999;
        }
    </style>

<body class="relative text-gray-800 bg-white body">
    <nav
        class="container sticky z-40 w-full mx-auto border-gray-200 rounded-full shadow-xl gradient-bg top-1 dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between w-full px-12 py-3 mx-auto xl:max-w-">
            <!-- Logo -->
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/icons/logowhite.png') }}" alt="">
            </a>

            <!-- Toggle Button -->
            <button id="menu-toggle" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg ms-auto md:hidden hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <ul class="hidden md:flex">
                <li>
                    <a href="#" class="px-3 text-white rounded hover:bg-orange-500">What is it?</a>
                </li>
                <li>
                    <a href="#home" class="px-3 text-white rounded hover:bg-orange-500">Home</a>
                </li>
                <li>
                    <a href="#about" class="px-3 text-white rounded hover:bg-orange-500">About</a>
                </li>
                <li>
                    <a href="#blogs" class="px-3 text-white rounded hover:bg-orange-500">Blogs</a>
                </li>
            </ul>
            <!-- Sidebar Menu -->
            <div id="sidebar-menu"
                class="fixed top-0 left-0 z-50 flex flex-col w-64 h-full text-white transition-transform duration-300 transform -translate-x-full bg-customOrangeDark ">
                <button id="menu-close" class="self-end p-4">
                    {{-- <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg> --}}
                </button>
                <ul class="flex flex-col px-4 space-y-4">
                    <li>
                        <a href="#" class="px-3 py-2 rounded textco hover:bg-orange-500">What is it?</a>
                    </li>
                    <li>
                        <a href="#home" class="px-3 py-2 text-white rounded hover:bg-orange-500">Home</a>
                    </li>
                    <li>
                        <a href="#about" class="px-3 py-2 text-white rounded hover:bg-orange-500">About</a>
                    </li>
                    <li>
                        <a href="#blogs" class="px-3 py-2 text-white rounded hover:bg-orange-500">Blogs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=" section" id="home">
        <div
            class="container relative z-20 flex flex-col items-center justify-center w-full px-6 mx-auto mt-10 xl:px-14 lg:flex-row lg:justify-between xl:mx-auto">

            <!-- Welcome Section -->
            <div
                class="relative z-40 flex flex-col items-center lg:mt-0 mt-10 xl:mx-auto justify-center w-[70vw] h-full ">
                <div id="welcomeDiv" class="text-center lg:text-left">
                    <h2 class="text-4xl font-bold leading-tight lg:text-5xl text-customOrangeDark">
                        <span>Welcome to</span><br> Poultry Bazar
                    </h2>
                    <p class="mt-4 text-sm font-light text-gray-600 lg:text-base">
                        Stay informed with live updates on the latest poultry market rates. This feature provides users
                        with real-time price trends for chickens across different regions. Gain insights to make
                        informed decisions on buying and selling, helping you maximize your profits in a competitive
                        market.
                    </p>
                </div>
            </div>
            <!-- Signup Form Section (Initially hidden) -->
            <div class="hidden w-[30vw] h-full lg:block">
                <div class="p-5 w-5xl xl:px-5 xl:p-0">
                    <div>
                        <div class="absolute z-20 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <img id="henImage" class="xl:w-[260px]  object-contain lg:w-[20vw]"
                                style="transform: rotateY(360deg)" src="{{ asset('assets/hen-avatar-withbg.png') }}"
                                alt="hen">
                        </div>
                        <div class="absolute z-10 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <div style="box-shadow: 0px 0px 179px 300px #FCB276A0;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="z-40 flex items-center  justify-end w-[80vw] px-2 mt-6 md:mt-4 md:px-0 ">
                {{-- <div class="grid grid-cols-2 gap-5 ">
                    <div class="max-w-[250px]  p-4 text-center bg-white rounded-lg shadow-lg">
                        <div class="flex items-center justify-center mx-auto mb-4 ">
                            <img src="{{ asset('assets/icons/Group 44.png') }}" alt="Market Rates Icon"
                                class="w-24 h-24">
                        </div>
                        <h3 class="mb-2 text-lg font-bold text-gray-800">Market Rates</h3>
                        <p class="text-sm text-gray-600">Get real-time poultry prices to stay ahead in the market.</p>
                    </div>
                    <div class="max-w-[250px] p-4 text-center bg-white rounded-lg shadow-lg">
                        <div class="flex items-center justify-center mx-auto mb-4 ">
                            <img src="{{ asset('assets/icons/pos.png') }}" alt="Market Rates Icon" class="w-24 h-24">
                        </div>
                        <h3 class="mb-2 text-lg font-bold text-gray-800">Market Rates</h3>
                        <p class="text-sm text-gray-600">Get real-time poultry prices to stay ahead in the market.</p>
                    </div>
                    <div class="max-w-[250px] p-4 text-center bg-white rounded-lg shadow-lg">
                        <div class="flex items-center justify-center mx-auto mb-4 ">
                            <img src="{{ asset('assets/icons/floks.png') }}" alt="Market Rates Icon"
                                class="w-24 h-24">
                        </div>
                        <h3 class="mb-2 text-lg font-bold text-gray-800">Market Rates</h3>
                        <p class="text-sm text-gray-600">Get real-time poultry prices to stay ahead in the market.</p>
                    </div>
                    <div class="max-w-[250px] p-4 text-center bg-white rounded-lg shadow-lg">
                        <div class="flex items-center justify-center mx-auto mb-4 ">
                            <img src="{{ asset('assets/icons/e-commerce.png') }}" alt="Market Rates Icon"
                                class="w-24 h-24">
                        </div>
                        <h3 class="mb-2 text-lg font-bold text-gray-800">Market Rates</h3>
                        <p class="text-sm text-gray-600">Get real-time poultry prices to stay ahead in the market.</p>
                    </div>
                </div> --}}
                <img src="{{ asset('assets/icons/svgsection1/imagesvgsec.svg') }}" alt="">
            </div>
        </div>

        <div class="">
            <div
                class="container grid grid-cols-2 gap-6 px-4 py-4 mx-auto mt-10 md:gap-10 xl:mt-20 sm:mt-20 lg:grid-cols-5 sm:grid-cols-2 md:grid-cols-4 md:px-12">
                <div class="w-full h-auto border rounded-lg border-customOrangeDark">
                    <div class="flex gap-14 sm:gap-40 m-4 md:gap-8 xl:gap-[105px]">
                        <div>
                            <h1 class="font-semibold">410</h1>
                            <p class="font-semibold text-customOrangeDark">Lahore</p>
                        </div>
                        <div class="flex flex-col justify-center">
                            <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 11L11 3L7 7L1 1M19 11H13M19 11V5" stroke="#EB2424" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-full h-20 border rounded-lg border-customOrangeDark">
                    <div class="flex gap-14 sm:gap-40 m-4 md:gap-8 xl:gap-[105px]">
                        <div>
                            <h1 class="font-semibold">330</h1>
                            <p class="font-semibold text-customOrangeDark">Multan</p>
                        </div>
                        <div class="flex flex-col justify-center">
                            <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 1L11 9L7 5L1 11M19 1H13M19 1V7" stroke="#06C230" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                    </div>
                </div>
                <div class="w-full h-20 border rounded-lg border-customOrangeDark">
                    <div class="flex gap-14 sm:gap-40 m-4 md:gap-8 xl:gap-[105px]">
                        <div>
                            <h1 class="font-semibold">280</h1>
                            <p class="font-semibold text-customOrangeDark">Islamabad</p>
                        </div>
                        <div class="flex flex-col justify-center">
                            <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 11L11 3L7 7L1 1M19 11H13M19 11V5" stroke="#EB2424" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-full h-20 border rounded-lg border-customOrangeDark">
                    <div class="flex gap-14 sm:gap-40 m-4 md:gap-8 xl:gap-[105px]">
                        <div>
                            <h1 class="font-semibold">350</h1>
                            <p class="font-semibold text-customOrangeDark">Peshawar</p>
                        </div>
                        <div class="flex flex-col justify-center">
                            <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 1L11 9L7 5L1 11M19 1H13M19 1V7" stroke="#06C230" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                    </div>
                </div>
                <div class="w-full h-20 border rounded-lg border-customOrangeDark">
                    <div class="m-4 ms-6">
                        <h1 class="font-bold">20+More</h1>
                        <p class="font-bold lg:text-[15px] md:text-[12px] text-customOrangeDark">Cities in App</p>
                    </div>
                </div>
                {{-- <div class="h-20 px-4 text-center w-44 ">
                    <h1 class="mt-1 font-semibold text-[100%] text-customGrayColorDark">Download App</h1>
                    <div class="flex justify-center">
                        <svg width="136" height="46" viewBox="0 0 136 46" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="136" height="46" rx="8" fill="url(#pattern0_1897_5533)" />
                            <defs>
                                <pattern id="pattern0_1897_5533" patternContentUnits="objectBoundingBox"
                                    width="1" height="1">
                                    <use xlink:href="#image0_1897_5533"
                                        transform="matrix(0.00574866 0 0 0.016996 -1.1688 -0.304348)" />
                                </pattern>
                                <image id="image0_1897_5533" width="411" height="110"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="section" id="about">
            <div class="flex items-center justify-center p-5 mt-12">
                <div class="text-center">
                    <h2 class="text-2xl font-semibold text-customOrangeDark">Services</h2>
                    <p class="sm:mx-[150px] mt-2 text-gray-500">Revolutionize your poultry business with tools to stay
                        informed,
                        streamline operations, optimize management,
                        expand your market reach, enhance expertise, and simplify hiring processes.</p>
                </div>
            </div>

            <div class="flex items-center justify-center mt-16">
                <div class="container px-5 ">
                    <div class="grid grid-cols-1 gap-8 text-center md:grid-cols-3">
                        <!-- Card 1 -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset("assets/icons/market updatesvg.svg") }}" alt="">
                            <h3 class="text-2xl font-semibold text-customOrangeDark">Market Updates</h3>
                            <p class="mt-2 text-sm text-gray-500">Stay informed with live updates on poultry market
                                rates, providing real-time price trends for chickens across regions. This feature helps
                                you make informed decisions, adapt to price changes, and maximize profits in the
                                competitive poultry market.</p>
                        </div>
                        <!-- Card 2 -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset("assets/icons/possvg.svg") }}" alt="">
                            <h3 class="text-2xl font-semibold text-customOrangeDark">Point of Sale</h3>
                            <p class="mt-2 text-sm text-gray-500 ">Streamline sales and financial management with an
                                integrated Point of Sale system. Track sales, generate invoices, and gain insights into
                                daily transactions. A free printer and initial receipt roll will be provided by POUL3Y
                                to help you start smoothly.</p>
                        </div>
                        <!-- Card 3 -->
                        <div class="flex flex-col items-center">
                           <img src="{{ asset("assets/icons/flokssvg.svg") }}" alt="">

                            <h3 class="text-2xl font-semibold text-customOrangeDark">Flock Management</h3>
                            <p class="mt-2 text-sm text-gray-500">Manage flock health, productivity, and expenses with
                                comprehensive tools. Improve flock health, streamline operations, and optimize
                                profitability. Monitor feed, track growth, and ensure flocks thrive with this all-in-one
                                solution designed for poultry farming success.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center mt-8">
                <div class="container px-4 mx-auto">
                    <div class="grid grid-cols-1 gap-8 text-center md:grid-cols-3">
                        <!-- Card 1 -->
                        <div class="flex flex-col items-center">
                           <img src="{{ asset("assets/icons/e-commercesvg.svg") }}" alt="">

                            <h3 class="text-2xl font-semibold text-customOrangeDark">E-Commerce </h3>
                            <p class="mt-2 text-sm text-gray-500">Expand your reach with the E-Commerce module to buy
                                and sell poultry products online. Simplify online trading, attract new customers, and
                                boost revenue while streamlining operations for greater efficiency and profitability.
                            </p>
                        </div>
                        <!-- Card 2 -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset("assets/icons/market updatesvg.svg") }}" alt="">
                            <h3 class="text-2xl font-semibold text-customOrangeDark">Knowledge Center </h3>
                            <p class="mt-2 text-sm text-gray-500">Enhance your expertise with the Knowledge Center
                                module, offering easy access to resources on poultry management. Get valuable guides,
                                best practices, and insights to make informed decisions and optimize your farm's
                                productivity.</p>
                        </div>
                        <!-- Card 3 -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset("assets/icons/possvg.svg") }}" alt="">
                            <h3 class="text-2xl font-semibold text-customOrangeDark">Job Portal</h3>
                            <p class="mt-2 text-sm text-gray-500">Connect with top talent using the Job Portal module.
                                Post job openings, review applications, and find the right candidates. Streamline
                                recruitment to build a skilled, motivated team to drive your business forward.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="flex items-center justify-center px-4 mt-14">
            <div class="text-center">
                <!-- App Store Buttons -->
                <div class="flex justify-center gap-4 mb-4">
                    <img src="{{ asset('assets/app and apple store.png') }}" alt="App Store and Google Play"
                        class="h-auto w-80">
                </div>

                <!-- Section Title -->
                <h2 class="text-xl font-semibold text-gray-800">Choose the plan that’s right for your business</h2>
                <h1 class="mt-6"><span class="font-bold">Start with free plan </span>to try our platform for an
                    unlimited period of time.
                    <span class="text-customOrangeDark"> Get Started</span>
                </h1>
            </div>
        </div>
        <div class="section" id="price">

            <div class="container flex items-center justify-center mx-auto mt-14">
                <div class="px:0 md:px-4 ">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                        <!-- Card 1 -->
                        <div
                            class="flex flex-col justify-between overflow-hidden text-center bg-white rounded-lg shadow-2xl xl:w-full xl:h-full lg:w-full lg:h-full md:h-full ">
                            <div class="px-4 py-6">
                                <h3 class="text-lg font-semibold text-customOrangeDark">Start up</h3>
                                <p class="mt-2 text-gray-500">Fast start your business with this</p>
                                <p class="mt-4 text-2xl font-bold">$10 <span class="text-sm font-normal">/mon</span>
                                </p>
                                <ul class="mt-4 space-y-2 text-sm text-gray-600">
                                    <div class="flex justify-between pt-2">
                                        <div>
                                            <li>Client Panel</li>
                                        </div>
                                        <div>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 6V14M1 10C1 11.1819 1.23279 12.3522 1.68508 13.4442C2.13738 14.5361 2.80031 15.5282 3.63604 16.364C4.47177 17.1997 5.46392 17.8626 6.55585 18.3149C7.64778 18.7672 8.8181 19 10 19C11.1819 19 12.3522 18.7672 13.4442 18.3149C14.5361 17.8626 15.5282 17.1997 16.364 16.364C17.1997 15.5282 17.8626 14.5361 18.3149 13.4442C18.7672 12.3522 19 11.1819 19 10C19 8.8181 18.7672 7.64778 18.3149 6.55585C17.8626 5.46392 17.1997 4.47177 16.364 3.63604C15.5282 2.80031 14.5361 2.13738 13.4442 1.68508C12.3522 1.23279 11.1819 1 10 1C8.8181 1 7.64778 1.23279 6.55585 1.68508C5.46392 2.13738 4.47177 2.80031 3.63604 3.63604C2.80031 4.47177 2.13738 5.46392 1.68508 6.55585C1.23279 7.64778 1 8.8181 1 10Z"
                                                    stroke="url(#paint0_linear_1789_9048)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1789_9048" x1="10"
                                                        y1="1" x2="10" y2="19"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#FCB376" />
                                                        <stop offset="1" stop-color="#FE8A29" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex justify-between pt-2 ">
                                        <div>
                                            <li>Single User</li>
                                        </div>
                                        <div>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 6V14M1 10C1 11.1819 1.23279 12.3522 1.68508 13.4442C2.13738 14.5361 2.80031 15.5282 3.63604 16.364C4.47177 17.1997 5.46392 17.8626 6.55585 18.3149C7.64778 18.7672 8.8181 19 10 19C11.1819 19 12.3522 18.7672 13.4442 18.3149C14.5361 17.8626 15.5282 17.1997 16.364 16.364C17.1997 15.5282 17.8626 14.5361 18.3149 13.4442C18.7672 12.3522 19 11.1819 19 10C19 8.8181 18.7672 7.64778 18.3149 6.55585C17.8626 5.46392 17.1997 4.47177 16.364 3.63604C15.5282 2.80031 14.5361 2.13738 13.4442 1.68508C12.3522 1.23279 11.1819 1 10 1C8.8181 1 7.64778 1.23279 6.55585 1.68508C5.46392 2.13738 4.47177 2.80031 3.63604 3.63604C2.80031 4.47177 2.13738 5.46392 1.68508 6.55585C1.23279 7.64778 1 8.8181 1 10Z"
                                                    stroke="url(#paint0_linear_1789_9048)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1789_9048" x1="10"
                                                        y1="1" x2="10" y2="19"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#FCB376" />
                                                        <stop offset="1" stop-color="#FE8A29" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex justify-between pt-2">
                                        <div>
                                            <li>5 Drivers</li>
                                        </div>
                                        <div>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 6V14M1 10C1 11.1819 1.23279 12.3522 1.68508 13.4442C2.13738 14.5361 2.80031 15.5282 3.63604 16.364C4.47177 17.1997 5.46392 17.8626 6.55585 18.3149C7.64778 18.7672 8.8181 19 10 19C11.1819 19 12.3522 18.7672 13.4442 18.3149C14.5361 17.8626 15.5282 17.1997 16.364 16.364C17.1997 15.5282 17.8626 14.5361 18.3149 13.4442C18.7672 12.3522 19 11.1819 19 10C19 8.8181 18.7672 7.64778 18.3149 6.55585C17.8626 5.46392 17.1997 4.47177 16.364 3.63604C15.5282 2.80031 14.5361 2.13738 13.4442 1.68508C12.3522 1.23279 11.1819 1 10 1C8.8181 1 7.64778 1.23279 6.55585 1.68508C5.46392 2.13738 4.47177 2.80031 3.63604 3.63604C2.80031 4.47177 2.13738 5.46392 1.68508 6.55585C1.23279 7.64778 1 8.8181 1 10Z"
                                                    stroke="url(#paint0_linear_1789_9048)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1789_9048" x1="10"
                                                        y1="1" x2="10" y2="19"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#FCB376" />
                                                        <stop offset="1" stop-color="#FE8A29" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex justify-between pt-2">
                                        <div>
                                            <li>50 Google Map API Call</li>
                                        </div>
                                        <div>
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 6V14M1 10C1 11.1819 1.23279 12.3522 1.68508 13.4442C2.13738 14.5361 2.80031 15.5282 3.63604 16.364C4.47177 17.1997 5.46392 17.8626 6.55585 18.3149C7.64778 18.7672 8.8181 19 10 19C11.1819 19 12.3522 18.7672 13.4442 18.3149C14.5361 17.8626 15.5282 17.1997 16.364 16.364C17.1997 15.5282 17.8626 14.5361 18.3149 13.4442C18.7672 12.3522 19 11.1819 19 10C19 8.8181 18.7672 7.64778 18.3149 6.55585C17.8626 5.46392 17.1997 4.47177 16.364 3.63604C15.5282 2.80031 14.5361 2.13738 13.4442 1.68508C12.3522 1.23279 11.1819 1 10 1C8.8181 1 7.64778 1.23279 6.55585 1.68508C5.46392 2.13738 4.47177 2.80031 3.63604 3.63604C2.80031 4.47177 2.13738 5.46392 1.68508 6.55585C1.23279 7.64778 1 8.8181 1 10Z"
                                                    stroke="url(#paint0_linear_1789_9048)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1789_9048" x1="10"
                                                        y1="1" x2="10" y2="19"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#FCB376" />
                                                        <stop offset="1" stop-color="#FE8A29" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                </ul>
                                <button
                                    class="px-4 py-2 mt-8 font-semibold text-black bg-white border rounded-md">SIGN
                                    UP
                                    NOW</button>
                            </div>
                            <!-- SVG Wave -->
                            <div class="bottom-0 left-0 w-full overflow-hidden ">
                                <svg width="100%" height="auto" viewBox="0 0 389 186" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 0L16.2083 31C32.4167 62 64.8333 54 97.25 85C129.667 116 162.083 116 194.5 89.4286C226.917 62.8571 259.333 79.7143 291.75 53.1429C324.167 26.5714 356.583 26.5714 372.792 26.5714H389V186H372.792C356.583 186 324.167 186 291.75 186C259.333 186 226.917 186 194.5 186C162.083 186 129.667 186 97.25 186C64.8333 186 32.4167 186 16.2083 186H0V0Z"
                                        fill="url(#paint0_linear_1789_9076)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_1789_9076" x1="194.5" y1="0"
                                            x2="194.5" y2="186" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FCB376" />
                                            <stop offset="1" stop-color="#FE8A29" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div
                            class="flex flex-col justify-between overflow-hidden text-center bg-white rounded-lg shadow-2xl xl:w-full xl:h-full lg:w-full lg:h-full md:h-full ">
                            <div class="px-4 py-6">
                                <h3 class="text-lg font-semibold text-customOrangeDark">Small Company</h3>
                                <p class="mt-2 text-gray-500">Fast start your business with this</p>
                                <p class="mt-4 text-2xl font-bold">$20 <span class="text-sm font-normal">/mon</span>
                                </p>
                                <ul class="mt-4 space-y-2 text-sm text-gray-600">
                                    <div class="flex justify-between pt-2">
                                        <div>
                                            <li>Client Panel</li>
                                        </div>
                                        <div>
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 6V14M1 10C1 11.1819 1.23279 12.3522 1.68508 13.4442C2.13738 14.5361 2.80031 15.5282 3.63604 16.364C4.47177 17.1997 5.46392 17.8626 6.55585 18.3149C7.64778 18.7672 8.8181 19 10 19C11.1819 19 12.3522 18.7672 13.4442 18.3149C14.5361 17.8626 15.5282 17.1997 16.364 16.364C17.1997 15.5282 17.8626 14.5361 18.3149 13.4442C18.7672 12.3522 19 11.1819 19 10C19 8.8181 18.7672 7.64778 18.3149 6.55585C17.8626 5.46392 17.1997 4.47177 16.364 3.63604C15.5282 2.80031 14.5361 2.13738 13.4442 1.68508C12.3522 1.23279 11.1819 1 10 1C8.8181 1 7.64778 1.23279 6.55585 1.68508C5.46392 2.13738 4.47177 2.80031 3.63604 3.63604C2.80031 4.47177 2.13738 5.46392 1.68508 6.55585C1.23279 7.64778 1 8.8181 1 10Z"
                                                    stroke="url(#paint0_linear_1789_9048)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1789_9048" x1="10"
                                                        y1="1" x2="10" y2="19"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#FCB376" />
                                                        <stop offset="1" stop-color="#FE8A29" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex justify-between pt-2 ">
                                        <div>
                                            <li>Single User</li>
                                        </div>
                                        <div>
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 6V14M1 10C1 11.1819 1.23279 12.3522 1.68508 13.4442C2.13738 14.5361 2.80031 15.5282 3.63604 16.364C4.47177 17.1997 5.46392 17.8626 6.55585 18.3149C7.64778 18.7672 8.8181 19 10 19C11.1819 19 12.3522 18.7672 13.4442 18.3149C14.5361 17.8626 15.5282 17.1997 16.364 16.364C17.1997 15.5282 17.8626 14.5361 18.3149 13.4442C18.7672 12.3522 19 11.1819 19 10C19 8.8181 18.7672 7.64778 18.3149 6.55585C17.8626 5.46392 17.1997 4.47177 16.364 3.63604C15.5282 2.80031 14.5361 2.13738 13.4442 1.68508C12.3522 1.23279 11.1819 1 10 1C8.8181 1 7.64778 1.23279 6.55585 1.68508C5.46392 2.13738 4.47177 2.80031 3.63604 3.63604C2.80031 4.47177 2.13738 5.46392 1.68508 6.55585C1.23279 7.64778 1 8.8181 1 10Z"
                                                    stroke="url(#paint0_linear_1789_9048)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1789_9048" x1="10"
                                                        y1="1" x2="10" y2="19"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#FCB376" />
                                                        <stop offset="1" stop-color="#FE8A29" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex justify-between pt-2">
                                        <div>
                                            <li>5 Drivers</li>
                                        </div>
                                        <div>
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 6V14M1 10C1 11.1819 1.23279 12.3522 1.68508 13.4442C2.13738 14.5361 2.80031 15.5282 3.63604 16.364C4.47177 17.1997 5.46392 17.8626 6.55585 18.3149C7.64778 18.7672 8.8181 19 10 19C11.1819 19 12.3522 18.7672 13.4442 18.3149C14.5361 17.8626 15.5282 17.1997 16.364 16.364C17.1997 15.5282 17.8626 14.5361 18.3149 13.4442C18.7672 12.3522 19 11.1819 19 10C19 8.8181 18.7672 7.64778 18.3149 6.55585C17.8626 5.46392 17.1997 4.47177 16.364 3.63604C15.5282 2.80031 14.5361 2.13738 13.4442 1.68508C12.3522 1.23279 11.1819 1 10 1C8.8181 1 7.64778 1.23279 6.55585 1.68508C5.46392 2.13738 4.47177 2.80031 3.63604 3.63604C2.80031 4.47177 2.13738 5.46392 1.68508 6.55585C1.23279 7.64778 1 8.8181 1 10Z"
                                                    stroke="url(#paint0_linear_1789_9048)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1789_9048" x1="10"
                                                        y1="1" x2="10" y2="19"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#FCB376" />
                                                        <stop offset="1" stop-color="#FE8A29" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex justify-between pt-2">
                                        <div>
                                            <li>50 Google Map API Call</li>
                                        </div>
                                        <div>
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 6V14M1 10C1 11.1819 1.23279 12.3522 1.68508 13.4442C2.13738 14.5361 2.80031 15.5282 3.63604 16.364C4.47177 17.1997 5.46392 17.8626 6.55585 18.3149C7.64778 18.7672 8.8181 19 10 19C11.1819 19 12.3522 18.7672 13.4442 18.3149C14.5361 17.8626 15.5282 17.1997 16.364 16.364C17.1997 15.5282 17.8626 14.5361 18.3149 13.4442C18.7672 12.3522 19 11.1819 19 10C19 8.8181 18.7672 7.64778 18.3149 6.55585C17.8626 5.46392 17.1997 4.47177 16.364 3.63604C15.5282 2.80031 14.5361 2.13738 13.4442 1.68508C12.3522 1.23279 11.1819 1 10 1C8.8181 1 7.64778 1.23279 6.55585 1.68508C5.46392 2.13738 4.47177 2.80031 3.63604 3.63604C2.80031 4.47177 2.13738 5.46392 1.68508 6.55585C1.23279 7.64778 1 8.8181 1 10Z"
                                                    stroke="url(#paint0_linear_1789_9048)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1789_9048" x1="10"
                                                        y1="1" x2="10" y2="19"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#FCB376" />
                                                        <stop offset="1" stop-color="#FE8A29" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                </ul>
                                <button
                                    class="px-4 py-2 mt-8 font-semibold text-white rounded-md bg-customOrangeDark">SIGN
                                    UP
                                    NOW</button>
                            </div>
                            <!-- SVG Wave -->
                            <div class="bottom-0 left-0 w-full overflow-hidden ">
                                <svg width="100%" height="auto" viewBox="0 0 389 186" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 0L16.2083 31C32.4167 62 64.8333 54 97.25 85C129.667 116 162.083 116 194.5 89.4286C226.917 62.8571 259.333 79.7143 291.75 53.1429C324.167 26.5714 356.583 26.5714 372.792 26.5714H389V186H372.792C356.583 186 324.167 186 291.75 186C259.333 186 226.917 186 194.5 186C162.083 186 129.667 186 97.25 186C64.8333 186 32.4167 186 16.2083 186H0V0Z"
                                        fill="url(#paint0_linear_1789_9076)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_1789_9076" x1="194.5" y1="0"
                                            x2="194.5" y2="186" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FCB376" />
                                            <stop offset="1" stop-color="#FE8A29" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div
                            class="flex flex-col justify-between overflow-hidden text-center bg-white rounded-lg shadow-2xl xl:w-full xl:h-full lg:w-full lg:h-full md:h-full ">
                            <div class="px-4 py-6">
                                <h3 class="text-lg font-semibold text-customOrangeDark">Advance</h3>
                                <p class="mt-2 text-gray-500">Fast start your business with this</p>
                                <p class="mt-4 text-2xl font-bold">$50 <span class="text-sm font-normal">/mon</span>
                                </p>
                                <ul class="mt-4 space-y-2 text-sm text-gray-600">
                                    <div class="flex justify-between pt-2">
                                        <div>
                                            <li>Client Panel</li>
                                        </div>
                                        <div>
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 6V14M1 10C1 11.1819 1.23279 12.3522 1.68508 13.4442C2.13738 14.5361 2.80031 15.5282 3.63604 16.364C4.47177 17.1997 5.46392 17.8626 6.55585 18.3149C7.64778 18.7672 8.8181 19 10 19C11.1819 19 12.3522 18.7672 13.4442 18.3149C14.5361 17.8626 15.5282 17.1997 16.364 16.364C17.1997 15.5282 17.8626 14.5361 18.3149 13.4442C18.7672 12.3522 19 11.1819 19 10C19 8.8181 18.7672 7.64778 18.3149 6.55585C17.8626 5.46392 17.1997 4.47177 16.364 3.63604C15.5282 2.80031 14.5361 2.13738 13.4442 1.68508C12.3522 1.23279 11.1819 1 10 1C8.8181 1 7.64778 1.23279 6.55585 1.68508C5.46392 2.13738 4.47177 2.80031 3.63604 3.63604C2.80031 4.47177 2.13738 5.46392 1.68508 6.55585C1.23279 7.64778 1 8.8181 1 10Z"
                                                    stroke="url(#paint0_linear_1789_9048)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1789_9048" x1="10"
                                                        y1="1" x2="10" y2="19"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#FCB376" />
                                                        <stop offset="1" stop-color="#FE8A29" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex justify-between pt-2 ">
                                        <div>
                                            <li>Single User</li>
                                        </div>
                                        <div>
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 6V14M1 10C1 11.1819 1.23279 12.3522 1.68508 13.4442C2.13738 14.5361 2.80031 15.5282 3.63604 16.364C4.47177 17.1997 5.46392 17.8626 6.55585 18.3149C7.64778 18.7672 8.8181 19 10 19C11.1819 19 12.3522 18.7672 13.4442 18.3149C14.5361 17.8626 15.5282 17.1997 16.364 16.364C17.1997 15.5282 17.8626 14.5361 18.3149 13.4442C18.7672 12.3522 19 11.1819 19 10C19 8.8181 18.7672 7.64778 18.3149 6.55585C17.8626 5.46392 17.1997 4.47177 16.364 3.63604C15.5282 2.80031 14.5361 2.13738 13.4442 1.68508C12.3522 1.23279 11.1819 1 10 1C8.8181 1 7.64778 1.23279 6.55585 1.68508C5.46392 2.13738 4.47177 2.80031 3.63604 3.63604C2.80031 4.47177 2.13738 5.46392 1.68508 6.55585C1.23279 7.64778 1 8.8181 1 10Z"
                                                    stroke="url(#paint0_linear_1789_9048)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1789_9048" x1="10"
                                                        y1="1" x2="10" y2="19"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#FCB376" />
                                                        <stop offset="1" stop-color="#FE8A29" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex justify-between pt-2">
                                        <div>
                                            <li>5 Drivers</li>
                                        </div>
                                        <div>
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 6V14M1 10C1 11.1819 1.23279 12.3522 1.68508 13.4442C2.13738 14.5361 2.80031 15.5282 3.63604 16.364C4.47177 17.1997 5.46392 17.8626 6.55585 18.3149C7.64778 18.7672 8.8181 19 10 19C11.1819 19 12.3522 18.7672 13.4442 18.3149C14.5361 17.8626 15.5282 17.1997 16.364 16.364C17.1997 15.5282 17.8626 14.5361 18.3149 13.4442C18.7672 12.3522 19 11.1819 19 10C19 8.8181 18.7672 7.64778 18.3149 6.55585C17.8626 5.46392 17.1997 4.47177 16.364 3.63604C15.5282 2.80031 14.5361 2.13738 13.4442 1.68508C12.3522 1.23279 11.1819 1 10 1C8.8181 1 7.64778 1.23279 6.55585 1.68508C5.46392 2.13738 4.47177 2.80031 3.63604 3.63604C2.80031 4.47177 2.13738 5.46392 1.68508 6.55585C1.23279 7.64778 1 8.8181 1 10Z"
                                                    stroke="url(#paint0_linear_1789_9048)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1789_9048" x1="10"
                                                        y1="1" x2="10" y2="19"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#FCB376" />
                                                        <stop offset="1" stop-color="#FE8A29" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex justify-between pt-2">
                                        <div>
                                            <li>50 Google Map API Call</li>
                                        </div>
                                        <div>
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 6V14M1 10C1 11.1819 1.23279 12.3522 1.68508 13.4442C2.13738 14.5361 2.80031 15.5282 3.63604 16.364C4.47177 17.1997 5.46392 17.8626 6.55585 18.3149C7.64778 18.7672 8.8181 19 10 19C11.1819 19 12.3522 18.7672 13.4442 18.3149C14.5361 17.8626 15.5282 17.1997 16.364 16.364C17.1997 15.5282 17.8626 14.5361 18.3149 13.4442C18.7672 12.3522 19 11.1819 19 10C19 8.8181 18.7672 7.64778 18.3149 6.55585C17.8626 5.46392 17.1997 4.47177 16.364 3.63604C15.5282 2.80031 14.5361 2.13738 13.4442 1.68508C12.3522 1.23279 11.1819 1 10 1C8.8181 1 7.64778 1.23279 6.55585 1.68508C5.46392 2.13738 4.47177 2.80031 3.63604 3.63604C2.80031 4.47177 2.13738 5.46392 1.68508 6.55585C1.23279 7.64778 1 8.8181 1 10Z"
                                                    stroke="url(#paint0_linear_1789_9048)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1789_9048" x1="10"
                                                        y1="1" x2="10" y2="19"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#FCB376" />
                                                        <stop offset="1" stop-color="#FE8A29" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                </ul>
                                <button
                                    class="px-4 py-2 mt-8 font-semibold text-black bg-white border rounded-md">SIGN
                                    UP
                                    NOW</button>
                            </div>
                            <!-- SVG Wave -->
                            <div class="bottom-0 left-0 w-full overflow-hidden ">
                                <svg width="100%" height="auto" viewBox="0 0 389 186" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 0L16.2083 31C32.4167 62 64.8333 54 97.25 85C129.667 116 162.083 116 194.5 89.4286C226.917 62.8571 259.333 79.7143 291.75 53.1429C324.167 26.5714 356.583 26.5714 372.792 26.5714H389V186H372.792C356.583 186 324.167 186 291.75 186C259.333 186 226.917 186 194.5 186C162.083 186 129.667 186 97.25 186C64.8333 186 32.4167 186 16.2083 186H0V0Z"
                                        fill="url(#paint0_linear_1789_9076)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_1789_9076" x1="194.5" y1="0"
                                            x2="194.5" y2="186" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FCB376" />
                                            <stop offset="1" stop-color="#FE8A29" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <section id="blogs" class="container py-10 mx-auto mt-20 xl:px-0">
            <div class="px-4 mx-auto lg:px-8">
                <!-- Header -->
                <div class="flex items-center justify-between mb-8">
                    <h2 class="pb-1 text-3xl font-bold text-customOrangeDark">Our Latest Blog Posts</h2>
                    <button class="px-6 py-3 font-semibold text-white rounded-full shadow-md gradient-bg ">
                        See All Blog Posts
                    </button>
                </div>

                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <div class="transition bg-white rounded-lg shadow hover:shadow-lg">
                        <img src="{{ asset('assets/icons/imageblogs.png') }}" alt="Blog Post Image"
                            class="object-cover w-full h-48 rounded-t-lg">
                        <div class="p-4">
                            <div class="flex items-center mb-2 text-sm text-customOrangeDark">
                                <span class="px-2 py-1 bg-orange-100 rounded-full">Category</span>
                            </div>
                            <div class="flex items-center mb-4 text-xs text-gray-500">
                                <img src="{{ asset('assets/icons/image 633.png') }}" alt="Author Image"
                                    class="w-6 h-6 mr-2 rounded-full">
                                <span class="mr-2">Author Name</span> | <span class="ml-2">25 Oct, 2024</span>
                            </div>
                            <h3 class="mb-2 text-lg font-semibold text-gray-800">Believing neglected so so allowance
                                existence departure.</h3>
                            <p class="text-sm text-gray-600">
                                Blessing welcomed ladyship she met humoured sir breeding her. Six curiosity day
                                assurance bed necessary.
                            </p>
                        </div>
                    </div>
                    <div class="transition bg-white rounded-lg shadow hover:shadow-lg">
                        <img src="{{ asset('assets/icons/imageblogs.png') }}" alt="Blog Post Image"
                            class="object-cover w-full h-48 rounded-t-lg">
                        <div class="p-4">
                            <div class="flex items-center mb-2 text-sm text-customOrangeDark">
                                <span class="px-2 py-1 bg-orange-100 rounded-full">Category</span>
                            </div>
                            <div class="flex items-center mb-4 text-xs text-gray-500">
                                <img src="{{ asset('assets/icons/image 633.png') }}" alt="Author Image"
                                    class="w-6 h-6 mr-2 rounded-full">
                                <span class="mr-2">Author Name</span> | <span class="ml-2">25 Oct, 2024</span>
                            </div>
                            <h3 class="mb-2 text-lg font-semibold text-gray-800">Believing neglected so so allowance
                                existence departure.</h3>
                            <p class="text-sm text-gray-600">
                                Blessing welcomed ladyship she met humoured sir breeding her. Six curiosity day
                                assurance bed necessary.
                            </p>
                        </div>
                    </div>
                    <div class="transition bg-white rounded-lg shadow hover:shadow-lg">
                        <img src="{{ asset('assets/icons/imageblogs.png') }}" alt="Blog Post Image"
                            class="object-cover w-full h-48 rounded-t-lg">
                        <div class="p-4">
                            <div class="flex items-center mb-2 text-sm text-customOrangeDark">
                                <span class="px-2 py-1 bg-orange-100 rounded-full">Category</span>
                            </div>
                            <div class="flex items-center mb-4 text-xs text-gray-500">
                                <img src="{{ asset('assets/icons/image 633.png') }}" alt="Author Image"
                                    class="w-6 h-6 mr-2 rounded-full">
                                <span class="mr-2">Author Name</span> | <span class="ml-2">25 Oct, 2024</span>
                            </div>
                            <h3 class="mb-2 text-lg font-semibold text-gray-800">Believing neglected so so allowance
                                existence departure.</h3>
                            <p class="text-sm text-gray-600">
                                Blessing welcomed ladyship she met humoured sir breeding her. Six curiosity day
                                assurance bed necessary.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mx-auto ">
            <img class="mt-24" src="{{ asset('assets/icons/Subtract.png') }}" alt="">
        </div>
        <div class="mb-16 text-gray-800 bg-white">
            <footer class="mt-6 bg-white ">
                <div class="container grid gap-8 px-4 mx-auto text-center md:grid-cols-4">
                    <div class="h-32 lg:mt-20">
                        <h2 class="mb-2 text-lg font-bold text-customOrangeDark">POUL<span
                                class="font-extrabold">3</span>Y</h2>
                        <p class="text-gray-500">Best delivery services in Germany. Using by more than 3,000,000
                            people
                            in
                            the world
                        </p>
                    </div>
                    <div class="flex flex-col items-center justify-center ">
                        <h2 class="mb-2 text-lg font-semibold lg:mt-20 text-customOrangeDark">Social Links</h2>
                        <ul class="space-y-2 text-gray-500 ">
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=61569679073435" target="_blank"
                                    class="flex items-center group">
                                    <svg class="w-6 h-6 text-gray-500 transition-colors duration-300 fill-current group-hover:text-customOrangeDark"
                                        width="25" height="25" viewBox="0 0 25 25"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5 23.2812C4.57622 23.2815 4.15656 23.1981 3.76501 23.0361C3.37345 22.874 3.01767 22.6363 2.71802 22.3367C2.41836 22.037 2.1807 21.6812 2.01863 21.2897C1.85655 20.8981 1.77323 20.4785 1.77344 20.0547V5.05469C1.77323 4.63091 1.85655 4.21125 2.01863 3.81969C2.1807 3.42814 2.41836 3.07236 2.71802 2.77271C3.01767 2.47305 3.37345 2.23539 3.76501 2.07331C4.15656 1.91124 4.57622 1.82792 5 1.82813H20C20.4238 1.82792 20.8434 1.91124 21.235 2.07331C21.6266 2.23539 21.9823 2.47305 22.282 2.77271C22.5816 3.07236 22.8193 3.42814 22.9814 3.81969C23.1435 4.21125 23.2268 4.63091 23.2266 5.05469V20.0547C23.2268 20.4785 23.1435 20.8981 22.9814 21.2897C22.8193 21.6812 22.5816 22.037 22.282 22.3367C21.9823 22.6363 21.6266 22.874 21.235 23.0361C20.8434 23.1981 20.4238 23.2815 20 23.2812H5ZM18.1094 14.2188H15.8438V21.7188H20.0156C20.2344 21.7188 20.451 21.6757 20.653 21.592C20.8551 21.5083 21.0387 21.3856 21.1934 21.2309C21.3481 21.0762 21.4708 20.8926 21.5545 20.6905C21.6382 20.4885 21.6813 20.2719 21.6813 20.0531V5.05313C21.6813 4.61137 21.5058 4.18772 21.1934 3.87535C20.881 3.56299 20.4574 3.3875 20.0156 3.3875H5.01563C4.57387 3.3875 4.15022 3.56299 3.83785 3.87535C3.52549 4.18772 3.35 4.61137 3.35 5.05313V20.0531C3.35 20.4949 3.52549 20.9185 3.83785 21.2309C4.15022 21.5433 4.57387 21.7188 5.01563 21.7188H13.3438V14.2188H10.8438V11.7188H13.3438V10.3766C13.3438 7.82969 14.5828 6.72031 16.6875 6.72031C17.6797 6.72031 18.2125 6.79219 18.4688 6.82813H18.4844V9.21875H17.0438C16.3172 9.21875 15.9734 9.53125 15.8703 10.1563C15.8452 10.3201 15.8332 10.4858 15.8344 10.6516V11.7188H18.4594L18.1031 14.2188H18.1094Z" />
                                    </svg>
                                    <span class="ml-2 text-gray-600 duration-300 hover:text-customOrangeDark">
                                        Facebook
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/poul3y" target="_blank"
                                    class="flex items-center group">
                                    <svg class="w-6 h-6 text-gray-500 transition-colors duration-300 fill-current group-hover:text-customOrangeDark"
                                        width="25" height="25" viewBox="0 0 25 25"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.12468 2.08203H16.8747C20.208 2.08203 22.9163 4.79036 22.9163 8.1237V16.8737C22.9163 18.476 22.2798 20.0128 21.1468 21.1458C20.0137 22.2788 18.477 22.9154 16.8747 22.9154H8.12468C4.79134 22.9154 2.08301 20.207 2.08301 16.8737V8.1237C2.08301 6.52135 2.71954 4.98463 3.85257 3.85159C4.9856 2.71856 6.52233 2.08203 8.12468 2.08203ZM7.91634 4.16536C6.92178 4.16536 5.96795 4.56045 5.26469 5.26371C4.56143 5.96698 4.16634 6.9208 4.16634 7.91536V17.082C4.16634 19.1549 5.84342 20.832 7.91634 20.832H17.083C18.0776 20.832 19.0314 20.4369 19.7347 19.7337C20.4379 19.0304 20.833 18.0766 20.833 17.082V7.91536C20.833 5.84245 19.1559 4.16536 17.083 4.16536H7.91634ZM17.9684 5.72786C18.3138 5.72786 18.645 5.86505 18.8891 6.10924C19.1333 6.35342 19.2705 6.68461 19.2705 7.02995C19.2705 7.37528 19.1333 7.70647 18.8891 7.95066C18.645 8.19485 18.3138 8.33203 17.9684 8.33203C17.6231 8.33203 17.2919 8.19485 17.0477 7.95066C16.8035 7.70647 16.6663 7.37528 16.6663 7.02995C16.6663 6.68461 16.8035 6.35342 17.0477 6.10924C17.2919 5.86505 17.6231 5.72786 17.9684 5.72786ZM12.4997 7.29037C13.881 7.29037 15.2058 7.8391 16.1825 8.81585C17.1593 9.7926 17.708 11.1174 17.708 12.4987C17.708 13.88 17.1593 15.2048 16.1825 16.1815C15.2058 17.1583 13.881 17.707 12.4997 17.707C11.1183 17.707 9.79358 17.1583 8.81683 16.1815C7.84008 15.2048 7.29134 13.88 7.29134 12.4987C7.29134 11.1174 7.84008 9.7926 8.81683 8.81585C9.79358 7.8391 11.1183 7.29037 12.4997 7.29037ZM12.4997 9.3737C11.6709 9.3737 10.876 9.70294 10.29 10.289C9.70391 10.875 9.37467 11.6699 9.37467 12.4987C9.37467 13.3275 9.70391 14.1224 10.29 14.7084C10.876 15.2945 11.6709 15.6237 12.4997 15.6237C13.3285 15.6237 14.1233 15.2945 14.7094 14.7084C15.2954 14.1224 15.6247 13.3275 15.6247 12.4987C15.6247 11.6699 15.2954 10.875 14.7094 10.289C14.1233 9.70294 13.3285 9.3737 12.4997 9.3737Z" />
                                    </svg>
                                    <span
                                        class="ml-2 text-gray-600 duration-300 hover:text-customOrangeDark">Instagram</span>
                                </a>
                            </li>
                            <li> <a href="#" class="flex items-center group">
                                    <svg class="w-6 h-6 text-gray-500 transition-colors duration-300 group-hover:text-customOrangeDark"
                                        width="25" height="25" viewBox="0 0 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5833 12.5013L10.9375 14.5846V10.418L14.5833 12.5013Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="1.875"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.08301 13.2388V11.7638C2.08301 8.74818 2.08301 7.23984 3.02572 6.27005C3.96947 5.29922 5.45488 5.25755 8.42468 5.17318C9.83093 5.13359 11.2684 5.10547 12.4997 5.10547C13.7309 5.10547 15.1674 5.13359 16.5747 5.17318C19.5445 5.25755 21.0299 5.29922 21.9726 6.27005C22.9153 7.24089 22.9163 8.74922 22.9163 11.7638V13.2378C22.9163 16.2544 22.9163 17.7617 21.9736 18.7326C21.0299 19.7023 19.5455 19.7451 16.5747 19.8284C15.1684 19.869 13.7309 19.8971 12.4997 19.8971C11.2684 19.8971 9.83197 19.869 8.42468 19.8284C5.45488 19.7451 3.96947 19.7034 3.02572 18.7326C2.08197 17.7617 2.08301 16.2534 2.08301 13.2388Z"
                                            stroke="currentColor" stroke-width="1.875" />
                                    </svg>

                                    <span
                                        class="ml-2 text-gray-600 duration-300 hover:text-customOrangeDark">YouTube</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center group">
                                    <svg class="w-6 h-6 text-gray-500 transition-colors duration-300 fill-current group-hover:text-customOrangeDark"
                                        width="25" height="25" viewBox="0 0 25 25"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.8441 5.11334C18.8889 4.14886 17.7514 3.38414 16.4977 2.86371C15.2441 2.34329 13.8994 2.07759 12.542 2.08209C6.85449 2.08209 2.21908 6.7175 2.21908 12.405C2.21908 14.2279 2.69824 15.9988 3.59408 17.5613L2.13574 22.9154L7.60449 21.4779C9.11491 22.3008 10.8128 22.7383 12.542 22.7383C18.2295 22.7383 22.8649 18.1029 22.8649 12.4154C22.8649 9.655 21.792 7.06125 19.8441 5.11334ZM12.542 20.9883C11.0003 20.9883 9.48991 20.5717 8.16699 19.7904L7.85449 19.6029L4.60449 20.4571L5.46908 17.2904L5.26074 16.9675C4.40402 15.5999 3.94921 14.0188 3.94824 12.405C3.94824 7.67584 7.80241 3.82167 12.5316 3.82167C14.8232 3.82167 16.9795 4.7175 18.5941 6.3425C19.3937 7.1382 20.0273 8.08474 20.4583 9.12722C20.8892 10.1697 21.1089 11.2874 21.1045 12.4154C21.1253 17.1446 17.2712 20.9883 12.542 20.9883ZM17.2503 14.5717C16.9899 14.4467 15.7191 13.8217 15.4899 13.7279C15.2503 13.6446 15.0837 13.6029 14.9066 13.8529C14.7295 14.1133 14.2399 14.6967 14.0941 14.8633C13.9482 15.0404 13.792 15.0613 13.5316 14.9258C13.2712 14.8008 12.4378 14.5196 11.4587 13.6446C10.6878 12.9571 10.1774 12.1133 10.0212 11.8529C9.87532 11.5925 10.0003 11.4571 10.1357 11.3217C10.2503 11.2071 10.3962 11.0196 10.5212 10.8738C10.6462 10.7279 10.6982 10.6133 10.7816 10.4467C10.8649 10.2696 10.8232 10.1238 10.7607 9.99875C10.6982 9.87375 10.1774 8.60292 9.96907 8.08209C9.76074 7.58209 9.54199 7.64459 9.38574 7.63417H8.88574C8.70866 7.63417 8.43783 7.69667 8.19824 7.95709C7.96908 8.2175 7.30241 8.8425 7.30241 10.1133C7.30241 11.3842 8.22949 12.6133 8.35449 12.78C8.47949 12.9571 10.1774 15.5613 12.7607 16.6758C13.3753 16.9467 13.8545 17.1029 14.2295 17.2175C14.8441 17.4154 15.4066 17.3842 15.8545 17.3217C16.3545 17.2488 17.3857 16.6967 17.5941 16.0925C17.8128 15.4883 17.8128 14.9779 17.7399 14.8633C17.667 14.7488 17.5107 14.6967 17.2503 14.5717Z" />
                                    </svg>
                                    <span
                                        class="ml-2 text-gray-600 duration-300 hover:text-customOrangeDark">Whatsaap</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Quick Links Column 2 -->
                    <div class="flex justify-center w-full h-32 lg:mt-20 ">

                        <ul class="flex flex-col items-center w-full space-y-2 text-gray-500 xl:items-start">
                            <li><a href="#">
                                    <h2 class="mb-2 text-lg font-semibold text-customOrangeDark">Quick Links</h2>
                                </a></li>
                            <li><a href="#" class="hover:text-gray-700">Privacy Policy</a></li>
                            <li><a href="#" class="hover:text-gray-700">Terms & Conditions</a></li>
                            <li><a href="#" class="hover:text-gray-700">Disclaimer</a></li>
                            <li><a href="/login" class="hover:text-gray-700">Get Access</a></li>
                        </ul>
                    </div>
                    <div class="flex flex-col items-center md:items-start">
                        <svg width="180" height="180" viewBox="0 0 220 220" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_1789_9187)">
                                <path
                                    d="M94.2185 74.1383C88.7404 74.1383 83.2601 74.1596 77.7798 74.1276C75.2328 74.1148 73.7042 72.2361 74.3639 69.9581C74.6927 68.8053 75.4612 67.9983 76.7016 67.8019C77.3341 67.7082 77.973 67.6647 78.6124 67.6716C88.8229 67.6617 99.0342 67.6617 109.246 67.6716C110.262 67.6716 110.811 67.3962 111.21 66.3565C113.535 60.3126 117.775 55.9809 123.593 53.2824C125.655 52.3259 127.914 51.8562 130.211 51.5125C132.636 51.165 135.104 51.2539 137.497 51.7751C141.011 52.5074 144.419 53.8161 147.175 56.2392C148.851 57.7123 150.264 59.48 151.812 61.1004C152.132 61.3983 152.47 61.675 152.826 61.9287C153.106 61.5637 153.466 61.2306 153.654 60.825C154.756 58.5833 155.84 56.3417 156.891 54.0701C157.416 52.9365 157.982 51.9673 159.308 51.5275C160.685 51.0685 161.694 51.4912 162.629 52.4028C163.641 53.3912 163.77 54.6295 163.234 55.8186C161.816 58.9911 160.296 62.1187 158.808 65.2592C158.285 66.3651 157.721 67.4496 157.205 68.5576C156.94 69.1276 157.222 69.497 157.749 69.7382L169.719 75.2249C171.427 76.0106 172.322 77.236 172.209 78.7753C172.085 80.5003 170.561 82.3491 168.249 81.5656C166.101 80.8397 164.051 79.8064 161.98 78.8628C159.683 77.8146 157.414 76.7001 155.119 75.6476C154.493 75.3616 153.998 75.5025 153.663 76.2241C151.438 81.0297 149.165 85.8162 146.938 90.6197C144.577 95.7093 142.26 100.818 139.906 105.91C138.27 109.452 136.639 112.998 134.931 116.505C134.227 117.953 132.944 118.608 131.302 118.606C122.157 118.593 113.014 118.589 103.87 118.593C97.2892 118.593 90.7066 118.598 84.1226 118.608C82.1905 118.608 80.9522 117.784 80.1282 115.967C77.9932 111.271 75.6897 106.644 73.5099 101.965C71.1359 96.8729 68.843 91.7427 66.4818 86.6445C64.9874 83.4251 63.4353 80.2398 61.9174 77.0268C60.2799 73.5682 61.2065 74.1681 57.2355 74.1425C49.3364 74.0934 41.4372 74.1126 33.5381 74.0721C32.7672 74.0599 32.0016 73.9428 31.2623 73.7241C29.9045 73.3377 29.2832 71.4141 29.4519 70.3488C29.5596 69.6823 29.8822 69.0692 30.3705 68.6029C30.8588 68.1365 31.486 67.8425 32.1568 67.7656C32.794 67.6843 33.436 67.6473 34.0782 67.6545C43.1153 67.6545 52.1523 67.6972 61.1915 67.6396C65.1966 67.614 65.1411 68.6067 66.5053 71.2476C67.6624 73.4892 68.6274 75.8312 69.6735 78.1305C70.9374 80.9059 72.1884 83.6813 73.463 86.4567C73.8964 87.4592 74.3956 88.432 74.9574 89.3687C75.1431 89.6654 75.7217 89.8469 76.1252 89.8533C78.6145 89.8939 81.1059 89.8704 83.5974 89.8682C90.0391 89.8682 96.4794 89.8682 102.918 89.8682C107.542 89.8682 110.899 87.7654 112.788 83.5639C114.084 80.686 113.755 77.7889 112.323 74.9901C111.949 74.2599 111.398 74.1361 110.67 74.1361C105.19 74.1532 99.7116 74.1361 94.2313 74.1361L94.2185 74.1383ZM78.3242 96.5783C78.5782 97.2443 78.7127 97.6799 78.9048 98.0876C80.9373 102.357 83.038 106.612 84.9723 110.935C85.3715 111.826 85.8412 112.003 86.6183 112.02C87.0815 112.02 87.5448 112.02 88.006 112.02C101.385 112.02 114.763 112.02 128.142 112.02C128.568 112.044 128.994 112 129.406 111.89C129.724 111.775 129.989 111.547 130.149 111.249C131.857 107.62 133.494 103.971 135.192 100.342C137.777 94.8106 140.397 89.294 142.997 83.7667C144.918 79.7104 146.84 75.6348 148.714 71.5529C148.928 71.0704 149.13 70.4171 148.99 69.9453C147.922 66.3843 145.979 63.3954 142.969 61.1367C138.362 57.6803 133.202 57.0974 127.865 58.6538C123.409 59.9625 120.096 62.9022 117.98 67.0931C116.712 69.6101 116.797 69.5546 118.074 72.0311C118.855 73.5469 119.568 75.2014 119.805 76.8645C120.16 79.3752 120.194 81.9307 119.406 84.452C118.312 88.07 116.025 91.211 112.918 93.3631C109.929 95.4788 106.607 96.3327 102.97 96.3093C95.2838 96.2559 87.5982 96.29 79.9125 96.3093C79.4001 96.3093 78.8878 96.4779 78.3242 96.5783Z"
                                    fill="url(#paint0_linear_1789_9187)" />
                                <path
                                    d="M148.154 154.451C148.154 152.829 148.124 151.409 148.18 149.994C148.18 149.701 148.462 149.353 148.703 149.14C150.138 147.859 151.589 146.602 153.058 145.369C153.323 145.156 153.699 145.075 154.036 144.942L153.665 144.409H142.2V137.223H163.976C163.976 139.411 164 141.535 163.951 143.659C163.951 143.939 163.611 144.257 163.359 144.475C161.591 146.012 159.807 147.526 157.928 149.133C158.34 149.253 158.626 149.347 158.916 149.419C162.642 150.365 165.091 153.049 165.415 156.576C165.814 160.888 164.134 164.295 160.456 165.847C155.39 167.982 150.257 167.91 145.298 165.461C142.806 164.236 141.288 162.135 140.676 159.308C143.214 158.792 145.712 158.264 148.221 157.801C148.47 157.754 148.921 158.029 149.062 158.277C150.298 160.48 153.332 161.347 155.552 160.077C156.619 159.462 157.046 158.497 156.98 157.301C156.907 156.055 156.182 155.218 155.059 154.857C154.171 154.609 153.256 154.479 152.335 154.468C150.983 154.407 149.636 154.451 148.154 154.451Z"
                                    fill="url(#paint1_linear_1789_9187)" />
                                <path
                                    d="M65.5941 153.247C65.7927 150.527 66.2111 147.382 68.4848 144.855C69.6589 143.562 71.1712 142.625 72.8507 142.147C75.4723 141.349 78.1581 141.437 80.7306 141.864C83.8262 142.376 86.2814 144.186 87.5623 147.22C88.6853 149.872 88.9073 152.628 88.6767 155.499C88.491 157.83 88.0363 159.997 86.6464 161.904C85.0816 164.064 82.9744 165.236 80.3421 165.747C78.1082 166.178 75.8094 166.144 73.5894 165.646C70.6325 165.006 68.3887 163.298 67.0523 160.589C66.004 158.46 65.5792 156.133 65.5941 153.247ZM82.161 153.832C82.0222 153.065 81.8429 152.337 81.766 151.609C81.4565 148.599 80.6772 147.626 77.8015 146.974C77.1888 146.836 76.5035 147.019 75.8524 147.068C74.6269 147.158 73.8925 148.027 73.425 148.96C72.3703 151.074 72.1995 153.388 72.571 155.687C72.9275 157.937 73.536 160.051 76.3263 160.553C77.8528 160.826 79.1316 160.535 80.2844 159.57C82.1119 158.04 81.5888 155.77 82.161 153.832Z"
                                    fill="url(#paint2_linear_1789_9187)" />
                                <path
                                    d="M93.139 141.788C94.9494 141.788 96.6552 141.831 98.3588 141.771C99.2982 141.739 99.3942 142.247 99.3942 142.964C99.3942 146.594 99.3537 150.223 99.4113 153.852C99.4348 155.293 99.6654 156.728 99.8105 158.165C100.024 160.244 102.601 160.989 103.907 160.614C106.145 159.973 106.683 159.286 106.719 156.935C106.772 152.42 106.751 147.902 106.762 143.387C106.762 141.955 106.926 141.794 108.344 141.792C109.659 141.792 110.976 141.812 112.291 141.792C113.098 141.777 113.468 142.136 113.468 142.93C113.468 147.482 113.589 152.04 113.408 156.594C113.299 159.26 112.654 161.912 110.408 163.748C107.665 165.987 104.443 166.374 101.062 165.94C98.8733 165.661 96.8601 164.967 95.2974 163.289C93.9609 161.852 93.1262 160.108 93.0771 158.218C92.9404 152.994 93.0109 147.757 93.0066 142.537C93.0284 142.284 93.0727 142.033 93.139 141.788Z"
                                    fill="url(#paint3_linear_1789_9187)" />
                                <path
                                    d="M51.8592 165.656H45.4823V164.608C45.4823 157.46 45.4972 150.304 45.4609 143.163C45.4609 142.114 45.7278 141.728 46.838 141.768C49.1863 141.856 51.5347 141.681 53.8831 141.841C55.533 141.965 57.1617 142.288 58.7336 142.804C60.7703 143.464 62.0919 145.099 62.4954 147.106C63.2148 150.684 62.7409 154.578 59.0603 156.606C57.7046 157.353 56.0138 157.539 54.451 157.853C53.6718 158.009 52.8328 157.881 51.8678 157.881V165.656H51.8592ZM52.0727 146.984C51.9984 147.134 51.937 147.291 51.8891 147.452C51.8792 148.518 51.8721 149.585 51.8678 150.654C51.8678 152.661 51.9361 152.723 53.96 152.486C54.0315 152.483 54.1029 152.476 54.1735 152.464C55.2772 152.153 56.1675 151.239 56.2614 150.329C56.3874 149.134 56.3639 147.981 54.9271 147.437C54.0369 147.101 53.0164 147.123 52.0663 146.984H52.0727Z"
                                    fill="url(#paint4_linear_1789_9187)" />
                                <path
                                    d="M180.874 150.688L184.001 143.991C184.238 143.483 184.428 142.923 184.738 142.481C184.951 142.178 185.357 141.841 185.688 141.824C187.671 141.762 189.659 141.794 191.845 141.794C191.769 142.099 191.67 142.398 191.548 142.688C189.159 147.172 186.751 151.634 184.375 156.117C184.172 156.52 184.064 156.964 184.061 157.415C184.033 160.113 184.046 162.814 184.046 165.602H177.641V162.419C177.641 161.495 177.556 160.56 177.659 159.644C177.923 157.283 177.054 155.342 175.848 153.367C174.339 150.891 173.141 148.222 171.805 145.639C171.188 144.445 170.558 143.258 169.787 141.796C171.343 141.796 172.618 141.926 173.843 141.766C175.929 141.493 177.21 142.144 177.951 144.221C178.72 146.337 179.8 148.337 180.874 150.688Z"
                                    fill="url(#paint5_linear_1789_9187)" />
                                <path
                                    d="M124.785 160.379C127.52 160.379 130.078 160.411 132.631 160.365C133.66 160.345 134.033 160.766 133.999 161.746C133.963 162.813 134.033 163.881 133.961 164.948C133.944 165.211 133.551 165.659 133.32 165.661C128.389 165.704 123.457 165.693 118.434 165.693C118.412 165.236 118.383 164.858 118.383 164.481C118.383 157.374 118.397 150.264 118.363 143.157C118.363 142.132 118.577 141.663 119.717 141.774C120.958 141.869 122.204 141.869 123.444 141.774C124.469 141.712 124.806 142.062 124.798 143.1C124.755 148.394 124.779 153.691 124.779 158.985L124.785 160.379Z"
                                    fill="url(#paint6_linear_1789_9187)" />
                                <path
                                    d="M93.3516 134.981C90.683 135.162 89.2846 133.03 89.323 130.952C89.3636 128.818 90.8943 126.896 93.3516 126.971C95.7342 127.037 97.3951 128.621 97.4079 131.006C97.4207 133.391 95.7769 134.972 93.3516 134.981Z"
                                    fill="url(#paint7_linear_1789_9187)" />
                                <path
                                    d="M121.804 134.982C119.456 135.24 117.818 132.83 117.893 130.951C117.974 128.914 119.494 126.833 122.21 126.937C124.321 127.016 126.053 129.106 126.023 131.09C126.004 132.9 124.383 135.321 121.804 134.982Z"
                                    fill="url(#paint8_linear_1789_9187)" />
                                <path
                                    d="M132.952 66.8166C135.241 66.8059 137.009 68.5907 137.034 70.8985C137.026 71.9806 136.595 73.0166 135.833 73.7848C135.071 74.5529 134.038 74.9921 132.956 75.0082C130.92 75.0082 129.001 73.5138 128.939 70.9519C128.917 70.4135 129.006 69.8763 129.199 69.3731C129.391 68.8698 129.684 68.411 130.059 68.0243C130.435 67.6376 130.885 67.3312 131.382 67.1236C131.879 66.916 132.413 66.8115 132.952 66.8166Z"
                                    fill="url(#paint9_linear_1789_9187)" />
                            </g>
                            <defs>
                                <filter id="filter0_d_1789_9187" x="28.4248" y="50.3047" width="164.42"
                                    height="118.074" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="0.5" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_1789_9187" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1789_9187"
                                        result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_1789_9187" x1="100.822" y1="51.3047"
                                    x2="100.822" y2="118.608" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FCB376" />
                                    <stop offset="1" stop-color="#FE8A29" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_1789_9187" x1="153.074" y1="137.223"
                                    x2="153.074" y2="167.377" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FCB376" />
                                    <stop offset="1" stop-color="#FE8A29" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_1789_9187" x1="77.1761" y1="141.543"
                                    x2="77.1761" y2="166.047" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FCB376" />
                                    <stop offset="1" stop-color="#FE8A29" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_1789_9187" x1="103.25" y1="141.77"
                                    x2="103.25" y2="166.097" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FCB376" />
                                    <stop offset="1" stop-color="#FE8A29" />
                                </linearGradient>
                                <linearGradient id="paint4_linear_1789_9187" x1="54.1203" y1="141.766"
                                    x2="54.1203" y2="165.656" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FCB376" />
                                    <stop offset="1" stop-color="#FE8A29" />
                                </linearGradient>
                                <linearGradient id="paint5_linear_1789_9187" x1="180.816" y1="141.707"
                                    x2="180.816" y2="165.602" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FCB376" />
                                    <stop offset="1" stop-color="#FE8A29" />
                                </linearGradient>
                                <linearGradient id="paint6_linear_1789_9187" x1="126.182" y1="141.758"
                                    x2="126.182" y2="165.694" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FCB376" />
                                    <stop offset="1" stop-color="#FE8A29" />
                                </linearGradient>
                                <linearGradient id="paint7_linear_1789_9187" x1="93.3651" y1="126.969"
                                    x2="93.3651" y2="134.992" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FCB376" />
                                    <stop offset="1" stop-color="#FE8A29" />
                                </linearGradient>
                                <linearGradient id="paint8_linear_1789_9187" x1="121.957" y1="126.934"
                                    x2="121.957" y2="135.014" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FCB376" />
                                    <stop offset="1" stop-color="#FE8A29" />
                                </linearGradient>
                                <linearGradient id="paint9_linear_1789_9187" x1="132.985" y1="66.8164"
                                    x2="132.985" y2="75.0082" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FCB376" />
                                    <stop offset="1" stop-color="#FE8A29" />
                                </linearGradient>
                            </defs>
                        </svg>

                        <div class="flex space-x-2">
                            <img src="{{ asset('assets/app and apple store.png') }}" alt="App Store and Google Play"
                                class="h-auto ">
                        </div>
                    </div>

                </div>
            </footer>

        </div>
        <script src="{{ asset('javascript/jquery.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{ asset('javascript/canvas.js') }}"></script>
        <script type="text/javascript" src="{{ asset('DataTables/DataTables-1.13.8/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('javascript/script.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(window).on('load', function() {
                $('#loading').hide();
            })
            $(document).ready(function() {
                $('#datatable').DataTable();
                $('select').select2({
                    width: '100%'
                });
                $('#Items_dropdown').select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
        <script>
            const menuToggle = document.getElementById('menu-toggle');
            const menuClose = document.getElementById('menu-close');
            const sidebarMenu = document.getElementById('sidebar-menu');

            menuToggle.addEventListener('click', () => {
                sidebarMenu.classList.remove('-translate-x-full');
            });

            menuClose.addEventListener('click', () => {
                sidebarMenu.classList.add('-translate-x-full');
            });

            // Optional: Close sidebar when clicking outside
            window.addEventListener('click', (e) => {
                if (!sidebarMenu.contains(e.target) && !menuToggle.contains(e.target)) {
                    sidebarMenu.classList.add('-translate-x-full');
                }
            });
        </script>
        @yield('js')
</body>

</html>
