<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-100">Create Brand</h2>
    </x-slot>

    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 to-gray-800">
        <div class="w-full max-w-lg bg-gray-900 rounded-xl shadow-lg p-8">
            @if ($errors->any())
                <div class="mb-4 text-red-500 bg-red-100 rounded p-3">
                    <ul class="pl-5 list-disc">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route(name: 'brand.store') }}">
                @csrf
                <div class="mb-6">
                    <label class="block text-gray-200 font-semibold mb-2">Legal Brand Name</label>
                    <input
                        type="text"
                        name="name"
                        class="w-full bg-gray-800 border border-gray-700 rounded-lg p-3 text-gray-100 focus:outline-none focus:border-blue-500 transition"
                        required
                        placeholder="Enter brand name"
                    />
                </div>
                <div class="mb-6">
                    <label class="block text-gray-200 font-semibold mb-2">Description</label>
                    <textarea
                        name="description"
                        rows="4"
                        class="w-full bg-gray-800 border border-gray-700 rounded-lg p-3 text-gray-100 focus:outline-none focus:border-blue-500 transition"
                        placeholder="Describe your brand"
                    ></textarea>
                </div>
                <button
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg shadow transition duration-200"
                    type="submit"
                >
                    Create
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
