<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Poultry Bazar</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/DataTables-1.13.8/css/jquery.dataTables.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
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
        <div class="p-5 w-5xl xl:px-5 xl:p-0">
            <div>
                <div class="absolute z-20 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <img id="henImage" class="xl:w-[460px] object-contain lg:w-[30vw]"
                        style="transform: rotateY(360deg)" src="{{ asset('assets/hen-avatar-withbg.png') }}"
                        alt="hen">
                </div>
                <div class="absolute z-10 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <div style="box-shadow: 0px 0px 179px 300px #FCB276A0;"></div>
                </div>
            </div>
            <div id="mainContent"
                class="flex flex-col-reverse lg:flex-row items-center lg:justify-between h-[100vh] mx-[10px] lg:mx-[100px] xl:mx-auto z-50 relative transition-all duration-700 max-w-[1450px]">
                <div id="loginDiv"
                    class="max-w-[480px] my-2 p-12 animate-slideout px-8 flex flex-col justify-center pt-10 items-center h-full xl:h-auto w-full rounded-2xl transition-all duration-700 ease-in-out"
                    style="box-shadow: 0px 0px 8px 0px #00000026; background:rgba(255, 255, 255, 0.389)">
                    <div class="w-full">
                        <div>
                            <h1 class="text-customBlackColor font-bold text-[44px] text-center">Log in</h1>
                        </div>
                        <form id="loginForm" action="">
                            @csrf
                            {{-- <form id="animatedForm" action=""> --}}
                            <div class="mt-20">
                                <div>
                                    <label for="email" class="block text-sm text-customGrayColorDark">Email</label>
                                    <input type="email" id="email"
                                        class="w-full mt-1 bg-white border border-gray-400 rounded-2xl placeholder:text-customGrayColorDark placeholder:text-sm"
                                        placeholder="Enter your email" name="email">
                                </div>
                                <div class="mt-5">
                                    <label for="password"
                                        class="block text-sm text-customGrayColorDark">Password</label>
                                    <input type="password" id="password"
                                        class="w-full mt-1 bg-white border border-customGrayColorDark rounded-2xl placeholder:text-customGrayColorDark placeholder:text-sm"
                                        placeholder="Enter your password" name="password">
                                </div>
                                <div>
                                    <p class="text-xs text-right text-customOrangeDark">Forgot password?</p>
                                </div>

                                <button type="submit" id="loginbutton"
                                    class="w-full mt-8 text-lg text-white rounded-full gradient-bg font-semi-bold h-14">
                                    <div class="hidden text-center " id="spinner">
                                        <svg aria-hidden="true"
                                            class="w-5 h-5 mx-auto text-center text-gray-200 animate-spin fill-white"
                                            viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                                fill="currentColor" />
                                            <path
                                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                                fill="currentFill" />
                                        </svg>
                                    </div>
                                    <div class="" id="text">
                                        Login
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Welcome Section -->
                <div id="welcomeDiv"
                    class="flex flex-col xl:justify-center items-center h-full w-full relative z-40 max-w-[530px] transition-all duration-700 ease-in-out">
                    <div>
                        <h2 class="text-[55px] text-customOrangeDark font-bold leading-none">
                            <span class="text-[45px]">Welcome to</span><br> Poultry Bazar
                        </h2>
                        <p class="flex justify-start mt-4 font-normal text-black text-custom16">
                            Start your new journey with us and join <br> our community
                        </p>
                    </div>
                    <button id="switchToLoginBtn" type="button"
                        class="w-1/2 mt-10 text-lg font-semibold text-white rounded-full  lg:w-[70%] lg:mt-10 gradient-bg h-14">
                        Get Access
                    </button>
                </div>

                <!-- Login Form Section -->

            </div>

            <div id="signupSection"
                class="flex flex-col justify-center lg:flex-row items-center lg:justify-between min-h-[100vh]   mx-[50px] lg:mx-[100px]  z-20 relative hidden max-w-[1500px] xl:mx-auto ">
                <div class="flex flex-col justify-center items-center h-full w-full relative z-40 max-w-[480px]">
                    <div id="welcomeDiv" class="flex flex-col items-center justify-start">
                        <h2 class="text-[50px] text-customOrangeDark font-bold leading-none">
                            <span class="text-[40px]">Join Us at</span><br> Poultry Bazar
                        </h2>
                        <p class="flex justify-start mt-4 font-normal text-black text-custom16">
                            Become a member and start your journey with <br> Poultry Bazar
                        </p>
                        <button id="backToLoginBtn" type="button"
                            class="w-1/2 mt-10 text-lg font-semibold text-white rounded-full lg:w-full lg:mt-10 gradient-bg h-14">Login</button>
                    </div>
                </div>
                <!-- Signup Form Section (Initially hidden) -->
                <div class="max-w-[480px] animate-slideIn px-8 lg:py-0 py-4 my-2 flex flex-col justify-center items-center h-auto w-[100%] rounded-2xl transition-all duration-700 ease-in-out"
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
                                    <label for="confirmEmail"
                                        class="block mt-5 text-sm text-customGrayColorDark">Confirm
                                        Email</label>
                                    <input type="email" id="confirmEmail"
                                        class="w-full mt-1 bg-white border border-gray-400 rounded-2xl placeholder:text-customGrayColorDark placeholder:text-sm"
                                        placeholder="Confirm your email">
                                </div>
                                <div class="mt-5">
                                    <label for="password"
                                        class="block text-sm text-customGrayColorDark">Password</label>
                                    <input type="password" id="password"
                                        class="w-full mt-1 bg-white border border-customGrayColorDark rounded-2xl placeholder:text-customGrayColorDark placeholder:text-sm"
                                        placeholder="Enter your password">
                                </div>
                                <button id="nextBtn" type="button"
                                    class="w-full mt-8 text-lg text-white rounded-full gradient-bg font-semi-bold h-14">Next</button>
                            </div>
                        </form>
                    </div>
                    <div id="extraSection" class="flex flex-col justify-center hidden w-full h-full py-4 mx-auto">
                        <h2 class="mb-6 text-4xl font-bold text-center">Select Panel</h2>
                        <div class="relative z-10 grid grid-cols-1 gap-4 mb-8 text-center sm:grid-cols-2">
                            <!-- Market Box 1 -->
                            <div class="relative">
                                <input type="checkbox" name="market" id="market1" class="sr-only peer" checked>
                                <label for="market1"
                                    class="block h-full p-4 transition-all bg-white border-2 border-gray-200 cursor-pointer rounded-xl peer-checked:bg-orange-100 peer-checked:border-orange-300">
                                    <img src="{{ asset('assets/icons/market update.png') }}" alt="Market icon">
                                    <h3 class="text-xl font-semibold text-customGrayColorDark">Total Markets</h3>
                                    <button id="openModalBtn" data-modal-target="modal" data-modal-toggle="modal"
                                        data-modal-text="Stay informed with live updates on the latest poultry market rates. This feature provides users with real-time price trends for chickens across different regions. Gain insights to make informed decisions on buying and selling, helping you maximize your profits in a competitive market."
                                        data-modal-image="{{ asset('assets/icons/svginfo1.svg') }}"
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
                                    <img src="{{ asset('assets/icons/pos.png') }}" alt="Market icon">
                                    <h3 class="text-xl font-semibold text-customGrayColorDark">Total Markets</h3>
                                    <button id="openModalBtn" data-modal-target="modal" data-modal-toggle="modal"
                                        data-modal-text="Simplify your sales and financial management with an integrated Point of Sale system. Whether you're selling live birds, this feature tracks sales, generates invoices, and provides insights into daily transactions. It’s designed to streamline in-store with ease. Additionally, a free printer and initial receipt roll will be provided by POUL3Y to help you get started smoothly."
                                        data-modal-image="{{ asset('assets/icons/svginfo2.svg') }}"
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
                                    <img src="{{ asset('assets/icons/floks.png') }}" alt="Market icon">
                                    <h3 class="text-xl font-semibold text-customGrayColorDark">Total Markets</h3>
                                    <button id="openModalBtn" data-modal-target="modal" data-modal-toggle="modal"
                                        data-modal-text="Manage the health, productivity, and expenses of your flocks with ease using comprehensive flock management tools. The following features are in support to improve flock health, streamline operations, and optimize profitability while managing financial aspects effectively."
                                        data-modal-image="{{ asset('assets/icons/svginfo3.svg') }}"
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
                                    <img src="{{ asset('assets/icons/svginfo4 .svg') }}" alt="Market icon">
                                    <h3 class="text-xl font-semibold text-customGrayColorDark">Total Markets</h3>
                                    <button id="openModalBtn" data-modal-target="modal" data-modal-toggle="modal"
                                        data-modal-text="Expand your business reach with the E-Commerce module, allowing you to buy and sell poultry products online. This module simplifies online trading, making it easy to reach new customers and streamline operations."
                                        data-modal-image="{{ asset('assets/icons/e-commerce.png') }}"
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
                            class="block w-full py-3 text-lg font-semibold text-white transition duration-300 rounded-full gradient-bg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50">
                            Get Access
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="modalOverlay" class="fixed inset-0 z-[48] hidden bg-black opacity-50"></div> --}}

    <!-- Modal -->
    <div id="modal"
        class="fixed inset-0 z-50 flex items-center justify-center hidden overflow-x-hidden overflow-y-auto outline-none focus:outline-none">
        <div class="relative w-auto max-w-lg mx-auto my-4">
            <!-- Modal content -->
            <div
                class="relative flex flex-col w-full bg-white h-[100%] rounded-[40px] shadow-lg outline-none modal-content focus:outline-none">
                <!-- Icon at the top -->
                <div class="absolute transform -translate-x-1/2 -top-20 left-1/2">
                    <div>
                        <img class="w-36 h-36" src="{{ asset('assets/icons/Group 44.png') }}" alt="icon">
                    </div>
                </div>
                <!-- Modal header -->
                <div class="flex items-start justify-between pt-16 ms-10 ">
                    <h3 class="text-3xl font-extrabold">Market Rates</h3>
                </div>
                <!-- Modal body -->
                <div class="relative flex-auto p-10 mb-5">
                    <p class="text-xl leading-relaxed text-justify text-gray-400">
                        Stay informed with live updates on the latest poultry market rates. This feature provides
                        users with
                        real-time price trends for chickens across different regions. Gain insights to make informed
                        decisions
                        on buying and selling, helping you maximize your profits in a competitive market.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="modalOverlay" class="fixed inset-0 z-[52] hidden bg-black opacity-75"></div>

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
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
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


    <script src="{{ asset('javascript/jquery.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('javascript/canvas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('DataTables/DataTables-1.13.8/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('javascript/script.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>


    <script>
        document.querySelectorAll('[data-modal-target="modal"]').forEach(button => {
            button.addEventListener('click', function() {
                // Get the modal content element
                const modal = document.getElementById('modal');

                // Get the data attributes for the modal content
                const modalText = this.getAttribute('data-modal-text');
                const modalImage = this.getAttribute('data-modal-image');

                // Update the modal content
                modal.querySelector('.modal-content p').textContent = modalText;
                modal.querySelector('.modal-content img').src = modalImage;

                // Show the modal
                modal.classList.remove('hidden');
            });
        });

        // Close the modal when clicking outside of it or on close button (if any)
        window.addEventListener('click', function(event) {
            const modal = document.getElementById('modal');
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#loginForm").submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                // Send the AJAX request
                $.ajax({
                    type: "POST",
                    url: "/Login",
                    data: formData,
                    dataType: "json",
                    beforeSend: function() {
                        $('#spinner').removeClass('hidden');
                        $('#text').addClass('hidden');
                        $('#loginbutton').attr('disabled', true);
                    },
                    success: function(response) {
                        // Handle the success response here
                        if (response.success == true) {
                            $('#text').removeClass('hidden');
                            $('#spinner').addClass('hidden');

                            window.location.href = '/';

                        } else if (response.success == false) {
                            Swal.fire(
                                'Warning!',
                                response.message,
                                'warning'
                            )
                        }
                    },
                    error: function(jqXHR) {

                        let response = JSON.parse(jqXHR.responseText);

                        Swal.fire(
                            'Warning!',
                            response.message,
                            'warning'
                        )
                        $('#text').removeClass('hidden');
                        $('#spinner').addClass('hidden');
                        $('#loginbutton').attr('disabled', false);
                    }
                });
            });



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
                }, 100); // Wait for animation to complete before switching
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
                }, 100);
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
</body>

</html>
