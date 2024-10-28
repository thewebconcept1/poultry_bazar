@extends('layouts.layout')
@section('title')
    Operators
@endsection
@section('content')
    <div class="container p-6 mx-auto">
        <div class="p-8 bg-white rounded-lg shadow-md">
            <!-- Profile Header -->
            <div class="flex items-center">
                <div class="w-24 h-24 overflow-hidden bg-gray-200 rounded-full">
                    <img src="https://via.placeholder.com/150" alt="Profile Picture">
                </div>
                <div class="ml-6">
                    <h2 class="text-2xl font-semibold">Awais Ansari</h2>
                    <p class="text-gray-500">Web Designer</p>
                </div>
            </div>

            <!-- Tabs -->


            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                    data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                            data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Overview</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">Edit Profile</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">Settings</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                            aria-controls="contacts" aria-selected="false">Change Password</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold">About</h3>
                        <p class="mt-2 text-gray-500">
                            Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde
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
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>.
                        Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                        classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
                    aria-labelledby="settings-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>.
                        Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                        classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
                    aria-labelledby="contacts-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>.
                        Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                        classes to control the content visibility and styling.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
