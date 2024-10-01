<x-app-layout>
    <div class="container mx-auto py-12 px-6">
        <!-- Page Title -->
        <h1 class="text-5xl font-extrabold text-center mb-12 text-gray-900">Manage Categories</h1>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            <!-- Restaurant Form -->
            <div class="bg-white shadow-lg rounded-lg p-8 transition duration-300 hover:shadow-2xl">
                <h2 class="text-3xl font-semibold mb-6 text-gray-700">Add Menu Packages</h2>
                <form action="{{ route('restaurants.create') }}" method="POST" class="space-y-6">
                    @csrf
                    <input type="text" name="name" placeholder="Menu Package" class="input-field border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <input type="text" name="slug" placeholder="Slug" class="input-field border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <input type="text" name="description" placeholder="Description" class="input-field border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <input type="number" name="price" placeholder="Price" class="input-field border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <select name="status" class="input-field border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    <button type="submit" class="btn-primary bg-indigo-600 text-white font-semibold py-2 px-6 rounded-lg hover:bg-indigo-700 transition duration-200">Create</button>
                </form>

                <!-- Display Restaurant Packages -->
                <h3 class="text-2xl font-semibold mt-10 mb-6 text-gray-800">Existing Menu Packages</h3>
                @if($restaurants->isEmpty())
                    <p class="text-gray-600">No Menu Packages available.</p>
                @else
                    <ul class="space-y-4">
                        @foreach($restaurants as $restaurant)
                            <li class="bg-gray-50 p-4 rounded-md border border-gray-200">
                                <strong class="text-lg text-gray-900">{{ $restaurant->name }}</strong>
                                <p class="text-gray-600">Price: Rs.{{ $restaurant->price }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <!-- Music Category Form -->
            <div class="bg-white shadow-lg rounded-lg p-8 transition duration-300 hover:shadow-2xl">
                <h2 class="text-3xl font-semibold mb-6 text-gray-700">Add Music Packages</h2>
                <form action="{{ route('music_categories.create') }}" method="POST" class="space-y-6">
                    @csrf
                    <input type="text" name="name" placeholder="Music Package" class="input-field border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <input type="text" name="slug" placeholder="Slug" class="input-field border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <input type="text" name="description" placeholder="Description" class="input-field border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <input type="number" name="price" placeholder="Price" class="input-field border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <select name="status" class="input-field border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    <button type="submit" class="btn-primary bg-indigo-600 text-white font-semibold py-2 px-6 rounded-lg hover:bg-indigo-700 transition duration-200">Create</button>
                </form>

                <!-- Display Music Packages -->
                <h3 class="text-2xl font-semibold mt-10 mb-6 text-gray-800">Existing Music Packages</h3>
                @if($musicCategories->isEmpty())
                    <p class="text-gray-600">No Music Packages available.</p>
                @else
                    <ul class="space-y-4">
                        @foreach($musicCategories as $musicCategory)
                            <li class="bg-gray-50 p-4 rounded-md border border-gray-200">
                                <strong class="text-lg text-gray-900">{{ $musicCategory->name }}</strong>
                                <p class="text-gray-600">Price: Rs.{{ $musicCategory->price }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <!-- Decoration Category Form -->
            <div class="bg-white shadow-lg rounded-lg p-8 transition duration-300 hover:shadow-2xl">
                <h2 class="text-3xl font-semibold mb-6 text-gray-700">Add Decoration Packages</h2>
                <form action="{{ route('decoration_categories.create') }}" method="POST" class="space-y-6">
                    @csrf
                    <input type="text" name="name" placeholder="Decoration Package" class="input-field border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <input type="text" name="slug" placeholder="Slug" class="input-field border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <input type="text" name="description" placeholder="Description" class="input-field border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <input type="number" name="price" placeholder="Price" class="input-field border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <select name="status" class="input-field border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    <button type="submit" class="btn-primary bg-indigo-600 text-white font-semibold py-2 px-6 rounded-lg hover:bg-indigo-700 transition duration-200">Create</button>
                </form>

                <!-- Display Decoration Packages -->
                <h3 class="text-2xl font-semibold mt-10 mb-6 text-gray-800">Existing Decoration Packages</h3>
                @if($decorationCategories->isEmpty())
                    <p class="text-gray-600">No Decoration Packages available.</p>
                @else
                    <ul class="space-y-4">
                        @foreach($decorationCategories as $decorationCategory)
                            <li class="bg-gray-50 p-4 rounded-md border border-gray-200">
                                <strong class="text-lg text-gray-900">{{ $decorationCategory->name }}</strong>
                                <p class="text-gray-600">Price: ${{ $decorationCategory->price }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
