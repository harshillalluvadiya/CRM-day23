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

    <div class="flex h-screen bg-gray-50 dark:bg-gray-900">
        <!-- Sidebar -->
        <aside class="w-64 bg-white dark:bg-gray-800 shadow-md hidden md:block">
            <div class="h-full overflow-y-auto py-4 px-3">
                <ul class="space-y-2">
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"><span class="ml-3">Overview</span></a></li>
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"><span class="ml-3">Media</span></a></li>
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"><span class="ml-3">Brand Profile</span></a></li>
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"><span class="ml-3">Brand Book</span></a></li>
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white bg-orange-500 dark:bg-orange-600 hover:bg-orange-600 dark:hover:bg-orange-700"><span class="ml-3">Branding</span></a></li>
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"><span class="ml-3">Social Media</span></a></li>
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"><span class="ml-3">SEO</span></a></li>
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"><span class="ml-3">Website</span></a></li>
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"><span class="ml-3">Email Marketing</span></a></li>
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"><span class="ml-3">GMB</span></a></li>
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"><span class="ml-3">Payments</span></a></li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 p-6 overflow-y-auto">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6">Clients</h1>
            
            <!-- Tabs -->
            <div class="flex space-x-2 mb-6">
                <button class="px-6 py-2 bg-orange-500 text-white font-semibold rounded-t">Overview</button>
                <button class="px-6 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white font-semibold rounded-t">Designs</button>
                <button class="px-6 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white font-semibold rounded-t">Upcoming Events</button>
            </div>

            <!-- Branding Assets Table -->
            <div class="bg-gray-800 rounded-lg p-6 shadow-lg">
                <table class="w-full text-white">
                    <thead>
                        <tr>
                            <th class="p-3 text-left">Asset</th>
                            <th class="p-3 text-left">Upload File</th>
                            <th class="p-3 text-left">Asset</th>
                            <th class="p-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(['Logo', 'Bcard', 'Letterhead', 'Flyer', 'Brochure', 'LED', 'Standy', 'Create New'] as $asset)
                        <tr class="border-b border-gray-700">
                            <td class="p-3">{{ $asset }}</td>
                            <td class="p-3">
                                <button class="bg-gray-600 hover:bg-gray-500 px-4 py-2 rounded">Upload File</button>
                            </td>
                            <td class="p-3">
                                <select class="bg-gray-700 text-white rounded px-3 py-2">
                                    <option>Asset 1</option>
                                    <!-- More options as needed -->
                                </select>
                            </td>
                            <td class="p-3">
                                <button class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded font-semibold">Request Design</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
