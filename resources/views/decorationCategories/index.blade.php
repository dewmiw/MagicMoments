<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Magic Moments - Events</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
        <style>
            .fade-in {
                opacity: 0;
                transform: translateY(20px);
                transition: opacity 0.6s ease-out, transform 0.6s ease-out;
            }

            .fade-in-visible {
                opacity: 1;
                transform: translateY(0);
            }

            .scroll-up {
                position: fixed;
                bottom: 2rem;
                right: 2rem;
                background: #1a202c;
                color: white;
                border: none;
                padding: 0.75rem 1rem;
                border-radius: 0.5rem;
                display: none;
                cursor: pointer;
                z-index: 1000;
            }

            .scroll-up.visible {
                display: block;
            }

            .image-hover:hover {
                transform: scale(1.05);
                transition: transform 0.3s;
            }

            nav a:hover {
                color: #fff;
                transition: color 0.3s;
            }

            .price {
                font-size: 1.5rem;
                color: darkgoldenrod;
                font-weight: bold;
            }
        </style>
    </head>

    <body class="bg-gray-100">
    <br><br>

    <!-- Page title -->
    <section id="events-title" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center">
                <h1 class="text-5xl font-semibold text-gray-800 mb-4 italic">
                    Elevate Every Event with Stunning Decor
                </h1>
            </div>
        </div>
    </section>

    <br><br>

    <!-- Deco Sections -->
    <section id="events" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Balloon Backdrop Section -->
            <div class="bg-white rounded-lg shadow-lg p-6 fade-in" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Balloon Backdrop</h2>
                <p class="mt-4 text-gray-600">
                    Add a pop of color and charm to your event with our custom balloon backdrops! Perfect for photo ops or setting the scene, these vibrant displays create an eye-catching centerpiece that elevates any celebration. From elegant arches to playful arrangements, our balloon backdrops bring your vision to life with style and flair.
                </p><br>
                <div class="price">Rs.15000</div><br>
                <img class="w-full h-64 object-cover rounded-lg mt-4 image-hover" src="{{ asset('images/balloonBackdrop.jpeg') }}" alt="Balloon Backdrop">
            </div>

            <!-- Floral Decor Section -->
            <div class="bg-gray-100 rounded-lg shadow-lg p-6 fade-in" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Floral Deco</h2>
                <p class="mt-4 text-gray-600">
                    Transform your event into a blooming paradise with our exquisite floral décor! Whether you're going for classic elegance or a whimsical touch, our stunning floral arrangements create a fresh and vibrant atmosphere. From delicate bouquets to lavish flower walls, these beautiful designs add a natural, enchanting charm to every moment of your special day.
                </p><br>
                <div class="price">Rs.10000</div><br>
                <img class="w-full h-64 object-cover rounded-lg mt-4 image-hover" src="{{ asset('images/floralDeco.jpeg') }}" alt="Floral Decor">
            </div>

            <!-- Elegant and White Section -->
            <div class="bg-white rounded-lg shadow-lg p-6 fade-in" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Elegant and White</h2>
                <p class="mt-4 text-gray-600">
                    Elevate your event with the timeless sophistication of our elegant white décor. This pristine and luxurious design brings a sense of purity and grace to any occasion. From sleek white drapes to chic centerpieces, the understated beauty of white creates a serene and classy atmosphere, perfect for weddings, galas, or any event where elegance takes center stage.
                </p><br>
                <div class="price">Rs.18000</div><br>
                <img class="w-full h-64 object-cover rounded-lg mt-4 image-hover" src="{{ asset('images/deco3_.jpg') }}" alt="Elegant and White">
            </div>

            <!-- Dino Theme Section -->
            <div class="bg-gray-100 rounded-lg shadow-lg p-6 fade-in" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Dino Theme</h2>
                <p class="mt-4 text-gray-600">
                    Step into a prehistoric adventure with our vibrant Dino-themed décor! Bring the excitement of the Jurassic era to your event with towering dinosaurs, lush greenery, and playful dino footprints. Perfect for kids' parties or any dinosaur enthusiast, this theme transforms your space into a fun, interactive world where imagination roars to life.
                </p><br>
                <div class="price">Rs.8000</div><br>
                <img class="w-full h-64 object-cover rounded-lg mt-4 image-hover" src="{{ asset('images/deco4.jpeg') }}" alt="Dino Theme">
            </div>

            <!-- Disney Theme Section -->
            <div class="bg-white rounded-lg shadow-lg p-6 fade-in" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Disney Theme</h2>
                <p class="mt-4 text-gray-600">
                    Bring the magic of Disney to your event with our enchanting Disney-themed décor! Whether it's the timeless charm of Mickey and Minnie, the grandeur of Disney princesses, or the excitement of Pixar characters, this theme creates a whimsical wonderland filled with vibrant colors, iconic symbols, and fairy-tale moments. Perfect for all ages, it’s the ultimate way to sprinkle a little pixie dust on your special day!
                </p><br>
                <div class="price">Rs.20000</div><br>
                <img class="w-full h-64 object-cover rounded-lg mt-4 image-hover" src="{{ asset('images/deco5.jpeg') }}" alt="Disney Theme">
            </div>
        </div>
    </section>

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

    <!-- Scroll Up Button -->
    <button class="scroll-up" id="scrollUp">Up</button>

    <!-- JavaScript for Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();

        // Scroll to top button functionality
        const scrollUpBtn = document.getElementById('scrollUp');
        window.onscroll = function() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollUpBtn.classList.add('visible');
            } else {
                scrollUpBtn.classList.remove('visible');
            }
        };

        scrollUpBtn.onclick = function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        };
    </script>
    </body>
    </html>
</x-app-layout>
