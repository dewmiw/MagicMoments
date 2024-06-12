<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Music categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-semibold mb-6">Music Categories</h1>
                <div class="mb-6">
                    <a href="{{ route('musicCategories.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create New Music Category</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Updated At</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($musicCategories as $musicCategory)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $musicCategory->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $musicCategory->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $musicCategory->description }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $musicCategory->created_at }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $musicCategory->updated_at }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="{{ route('musicCategories.show', $musicCategory->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">View</a>
                                    <a href="{{ route('musicCategories.edit', $musicCategory->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                                    <form action="{{ route('musicCategories.destroy', $musicCategory->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-8">
                    {{ $musicCategories->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
