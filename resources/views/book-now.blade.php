<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Book Your Event') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100  p-10 m-2"> <!-- Added m-2 for 10px margin -->

                <!-- Success Notification -->
                @if (session('success'))
                    <div class="bg-green-500 border border-green-600 text-white px-4 py-3 rounded mb-6" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <h3 class="text-xl font-bold mb-6 text-center text-yellow-700 ">Let's Make Your Event Unforgettable!</h3>
                <form action="{{ route('bookings.store') }}" method="POST">
                    @csrf

                    <!-- Personal Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700">Full Name</label>
                            <input type="text" name="name" id="name" required class="mt-1 block w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                            <input type="email" name="email" id="email" required class="mt-1 block w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="phone" class="block text-sm font-semibold text-gray-700">Phone</label>
                        <input type="text" name="phone" id="phone" required class="mt-1 block w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                    </div>

                    <!-- Event Details -->
                    <div class="mb-6">
                        <label for="event_type" class="block text-sm font-semibold text-gray-700">Event Type</label>
                        <select name="event_type" id="event_type" class="mt-1 block w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200" onchange="toggleCustomEvent(this.value)">
                            <option value="wedding">Wedding</option>
                            <option value="birthday">Birthday</option>
                            <option value="office">Office Event</option>
                            <option value="baby">Baby Shower</option>
                            <option value="gender">Gender Reveal</option>
                            <option value="tea">Tea Party</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div id="custom_event_type_div" class="mb-6 hidden">
                        <label for="custom_event_type" class="block text-sm font-semibold text-gray-700">Specify Event Type</label>
                        <input type="text" name="custom_event_type" id="custom_event_type" class="mt-1 block w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="event_date" class="block text-sm font-semibold text-gray-700">Event Date</label>
                            <input type="date" name="event_date" id="event_date" required class="mt-1 block w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                        </div>
                        <div>
                            <label for="location" class="block text-sm font-semibold text-gray-700">Event Location</label>
                            <input type="text" name="location" id="location" required class="mt-1 block w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                        </div>
                    </div>

                    <!--No. of guests-->
                    <div class="mb-6">
                        <label for="guests" class="block text-sm font-semibold text-gray-700">Number of Guests</label>
                        <input type="number" name="guests" id="guests" required class="mt-1 block w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                    </div>

                    <!-- Package Selection -->
                    <div class="mb-6">
                        <label for="menu_package_id" class="block text-sm font-semibold text-gray-700">Menu Package</label>
                        <select name="menu_package_id" id="menu_package_id" class="mt-1 block w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                            @foreach($menuPackages as $menuPackage)
                                <option value="{{ $menuPackage->id }}">{{ $menuPackage->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="music_package_id" class="block text-sm font-semibold text-gray-700">Music Package</label>
                        <select name="music_package_id" id="music_package_id" class="mt-1 block w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                            @foreach($musicPackages as $musicPackage)
                                <option value="{{ $musicPackage->id }}">{{ $musicPackage->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="decoration_package_id" class="block text-sm font-semibold text-gray-700">Decoration Package</label>
                        <select name="decoration_package_id" id="decoration_package_id" class="mt-1 block w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                            @foreach($decorationPackages as $decorationPackage)
                                <option value="{{ $decorationPackage->id }}">{{ $decorationPackage->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-8 flex justify-center">
                        <button type="submit" class="bg-yellow-600 hover:bg-blue-700 text-gray-800 font-bold py-3 px-6 rounded-lg shadow-md transition duration-200">
                            Book Now
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="lg:flex lg:justify-between">
                <div class="lg:w-1/3">
                    <h3 class="text-2xl font-semibold">Magic Moments</h3>
                    <p class="mt-4 text-gray-400">Creating unforgettable events with meticulous attention to detail and unparalleled creativity. Trust us to make your special occasions truly magical.</p>
                </div>
                <div class="lg:w-1/3 mt-8 lg:mt-0">
                    <h4 class="text-xl font-semibold">Quick Links</h4>
                    <ul class="mt-4">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition duration-300">About Us</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition duration-300">Services</a></li>
                        <li><a href="#events" class="text-gray-400 hover:text-white transition duration-300">Events</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition duration-300">Contact Us</a></li>
                    </ul>
                </div>
                <div class="lg:w-1/3 mt-8 lg:mt-0">
                    <h4 class="text-xl font-semibold">Contact Us</h4>
                    <p class="mt-4 text-gray-400">123 Event Avenue<br>City, State, ZIP</p>
                    <p class="mt-4 text-gray-400">Phone: (123) 456-7890</p>
                    <p class="mt-4 text-gray-400">Email: info@magicmoments.com</p>
                </div>
            </div>
            <div class="mt-12 text-center text-gray-400">
                &copy; 2024 Magic Moments. All rights reserved.
            </div>
        </div>
    </footer>


    <script>
        function toggleCustomEvent(value) {
            document.getElementById('custom_event_type_div').style.display = (value === 'other') ? 'block' : 'none';
        }
    </script>
</x-app-layout>
