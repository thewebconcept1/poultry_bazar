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
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
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

<body class="text-gray-800 bg-white">
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-12 py-6 mx-auto">
            <svg width="189" height="43" viewBox="0 0 189 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M155.907 23.1433C155.907 21.9144 155.884 20.839 155.926 19.7669C155.926 19.5454 156.14 19.2818 156.322 19.1201C157.409 18.1499 158.509 17.198 159.621 16.2644C159.822 16.1027 160.106 16.0413 160.362 15.941L160.08 15.5367H151.397V10.0938H167.891C167.891 11.7512 167.908 13.3602 167.871 14.9691C167.871 15.181 167.614 15.4219 167.423 15.5869C166.084 16.7511 164.733 17.8976 163.31 19.1153C163.622 19.2058 163.838 19.277 164.058 19.3319C166.88 20.0483 168.735 22.0809 168.981 24.7523C169.283 28.0187 168.01 30.5995 165.224 31.7751C161.387 33.3922 157.499 33.3372 153.743 31.4824C151.856 30.5542 150.706 28.9631 150.242 26.8221C152.165 26.4308 154.057 26.0314 155.957 25.6805C156.146 25.6449 156.487 25.8535 156.594 26.0411C157.53 27.7099 159.828 28.3664 161.51 27.4042C162.318 26.9385 162.642 26.2076 162.592 25.3021C162.537 24.3577 161.987 23.7238 161.136 23.4506C160.464 23.2629 159.771 23.1639 159.073 23.1563C158.049 23.1094 157.029 23.1433 155.907 23.1433Z"
                    fill="url(#paint0_linear_1789_9101)" />
                <path
                    d="M93.3733 22.2321C93.5237 20.172 93.8407 17.7901 95.5628 15.8755C96.4521 14.8968 97.5976 14.1865 98.8697 13.8251C100.855 13.2203 102.89 13.2866 104.838 13.61C107.183 13.9981 109.043 15.3693 110.013 17.6672C110.863 19.6755 111.031 21.7631 110.857 23.9381C110.716 25.7039 110.372 27.3452 109.319 28.7892C108.134 30.4257 106.538 31.3134 104.544 31.6999C102.852 32.0268 101.111 32.001 99.4292 31.6239C97.1896 31.1388 95.49 29.8451 94.4778 27.7931C93.6838 26.1809 93.362 24.4183 93.3733 22.2321ZM105.922 22.6751C105.817 22.0946 105.681 21.5432 105.622 20.9918C105.388 18.7118 104.798 17.9744 102.62 17.4812C102.156 17.3761 101.636 17.5152 101.143 17.5523C100.215 17.6203 99.6588 18.2784 99.3047 18.985C98.5058 20.5859 98.3765 22.3388 98.6578 24.0804C98.9279 25.7847 99.3887 27.3856 101.502 27.7656C102.658 27.9726 103.627 27.7527 104.5 27.0218C105.884 25.8623 105.488 24.1434 105.922 22.6751Z"
                    fill="url(#paint1_linear_1789_9101)" />
                <path
                    d="M114.238 13.5531C115.609 13.5531 116.901 13.5854 118.192 13.5401C118.903 13.5159 118.976 13.9008 118.976 14.4441C118.976 17.1931 118.945 19.942 118.989 22.691C119.007 23.7825 119.181 24.8692 119.291 25.9574C119.453 27.5324 121.405 28.0968 122.395 27.8122C124.089 27.3271 124.497 26.8064 124.524 25.026C124.565 21.606 124.548 18.1843 124.557 14.7643C124.557 13.6792 124.681 13.5579 125.755 13.5563C126.751 13.5563 127.749 13.5709 128.745 13.5563C129.356 13.545 129.636 13.8167 129.636 14.4182C129.636 17.8657 129.728 21.3181 129.59 24.7673C129.508 26.787 129.02 28.7954 127.318 30.186C125.241 31.8823 122.8 32.175 120.239 31.8467C118.582 31.6349 117.057 31.1094 115.873 29.8384C114.861 28.7501 114.228 27.429 114.191 25.9979C114.088 22.041 114.141 18.0744 114.138 14.1207C114.154 13.9289 114.188 13.7389 114.238 13.5531Z"
                    fill="url(#paint2_linear_1789_9101)" />
                <path
                    d="M82.9713 31.6266H78.1412V30.8326C78.1412 25.4187 78.1525 19.9984 78.125 14.5893C78.125 13.7954 78.3271 13.5027 79.168 13.5334C80.9467 13.5997 82.7255 13.4671 84.5042 13.5884C85.7539 13.6821 86.9875 13.9269 88.1782 14.3177C89.7208 14.8174 90.7218 16.056 91.0274 17.576C91.5724 20.2862 91.2134 23.2357 88.4256 24.7719C87.3988 25.3379 86.1181 25.4785 84.9344 25.7162C84.3442 25.8343 83.7087 25.7373 82.9778 25.7373V31.6266H82.9713ZM83.133 17.4839C83.0767 17.5978 83.0302 17.7162 82.9939 17.838C82.9864 18.6454 82.981 19.454 82.9778 20.2636C82.9778 21.7836 83.0295 21.8305 84.5625 21.651C84.6167 21.649 84.6707 21.6436 84.7242 21.6348C85.5602 21.3987 86.2345 20.7066 86.3056 20.0178C86.401 19.1122 86.3833 18.239 85.295 17.8267C84.6207 17.5728 83.8477 17.589 83.1281 17.4839H83.133Z"
                    fill="url(#paint3_linear_1789_9101)" />
                <path
                    d="M180.69 20.2946L183.059 15.2219C183.239 14.837 183.383 14.4134 183.617 14.0786C183.779 13.849 184.086 13.5935 184.337 13.5806C185.839 13.5337 187.344 13.5579 189 13.5579C188.943 13.7892 188.868 14.0157 188.776 14.2355C186.966 17.6313 185.142 21.0109 183.342 24.4067C183.188 24.7118 183.107 25.0482 183.105 25.3899C183.084 27.4338 183.093 29.4794 183.093 31.5912H178.242V29.1802C178.242 28.48 178.177 27.7718 178.255 27.0781C178.456 25.2896 177.797 23.8197 176.884 22.3239C175.741 20.4482 174.833 18.4269 173.821 16.4702C173.354 15.5663 172.877 14.6672 172.293 13.5595C173.472 13.5595 174.437 13.6582 175.365 13.5369C176.945 13.3299 177.915 13.8231 178.477 15.3965C179.059 16.999 179.877 18.5142 180.69 20.2946Z"
                    fill="url(#paint4_linear_1789_9101)" />
                <path
                    d="M138.206 27.632C140.277 27.632 142.215 27.6562 144.149 27.6207C144.928 27.6061 145.211 27.9247 145.185 28.6669C145.158 29.4754 145.211 30.2839 145.156 31.0925C145.143 31.2914 144.845 31.6309 144.671 31.6326C140.935 31.6649 137.2 31.6568 133.395 31.6568C133.379 31.3108 133.356 31.0245 133.356 30.7383C133.356 25.3552 133.368 19.9704 133.342 14.5873C133.342 13.8111 133.504 13.4553 134.367 13.5394C135.307 13.6114 136.251 13.6114 137.19 13.5394C137.967 13.4925 138.222 13.7577 138.216 14.5436C138.183 18.5539 138.201 22.5658 138.201 26.576L138.206 27.632Z"
                    fill="url(#paint5_linear_1789_9101)" />
                <path
                    d="M33.4699 12.0924C30.7036 12.0924 27.9363 12.1032 25.169 12.087C23.8829 12.0806 23.1111 11.1319 23.4442 9.98163C23.6102 9.3995 23.9983 8.992 24.6246 8.89282C24.944 8.84554 25.2666 8.82355 25.5894 8.82706C30.7453 8.82203 35.9015 8.82203 41.0581 8.82706C41.5713 8.82706 41.8483 8.688 42.0499 8.16299C43.2239 5.11109 45.3648 2.92376 48.3025 1.56113C49.3439 1.07818 50.4844 0.841007 51.6444 0.667444C52.8689 0.49194 54.115 0.536847 55.3237 0.800043C57.0981 1.16981 58.8187 1.83064 60.2104 3.05421C61.0567 3.79805 61.7703 4.69066 62.5519 5.50888C62.7133 5.65931 62.8843 5.79903 63.064 5.92716C63.2052 5.74282 63.3874 5.57464 63.4822 5.36982C64.0385 4.23788 64.5861 3.10595 65.1165 1.95893C65.3817 1.38649 65.6674 0.897066 66.3369 0.674991C67.0322 0.443215 67.5421 0.656665 68.0143 1.11698C68.5253 1.61611 68.5899 2.24137 68.3194 2.84183C67.6035 4.44379 66.836 6.0231 66.0846 7.60889C65.8205 8.16731 65.5359 8.71495 65.275 9.27444C65.1413 9.56228 65.2836 9.74878 65.5499 9.8706L71.5944 12.6411C72.4568 13.0379 72.9085 13.6566 72.8514 14.4339C72.7889 15.305 72.0192 16.2385 70.8517 15.8429C69.7672 15.4764 68.7322 14.9546 67.6866 14.4781C66.5266 13.9488 65.3806 13.3861 64.2218 12.8546C63.9059 12.7101 63.6558 12.7813 63.4865 13.1457C62.3632 15.5723 61.2151 17.9892 60.0907 20.4148C58.8984 22.9848 57.7288 25.5646 56.5397 28.1357C55.7139 29.9241 54.8903 31.7147 54.0279 33.486C53.6722 34.2169 53.0243 34.5478 52.1953 34.5467C47.5777 34.5403 42.9605 34.5381 38.3436 34.5403C35.0204 34.5403 31.6965 34.5428 28.3718 34.5478C27.3962 34.5478 26.771 34.1317 26.3548 33.2143C25.2768 30.8426 24.1136 28.5065 23.013 26.1435C21.8142 23.5724 20.6564 20.9819 19.4641 18.4075C18.7094 16.7819 17.9257 15.1734 17.1592 13.551C16.3324 11.8046 16.8003 12.1075 14.7951 12.0946C10.8064 12.0698 6.81769 12.0795 2.82898 12.059C2.43972 12.0528 2.05311 11.9937 1.67979 11.8833C0.994166 11.6882 0.680459 10.7169 0.765624 10.1789C0.820029 9.84235 0.982907 9.53277 1.22947 9.2973C1.47603 9.06183 1.79277 8.91336 2.13149 8.8745C2.45322 8.83349 2.7774 8.81476 3.10172 8.81844C7.66502 8.81844 12.2283 8.84 16.7927 8.81089C18.8151 8.79796 18.7871 9.29924 19.4759 10.6328C20.0602 11.7647 20.5475 12.9473 21.0757 14.1083C21.7139 15.5098 22.3456 16.9112 22.9892 18.3127C23.2081 18.8189 23.4602 19.3101 23.7439 19.7831C23.8376 19.9329 24.1298 20.0246 24.3335 20.0278C25.5905 20.0483 26.8486 20.0364 28.1066 20.0354C31.3594 20.0354 34.6115 20.0354 37.8628 20.0354C40.1978 20.0354 41.8925 18.9735 42.8466 16.8519C43.5009 15.3987 43.3349 13.9359 42.6116 12.5226C42.4229 12.1539 42.1448 12.0913 41.7772 12.0913C39.0099 12.1 36.2436 12.0913 33.4763 12.0913L33.4699 12.0924ZM25.4439 23.4236C25.5722 23.76 25.6401 23.9799 25.7371 24.1858C26.7634 26.3418 27.8242 28.4904 28.8009 30.6734C29.0025 31.1229 29.2397 31.2124 29.6321 31.221C29.866 31.221 30.0999 31.221 30.3328 31.221C37.0884 31.221 43.8441 31.221 50.5998 31.221C50.8146 31.2332 51.0301 31.211 51.238 31.1552C51.3987 31.0975 51.5323 30.9823 51.6131 30.8318C52.4755 28.9992 53.3024 27.1568 54.1594 25.3242C55.4649 22.531 56.7877 19.7454 58.1007 16.9543C59.0709 14.9061 60.0412 12.8481 60.9877 10.7869C61.0955 10.5433 61.1979 10.2134 61.1267 9.97517C60.5877 8.17701 59.6067 6.66777 58.0867 5.52721C55.7603 3.78188 53.1547 3.48758 50.4596 4.27346C48.2098 4.93429 46.5367 6.41874 45.4683 8.53492C44.828 9.80592 44.8711 9.77789 45.5158 11.0284C45.9103 11.7938 46.2704 12.6293 46.39 13.4691C46.569 14.7368 46.5863 16.0272 46.1885 17.3004C45.6361 19.1273 44.4813 20.7134 42.9123 21.8001C41.4031 22.8684 39.7257 23.2996 37.8887 23.2878C34.0078 23.2608 30.1269 23.2781 26.246 23.2878C25.9872 23.2878 25.7285 23.3729 25.4439 23.4236Z"
                    fill="url(#paint6_linear_1789_9101)" />
                <path
                    d="M33.0327 42.8115C31.6851 42.9031 30.979 41.8261 30.9984 40.7772C31.0189 39.6992 31.7919 38.729 33.0327 38.7667C34.2358 38.8001 35.0745 39.6 35.0809 40.8042C35.0874 42.0083 34.2573 42.8072 33.0327 42.8115Z"
                    fill="url(#paint7_linear_1789_9101)" />
                <path
                    d="M47.4 42.8139C46.2142 42.9444 45.3873 41.7273 45.4251 40.7786C45.466 39.7502 46.2336 38.6991 47.6049 38.7519C48.671 38.7918 49.5453 39.8472 49.5302 40.8487C49.5205 41.7628 48.7023 42.9853 47.4 42.8139Z"
                    fill="url(#paint8_linear_1789_9101)" />
                <path
                    d="M53.0282 8.39071C54.1839 8.38532 55.0765 9.28656 55.0894 10.4519C55.0856 10.9983 54.8679 11.5215 54.483 11.9093C54.0982 12.2972 53.5767 12.519 53.0304 12.5271C52.002 12.5271 51.0328 11.7725 51.0015 10.4789C50.9909 10.207 51.0355 9.93575 51.1328 9.68163C51.2301 9.42752 51.378 9.19581 51.5675 9.00056C51.757 8.8053 51.9842 8.65057 52.2353 8.54574C52.4864 8.44091 52.7562 8.38817 53.0282 8.39071Z"
                    fill="url(#paint9_linear_1789_9101)" />
                <defs>
                    <linearGradient id="paint0_linear_1789_9101" x1="159.633" y1="10.0937" x2="159.633"
                        y2="32.934" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FCB376" />
                        <stop offset="1" stop-color="#FE8A29" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_1789_9101" x1="102.146" y1="13.3672" x2="102.146"
                        y2="31.9273" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FCB376" />
                        <stop offset="1" stop-color="#FE8A29" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_1789_9101" x1="121.896" y1="13.5391" x2="121.896"
                        y2="31.9652" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FCB376" />
                        <stop offset="1" stop-color="#FE8A29" />
                    </linearGradient>
                    <linearGradient id="paint3_linear_1789_9101" x1="84.6839" y1="13.5312" x2="84.6839"
                        y2="31.6266" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FCB376" />
                        <stop offset="1" stop-color="#FE8A29" />
                    </linearGradient>
                    <linearGradient id="paint4_linear_1789_9101" x1="180.647" y1="13.4922" x2="180.647"
                        y2="31.5912" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FCB376" />
                        <stop offset="1" stop-color="#FE8A29" />
                    </linearGradient>
                    <linearGradient id="paint5_linear_1789_9101" x1="139.264" y1="13.5273" x2="139.264"
                        y2="31.6577" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FCB376" />
                        <stop offset="1" stop-color="#FE8A29" />
                    </linearGradient>
                    <linearGradient id="paint6_linear_1789_9101" x1="36.8041" y1="0.5625" x2="36.8041"
                        y2="34.5478" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FCB376" />
                        <stop offset="1" stop-color="#FE8A29" />
                    </linearGradient>
                    <linearGradient id="paint7_linear_1789_9101" x1="33.0395" y1="38.7656" x2="33.0395"
                        y2="42.8169" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FCB376" />
                        <stop offset="1" stop-color="#FE8A29" />
                    </linearGradient>
                    <linearGradient id="paint8_linear_1789_9101" x1="47.4771" y1="38.75" x2="47.4771"
                        y2="42.8302" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FCB376" />
                        <stop offset="1" stop-color="#FE8A29" />
                    </linearGradient>
                    <linearGradient id="paint9_linear_1789_9101" x1="53.0447" y1="8.39062" x2="53.0447"
                        y2="12.5271" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FCB376" />
                        <stop offset="1" stop-color="#FE8A29" />
                    </linearGradient>
                </defs>
            </svg>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:flex-row md:space-x-14 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block px-3 py-2 text-gray-500 rounded hover:bg-customOrangeDark hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-customOrangeDark md:p-0 "
                            aria-current="page">What is it?</a>
                    </li>
                    <li>
                        <a href="#home"
                            class="block px-3 py-2 text-gray-500 rounded hover:bg-customOrangeDark hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-customOrangeDark md:p-0 ">Home</a>
                    </li>
                    <li>
                        <a href="#about"
                            class="block px-3 py-2 text-gray-500 rounded hover:bg-customOrangeDark hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-customOrangeDark md:p-0 ">About</a>
                    </li>
                    <li>
                        <a href="#price"
                            class="block px-3 py-2 text-gray-500 rounded hover:bg-customOrangeDark hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-customOrangeDark md:p-0 ">Price</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="section" id="home">
        <div
            class="container mx-auto relative z-20 flex flex-col px-[5vw] items-center justify-center w-full lg:flex-row lg:justify-between xl:mx-auto">

            <!-- Welcome Section -->
            <div class="relative z-40 lg:w-[40vh] flex flex-col items-center justify-center h-full ">
                <div id="welcomeDiv" class="text-center lg:text-left">
                    <h2 class="text-4xl font-bold leading-tight lg:text-5xl text-customOrangeDark">
                        <span>Welcome to</span><br> Poultry Bazar
                    </h2>
                    <p class="mt-4 text-sm font-light text-gray-600 lg:text-base">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    </p>
                </div>
            </div>
            <!-- Signup Form Section (Initially hidden) -->
            <div class="w-[20vw] lg:block hidden h-full ">
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
            <div class="z-40 flex items-center md:mt-4 mt-6 md:px-0 px-2 lg:w-[40vw] justify-center ">
                <div class="grid grid-cols-2 gap-5 ">
                    <div class="max-w-[200px] p-4 text-center bg-white rounded-lg shadow-lg">
                        <div class="flex items-center justify-center mx-auto mb-4 ">
                            <img src="{{ asset('assets/icons/Group 44.png') }}" alt="Market Rates Icon" class="w-24 h-24">
                        </div>
                        <h3 class="mb-2 text-lg font-bold text-gray-800">Market Rates</h3>
                        <p class="text-sm text-gray-600">Get real-time poultry prices to stay ahead in the market.</p>
                    </div>
                    <div class="max-w-[200px] p-4 text-center bg-white rounded-lg shadow-lg">
                        <div class="flex items-center justify-center mx-auto mb-4 ">
                            <img src="{{ asset('assets/icons/pos.png') }}" alt="Market Rates Icon" class="w-24 h-24">
                        </div>
                        <h3 class="mb-2 text-lg font-bold text-gray-800">Market Rates</h3>
                        <p class="text-sm text-gray-600">Get real-time poultry prices to stay ahead in the market.</p>
                    </div>
                    <div class="max-w-[200px] p-4 text-center bg-white rounded-lg shadow-lg">
                        <div class="flex items-center justify-center mx-auto mb-4 ">
                            <img src="{{ asset('assets/icons/floks.png') }}" alt="Market Rates Icon" class="w-24 h-24">
                        </div>
                        <h3 class="mb-2 text-lg font-bold text-gray-800">Market Rates</h3>
                        <p class="text-sm text-gray-600">Get real-time poultry prices to stay ahead in the market.</p>
                    </div>
                    <div class="max-w-[200px] p-4 text-center bg-white rounded-lg shadow-lg">
                        <div class="flex items-center justify-center mx-auto mb-4 ">
                            <img src="{{ asset('assets/icons/e-commerce.png') }}" alt="Market Rates Icon" class="w-24 h-24">
                        </div>
                        <h3 class="mb-2 text-lg font-bold text-gray-800">Market Rates</h3>
                        <p class="text-sm text-gray-600">Get real-time poultry prices to stay ahead in the market.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div
                class="container grid grid-cols-2 gap-6 px-4 py-4 mx-auto md:gap-10 xl:mt-0 sm:mt-10 lg:grid-cols-5 sm:grid-cols-2 md:grid-cols-4 md:px-12">
                <div class="w-full h-auto border rounded-lg border-customOrangeDark">
                    <div class="flex gap-10 m-4">
                        <div>
                            <h1 class="font-semibold">250.50</h1>
                            <p class="font-semibold text-customOrangeDark">City</p>
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
                    <div class="flex gap-10 m-4">
                        <div>
                            <h1 class="font-semibold">250.50</h1>
                            <p class="font-semibold text-customOrangeDark">City</p>
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
                    <div class="flex gap-10 m-4">
                        <div>
                            <h1 class="font-semibold">250.50</h1>
                            <p class="font-semibold text-customOrangeDark">City</p>
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
                    <div class="m-4 ms-6">
                        <h1 class="font-bold">20+More</h1>
                        <p class="font-bold text-[15px] text-customOrangeDark">Cities in App</p>
                    </div>
                </div>
                <div class="h-20 px-4 text-center w-44 ">
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
                </div>
            </div>
        </div>
        <div class="section" id="about">
            <div class="flex items-center justify-center p-5 mt-12">
                <div class="text-center">
                    <h2 class="text-2xl font-semibold text-customOrangeDark">Services</h2>
                    <p class="mt-2 text-gray-500">Our delivery offers on-demand delivery and courier services for
                        business
                        and
                        consumers</p>
                </div>
            </div>

            <div class="flex items-center justify-center mt-16">
                <div class="container px-5 ">
                    <div class="grid grid-cols-1 gap-8 text-center md:grid-cols-3">
                        <!-- Card 1 -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('assets/hen-avatar-withbg.png') }}" alt="Market Updates Icon"
                                class="w-[200px] h-[200px] mb-4">
                            <h3 class="text-2xl font-semibold text-customOrangeDark">Market Updates</h3>
                            <p class="mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed
                                do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                        </div>
                        <!-- Card 2 -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('assets/hen-avatar-withbg.png') }}" alt="Knowledge Center Icon"
                                class="mb-4 w-[200px] h-[200px]">
                            <h3 class="text-2xl font-semibold text-customOrangeDark">Knowledge Center</h3>
                            <p class="mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed
                                do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                        </div>
                        <!-- Card 3 -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('assets/hen-avatar-withbg.png') }}" alt="Point of Sale Icon"
                                class="mb-4 w-[200px] h-[200px]">
                            <h3 class="text-2xl font-semibold text-customOrangeDark">Point of Sale</h3>
                            <p class="mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed
                                do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center mt-8">
                <div class="container px-4 mx-auto">
                    <div class="grid grid-cols-1 gap-8 text-center md:grid-cols-3">
                        <!-- Card 1 -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('assets/hen-avatar-withbg.png') }}" alt="Market Updates Icon"
                                class="w-[200px] h-[200px] mb-4">
                            <h3 class="text-2xl font-semibold text-customOrangeDark">Flock Management</h3>
                            <p class="mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed
                                do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                        </div>
                        <!-- Card 2 -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('assets/hen-avatar-withbg.png') }}" alt="Knowledge Center Icon"
                                class="mb-4 w-[200px] h-[200px]">
                            <h3 class="text-2xl font-semibold text-customOrangeDark">E-Commerce </h3>
                            <p class="mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed
                                do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                        </div>
                        <!-- Card 3 -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('assets/hen-avatar-withbg.png') }}" alt="Point of Sale Icon"
                                class="mb-4 w-[200px] h-[200px]">
                            <h3 class="text-2xl font-semibold text-customOrangeDark">Job Portal</h3>
                            <p class="mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed
                                do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center px-4 mt-14">
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
                                </ul>
                                <button class="px-4 py-2 mt-8 font-semibold text-black bg-white border rounded-md">SIGN
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
                                </ul>
                                <button class="px-4 py-2 mt-8 font-semibold text-black bg-white border rounded-md">SIGN
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
        </div>
        <div class="container mx-auto ">
            <img class="mt-24" src="{{ asset('assets/icons/Subtract.png') }}" alt="">
        </div>
        <div class="text-gray-800 bg-white">

            <!-- Footer Section -->
            <footer class="mt-8 bg-white ">
                <div class="container grid gap-8 px-4 mx-auto text-center md:grid-cols-4 md:text-left">

                    <!-- Company Section -->
                    <div class="h-32 lg:mt-20">
                        <h2 class="mb-2 text-lg font-semibold text-orange-500">Company</h2>
                        <p class="text-gray-500">Best delivery services in Germany. Using by more than 3,000,000 people
                            in
                            the world</p>
                    </div>

                    <!-- Quick Links Column 1 -->
                    <div class="h-32 lg:mt-20">
                        <h2 class="mb-2 text-lg font-semibold text-orange-500">Quick Links</h2>
                        <ul class="space-y-1 text-gray-500">
                            <li><a href="#" class="hover:text-gray-700">Pricing</a></li>
                            <li><a href="#" class="hover:text-gray-700">Customer</a></li>
                            <li><a href="#" class="hover:text-gray-700">User Guide</a></li>
                            <li><a href="#" class="hover:text-gray-700">Agent User</a></li>
                            <li><a href="#" class="hover:text-gray-700">Blog</a></li>
                        </ul>
                    </div>

                    <!-- Quick Links Column 2 -->
                    <div class="h-32 mt-20">
                        <h2 class="mb-2 text-lg font-semibold text-orange-500">Quick Links</h2>
                        <ul class="space-y-1 text-gray-500">
                            <li><a href="#" class="hover:text-gray-700">Privacy Policy</a></li>
                            <li><a href="#" class="hover:text-gray-700">Terms & Conditions</a></li>
                            <li><a href="#" class="hover:text-gray-700">Disclaimer</a></li>
                        </ul>
                    </div>

                    <!-- Logo and App Store Links -->
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
                            <img src="{{ asset('assets/app and apple store.png') }}"
                                alt="App Store and Google Play" class="h-auto ">
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
        @yield('js')
</body>

</html>
