@extends('layouts.layout')
@section('title')
    Operators
@endsection
@section('content')
    <style>
        .active-tab {
            color: #FE8D2F;
            border-color: #FE8D2F;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <div class="container p-6 mx-auto">
        <div class="p-8 bg-white rounded-lg shadow-md">
            <!-- Profile Header -->
            <div class="flex items-center">
                <div class="w-24 h-24 overflow-hidden bg-gray-200 rounded-full">
                    <img src="{{ asset('assets/image.png') }}" alt="Profile Picture">
                </div>
                <div class="ml-6">
                    <h2 class="text-2xl font-semibold">Soban Majeed</h2>
                    <p class="text-gray-500">Web Developer</p>
                </div>
            </div>

            <!-- Tabs -->


            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                    data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 hover:text-[#FE8D2F] rounded-t-lg active-tab"
                            id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                            aria-controls="profile" aria-selected="true">Overview</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-[#FE8D2F] hover:border-gray-300 dark:hover:text-gray-300"
                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">Edit Profile</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-[#FE8D2F] hover:border-gray-300 dark:hover:text-gray-300"
                            id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">Settings</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-[#FE8D2F] hover:border-gray-300 dark:hover:text-gray-300"
                            id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                            aria-controls="contacts" aria-selected="false">Changes Password</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold">About</h3>
                        <p class="mt-2 text-gray-500">
                            Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non
                            est unde
                            veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit.
                        </p>
                    </div>

                    <!-- Profile Details -->
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold">Profile Details</h3>
                        <div class="mt-4 space-y-2">
                            <div class="flex">
                                <span class="w-32 font-semibold text-gray-600">Full Name:</span>
                                <span>Kevin Anderson</span>
                            </div>
                            <div class="flex">
                                <span class="w-32 font-semibold text-gray-600">Company:</span>
                                <span>Lueilwitz, Wisoky and Leuschke</span>
                            </div>
                            <div class="flex">
                                <span class="w-32 font-semibold text-gray-600">Job:</span>
                                <span>Web Designer</span>
                            </div>
                            <div class="flex">
                                <span class="w-32 font-semibold text-gray-600">Country:</span>
                                <span>USA</span>
                            </div>
                            <div class="flex">
                                <span class="w-32 font-semibold text-gray-600">Address:</span>
                                <span>A108 Adam Street, New York, NY 535022</span>
                            </div>
                            <div class="flex">
                                <span class="w-32 font-semibold text-gray-600">Phone:</span>
                                <span>(436) 486-3538 x29071</span>
                            </div>
                            <div class="flex">
                                <span class="w-32 font-semibold text-gray-600">Email:</span>
                                <span>k.anderson@example.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    <div class="pt-3 tab-pane fade profile-edit" id="profile-edit">
                        <!-- Profile Edit Form -->
                        <form>
                            <div class="flex items-center mb-3">
                                <label for="profileImage" class="w-1/4 text-gray-700">Profile Image</label>
                                <div class="flex-col w-3/4 ">
                                    <img src="{{ asset('assets/profile-img square.jpg') }}" alt="Profile"
                                        class="object-contain w-32 h-28 ">
                                    <div class="pl-4 mt-3 ">
                                        <div class="h-10 w-50">
                                            <a href="#"
                                                class="px-3 py-1.5  bg-red-500 text-white text-sm font-medium rounded hover:bg-red-600"
                                                title="Upload new profile image">
                                                <label for="pimage">
                                                    <i class=" fa-solid fa-upload">
                                                    </i>
                                                </label>
                                            </a>
                                        </div>
                                        <input type="file" id="pimage" hidden>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center mb-3">
                                <label for="fullName" class="w-1/4 text-gray-700">Full Name</label>
                                <div class="w-3/4">
                                    <input name="fullName" type="text"
                                        class="w-full border-gray-300 rounded form-input" id="fullName"
                                        value="Kevin Anderson">
                                </div>
                            </div>

                            <div class="flex items-start mb-3">
                                <label for="about" class="w-1/4 text-gray-700">About</label>
                                <div class="w-3/4">
                                    <textarea name="about" class="w-full h-24 border-gray-300 rounded form-textarea" id="about">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                                </div>
                            </div>

                            <!-- Repeat the following structure for each form group, adjusting the `for` attribute and placeholder content as needed -->

                            <div class="flex items-center mb-3">
                                <label for="company" class="w-1/4 text-gray-700">Company</label>
                                <div class="w-3/4">
                                    <input name="company" type="text"
                                        class="w-full border-gray-300 rounded form-input" id="company"
                                        value="Lueilwitz, Wisoky and Leuschke">
                                </div>
                            </div>
                            <div class="flex items-center mb-3">
                                <label for="company" class="w-1/4 text-gray-700">Job</label>
                                <div class="w-3/4">
                                    <input name="company" type="text"
                                        class="w-full border-gray-300 rounded form-input" id="company"
                                        value="Lueilwitz, Wisoky and Leuschke">
                                </div>
                            </div>
                            <div class="flex items-center mb-3">
                                <label for="company" class="w-1/4 text-gray-700">Country</label>
                                <div class="w-3/4">
                                    <input name="company" type="text"
                                        class="w-full border-gray-300 rounded form-input" id="company"
                                        value="Lueilwitz, Wisoky and Leuschke">
                                </div>
                            </div>
                            <div class="flex items-center mb-3">
                                <label for="company" class="w-1/4 text-gray-700">Address</label>
                                <div class="w-3/4">
                                    <input name="company" type="text"
                                        class="w-full border-gray-300 rounded form-input" id="company"
                                        value="Lueilwitz, Wisoky and Leuschke">
                                </div>
                            </div>
                            <div class="flex items-center mb-3">
                                <label for="company" class="w-1/4 text-gray-700">Phone</label>
                                <div class="w-3/4">
                                    <input name="company" type="text"
                                        class="w-full border-gray-300 rounded form-input" id="company"
                                        value="Lueilwitz, Wisoky and Leuschke">
                                </div>
                            </div>
                            <div class="flex items-center mb-3">
                                <label for="company" class="w-1/4 text-gray-700">Email</label>
                                <div class="w-3/4">
                                    <input name="company" type="text"
                                        class="w-full border-gray-300 rounded form-input" id="company"
                                        value="Lueilwitz, Wisoky and Leuschke">
                                </div>
                            </div>

                            <!-- Additional fields... -->

                           <div class="flex justify-center">
                            <div class="mt-4 w-60">
                                <x-modal-button :title="'Save Changes'"></x-modal-button>
                            </div>
                           </div>
                        </form>
                        <!-- End Profile Edit Form -->
                    </div>

                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
                    aria-labelledby="settings-tab">
                    <div class="pt-3 tab-pane fade" id="profile-settings">
                        <!-- Settings Form -->
                        <form>
                            <div class="flex flex-col mb-3 md:flex-row">
                                <label for="fullName" class="mb-2 font-bold text-center text-gray-700 md:w-1/3 lg:w-1/4 md:mb-0">Email Notifications</label>
                                <div class="md:w-2/3 lg:w-3/4">
                                    <div class="flex items-center mb-2">
                                        <input class="w-4 h-4 text-[#FE8D2F] bg-gray-100 border-gray-300 rounded form-check-input focus:ring-[#FE8D2F]" type="checkbox" id="changesMade" checked>
                                        <label class="ml-2 text-gray-700" for="changesMade">Changes made to your account</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input class="w-4 h-4 text-[#FE8D2F] bg-gray-100 border-gray-300 rounded form-check-input focus:ring-[#FE8D2F]" type="checkbox" id="newProducts" checked>
                                        <label class="ml-2 text-gray-700" for="newProducts">Information on new products and services</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input class="w-4 h-4 text-[#FE8D2F] bg-gray-100 border-gray-300 rounded form-check-input focus:ring-[#FE8D2F]" type="checkbox" id="proOffers">
                                        <label class="ml-2 text-gray-700" for="proOffers">Marketing and promo offers</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input class="w-4 h-4 text-gray-400 bg-gray-100 border-gray-300 rounded form-check-input focus:ring-gray-500" type="checkbox" id="securityNotify" checked disabled>
                                        <label class="ml-2 text-gray-500" for="securityNotify">Security alerts</label>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-center">
                                <div class="mt-4 w-60">
                                    <x-modal-button :title="'Save Changes'"></x-modal-button>
                                </div>
                               </div>
                        </form>
                    </div>

                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
                    aria-labelledby="contacts-tab">
                    <div class="pt-3 tab-pane fade" id="profile-change-password">
                        <!-- Change Password Form -->
                        <form>
                            <div class="flex flex-col mb-3 md:flex-row">
                                <label for="currentPassword" class="mb-2 font-medium text-gray-700 md:w-1/3 lg:w-1/4 md:mb-0">Current Password</label>
                                <div class="md:w-2/3 lg:w-3/4">
                                    <input name="password" type="password" id="currentPassword" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                            </div>

                            <div class="flex flex-col mb-3 md:flex-row">
                                <label for="newPassword" class="mb-2 font-medium text-gray-700 md:w-1/3 lg:w-1/4 md:mb-0">New Password</label>
                                <div class="md:w-2/3 lg:w-3/4">
                                    <input name="newpassword" type="password" id="newPassword" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                            </div>

                            <div class="flex flex-col mb-3 md:flex-row">
                                <label for="renewPassword" class="mb-2 font-medium text-gray-700 md:w-1/3 lg:w-1/4 md:mb-0">Re-enter New Password</label>
                                <div class="md:w-2/3 lg:w-3/4">
                                    <input name="renewpassword" type="password" id="renewPassword" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                            </div>

                            <div class="flex justify-center">
                                <div class="mt-4 w-60">
                                    <x-modal-button :title="'Save Changes'"></x-modal-button>
                                </div>
                               </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabs = document.querySelectorAll("#default-tab button");

            tabs.forEach(tab => {
                tab.addEventListener("click", function() {
                    // Remove the active class from all tabs
                    tabs.forEach(t => t.classList.remove("active-tab"));

                    // Add the active class to the clicked tab
                    this.classList.add("active-tab");
                });
            });
        });
    </script>
@endsection
