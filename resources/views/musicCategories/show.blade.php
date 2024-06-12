<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($musicCategory->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="mb-4">
                    <p class="text-lg font-semibold">Name:</p>
                    <p>{{ $musicCategory->name }}</p>
                </div>
                <div class="mb-4">
                    <p class="text-lg font-semibold">Description:</p>
                    <p>{{ $musicCategory->description }}</p>
                </div>
                <div class="mb-4">
                    <p class="text-lg font-semibold">Created At:</p>
                    <p>{{ $musicCategory->created_at }}</p>
                </div>
                <div class="mb-4">
                    <p class="text-lg font-semibold">Updated At:</p>
                    <p>{{ $musicCategory->updated_at }}</p>
                </div>
                <div class="mb-4">
                    <a href="{{ route('musicCategories.edit', $musicCategory->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                    <form action="{{ route('musicCategories.destroy', $musicCategory->id) }}" method="POST" class="inline">
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
