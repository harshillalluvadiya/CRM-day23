@extends('layouts.app')

@section('content')
<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r shadow-md p-4">
        <h1 class="text-xl font-bold mb-6">DIGIBREAD CRM</h1>
        <nav class="space-y-4">
            <a href="#" class="block text-gray-700 hover:text-blue-600">Dashboard</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600">Clients</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600">Campaigns</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600">Social Media</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600">Content</a>
            <a href="#" class="block text-blue-600 font-semibold">SEO</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600">Reports</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600">Settings</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6 overflow-y-auto">
        <!-- Top Bar -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <label class="text-sm font-medium text-gray-600">Client:</label>
                <select class="ml-2 px-3 py-1 border rounded">
                    <option>ABC Corporation</option>
                </select>
            </div>
            <div class="space-x-4">
                <input type="text" placeholder="Search" class="px-3 py-1 border rounded">
                <button class="px-4 py-1 border rounded bg-gray-200">User ▼</button>
            </div>
        </div>

        <!-- Keyword Rankings -->
        <section class="mb-8">
            <h2 class="text-lg font-semibold mb-3">Keyword Rankings</h2>
            <div class="bg-white shadow rounded p-4 h-64 flex items-center justify-center text-gray-500">
                [LINE CHART]
            </div>
        </section>

        <!-- Top Keywords Table -->
        <section class="mb-8">
            <h2 class="text-lg font-semibold mb-3">Top Keywords</h2>
            <div class="overflow-x-auto bg-white shadow rounded">
                <table class="min-w-full text-sm text-left border">
                    <thead class="bg-gray-50 font-medium text-gray-700">
                        <tr>
                            <th class="px-4 py-2 border">Keyword</th>
                            <th class="px-4 py-2 border">Position</th>
                            <th class="px-4 py-2 border">Volume</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t">
                            <td class="px-4 py-2">summer</td>
                            <td class="px-4 py-2">5 <span class="text-green-600">(+2)</span></td>
                            <td class="px-4 py-2">12,000</td>
                        </tr>
                        <tr class="border-t">
                            <td class="px-4 py-2">fashion</td>
                            <td class="px-4 py-2">8 <span class="text-red-600">(-1)</span></td>
                            <td class="px-4 py-2">8,500</td>
                        </tr>
                        <tr class="border-t">
                            <td class="px-4 py-2">clothing</td>
                            <td class="px-4 py-2">12 <span class="text-green-600">(+3)</span></td>
                            <td class="px-4 py-2">5,200</td>
                        </tr>
                        <tr class="border-t">
                            <td class="px-4 py-2">style</td>
                            <td class="px-4 py-2">15 <span class="text-gray-600">(0)</span></td>
                            <td class="px-4 py-2">4,800</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Website Audit -->
        <section class="mb-8">
            <h2 class="text-lg font-semibold mb-3">Website Audit</h2>
            <div class="bg-white shadow rounded p-4">
                <p><strong>Last audit:</strong> May 15, 2025</p>
                <p><strong>Score:</strong> 78/100</p>
                <div class="mt-2">
                    <p><strong>Issues:</strong></p>
                    <ul class="list-disc pl-5 text-sm text-gray-700">
                        <li>3 Critical</li>
                        <li>8 Important</li>
                        <li>12 Minor</li>
                    </ul>
                </div>
                <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">View Full Audit</button>
            </div>
        </section>

        <!-- Action Buttons -->
        <section>
            <h2 class="sr-only">Actions</h2>
            <div class="flex space-x-4">
                <button class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Add Keywords</button>
                <button class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Run New Audit</button>
            </div>
        </section>
    </main>
</div>
@endsection
