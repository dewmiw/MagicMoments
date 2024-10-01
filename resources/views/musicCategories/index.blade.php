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
            .package-section {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 50px;
                border-bottom: 1px solid #eee;
            }
            .package-section:nth-child(even) {
                flex-direction: row-reverse;
            }
            .package-image {
                width: 45%;
            }
            .package-image img {
                width: 100%;
                height: auto;
                border-radius: 10px;
            }
            .package-details {
                width: 45%;
                padding: 20px;
            }
            .package-details h2 {
                font-size: 2rem;
                color: black;
                margin-bottom: 15px;
            }
            .package-details p {
                font-size: 1.1rem;
                margin-bottom: 20px;
                color: #666;
            }
            .package-details .price {
                font-size: 1.5rem;
                color: darkgoldenrod;
                font-weight: bold;
            }
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
        </style>
    </head>




    <body class="bg-gray-100">
    <br>
    <br>

    <!--Page title-->
    <section id="events-title" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center">
                <h1 class="text-5xl font-semibold text-gray-800 mb-4 italic">
                    Our Music Packages
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    At Magic Moments, we specialize in crafting unforgettable experiences tailored to your unique needs.
                    Whether you're planning a wedding, a corporate event, or a personal celebration, our team is dedicated to
                    providing exceptional service and attention to detail. Browse through our music packages to find the perfect sound for your event. From live bands to DJs, we have something for every celebration!
                </p>
            </div>
        </div>
    </section>

    <br>
    <br>





    <div class="package-section">
        <div class="package-image">
            <img src="{{ asset('images/music1.jpeg') }}" alt="Acoustic Music">
        </div>
        <div class="package-details">
            <h2>Acoustic Music</h2>
            <p>Perfect for creating an intimate, warm atmosphere with live acoustic performances, ideal for smaller gatherings and romantic events.</p>
            <div class="price">Rs.5000 per event</div>
        </div>
    </div>

    <div class="package-section">
        <div class="package-image">
            <img src="{{ asset('images/music2.jpeg') }}" alt="DJ Services">
        </div>
        <div class="package-details">
            <h2>DJ Services</h2>
            <p>Get the party started with a professional DJ spinning all your favorite hits, ensuring the dance floor is never empty.</p>
            <div class="price">Rs.30000 per event</div>
        </div>
    </div>

    <div class="package-section">
        <div class="package-image">
            <img src="{{ asset('images/music3.jpeg') }}" alt="Live Band">
        </div>
        <div class="package-details">
            <h2>Live Band</h2>
            <p>A full live band playing a variety of genres to suit any event, bringing energy and live music entertainment to your celebration.</p>
            <div class="price">Rs.45000 per event</div>
        </div>
    </div>

    <div class="package-section">
        <div class="package-image">
            <img src="{{ asset('images/download.jpeg') }}" alt="Calypso Band">
        </div>
        <div class="package-details">
            <h2>Calypso Band</h2>
            <p>Bring the sounds of the Caribbean to your event with a lively Calypso band, perfect for tropical-themed parties and outdoor events.</p>
            <div class="price">Rs.6000 per event</div>
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

    <!-- Scroll Up Button -->
    <button class="scroll-up" id="scrollUp">Up</button>

    <!-- JavaScript for Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            AOS.init();

            const fadeInElements = document.querySelectorAll('.fade-in');
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            fadeInElements.forEach(element => {
                observer.observe(element);
            });

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Scroll Up Button
            const scrollUpButton = document.getElementById('scrollUp');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) {
                    scrollUpButton.classList.add('visible');
                } else {
                    scrollUpButton.classList.remove('visible');
                }
            });

            scrollUpButton.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });
    </script>

    </body>
    </html>
</x-app-layout>
