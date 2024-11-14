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
        class="relative z-20 flex flex-col items-center justify-center max-w-6xl mx-12 lg:flex-row lg:justify-between lg:mx-24 xl:mx-auto">

        <!-- Welcome Section -->
        <div class="relative z-40 flex flex-col items-center justify-center w-full h-full max-w-sm p-6">
            <div id="welcomeDiv" class="text-center lg:text-left">
                <h2 class="text-4xl font-bold leading-tight lg:text-5xl text-customOrangeDark">
                    <span>Welcome to</span><br> Poultry Bazar
                </h2>
                <p class="mt-4 text-sm font-light text-gray-600 lg:text-base">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                </p>
            </div>
        </div>
            <!-- Signup Form Section (Initially hidden) -->
            <div class="w-full h-full ">
                <div class="p-5 w-5xl xl:px-5 xl:p-0">
                    <div>
                        <div class="absolute z-20 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <img id="henImage" class="xl:w-[260px] object-contain lg:w-[20vw]"
                                style="transform: rotateY(360deg)" src="{{ asset('assets/hen-avatar-withbg.png') }}"
                                alt="hen">
                        </div>
                        <div class="absolute z-10 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <div style="box-shadow: 0px 0px 179px 300px #FCB276A0;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container z-40 flex items-center justify-center w-screen min-h-[100%] mt-5 gap-5 p-10 xl:p-[10%] lg:p-0">
                <div class="flex flex-col gap-10 ">
                    <div class="max-w-[100%] p-2 bg-white rounded-lg shadow-lg ">
                        <!-- Icon Circle -->
                        <div class="flex justify-center mb-4">
                            <div class="flex items-center justify-center w-20 h-12 rounded-ful">
                                <!-- Replace with appropriate icon -->
                                <svg width="83" height="83" viewBox="0 0 83 83" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <ellipse cx="29.9999" cy="30.0001" rx="29.9999" ry="30.0001"
                                        transform="matrix(0.866023 -0.500004 0.499996 0.866028 0.267578 30.2695)"
                                        fill="url(#paint0_linear_1789_9150)" />
                                    <mask id="mask0_1789_9150" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                        x="10" y="10" width="61" height="61">
                                        <ellipse cx="29.9999" cy="30.0001" rx="29.9999" ry="30.0001"
                                            transform="matrix(0.866023 -0.500004 0.499996 0.866028 0 30)"
                                            fill="url(#paint1_linear_1789_9150)" />
                                    </mask>
                                    <g mask="url(#mask0_1789_9150)">
                                        <path
                                            d="M37.4636 4.60575C44.7123 17.161 40.4106 33.2154 27.8555 40.4642C15.3004 47.7129 -0.753765 43.4112 -8.00248 30.8559C-15.2512 18.3006 -10.9495 2.24628 1.60563 -5.00249C14.1607 -12.2513 30.2149 -7.94954 37.4636 4.60575Z"
                                            stroke="white" stroke-opacity="0.2" stroke-width="7.50001" />
                                    </g>
                                    <path
                                        d="M28.822 50.6439L36.4319 42.9563L40.5444 46.8939L45.5706 42.5001L48.3706 45.2301M53.7518 33.125C53.7518 32.6277 53.5543 32.1508 53.2027 31.7992C52.851 31.4475 52.3741 31.25 51.8768 31.25H30.6269C30.1297 31.25 29.6528 31.4475 29.3011 31.7992C28.9495 32.1508 28.752 32.6277 28.752 33.125V38.7501H53.7518V33.125Z"
                                        stroke="white" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M53.7518 37.5V49.3751C53.7518 49.8724 53.5543 50.3493 53.2027 50.7009C52.851 51.0526 52.3741 51.2501 51.8768 51.2501H33.7519M38.1969 35H49.4469M33.1957 35H34.4457M28.752 37.5V43.1251"
                                        stroke="white" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <defs>
                                        <linearGradient id="paint0_linear_1789_9150" x1="29.9999" y1="0"
                                            x2="29.9999" y2="60.0002" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#7583FE" />
                                            <stop offset="1" stop-color="#464E98" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_1789_9150" x1="29.9999" y1="0"
                                            x2="29.9999" y2="60.0002" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#7583FE" />
                                            <stop offset="1" stop-color="#464E98" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <!-- Title -->
                        <h3 class="text-lg font-semibold text-center">Market Rates</h3>
                        <!-- Description -->
                        <p class="mt-2 text-sm text-center text-gray-600">Get real-time poultry prices to stay ahead in
                            the
                            market.</p>
                    </div>
                    <div class="max-w-[100%] p-2 bg-white rounded-lg shadow-lg">
                        <!-- Icon Circle -->
                        <div class="flex justify-center mb-4">
                            <div class="flex items-center justify-center w-20 h-12 rounded-full">
                                <!-- Replace with appropriate icon -->
                                <svg width="83" height="83" viewBox="0 0 83 83" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <circle cx="41.2503" cy="41.2503" r="30"
                                        transform="rotate(-30 41.2503 41.2503)"
                                        fill="url(#paint0_linear_1789_9122)" />
                                    <mask id="mask0_1789_9122" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                        x="10" y="10" width="61" height="61">
                                        <circle cx="40.9808" cy="40.9808" r="30"
                                            transform="rotate(-30 40.9808 40.9808)"
                                            fill="url(#paint1_linear_1789_9122)" />
                                    </mask>
                                    <g mask="url(#mask0_1789_9122)">
                                        <circle cx="14.7308" cy="17.7308" r="26.25"
                                            transform="rotate(-30 14.7308 17.7308)" stroke="white"
                                            stroke-opacity="0.2" stroke-width="7.5" />
                                    </g>
                                    <rect x="22.5" y="22.5" width="37.5" height="37.5"
                                        fill="url(#pattern0_1789_9122)" />
                                    <defs>
                                        <pattern id="pattern0_1789_9122" patternContentUnits="objectBoundingBox"
                                            width="1" height="1">
                                            <use xlink:href="#image0_1789_9122" transform="scale(0.00195312)" />
                                        </pattern>
                                        <linearGradient id="paint0_linear_1789_9122" x1="41.2503" y1="11.2503"
                                            x2="41.2503" y2="71.2503" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#F66962" />
                                            <stop offset="1" stop-color="#903D39" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_1789_9122" x1="40.9808" y1="10.9808"
                                            x2="40.9808" y2="70.9808" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#7583FE" />
                                            <stop offset="1" stop-color="#464E98" />
                                        </linearGradient>
                                        <image id="image0_1789_9122" width="512" height="512"
                                            xlink:href="data:image/png;base64,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" />
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <!-- Title -->
                        <h3 class="text-lg font-semibold text-center">Market Rates</h3>
                        <!-- Description -->
                        <p class="mt-2 text-sm text-center text-gray-600">Get real-time poultry prices to stay ahead in
                            the
                            market.</p>
                    </div>

                </div>
                <div class="flex flex-col gap-10 ">
                    <div class="max-w-[100%] p-2 bg-white rounded-lg shadow-lg">
                        <!-- Icon Circle -->
                        <div class="flex justify-center mb-4">
                            <div class="flex items-center justify-center w-20 h-12 rounded-full">
                                <!-- Replace with appropriate icon -->
                                <svg width="83" height="83" viewBox="0 0 83 83" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="41.2503" cy="41.2503" r="30"
                                        transform="rotate(-30 41.2503 41.2503)"
                                        fill="url(#paint0_linear_1789_9140)" />
                                    <mask id="mask0_1789_9140" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                        x="10" y="10" width="61" height="61">
                                        <circle cx="40.9808" cy="40.9808" r="30"
                                            transform="rotate(-30 40.9808 40.9808)"
                                            fill="url(#paint1_linear_1789_9140)" />
                                    </mask>
                                    <g mask="url(#mask0_1789_9140)">
                                        <circle cx="14.7308" cy="17.7308" r="26.25"
                                            transform="rotate(-30 14.7308 17.7308)" stroke="white"
                                            stroke-opacity="0.2" stroke-width="7.5" />
                                    </g>
                                    <path
                                        d="M47.5 37.5H36.25V35H47.5V37.5ZM35 35H32.5V37.5H35V35ZM35 31.25H32.5V33.75H35V31.25ZM38.75 31.25H36.25V33.75H38.75V31.25ZM42.5 47.5V50H43.75C44.4375 50 45 50.5625 45 51.25H53.75V53.75H45C45 54.4375 44.4375 55 43.75 55H38.75C38.0625 55 37.5 54.4375 37.5 53.75H28.75V51.25H37.5C37.5 50.5625 38.0625 50 38.75 50H40V47.5H31.25C29.8625 47.5 28.75 46.3875 28.75 45V30C28.75 29.337 29.0134 28.7011 29.4822 28.2322C29.9511 27.7634 30.587 27.5 31.25 27.5H51.25C52.6375 27.5 53.75 28.6125 53.75 30V45C53.75 46.3875 52.6375 47.5 51.25 47.5H42.5ZM51.25 45V30H31.25V45H51.25ZM40 33.75H50V31.25H40V33.75ZM32.5 41.25H40V38.75H32.5V41.25ZM42.5 43.75H50V41.25H42.5V43.75Z"
                                        fill="white" />
                                    <defs>
                                        <linearGradient id="paint0_linear_1789_9140" x1="41.2503" y1="11.2503"
                                            x2="41.2503" y2="71.2503" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#F37AA3" />
                                            <stop offset="1" stop-color="#8D475F" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_1789_9140" x1="40.9808" y1="10.9808"
                                            x2="40.9808" y2="70.9808" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#7583FE" />
                                            <stop offset="1" stop-color="#464E98" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <!-- Title -->
                        <h3 class="text-lg font-semibold text-center">Market Rates</h3>
                        <!-- Description -->
                        <p class="mt-2 text-sm text-center text-gray-600">Get real-time poultry prices to stay ahead in
                            the
                            market.</p>
                    </div>
                    <div class="max-w-[100%] p-2 bg-white rounded-lg shadow-lg">
                        <!-- Icon Circle -->
                        <div class="flex justify-center mb-4">
                            <div class="flex items-center justify-center w-20 h-12 rounded-full">
                                <!-- Replace with appropriate icon -->
                                <svg width="83" height="83" viewBox="0 0 83 83" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <circle cx="41.2503" cy="41.2503" r="30"
                                        transform="rotate(-30 41.2503 41.2503)"
                                        fill="url(#paint0_linear_1789_9131)" />
                                    <mask id="mask0_1789_9131" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                        x="10" y="10" width="61" height="61">
                                        <circle cx="40.9808" cy="40.9808" r="30"
                                            transform="rotate(-30 40.9808 40.9808)"
                                            fill="url(#paint1_linear_1789_9131)" />
                                    </mask>
                                    <g mask="url(#mask0_1789_9131)">
                                        <circle cx="14.7308" cy="17.7308" r="26.25"
                                            transform="rotate(-30 14.7308 17.7308)" stroke="white"
                                            stroke-opacity="0.2" stroke-width="7.5" />
                                    </g>
                                    <rect x="22.5" y="22.5" width="37.5" height="37.5"
                                        fill="url(#pattern0_1789_9131)" />
                                    <defs>
                                        <pattern id="pattern0_1789_9131" patternContentUnits="objectBoundingBox"
                                            width="1" height="1">
                                            <use xlink:href="#image0_1789_9131" transform="scale(0.00195312)" />
                                        </pattern>
                                        <linearGradient id="paint0_linear_1789_9131" x1="41.2503" y1="11.2503"
                                            x2="41.2503" y2="71.2503" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FEBE75" />
                                            <stop offset="1" stop-color="#987246" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_1789_9131" x1="40.9808" y1="10.9808"
                                            x2="40.9808" y2="70.9808" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#7583FE" />
                                            <stop offset="1" stop-color="#464E98" />
                                        </linearGradient>
                                        <image id="image0_1789_9131" width="512" height="512"
                                            xlink:href="data:image/png;base64,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" />
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <!-- Title -->
                        <h3 class="text-lg font-semibold text-center">Market Rates</h3>
                        <!-- Description -->
                        <p class="mt-2 text-sm text-center text-gray-600">Get real-time poultry prices to stay ahead in
                            the
                            market.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="">
            <div class="container grid grid-cols-2 gap-5 px-6 py-4 mx-auto xl:mt-0 md:mt-6 lg:grid-cols-5 sm:grid-cols-2 md:grid-cols-4 md:px-12">
                <div class="h-auto border rounded-lg w-44 border-customOrangeDark">
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
                <div class="h-20 border rounded-lg w-44 border-customOrangeDark">
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
                <div class="h-20 border rounded-lg w-44 border-customOrangeDark">
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
                <div class="h-20 border rounded-lg w-44 border-customOrangeDark">
                    <div class="m-4 ms-6">
                        <h1 class="font-bold">20+More</h1>
                        <p class="font-bold text-customOrangeDark">Cities in App</p>
                    </div>
                </div>
                <div class="h-20 px-4 text-center w-44 ">
                    <h1 class="mt-1 font-semibold text-customGrayColorDark">Download App</h1>
                    <div class="flex justify-center">
                        <svg width="136" height="46" viewBox="0 0 136 46" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="136" height="46" rx="8" fill="url(#pattern0_1897_5533)" />
                            <defs>
                                <pattern id="pattern0_1897_5533" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
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
            <div class="flex items-center justify-center mt-12">
                <div class="text-center">
                    <h2 class="text-2xl font-semibold text-customOrangeDark">Services</h2>
                    <p class="mt-2 text-gray-500">Our delivery offers on-demand delivery and courier services for
                        business
                        and
                        consumers</p>
                </div>
            </div>

            <div class="flex items-center justify-center mt-16">
                <div class="container px-4 mx-auto">
                    <div class="grid grid-cols-1 gap-8 text-center md:grid-cols-3">
                        <!-- Card 1 -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('assets/hen-avatar-withbg.png') }}" alt="Market Updates Icon"
                                class="w-[200px] h-[200px] mb-4">
                            <h3 class="text-2xl font-bold text-customOrangeDark">Market Updates</h3>
                            <p class="mt-2 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                        </div>
                        <!-- Card 2 -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('assets/hen-avatar-withbg.png') }}" alt="Knowledge Center Icon"
                                class="mb-4 w-[200px] h-[200px]">
                            <h3 class="text-2xl font-bold text-customOrangeDark">Knowledge Center</h3>
                            <p class="mt-2 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                        </div>
                        <!-- Card 3 -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('assets/hen-avatar-withbg.png') }}" alt="Point of Sale Icon"
                                class="mb-4 w-[200px] h-[200px]">
                            <h3 class="text-2xl font-bold text-customOrangeDark">Point of Sale</h3>
                            <p class="mt-2 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
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
                            <h3 class="text-2xl font-bold text-customOrangeDark">Flock Management</h3>
                            <p class="mt-2 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                        </div>
                        <!-- Card 2 -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('assets/hen-avatar-withbg.png') }}" alt="Knowledge Center Icon"
                                class="mb-4 w-[200px] h-[200px]">
                            <h3 class="text-2xl font-bold text-customOrangeDark">E-Commerce </h3>
                            <p class="mt-2 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                        </div>
                        <!-- Card 3 -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('assets/hen-avatar-withbg.png') }}" alt="Point of Sale Icon"
                                class="mb-4 w-[200px] h-[200px]">
                            <h3 class="text-2xl font-bold text-customOrangeDark">Job Portal</h3>
                            <p class="mt-2 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center mt-14">
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
                <div class="px-4 ">

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                        <!-- Card 1 -->
                        <div
                            class="flex flex-col justify-between overflow-hidden text-center bg-white rounded-lg shadow-2xl ">
                            <div class="px-6 py-8">
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
                            class="flex flex-col justify-between overflow-hidden text-center bg-white rounded-lg shadow-2xl ">
                            <div class="px-6 py-8">
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
                            class="flex flex-col justify-between overflow-hidden text-center bg-white rounded-lg shadow-2xl ">
                            <div class="px-6 py-8">
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
                    <div class="h-32 mt-20">
                        <h2 class="mb-2 text-lg font-semibold text-orange-500">Company</h2>
                        <p class="text-gray-500">Best delivery services in Germany. Using by more than 3,000,000 people
                            in
                            the world</p>
                    </div>

                    <!-- Quick Links Column 1 -->
                    <div class="h-32 mt-20">
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
                        <svg width="220" height="220" viewBox="0 0 220 220" fill="none"
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
                                alt="App Store and Google Play" class="h-auto w-100">
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
