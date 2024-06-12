<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-semibold">Event Categories</h1>
                <div class="mt-4 mb-6">
                    <a href="{{ route('categories.create') }}" class="text-white font-semibold py-2 px-4 rounded shadow-md transition duration-300" style="background-color: #3182CE;">
                        Create Category
                    </a>
                </div>

                <table class="min-w-full table-auto">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="border px-4 py-2 text-left">ID</th>
                        <th class="border px-4 py-2 text-left">Title</th>
                        <th class="border px-4 py-2 text-left">Description</th>
                        <th class="border px-4 py-2 text-left">Created At</th>
                        <th class="border px-4 py-2 text-left">Updated At</th>
                        <th class="border px-4 py-2 text-left">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($categories as $category)
                        <tr>
                            <td class="border px-4 py-2">{{ $category->id }}</td>
                            <td class="border px-4 py-2">{{ $category->title }}</td>
                            <td class="border px-4 py-2">{{ $category->description }}</td>
                            <td class="border px-4 py-2">{{ $category->created_at }}</td>
                            <td class="border px-4 py-2">{{ $category->updated_at }}</td>
                            <td class="border px-4 py-2 flex space-x-2">
                                <a href="{{ route('categories.show', $category->id) }}" class="text-white font-semibold py-2 px-4 rounded shadow-md transition duration-300" style="background-color: #48BB78;">
                                    View
                                </a>
                                <a href="{{ route('categories.edit', $category->id) }}" class="text-white font-semibold py-2 px-4 rounded shadow-md transition duration-300" style="background-color: #3182CE;">
                                    Edit
                                </a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-white font-semibold py-2 px-4 rounded shadow-md transition duration-300" style="background-color: #E53E3E;">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {{$categories->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
