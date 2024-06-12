<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Restaurant Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-2xl font-semibold">Restaurant Categories</h1>
                        <a href="{{ route('restaurants.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Category</a>
                    </div>
                    <div class="-mx-4 -my-2 overflow-x-auto">
                        <div class="py-2 align-middle inline-block min-w-full">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Updated At</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($restaurants as $restaurant)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->id }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->description }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->address }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->phone }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->email }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->created_at }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->updated_at }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="{{ route('restaurants.show', $restaurant->id) }}" class="text-green-500 hover:text-green-700 font-bold mr-2">View</a>
                                                <a href="{{ route('restaurants.edit', $restaurant->id) }}" class="text-blue-500 hover:text-blue-700 font-bold mr-2">Edit</a>
                                                <form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="text-red-500 hover:text-red-700 font-bold">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        {{ $restaurants->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
