<x-slot name="header">
    <div class="flex justify-center items-center">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/3.png') }}" alt="logo" class="block" style="width: 450px; height: 100px;">
        </a>
    </div>
</x-slot>
<!-- Home Page Image --><!-- Home Page Image -->
<div class="relative">
    <img src="{{ URL('images/weddingVenue.jpg') }}" alt="BackgroundImage" class="w-full h-auto">
    <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
    <div class="absolute inset-0 flex items-center justify-center p-4">
        <h1 class="text-white text-4xl lg:text-6xl font-extrabold shadow-lg text-center leading-tight">
            We make your dream come true!
        </h1>
    </div>
</div>




<!-- Contact Button -->
<div class="flex items-center justify-center mt-8">
    <a href="{{ url('/contact') }}" class="bg-transparent text-[#FA8072] border-2 border-[#FA8072] font-bold py-2 px-4 rounded-full
    hover:bg-[#FA8072] hover:text-white text-xl">
        Contact Us
    </a>
</div>

<!-- Description -->
<div class="flex items-center justify-center mt-8">
    <p class="text-center w-full px-10 md:px-20 lg:px-32">
        Welcome to Magic Moments, where your dreams become reality. We specialize in crafting unforgettable experiences, whether it's a wedding,
        corporate event, or a personal celebration. Our dedicated team of professionals ensures every detail is meticulously planned and executed,
        so you can relax and enjoy your special day. From intimate gatherings to grand celebrations, we transform your vision into beautifully
        curated events that leave a lasting impression. Discover the magic of seamless event planning with Magic Moments.
    </p>
</div>

<!-- Elements List Picture Cards Section -->
<div class="max-w-screen-xl mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 py-8">
        <!-- Event Card -->
        <div class="p-4">
            <a href="https://example.com/nyc" class="block bg-white shadow-md rounded-lg overflow-hidden max-w-xs mx-auto">
                <div class="h-48">
                    <img src="{{URL('images/events.jpeg')}}" alt="Events" class="w-full h-full object-cover">
                </div>
                <p class="text-center font-bold py-4">Events</p>
            </a>
        </div>
        <!-- restaurants and Catering Card -->
        <div class="p-4">
            <a href="https://example.com/chicago" class="block bg-white shadow-md rounded-lg overflow-hidden max-w-xs mx-auto">
                <div class="h-48">
                    <img src="{{URL('images/menu-page.jpg')}}" alt="Restaurants and Catering" class="w-full h-full object-cover">
                </div>
                <p class="text-center font-bold py-4">Restaurants and Catering</p>
            </a>
        </div>
        <!-- Music and DJ Card -->
        <div class="p-4">
            <a href="https://example.com/houston" class="block bg-white shadow-md rounded-lg overflow-hidden max-w-xs mx-auto">
                <div class="h-48">
                    <img src="{{URL('images/music.jpeg')}}" alt="Music and DJ" class="w-full h-full object-cover">
                </div>
                <p class="text-center font-bold py-4">Music and DJ</p>
            </a>
        </div>
        <!-- Decorations Card -->
        <div class="p-4">
            <a href="https://example.com/atlanta" class="block bg-white shadow-md rounded-lg overflow-hidden max-w-xs mx-auto">
                <div class="h-48">
                    <img src="{{URL('images/deco2.jpg')}}" alt="Decorations" class="w-full h-full object-cover">
                </div>
                <p class="text-center font-bold py-4">Decorations</p>
            </a>
        </div>
    </div>
</div>

<!-- Footer Section -->
<footer class="bg-gray-800 text-white mt-8 w-full">
    <div class="container mx-auto py-6 px-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="text-center md:text-left mb-4 md:mb-0">
                <h2 class="font-bold text-lg">Contact Us</h2>
                <p>Email: info@magicmoments.com</p>
                <p>Phone: 077 668 7856</p>
                <p>Address: 23 Park Street, Colombo 02, Sri Lanka</p>
            </div>
            <div class="text-center md:text-right">
                <p>&copy; 2024 Magic Moments. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

