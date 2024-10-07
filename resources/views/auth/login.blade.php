@extends('layouts.layout')
@section('content')
<style>
    /* Keyframes for fade and slide animations */
    @keyframes fadeOut {
        from {
            opacity: 1;
        }
        to {
            opacity: 0;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes slideInLeft {
        from {
            transform: translateX(-100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideOutRight {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }

    /* Adding classes to control animation */
    .fadeOut {
        animation: fadeOut 0.7s ease forwards;
    }

    .fadeIn {
        animation: fadeIn 0.7s ease forwards;
    }

    .slideInLeft {
        animation: slideInLeft 0.7s ease forwards;
    }

    .slideOutRight {
        animation: slideOutRight 0.7s ease forwards;
    }

    /* Utility classes to hide/show sections after animation */
    .hiddenContent {
        display: none;
    }
</style>


    <div class="relative w-screen h-screen">
        <div>
            <div class="absolute z-20 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                <img id="henImage" class="w-[500px] object-contain" style="transform: rotateY(180deg)"
                    src="{{ asset('assets/hen-avatar-withbg.png') }}" alt="hen">
            </div>
            <div class="absolute z-10 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                <div style="box-shadow: 0px 0px 179px 300px #FCB276A0;"></div>
            </div>
        </div>

        <div id="mainContent"
            class="flex justify-between h-[100%] pb-20 pt-[10vh] mx-[50px] lg:mx-[100px] xl:mx-[180px] z-50 relative transition-all duration-700">
            <!-- Welcome Section -->
            <div id="welcomeDiv"
                class="flex flex-col justify-center items-center h-full w-full relative z-50 max-w-[600px] transition-all duration-700 ease-in-out">
                <div>
                    <h2 class="text-[60px] text-customOrangeDark font-bold leading-none">
                        <span class="text-[50px]">Welcome to</span><br> Poultry Bazar
                    </h2>
                    <p class="flex justify-start mt-4 font-normal text-black text-custom16">
                        Start your new journey with us and join <br> our community
                    </p>
                </div>
                <button id="switchToLoginBtn"
                    class="gradient-bg w-[300px] text-white rounded-full text-lg font-semibold h-14 mt-40">
                    Get Access
                </button>
            </div>

            <!-- Login Form Section -->
            <div id="loginDiv"
                class="max-w-[600px] px-8 flex flex-col justify-center items-center h-full w-full rounded-2xl transition-all duration-700 ease-in-out"
                style="box-shadow: 0px 0px 8px 0px #00000026; background:rgba(255, 255, 255, 0.389)">
                <div class="w-full">
                    <div>
                        <h1 class="text-customBlackColor font-bold text-[44px] text-center">Log in</h1>
                    </div>
                    <form action="">
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
        </div>

        <div id="signupSection"
            class="flex justify-between h-[100%] pt-[7vh] pb-12 mx-[50px] lg:mx-[100px] xl:mx-[180px] z-50 relative hidden">
            <!-- Signup Form Section (Initially hidden) -->
            <div class="max-w-[600px] px-8 flex flex-col justify-center items-center h-full w-full rounded-2xl"
                style="box-shadow: 0px 0px 8px 0px #00000026; background:rgba(255, 255, 255, 0.389)">
                <div class="w-full">
                    <div>
                        <h1 class="text-customBlackColor font-bold text-[44px] text-center">Get Access</h1>
                    </div>
                    <form action="">
                        <div class="mt-20">
                            <div>
                                <label for="" class="block text-sm text-customGrayColorDark">Email</label>
                                <input type="text"
                                    class="w-full mt-1 bg-white border border-gray-400 rounded-2xl placeholder:text-customGrayColorDark placeholder:text-sm"
                                    placeholder="Enter your email">
                            </div>
                            <div>
                                <label for="" class="block mt-5 text-sm text-customGrayColorDark">Confirm
                                    Email</label>
                                <input type="text"
                                    class="w-full mt-1 bg-white border border-gray-400 rounded-2xl placeholder:text-customGrayColorDark placeholder:text-sm"
                                    placeholder="Confirm your email">
                            </div>
                            <div>
                                <label for="" class="block mt-5 text-sm text-customGrayColorDark">Email</label>
                                <input type="text"
                                    class="w-full mt-1 bg-white border border-gray-400 rounded-2xl placeholder:text-customGrayColorDark placeholder:text-sm"
                                    placeholder="Enter your email">
                            </div>
                            <div class="mt-5">
                                <label for="" class="block mt-5 text-sm text-customGrayColorDark">Password</label>
                                <input type="password"
                                    class="w-full mt-1 bg-white border border-customGrayColorDark rounded-2xl placeholder:text-customGrayColorDark placeholder:text-sm"
                                    placeholder="Enter your password">
                            </div>

                            <button
                                class="w-full mt-8 text-lg text-white rounded-full gradient-bg font-semi-bold h-14">Next</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="flex flex-col justify-center items-center h-full w-full relative z-50 max-w-[600px]">
                <div>
                    <h2 class="text-[60px] text-customOrangeDark font-bold leading-none">
                        <span class="text-[50px]">Join Us at</span><br> Poultry Bazar
                    </h2>
                    <p class="flex justify-start mt-4 font-normal text-black text-custom16">
                        Become a member and start your journey with <br> Poultry Bazar
                    </p>
                    <button id="backToLoginBtn" type="submit"
                        class="w-full mt-8 text-lg text-white rounded-full gradient-bg font-semi-bold h-14">Login</button>

                </div>

            </div>
        </div>

        <div class="absolute flex justify-center w-screen bottom-5">
            <p class="text-sm text-black">Powered by <span class="text-customOrangeDark">Poul3yBazar</span> & Developed by
                <a target="_blank" class="text-blue-500" href="https://thewebconcept.com/">TheWebConcept</a>.
            </p>
        </div>
    </div>

    <script>
        const switchToLoginBtn = document.getElementById('switchToLoginBtn');
        const mainContent = document.getElementById('mainContent');
        const signupSection = document.getElementById('signupSection');
        const henImage = document.getElementById('henImage');
        const welcomeDiv = document.getElementById('welcomeDiv');
        const loginDiv = document.getElementById('loginDiv');
        const backToLoginBtn = document.getElementById('backToLoginBtn'); // New button for switching back

        switchToLoginBtn.addEventListener('click', function() {
            // Flip the positions of the welcome and login divs with animation
            welcomeDiv.classList.toggle('order-last');
            loginDiv.classList.toggle('order-first');
            mainContent.classList.add('fadeOut');

        // Animate the hen image flip
        henImage.style.transition = "transform 0.6s ease";
        henImage.style.transform = "rotateY(0deg)";

            // Transition between login form and signup form
            setTimeout(() => {
                mainContent.classList.add('hidden');
                signupSection.classList.remove('hidden');
                signupSection.classList.add('slideInLeft');
            }, 700); // Wait for animation to complete before switching

            // Animate the image flip
        });

        backToLoginBtn.addEventListener('click', function() {
            // Reverse the transition to go back to the login form
            signupSection.classList.add('hidden');
            mainContent.classList.remove('hidden');
            signupSection.classList.add('slideOutRight');

// Animate the hen image flip back
henImage.style.transition = "transform 0.6s ease";
henImage.style.transform = "rotateY(180deg)";

            // Animate the image flip back to the original state
            setTimeout(() => {
            signupSection.classList.add('hiddenContent');
            mainContent.classList.remove('hiddenContent');
            mainContent.classList.add('fadeIn');
        }, 700);
        });
    </script>
@endsection
