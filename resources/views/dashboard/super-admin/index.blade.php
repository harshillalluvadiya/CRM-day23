<x-app-layout>
    <!-- Alert Banner -->
    <div class="bg-red-500 dark:bg-red-700 text-white p-3">
        <div class="container mx-auto flex justify-between items-center">
            <p class="text-sm">Please update your Tax ID information for tax compliance. <a href="#" class="underline">Update</a></p>
            <div class="space-x-2">
                <button class="px-3 py-1 text-xs border border-white rounded hover:bg-red-600 dark:hover:bg-red-800 transition">Ignore</button>
                <button class="px-3 py-1 text-xs bg-green-500 dark:bg-green-600 border border-green-500 dark:border-green-600 rounded hover:bg-green-600 dark:hover:bg-green-700 transition">Resolve</button>
            </div>
        </div>
    </div>

    <!-- Main Layout Container -->
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900">

        <!-- Sidebar -->
        <aside class="w-64 bg-white dark:bg-gray-800 shadow-md hidden md:block">
            <div class="h-full overflow-y-auto py-4 px-3">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white bg-gray-100 dark:bg-gray-700">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="<http://www.w3.org/2000/svg>"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400 transition duration-75" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="<http://www.w3.org/2000/svg>"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            <span class="ml-3">Conversations</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400 transition duration-75" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="<http://www.w3.org/2000/svg>"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span class="ml-3">Calendars</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400 transition duration-75" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="<http://www.w3.org/2000/svg>"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <span class="ml-3">Contacts</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400 transition duration-75" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="<http://www.w3.org/2000/svg>"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                            <span class="ml-3">Opportunities</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400 transition duration-75" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="<http://www.w3.org/2000/svg>"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <span class="ml-3">Payments</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400 transition duration-75" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="<http://www.w3.org/2000/svg>"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                            <span class="ml-3">Marketing</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400 transition duration-75" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="<http://www.w3.org/2000/svg>"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                            <span class="ml-3">Automation</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400 transition duration-75" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="<http://www.w3.org/2000/svg>"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                            <span class="ml-3">Sites</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400 transition duration-75" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="<http://www.w3.org/2000/svg>"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                            <span class="ml-3">Memberships</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400 transition duration-75" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="<http://www.w3.org/2000/svg>"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="ml-3">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Mobile Sidebar Toggle -->
        <div class="md:hidden p-4 bg-white dark:bg-gray-800 shadow-md w-full">
            <button id="mobile-menu-button" class="text-gray-500 dark:text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="<http://www.w3.org/2000/svg>">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6 overflow-y-auto">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6">Dashboard</h1>

            <!-- Stat Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Opportunity Status Card -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium mb-2">Opportunity Status</h3>
                    <div class="flex items-center justify-center h-32">
                        <p class="text-gray-400 dark:text-gray-500">No Data Found</p>
                    </div>
                </div>

                <!-- Opportunity Value Card -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium mb-2">Opportunity Value</h3>
                    <div class="flex items-center justify-center h-32">
                        <p class="text-gray-400 dark:text-gray-500">No Data Found</p>
                    </div>
                </div>

                <!-- Conversion Rate Card -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium mb-2">Conversion Rate</h3>
                    <div class="flex flex-col items-center justify-center h-32">
                        <div class="relative w-24 h-24 mb-2">
                            <svg class="w-full h-full" viewBox="0 0 36 36">
                                <circle cx="18" cy="18" r="16" fill="none" stroke="#e6e6e6" stroke-width="2"></circle>
                                <circle cx="18" cy="18" r="16" fill="none" stroke="#48bb78" stroke-width="2" stroke-dasharray="0 100" stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                            </svg>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-xl font-bold text-gray-700 dark:text-gray-300">0%</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Won revenue ₹0</p>
                    </div>
                </div>
            </div>

            <!-- Charts and Analysis -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Funnel Analysis -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-gray-700 dark:text-gray-300 font-medium">Funnel</h3>
                        <div class="relative">
                            <select class="bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected>No pipeline available</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center justify-center h-64">
                        <div class="text-center">
                            <svg class="w-16 h-16 mx-auto text-gray-300 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="<http://www.w3.org/2000/svg>">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <p class="mt-2 text-gray-500 dark:text-gray-400">No data available</p>
                            <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition">Create Pipeline</button>
                        </div>
                    </div>
                </div>

                <!-- Stage Distribution -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-gray-700 dark:text-gray-300 font-medium">Stage Distribution</h3>
                        <div class="relative">
                            <select class="bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected>No pipeline available</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center justify-center h-64">
                        <div class="text-center">
                            <svg class="w-16 h-16 mx-auto text-gray-300 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="<http://www.w3.org/2000/svg>">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            <p class="mt-2 text-gray-500 dark:text-gray-400">No data available</p>
                            <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition">Create Pipeline</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
