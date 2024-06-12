<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Start Date</th>
                        <th class="px-4 py-2">End Date</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td class="border px-4 py-2">{{ $event->id }}</td>
                            <td class="border px-4 py-2">{{ $event->name }}</td>
                            <td class="border px-4 py-2">{{ $event->description }}</td>
                            <td class="border px-4 py-2">{{ $event->start_date }}</td>
                            <td class="border px-4 py-2">{{ $event->end_date }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('events.show', $event->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>
                                <a href="{{ route('events.edit', $event->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this event?')"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
