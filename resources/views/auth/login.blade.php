@extends('layouts.layout')
@section('content')
    <style>
        /* Keyframes for fade and slide animations */
        .hidden {
            display: none;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        #welcomeDiv {
            /* By default, apply fadeIn when the element loads */
            animation: fadeIn 1s ease-in-out forwards;
        }

        @keyframes moveLeftRight {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }

            50% {
                transform: translateX(10%);
            }

            100% {
                transform: translateX(0%);
                opacity: 1;
            }
        }

        .animate-moveLeftRight {
            animation: moveLeftRight 1.5s ease-in-out;
            animation-delay: 0.5s;
            /* Delay before the animation starts */
        }

        @keyframes slideIn {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .animate-slideIn {
            animation: slideIn 1.2s ease-out;
            animation-delay: 0s;
            /* Form slides in after half a second */
            animation-fill-mode: forwards;
            /* Keeps the final state after animation */
        }

        @keyframes slideOut {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .animate-slideout {
            animation: slideOut 1.1s ease-in;
            animation-delay: 0s;
            /* Form slides in after half a second */
            animation-fill-mode: forwards;
        }

        /* Use this class to trigger the fade-out animation */
    </style>


    <div class="relative w-full h-full">
        <div class="w-7xl">
            <div>
                <div class="absolute z-20 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <img id="henImage" class="xl:w-[500px] object-contain w-[30vw]" style="transform: rotateY(360deg)"
                        src="{{ asset('assets/hen-avatar-withbg.png') }}" alt="hen">
                </div>
                <div class="absolute z-10 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <div style="box-shadow: 0px 0px 179px 300px #FCB276A0;"></div>
                </div>
            </div>
            <div id="mainContent"
                class="flex flex-col-reverse lg:flex-row items-center lg:justify-between h-[100vh] pb-20 pt-[10vh] mx-[50px] lg:mx-[100px] xl:mx-[180px] z-50 relative transition-all duration-700">
                <div id="loginDiv"
                    class="max-w-[600px] my-2 p-12 animate-slideout px-8 flex flex-col justify-center items-center h-full w-full rounded-2xl transition-all duration-700 ease-in-out"
                    style="box-shadow: 0px 0px 8px 0px #00000026; background:rgba(255, 255, 255, 0.389)">
                    <div class="w-full">
                        <div>
                            <h1 class="text-customBlackColor font-bold text-[44px] text-center">Log in</h1>
                        </div>
                        <form id="animatedForm" action="">
                            <div class="mt-20">
                                <div>
                                    <label for="email" class="block text-sm text-customGrayColorDark">Email</label>
                                    <input type="email" id="email"
                                        class="w-full mt-1 bg-white border border-gray-400 rounded-2xl placeholder:text-customGrayColorDark placeholder:text-sm"
                                        placeholder="Enter your email">
                                </div>
                                <div class="mt-5">
                                    <label for="password" class="block text-sm text-customGrayColorDark">Password</label>
                                    <input type="password" id="password"
                                        class="w-full mt-1 bg-white border border-customGrayColorDark rounded-2xl placeholder:text-customGrayColorDark placeholder:text-sm"
                                        placeholder="Enter your password">
                                </div>
                                <div>
                                    <p class="text-xs text-right text-customOrangeDark">Forgot password?</p>
                                </div>
                                <button type="submit"
                                    class="w-full mt-8 text-lg text-white rounded-full gradient-bg font-semi-bold h-14">Log
                                    in</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Welcome Section -->
                <div id="welcomeDiv"
                    class="flex flex-col xl:justify-center items-center h-full w-full relative z-50 max-w-[600px] transition-all duration-700 ease-in-out">
                    <div>
                        <h2 class="text-[60px] text-customOrangeDark font-bold leading-none">
                            <span class="text-[50px]">Welcome to</span><br> Poultry Bazar
                        </h2>
                        <p class="flex justify-start mt-4 font-normal text-black text-custom16">
                            Start your new journey with us and join <br> our community
                        </p>
                    </div>
                    <button id="switchToLoginBtn" type="button"
                        class="w-1/2 mt-10 text-lg font-semibold text-white rounded-full lg:w-full lg:mt-40 gradient-bg h-14">
                        Get Access
                    </button>
                </div>

                <!-- Login Form Section -->

            </div>

            <div id="signupSection"
                class="flex flex-col lg:flex-row items-center lg:justify-between h-[100vh] pb-20 pt-[10vh] mx-[50px] lg:mx-[100px] xl:mx-[180px] z-50 relative hidden ">
                <div class="flex flex-col justify-center items-center h-full w-full relative z-50 max-w-[600px]">
                    <div id="welcomeDiv" class="flex flex-col items-center">
                        <h2 class="text-[60px] text-customOrangeDark font-bold leading-none">
                            <span class="text-[50px]">Join Us at</span><br> Poultry Bazar
                        </h2>
                        <p class="flex justify-start mt-4 font-normal text-black text-custom16">
                            Become a member and start your journey with <br> Poultry Bazar
                        </p>
                        <button id="backToLoginBtn" type="button"
                            class="w-1/2 mt-10 text-lg font-semibold text-white rounded-full lg:w-full lg:mt-40 gradient-bg h-14">Login</button>
                    </div>
                </div>
                <!-- Signup Form Section (Initially hidden) -->
                <div class="max-w-[600px] animate-slideIn px-8 lg:py-0 py-4 my-2 flex flex-col justify-center items-center h-full w-[100%] rounded-2xl transition-all duration-700 ease-in-out"
                    style="box-shadow: 0px 0px 8px 0px #00000026; background:rgba(255, 255, 255, 0.389)">
                    <div id="signupForm" class="w-full h-full m-5 ">
                        <form id="" action="">
                            <h1 class="text-customBlackColor font-bold text-[44px] text-center mt-5">Get Access</h1>
                            <div class="mt-10">
                                <div>
                                    <label for="email" class="block text-sm text-customGrayColorDark">Email</label>
                                    <input type="email" id="email"
                                        class="w-full mt-1 bg-white border border-gray-400 rounded-2xl placeholder:text-customGrayColorDark placeholder:text-sm"
                                        placeholder="Enter your email">
                                </div>
                                <div>
                                    <label for="confirmEmail" class="block mt-5 text-sm text-customGrayColorDark">Confirm
                                        Email</label>
                                    <input type="email" id="confirmEmail"
                                        class="w-full mt-1 bg-white border border-gray-400 rounded-2xl placeholder:text-customGrayColorDark placeholder:text-sm"
                                        placeholder="Confirm your email">
                                </div>
                                <div class="mt-5">
                                    <label for="password" class="block text-sm text-customGrayColorDark">Password</label>
                                    <input type="password" id="password"
                                        class="w-full mt-1 bg-white border border-customGrayColorDark rounded-2xl placeholder:text-customGrayColorDark placeholder:text-sm"
                                        placeholder="Enter your password">
                                </div>
                                <button id="nextBtn" type="button"
                                    class="w-full mt-8 text-lg text-white rounded-full gradient-bg font-semi-bold h-14">Next</button>
                            </div>
                        </form>
                    </div>
                    <div id="extraSection" class="flex flex-col justify-center hidden w-full h-full mx-auto">
                        <h2 class="mb-6 text-4xl font-bold text-center">Select Panel</h2>
                        <div class="grid grid-cols-1 gap-6 mb-8 text-center sm:grid-cols-2">
                            <!-- Market Box 1 -->
                            <div class="relative">
                                <input type="checkbox" name="market" id="market1" class="sr-only peer" checked>
                                <label for="market1"
                                    class="block h-full p-4 transition-all bg-white border-2 border-gray-200 cursor-pointer rounded-xl peer-checked:bg-orange-100 peer-checked:border-orange-300">
                                    <img class="" src="{{ asset('assets/icons/market update.png') }}"
                                        alt="Market icon">
                                    <h3 class="text-xl font-semibold text-customGrayColorDark">Total Markets</h3>
                                    <button id="openModalBtn"
                                        class="w-full h-10 mt-4 text-sm transition-colors bg-white border-2 rounded-full text-customOrangeDark peer-checked:text-customOrangeDark hover:text-orange-600">
                                        View info
                                    </button>
                                </label>
                                <div
                                    class="absolute w-6 h-6 transition-all border-2 border-gray-300 rounded-full top-4 right-4 peer-checked:border-customOrangeDark peer-checked:bg-customOrangeDark">
                                </div>
                            </div>

                            <!-- Market Box 2 -->
                            <div class="relative">
                                <input type="checkbox" name="market" id="market2" class="sr-only peer">
                                <label for="market2"
                                    class="block h-full p-4 transition-all bg-white border-2 border-gray-200 cursor-pointer rounded-xl peer-checked:bg-orange-100 peer-checked:border-orange-300">
                                    <img class="" src="{{ asset('assets/icons/pos.png') }}" alt="Market icon">
                                    <h3 class="mb-2 text-xl font-semibold text-customGrayColorDark">Total Markets</h3>
                                    <button
                                        class="w-full h-10 mt-4 text-sm transition-colors bg-white border-2 rounded-full text-customOrangeDark peer-checked:text-customOrangeDark hover:text-orange-600">
                                        View info
                                    </button>
                                </label>
                                <div
                                    class="absolute w-6 h-6 transition-all border-2 border-gray-300 rounded-full top-4 right-4 peer-checked:border-customOrangeDark peer-checked:bg-customOrangeDark">
                                </div>
                            </div>

                            <!-- Market Box 3 -->
                            <div class="relative">
                                <input type="checkbox" name="market" id="market3" class="sr-only peer">
                                <label for="market3"
                                    class="block h-full p-4 transition-all bg-white border-2 border-gray-200 cursor-pointer rounded-xl peer-checked:bg-orange-100 peer-checked:border-orange-300">
                                    <img class="" src="{{ asset('assets/icons/floks.png') }}" alt="Market icon">
                                    <h3 class="mb-2 text-xl font-semibold text-customGrayColorDark">Total Markets</h3>
                                    <button
                                        class="w-full h-10 mt-4 text-sm transition-colors bg-white border-2 rounded-full text-customOrangeDark peer-checked:text-customOrangeDark hover:text-orange-600">
                                        View info
                                    </button>
                                </label>
                                <div
                                    class="absolute w-6 h-6 transition-all border-2 border-gray-300 rounded-full top-4 right-4 peer-checked:border-customOrangeDark peer-checked:bg-customOrangeDark">
                                </div>
                            </div>

                            <!-- Market Box 4 -->
                            <div class="relative">
                                <input type="checkbox" name="market" id="market4" class="sr-only peer">
                                <label for="market4"
                                    class="block h-full p-4 transition-all bg-white border-2 border-gray-200 cursor-pointer rounded-xl peer-checked:bg-orange-100 peer-checked:border-orange-300">
                                    <img class="" src="{{ asset('assets/icons/e-commerce.png') }}"
                                        alt="Market icon">
                                    <h3 class="mb-2 text-xl font-semibold text-customGrayColorDark">Total Markets</h3>
                                    <button
                                        class="w-full h-10 mt-4 text-sm transition-colors bg-white border-2 rounded-full text-customOrangeDark peer-checked:text-customOrangeDark hover:text-orange-600">
                                        View info
                                    </button>
                                </label>
                                <div
                                    class="absolute w-6 h-6 transition-all border-2 border-gray-300 rounded-full top-4 right-4 peer-checked:border-customOrangeDark peer-checked:bg-customOrangeDark">
                                </div>
                            </div>
                        </div>

                        <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                            class="block w-full py-4 text-lg font-semibold text-white transition duration-300 rounded-full gradient-bg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50">
                            Get Access
                        </button>
                    </div>
                </div>
            </div>

            <div id="modalOverlay" class="fixed inset-0 z-40 hidden bg-black opacity-50"></div>

<!-- Modal -->
<div id="modal"
    class="fixed inset-0 z-50 flex items-center justify-center hidden overflow-x-hidden overflow-y-auto outline-none focus:outline-none">
    <div class="relative w-auto max-w-lg mx-auto my-6">
        <!-- Modal content -->
        <div
            class="relative flex flex-col w-full bg-white h-[100%] rounded-[40px] shadow-lg outline-none modal-content focus:outline-none">
            <!-- Icon at the top -->
            <div class="absolute transform -translate-x-1/2 -top-12 left-1/2">
                <div class="flex items-center justify-center w-24 h-24 rounded-full">
                    <div>
                        <img class="" src="{{ asset('assets/icons/Group 44.png') }}" alt="">
                    </div>
                </div>
            </div>
            <!-- Modal header -->
            <div class="flex items-start justify-between pt-16 ms-10 ">
                <h3 class="text-3xl font-extrabold">Market Rates</h3>
                <button id="closeModalBtn"
                    class="float-right p-1 ml-auto text-3xl font-semibold leading-none text-black bg-transparent border-0 outline-none focus:outline-none">
                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="relative flex-auto p-10 mb-7">
                <p class="text-2xl leading-relaxed text-justify text-gray-400">
                    Stay informed with live updates on the latest poultry market rates. This feature provides users with
                    real-time price trends for chickens across different regions. Gain insights to make informed decisions
                    on buying and selling, helping you maximize your profits in a competitive market.
                </p>
            </div>
        </div>
    </div>
</div>
            <div id="modalOverlay" class="fixed inset-0 z-40 hidden bg-black opacity-25"></div>

            <script>
                const modal = document.getElementById('modal');
                const modalOverlay = document.getElementById('modalOverlay');
                const openModalBtn = document.getElementById('openModalBtn');
                const closeModalBtn = document.getElementById('closeModalBtn');

                // Function to open modal
                function openModal() {
                    modal.classList.remove('hidden');
                    modalOverlay.classList.remove('hidden');
                }

                // Function to close modal
                function closeModal() {
                    modal.classList.add('hidden');
                    modalOverlay.classList.add('hidden');
                }

                // Event listeners
                openModalBtn.addEventListener('click', openModal);
                closeModalBtn.addEventListener('click', closeModal);
                closeModalBtnFooter.addEventListener('click', closeModal);
                modalOverlay.addEventListener('click', closeModal);
            </script>

            <!-- Modal toggle -->
            {{-- <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Toggle modal
  </button> --}}

            <!-- Main modal -->
            <div id="default-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full p-4">
                    <!-- Modal content -->
                    <div class="relative bg-white h-[400px] mb-24 rounded-lg shadow dark:bg-gray-800">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 rounded-t md:p-5 dark:border-gray-600">
                            <button type="button"
                                class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="default-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="flex justify-center space-y-2 md:p-5">
                            <img class="h-[100%] " src="{{ asset('assets/Group 1000006301.png') }}" alt="">
                        </div>
                        <h1 class="text-2xl font-bold text-center">
                            Plase wait for conformation <br>
                            <span>from the admin</span>
                        </h1>
                        <h1 class="mt-10 text-center text-1xl text-customGrayColorDark">
                            Or <br>
                            <span class="">
                                Call Us (+92 300 1234567)
                            </span>
                        </h1>


                    </div>
                </div>
            </div>

            <div class="absolute flex justify-center hidden w-full md:block bottom-5">
                <p class="text-sm text-black">Powered by <span class="text-customOrangeDark">Poul3yBazar</span> &
                    Developed by
                    <a target="_blank" class="text-blue-500" href="https://thewebconcept.com/">TheWebConcept</a>.
                </p>
            </div>
        </div>
    </div>

@section('js')
    <script>
        $(document).ready(function() {
            const $switchToLoginBtn = $('#switchToLoginBtn');
            const $mainContent = $('#mainContent');
            const $signupSection = $('#signupSection');
            const $henImage = $('#henImage');
            const $welcomeDiv = $('#welcomeDiv');
            const $loginDiv = $('#loginDiv');
            const $backToLoginBtn = $('#backToLoginBtn'); // New button for switching back

            // Switch to Signup Form
            $switchToLoginBtn.on('click', function() {
                $welcomeDiv.toggleClass('order-last');
                $loginDiv.toggleClass('order-first');
                $mainContent.addClass('fadeOut');

                $henImage.css({
                    'transition': 'transform 1s ease',
                    'transform': 'rotateY(180deg)'
                });

                // Transition between login form and signup form
                setTimeout(function() {
                    $mainContent.addClass('hidden'); // Hide the main content
                    $signupSection.removeClass('hidden').addClass(
                        'slideInLeft'); // Show the signup section
                }, 700); // Wait for animation to complete before switching
            });

            // Switch back to Login Form
            $backToLoginBtn.on('click', function() {
                $signupSection.addClass('slideOutRight');

                $henImage.css({
                    'transition': 'transform 1s ease',
                    'transform': 'rotateY(360deg)'
                });

                setTimeout(function() {
                    $signupSection.addClass('hidden');
                    $mainContent.removeClass('hidden fadeOut').addClass(
                        'fadeIn'); // Show the login section
                }, 700);
            });

            // Input focus animation
            $('input').on('focus', function() {
                $(this).addClass('input-slide-in');
            });

            $('input').on('blur', function() {
                $(this).removeClass('input-slide-in').addClass('input-slide-out');
            });

            // Signup form section reveal logic

        });
        $(document).ready(function() {
            const nextBtn = document.getElementById('nextBtn');
            const signupForm = document.getElementById('signupForm');
            const extraSection = document.getElementById('extraSection');

            // Add a click event listener to the Next button
            nextBtn.addEventListener('click', function() {
                console.log(
                    'Next button clicked'); // Debugging check to ensure the event is fired

                // Hide the signup form
                signupForm.classList.add('hidden');

                // Show the extra section
                extraSection.classList.remove('hidden');
            });
        });
    </script>
@endsection
@endsection
