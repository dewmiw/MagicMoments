<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($restaurants->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mb-4">
                    <p class="text-lg font-semibold">Name:</p>
                    <p>{{ $restaurants->name }}</p>
                </div>
                <div class="mb-4">
                    <p class="text-lg font-semibold">Description:</p>
                    <p>{{ $restaurants->description }}</p>
                </div>
                <div class="mb-4">
                    <p class="text-lg font-semibold">Address:</p>
                    <p>{{ $restaurants->address }}</p>
                </div>
                <div class="mb-4">
                    <p class="text-lg font-semibold">Phone:</p>
                    <p>{{ $restaurants->phone }}</p>
                </div>
                <div class="mb-4">
                    <p class="text-lg font-semibold">Email:</p>
                    <p>{{ $restaurants->email }}</p>
                </div>
                <div class="mb-4">
                    <p class="text-lg font-semibold">Created At:</p>
                    <p>{{ $restaurants->created_at }}</p>
                </div>
                <div class="mb-4">
                    <p class="text-lg font-semibold">Updated At:</p>
                    <p>{{ $restaurants->updated_at }}</p>
                </div>
                <div class="mb-4">
                    <a href="{{ route('restaurants.edit', $restaurants->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                    <form action="{{ route('restaurants.destroy', $restaurants->id) }}" method="POST" class="inline">
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
