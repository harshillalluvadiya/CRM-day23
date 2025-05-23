<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100">Brands</h2>
    </x-slot>

    <div class="max-w-5xl mx-auto py-8 px-4">
        @if(session('success'))
            <div class="mb-4 px-4 py-2 rounded bg-green-100 text-green-800 border border-green-200">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('brand.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded shadow transition font-semibold">
                + Add New Brand
            </a>
            <span class="text-gray-500 text-sm">Total: {{ $brands->count() }}</span>
        </div>

        <div class="overflow-x-auto rounded shadow">
            <table class="min-w-full bg-white dark:bg-gray-800">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700 text-left text-xs font-semibold text-gray-600 dark:text-gray-200 uppercase tracking-wider">
                            Name
                        </th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700 text-left text-xs font-semibold text-gray-600 dark:text-gray-200 uppercase tracking-wider">
                            Description
                        </th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700 text-left text-xs font-semibold text-gray-600 dark:text-gray-200 uppercase tracking-wider">
                            Created At
                        </th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($brands as $brand)
                        <tr class="hover:bg-blue-50 dark:hover:bg-gray-700 transition">
                            <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                <span class="font-medium text-gray-900 dark:text-gray-100">{{ $brand->name }}</span>
                            </td>
                            <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-300">
                                {{ $brand->description }}
                            </td>
                            <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 text-gray-500 dark:text-gray-400">
                                {{ $brand->created_at->format('d M Y') }}
                            </td>
                            <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 text-right">
                                <a href="{{ route('brand.edit', $brand) }}"
                                   class="inline-block text-blue-600 hover:text-blue-900 mr-2 transition">Edit</a>
                                <form action="{{ route('brand.destroy', $brand) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this brand?')"
                                            class="text-red-600 hover:text-red-900 transition">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                No brands found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
