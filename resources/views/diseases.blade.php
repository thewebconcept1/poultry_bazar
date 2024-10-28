@extends('layouts.layout')
@section('title')
    Operators
@endsection
@section('content')
    <div class="w-full pt-10 min-h-[88vh] gradient-border  rounded-lg">
        <div class="flex justify-between px-5">
            <h1 class="text-3xl font-bold ">Diseases</h1>
            <button data-modal-target="blog-modal" data-modal-toggle="blog-modal"
                class="px-3 py-2 font-semibold text-white rounded-full shadow-md gradient-bg">Add New + </button>
        </div>
        @php
            $headers = ['Sr.', 'Image', 'Title', 'Description', 'Category', 'Date', 'Author', 'Action'];
            $body =
                "<tr>
                <td>1</td>
                 <td><img src='" .
                asset('assets/Profile photo (1) 1.png') .
                "' alt=''></td>
                <td class='text-xs xl:text-[15px]'>Lorem ipsum dollar...</td>
                <td class='text-xs xl:text-[15px] '>Lorem ipsum dolor sit amet, consectetur
adipiscing elit. Lorem ipsum dolor sit amet... </td>
                <td class='text-sm xl:text-[15px]'>Category</td>
                <td  class='text-sm xl:text-[15px]'>Oct 02, 2024 </td>
                <td  class='text-sm xl:text-[15px]'>Kurt Weissnat</td>

                <td>
                    <span class='flex gap-4'>
                        <button>
                            <svg width='36' height='36' viewBox='0 0 36 36' fill='none' xmlns='http://www.w3.org/2000/svg'>
                            <circle opacity='0.1' cx='18' cy='18' r='18' fill='#233A85'/>
                            <path fill-rule='evenodd' clip-rule='evenodd' d='M16.1637 23.6188L22.3141 15.665C22.6484 15.2361 22.7673 14.7402 22.6558 14.2353C22.5593 13.7763 22.277 13.3399 21.8536 13.0088L20.8211 12.1886C19.9223 11.4737 18.8081 11.549 18.1693 12.3692L17.4784 13.2654C17.3893 13.3775 17.4116 13.543 17.523 13.6333C17.523 13.6333 19.2686 15.0329 19.3058 15.063C19.4246 15.1759 19.5137 15.3264 19.536 15.507C19.5732 15.8607 19.328 16.1918 18.9641 16.2369C18.7932 16.2595 18.6298 16.2068 18.511 16.109L16.6762 14.6492C16.5871 14.5822 16.4534 14.5965 16.3791 14.6868L12.0188 20.3304C11.7365 20.6841 11.64 21.1431 11.7365 21.5871L12.2936 24.0025C12.3233 24.1304 12.4348 24.2207 12.5685 24.2207L15.0197 24.1906C15.4654 24.1831 15.8814 23.9799 16.1637 23.6188ZM19.5958 22.8672H23.5929C23.9829 22.8672 24.3 23.1885 24.3 23.5835C24.3 23.9794 23.9829 24.2999 23.5929 24.2999H19.5958C19.2059 24.2999 18.8887 23.9794 18.8887 23.5835C18.8887 23.1885 19.2059 22.8672 19.5958 22.8672Z' fill='#233A85'/>
                            </svg>
                        </button>

                        <button>
                            <svg width='36' height='36' viewBox='0 0 36 36' fill='none' xmlns='http://www.w3.org/2000/svg'>
                            <circle opacity='0.1' cx='18' cy='18' r='18' fill='#DF6F79'/>
                            <path fill-rule='evenodd' clip-rule='evenodd' d='M23.4905 13.7423C23.7356 13.7423 23.9396 13.9458 23.9396 14.2047V14.4441C23.9396 14.6967 23.7356 14.9065 23.4905 14.9065H13.0493C12.8036 14.9065 12.5996 14.6967 12.5996 14.4441V14.2047C12.5996 13.9458 12.8036 13.7423 13.0493 13.7423H14.8862C15.2594 13.7423 15.5841 13.4771 15.6681 13.1028L15.7642 12.6732C15.9137 12.0879 16.4058 11.6992 16.9688 11.6992H19.5704C20.1273 11.6992 20.6249 12.0879 20.7688 12.6423L20.8718 13.1022C20.9551 13.4771 21.2798 13.7423 21.6536 13.7423H23.4905ZM22.557 22.4932C22.7487 20.7059 23.0845 16.4598 23.0845 16.4169C23.0968 16.2871 23.0545 16.1643 22.9705 16.0654C22.8805 15.9728 22.7665 15.918 22.6409 15.918H13.9025C13.7762 15.918 13.6562 15.9728 13.5728 16.0654C13.4883 16.1643 13.4466 16.2871 13.4527 16.4169C13.4539 16.4248 13.4659 16.5744 13.4861 16.8244C13.5755 17.9353 13.8248 21.0292 13.9858 22.4932C14.0998 23.5718 14.8074 24.2496 15.8325 24.2742C16.6235 24.2925 17.4384 24.2988 18.2717 24.2988C19.0566 24.2988 19.8537 24.2925 20.6692 24.2742C21.7298 24.2559 22.4369 23.59 22.557 22.4932Z' fill='#D11A2A'/>
                            </svg>
                        </button>
                         <button data-modal-target='view-modal' data-modal-toggle='view-modal'>
                          <svg width='37' height='36' viewBox='0 0 37 36' fill='none' xmlns='http://www.w3.org/2000/svg'>
<path fill-rule='evenodd' clip-rule='evenodd' d='M28.0642 18.5C28.0642 18.126 27.8621 17.8812 27.4579 17.3896C25.9788 15.5938 22.7163 12.25 18.9288 12.25C15.1413 12.25 11.8788 15.5938 10.3996 17.3896C9.99542 17.8812 9.79333 18.126 9.79333 18.5C9.79333 18.874 9.99542 19.1187 10.3996 19.6104C11.8788 21.4062 15.1413 24.75 18.9288 24.75C22.7163 24.75 25.9788 21.4062 27.4579 19.6104C27.8621 19.1187 28.0642 18.874 28.0642 18.5ZM18.9288 21.625C19.7576 21.625 20.5524 21.2958 21.1385 20.7097C21.7245 20.1237 22.0538 19.3288 22.0538 18.5C22.0538 17.6712 21.7245 16.8763 21.1385 16.2903C20.5524 15.7042 19.7576 15.375 18.9288 15.375C18.0999 15.375 17.3051 15.7042 16.719 16.2903C16.133 16.8763 15.8038 17.6712 15.8038 18.5C15.8038 19.3288 16.133 20.1237 16.719 20.7097C17.3051 21.2958 18.0999 21.625 18.9288 21.625Z' fill='url(#paint0_linear_872_5570)'/>
<circle opacity='0.1' cx='18.4287' cy='18' r='18' fill='url(#paint1_linear_872_5570)'/>
<defs>
<linearGradient id='paint0_linear_872_5570' x1='18.9288' y1='12.25' x2='18.9288' y2='24.75' gradientUnits='userSpaceOnUse'>
<stop stop-color='#FCB376'/>
<stop offset='1' stop-color='#FE8A29'/>
</linearGradient>
<linearGradient id='paint1_linear_872_5570' x1='18.4287' y1='0' x2='18.4287' y2='36' gradientUnits='userSpaceOnUse'>
<stop stop-color='#FCB376'/>
<stop offset='1' stop-color='#FE8A29'/>F
</linearGradient>
</defs>
</svg>
                        </button>
                    </span>
                </td>
        </tr>";
        @endphp

        <x-table :headers="$headers" :body="$body" />


        <x-modal id="blog-modal">
            <x-slot name="title">Add </x-slot>
            <x-slot name="modal_width">max-w-4xl</x-slot>
            <x-slot name="body">
                <form action="">
                    <div class="">
                        <div class="flex p-6">
                            <!-- Upload Section -->
                           <label  class="flex items-center justify-center w-1/3 border-2 rounded-lg" for="fileInput">
                            <div
                           >
                            <div class="text-center">
                                <svg width="71" height="62"  class="w-12 h-12 mx-auto text-gray-400" viewBox="0 0 71 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.0251 40.332H13.1345V51.1536C13.1345 52.3547 12.8672 53.3545 12.3325 54.1528C11.7979 54.9512 11.0874 55.5518 10.2012 55.9546C9.32227 56.3501 8.36646 56.5479 7.33374 56.5479C6.24976 56.5479 5.26831 56.3501 4.3894 55.9546C3.51782 55.5518 2.82568 54.9512 2.31299 54.1528C1.80762 53.3545 1.55493 52.3547 1.55493 51.1536V40.332H3.65332V51.1536C3.65332 51.9885 3.80713 52.677 4.11475 53.219C4.42236 53.761 4.85083 54.1638 5.40015 54.4275C5.95679 54.6912 6.60132 54.823 7.33374 54.823C8.07349 54.823 8.71802 54.6912 9.26733 54.4275C9.82397 54.1638 10.2561 53.761 10.5637 53.219C10.8713 52.677 11.0251 51.9885 11.0251 51.1536V40.332ZM18.1882 46.7261V60.8984H16.1448V44.4409H18.0125L18.1882 46.7261ZM26.1973 50.2856V50.5164C26.1973 51.3806 26.0947 52.1826 25.8896 52.9224C25.6846 53.6548 25.3843 54.292 24.9888 54.834C24.6006 55.376 24.1208 55.7971 23.5496 56.0974C22.9783 56.3977 22.3228 56.5479 21.583 56.5479C20.8286 56.5479 20.1621 56.4233 19.5835 56.1743C19.0049 55.9253 18.5142 55.5627 18.1113 55.0867C17.7085 54.6106 17.3862 54.0393 17.1445 53.3728C16.9102 52.7063 16.749 51.9556 16.6611 51.1206V49.8901C16.749 49.0112 16.9138 48.2239 17.1555 47.5281C17.3972 46.8323 17.7158 46.239 18.1113 45.7483C18.5142 45.2502 19.0012 44.873 19.5725 44.6167C20.1438 44.353 20.803 44.2212 21.55 44.2212C22.2971 44.2212 22.96 44.3677 23.5386 44.6606C24.1172 44.9463 24.6042 45.3564 24.9998 45.8911C25.3953 46.4258 25.6919 47.0667 25.8896 47.8137C26.0947 48.5535 26.1973 49.3774 26.1973 50.2856ZM24.1538 50.5164V50.2856C24.1538 49.6924 24.0916 49.1357 23.967 48.6157C23.8425 48.0884 23.6484 47.627 23.3848 47.2314C23.1284 46.8286 22.7988 46.5137 22.396 46.2866C21.9932 46.0522 21.5134 45.9351 20.9568 45.9351C20.4441 45.9351 19.9973 46.0229 19.6165 46.1987C19.2429 46.3745 18.9243 46.6125 18.6606 46.9128C18.397 47.2058 18.1809 47.5427 18.0125 47.9236C17.8513 48.2971 17.7305 48.6853 17.6499 49.0881V51.9336C17.7964 52.4463 18.0015 52.9297 18.2651 53.3838C18.5288 53.8306 18.8804 54.1931 19.3198 54.4714C19.7593 54.7424 20.3123 54.8779 20.9788 54.8779C21.5281 54.8779 22.0005 54.7644 22.396 54.5374C22.7988 54.303 23.1284 53.9844 23.3848 53.5815C23.6484 53.1787 23.8425 52.7173 23.967 52.1973C24.0916 51.6699 24.1538 51.1096 24.1538 50.5164ZM30.9983 39.4531V56.3281H28.9548V39.4531H30.9983ZM33.7229 50.5164V50.2637C33.7229 49.4067 33.8474 48.6121 34.0964 47.8796C34.3455 47.1399 34.7043 46.499 35.1731 45.957C35.6418 45.4077 36.2095 44.9829 36.876 44.6826C37.5425 44.375 38.2896 44.2212 39.1172 44.2212C39.9521 44.2212 40.7029 44.375 41.3694 44.6826C42.0432 44.9829 42.6145 45.4077 43.0833 45.957C43.5593 46.499 43.9219 47.1399 44.1709 47.8796C44.4199 48.6121 44.5444 49.4067 44.5444 50.2637V50.5164C44.5444 51.3733 44.4199 52.168 44.1709 52.9004C43.9219 53.6328 43.5593 54.2737 43.0833 54.823C42.6145 55.365 42.0469 55.7898 41.3804 56.0974C40.7212 56.3977 39.9741 56.5479 39.1392 56.5479C38.3042 56.5479 37.5535 56.3977 36.887 56.0974C36.2205 55.7898 35.6492 55.365 35.1731 54.823C34.7043 54.2737 34.3455 53.6328 34.0964 52.9004C33.8474 52.168 33.7229 51.3733 33.7229 50.5164ZM35.7554 50.2637V50.5164C35.7554 51.1096 35.825 51.6699 35.9641 52.1973C36.1033 52.7173 36.312 53.1787 36.5903 53.5815C36.876 53.9844 37.2312 54.303 37.656 54.5374C38.0808 54.7644 38.5752 54.8779 39.1392 54.8779C39.6958 54.8779 40.1829 54.7644 40.6003 54.5374C41.0251 54.303 41.3767 53.9844 41.655 53.5815C41.9333 53.1787 42.1421 52.7173 42.2812 52.1973C42.4277 51.6699 42.501 51.1096 42.501 50.5164V50.2637C42.501 49.6777 42.4277 49.1248 42.2812 48.6047C42.1421 48.0774 41.9297 47.6123 41.644 47.2095C41.3657 46.7993 41.0142 46.4771 40.5894 46.2427C40.1719 46.0083 39.6812 45.8911 39.1172 45.8911C38.5605 45.8911 38.0698 46.0083 37.645 46.2427C37.2275 46.4771 36.876 46.7993 36.5903 47.2095C36.312 47.6123 36.1033 48.0774 35.9641 48.6047C35.825 49.1248 35.7554 49.6777 35.7554 50.2637ZM54.1025 54.2957V48.1763C54.1025 47.7075 54.0073 47.301 53.8169 46.9568C53.6338 46.6052 53.3555 46.3342 52.9819 46.1438C52.6084 45.9534 52.147 45.8582 51.5977 45.8582C51.085 45.8582 50.6345 45.946 50.2463 46.1218C49.8655 46.2976 49.5652 46.5283 49.3455 46.814C49.1331 47.0996 49.0269 47.4072 49.0269 47.7368H46.9944C46.9944 47.312 47.1042 46.8909 47.324 46.4734C47.5437 46.0559 47.8586 45.6787 48.2688 45.3418C48.6863 44.9976 49.1843 44.7266 49.7629 44.5288C50.3489 44.3237 51.0007 44.2212 51.7185 44.2212C52.5828 44.2212 53.3445 44.3677 54.0037 44.6606C54.6702 44.9536 55.1902 45.3967 55.5637 45.99C55.9446 46.5759 56.135 47.312 56.135 48.1982V53.7354C56.135 54.1309 56.168 54.552 56.2339 54.9988C56.3071 55.4456 56.4133 55.8301 56.5525 56.1523V56.3281H54.4321C54.3296 56.0938 54.249 55.7825 54.1904 55.3943C54.1318 54.9988 54.1025 54.6326 54.1025 54.2957ZM54.4541 49.1211L54.4761 50.5493H52.4216C51.843 50.5493 51.3267 50.5969 50.8726 50.6921C50.4185 50.78 50.0376 50.9155 49.73 51.0986C49.4224 51.2817 49.188 51.5125 49.0269 51.7908C48.8657 52.0618 48.7852 52.3804 48.7852 52.7466C48.7852 53.1201 48.8694 53.4607 49.0378 53.7683C49.2063 54.0759 49.459 54.3213 49.7959 54.5044C50.1401 54.6802 50.5613 54.7681 51.0593 54.7681C51.6819 54.7681 52.2312 54.6362 52.7073 54.3726C53.1833 54.1089 53.5605 53.7866 53.8389 53.4058C54.1245 53.0249 54.2783 52.655 54.3003 52.2961L55.1682 53.2739C55.1169 53.5815 54.9778 53.9221 54.7507 54.2957C54.5237 54.6692 54.2197 55.0281 53.8389 55.3723C53.4653 55.7092 53.0186 55.9912 52.4985 56.2183C51.9858 56.438 51.4072 56.5479 50.7627 56.5479C49.957 56.5479 49.2502 56.3904 48.6423 56.0754C48.0417 55.7605 47.573 55.3394 47.2361 54.812C46.9065 54.2773 46.7417 53.6804 46.7417 53.0212C46.7417 52.384 46.8662 51.8237 47.1152 51.3403C47.3643 50.8496 47.7231 50.4431 48.1919 50.1208C48.6606 49.7913 49.2246 49.5422 49.8838 49.3738C50.543 49.2053 51.2791 49.1211 52.092 49.1211H54.4541ZM66.8247 54.021V39.4531H68.8682V56.3281H67.0005L66.8247 54.021ZM58.8267 50.5164V50.2856C58.8267 49.3774 58.9365 48.5535 59.1562 47.8137C59.3833 47.0667 59.7019 46.4258 60.1121 45.8911C60.5295 45.3564 61.0239 44.9463 61.5952 44.6606C62.1738 44.3677 62.8184 44.2212 63.5288 44.2212C64.2759 44.2212 64.9277 44.353 65.4844 44.6167C66.0483 44.873 66.5244 45.2502 66.9126 45.7483C67.3081 46.239 67.6194 46.8323 67.8464 47.5281C68.0735 48.2239 68.231 49.0112 68.3188 49.8901V50.9009C68.2383 51.7725 68.0808 52.5562 67.8464 53.252C67.6194 53.9478 67.3081 54.541 66.9126 55.0317C66.5244 55.5225 66.0483 55.8997 65.4844 56.1633C64.9204 56.4197 64.2612 56.5479 63.5068 56.5479C62.811 56.5479 62.1738 56.3977 61.5952 56.0974C61.0239 55.7971 60.5295 55.376 60.1121 54.834C59.7019 54.292 59.3833 53.6548 59.1562 52.9224C58.9365 52.1826 58.8267 51.3806 58.8267 50.5164ZM60.8701 50.2856V50.5164C60.8701 51.1096 60.9287 51.6663 61.0459 52.1863C61.1704 52.7063 61.3608 53.1641 61.6172 53.5596C61.8735 53.9551 62.1995 54.2664 62.595 54.4934C62.9905 54.7131 63.4629 54.823 64.0122 54.823C64.686 54.823 65.239 54.6802 65.6711 54.3945C66.1106 54.1089 66.4622 53.7317 66.7258 53.2629C66.9895 52.7942 67.1946 52.2852 67.3411 51.7358V49.0881C67.2532 48.6853 67.125 48.2971 66.9565 47.9236C66.7954 47.5427 66.583 47.2058 66.3193 46.9128C66.063 46.6125 65.7444 46.3745 65.3635 46.1987C64.99 46.0229 64.5469 45.9351 64.0342 45.9351C63.4775 45.9351 62.9978 46.0522 62.595 46.2866C62.1995 46.5137 61.8735 46.8286 61.6172 47.2314C61.3608 47.627 61.1704 48.0884 61.0459 48.6157C60.9287 49.1357 60.8701 49.6924 60.8701 50.2856Z" fill="#1E1E1E"/>
                                    <path d="M45.5051 15.794C44.5685 10.3671 40.3955 6.29297 35.3823 6.29297C31.4021 6.29297 27.9452 8.87271 26.2237 12.6479C22.0782 13.1513 18.8555 17.1625 18.8555 22.0231C18.8555 27.2298 22.5602 31.4612 27.1189 31.4612H45.023C48.8242 31.4612 51.9092 27.9376 51.9092 23.5961C51.9092 19.4434 49.0859 16.0771 45.5051 15.794ZM38.1368 20.4501V26.7421H32.6279V20.4501H28.4961L35.3823 12.585L42.2685 20.4501H38.1368Z" fill="#1E1E1E"/>
                                    </svg>

                            </div>
                        </div>
                           </label>
                            <input type="file" id="fileInput" class="hidden" />


                            <!-- Form Fields -->
                            <div class="flex-1 ml-6">
                                <div class="mb-4">
                                    <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
                                    <input type="text" id="title" placeholder="Enter Title"
                                        class="block w-full px-3 py-2 mt-1 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
                                </div>

                                <div class="mb-4">
                                    <label for="category" class="block text-sm font-medium text-gray-700">Category:</label>
                                    <select id="category"
                                        class="block w-full px-3 py-2 mt-1 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
                                        <option>Select Category</option>
                                        <!-- Add options here -->
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="description"
                                        class="block text-sm font-medium text-gray-700">Description:</label>
                                    <textarea id="description" rows="3" placeholder="Start writing here"
                                        class="block w-full px-3 py-2 mt-1 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm"></textarea>
                                </div>
                                <div class="mt-4">
                                    <x-modal-button :title="'Add City'"></x-modal-button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="w-full h-full ">
                        <x-input id="title" label="Title:" placeholder="Enter Title " name='market_name'
                        type="text"></x-input>
                        <x-input id="category" label="Category:" placeholder="Enter Category " name='market_name'
                        type="text"></x-input>
                        <label for="">
                            <textarea name="" id="" cols="30" placeholder="Start writing from here" rows="10"></textarea>
                        </label>

                    </div> --}}

                </form>
            </x-slot>
        </x-modal>
        <x-modal id="view-modal">
            <x-slot name="title">Details </x-slot>
            <x-slot name="modal_width">max-w-4xl</x-slot>
            <x-slot name="body">
                <div class="p-6">
                    <div class="flex">
                        <!-- Image Placeholder -->

                        <img class="w-40 h-40" src="{{ asset('assets/Surface 3 png.png') }}" alt="">


                        <!-- Text Details -->
                        <div class="ml-5">
                            <h3 class="text-xl font-semibold text-gray-800">Lorem Ipsum is simply dummy text of the
                                printing.</h3>
                            {{-- <div class="mt-4 ">
                          <p class="text-sm font-medium text-gray-600">Category: <span class="text-gray-800 ms-10">Campus Name</span></p>
                         <div class="mt-5 "> <p class="text-sm font-medium text-gray-600">Author: <span class="text-gray-80 ms-14">Author Name</span></p></div>
                         <div class="mt-5"> <p class="text-sm font-medium text-gray-600">Date: <span class="text-gray-800 ms-14">Dec 21, 2023</span></p></div>
                        </div> --}}
                            <div class="grid grid-cols-2 mt-5 md:grid-cols-3 ">
                                <div class="min-w-10">
                                    <p class="text-[12.9px] lg:text-lg md:text-lg">Category:</p>
                                    <p class="mt-4 text-[12.9px] lg:text-lg md:text-lg">Author:</p>
                                    <p class="mt-4 text-[12.9px] lg:text-lg md:text-lg">Date:</p>
                                </div>
                                <div class="min-w-10 md:col-span-2 ">
                                    <p class=" text-[#323C47] text-[12.9px] lg:text-lg md:text-lg">Campus Name</p>
                                    <p class="mt-4 text-[#323C47] text-[12.9px] lg:text-lg md:text-lg">Author Name</p>
                                    <p class="mt-4 text-[#323C47] text-[12.9px] lg:text-lg md:text-lg">Dec 21, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mt-6">
                        <h4 class="text-lg font-semibold text-gray-800">Description:</h4>
                        <p class="mt-2 text-sm text-gray-600">
                            Lorem Ipsum is simply dummy text
                            of the printing and typesetting Lorem Ipsum is simply dummy text
                            of the printing and typesetting text
                            Lorem Ipsum is simply dummy text
                            of the printing and typesetting Lorem Ipsum is simply Lorem Ipsum is simply dummy text of the.
                            Lorem Ipsum is simply dummy text
                            of the printing and typesetting Lorem Ipsum is simply dummy text
                            of the printing and typesetting text
                            Lorem Ipsum is simply dummy text
                            of the printing and typesetting Lorem Ipsum is simply Lorem Ipsum is simply dummy text of the.
                            Lorem Ipsum is simply dummy text
                            of the printing and typesetting Lorem Ipsum is simply dummy text
                            of the printing and typesetting text
                            Lorem Ipsum is simply dummy text
                            of the printing and typesetting Lorem Ipsum is simply Lorem Ipsum is simply dummy text of the.
                            Lorem Ipsum is simply dummy text
                            of the printing and typesetting Lorem Ipsum is simply dummy text
                            of the printing and typesetting text
                            Lorem Ipsum is simply dummy text
                            of the printing and typesetting Lorem Ipsum is simply Lorem Ipsum is simply dummy text of the.
                        </p>
                    </div>
                </div>
            </x-slot>
        </x-modal>
    </div>
@endsection
