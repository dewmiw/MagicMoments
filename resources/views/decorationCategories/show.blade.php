<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($decorationCategory->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="mb-4">
                    <p class="text-lg font-semibold">Name:</p>
                    <p>{{ $decorationCategory->name }}</p>
                </div>
                <div class="mb-4">
                    <p class="text-lg font-semibold">Description:</p>
                    <p>{{ $decorationCategory->description }}</p>
                </div>
                <div class="mb-4">
                    <p class="text-lg font-semibold">Created At:</p>
                    <p>{{ $decorationCategory->created_at }}</p>
                </div>
                <div class="mb-4">
                    <p class="text-lg font-semibold">Updated At:</p>
                    <p>{{ $decorationCategory->updated_at }}</p>
                </div>
                <div class="mb-4">
                    <a href="{{ route('decorationCategories.edit', $decorationCategory->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                    <form action="{{ route('decorationCategories.destroy', $decorationCategory->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                onclick="return confirm('Are you sure you want to delete this item?');"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
