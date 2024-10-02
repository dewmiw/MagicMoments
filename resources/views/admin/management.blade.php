<x-app-layout>
    <div class="container mx-auto py-12 px-6">
        <!-- Bookings Section -->
        <section class="mb-12">
            <h1 class="text-4xl font-extrabold text-center mb-8 text-gray-900">Recent Bookings</h1>
            @if($bookings->isEmpty())
                <p class="text-gray-600 text-center">No bookings available.</p>
            @else
                <div class="overflow-y-auto h-[50vh] bg-white shadow-md rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            @foreach(['Name', 'Email', 'Phone', 'Event Type', 'Event Date', 'Location', 'Menu Package', 'Music Package', 'Decoration Package'] as $header)
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ $header }}</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($bookings as $booking)
                            <tr>
                                @foreach(['name', 'email', 'phone', 'event_type', 'event_date', 'location', 'menu_package_id', 'music_package_id', 'decoration_package_id'] as $field)
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $booking->$field }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </section>

        <!-- Package Forms Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Menu Package Form -->
            <div class="bg-white shadow-lg rounded-lg p-8 transition duration-300 hover:shadow-2xl">
                <h2 class="text-3xl font-semibold mb-6 text-gray-700">Add Menu Packages</h2>
                <form action="{{ route('restaurants.create') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="text" name="name" placeholder="Menu Package" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <input type="text" name="slug" placeholder="Slug" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <textarea name="description" placeholder="Description" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
                    <input type="number" name="price" placeholder="Price" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <select name="status" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-2 px-6 rounded-lg hover:bg-indigo-700 transition duration-200">Create</button>
                </form>

                <h3 class="text-2xl font-semibold mt-8 mb-4 text-gray-800">Existing Menu Packages</h3>
                @if($restaurants->isEmpty())
                    <p class="text-gray-600">No Menu Packages available.</p>
                @else
                    <ul class="space-y-2">
                        @foreach($restaurants as $restaurant)
                            <li class="bg-gray-50 p-3 rounded-md border border-gray-200">
                                <span class="font-medium text-gray-900">{{ $restaurant->name }}</span>
                                <span class="text-gray-600 ml-2">Rs.{{ $restaurant->price }}</span>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <!-- Music Package Form -->
            <div class="bg-white shadow-lg rounded-lg p-8 transition duration-300 hover:shadow-2xl">
                <h2 class="text-3xl font-semibold mb-6 text-gray-700">Add Music Packages</h2>
                <form action="{{ route('music_categories.create') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="text" name="name" placeholder="Music Package" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <input type="text" name="slug" placeholder="Slug" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <textarea name="description" placeholder="Description" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
                    <input type="number" name="price" placeholder="Price" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <select name="status" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-2 px-6 rounded-lg hover:bg-indigo-700 transition duration-200">Create</button>
                </form>

                <h3 class="text-2xl font-semibold mt-8 mb-4 text-gray-800">Existing Music Packages</h3>
                @if($musicCategories->isEmpty())
                    <p class="text-gray-600">No Music Packages available.</p>
                @else
                    <ul class="space-y-2">
                        @foreach($musicCategories as $musicCategory)
                            <li class="bg-gray-50 p-3 rounded-md border border-gray-200">
                                <span class="font-medium text-gray-900">{{ $musicCategory->name }}</span>
                                <span class="text-gray-600 ml-2">Rs.{{ $musicCategory->price }}</span>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <!-- Decoration Package Form -->
            <div class="bg-white shadow-lg rounded-lg p-8 transition duration-300 hover:shadow-2xl">
                <h2 class="text-3xl font-semibold mb-6 text-gray-700">Add Decoration Packages</h2>
                <form action="{{ route('decoration_categories.create') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="text" name="name" placeholder="Decoration Package" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <input type="text" name="slug" placeholder="Slug" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <textarea name="description" placeholder="Description" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
                    <input type="number" name="price" placeholder="Price" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <select name="status" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-2 px-6 rounded-lg hover:bg-indigo-700 transition duration-200">Create</button>
                </form>

                <h3 class="text-2xl font-semibold mt-8 mb-4 text-gray-800">Existing Decoration Packages</h3>
                @if($decorationCategories->isEmpty())
                    <p class="text-gray-600">No Decoration Packages available.</p>
                @else
                    <ul class="space-y-2">
                        @foreach($decorationCategories as $decorationCategory)
                            <li class="bg-gray-50 p-3 rounded-md border border-gray-200">
                                <span class="font-medium text-gray-900">{{ $decorationCategory->name }}</span>
                                <span class="text-gray-600 ml-2">Rs.{{ $decorationCategory->price }}</span>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
