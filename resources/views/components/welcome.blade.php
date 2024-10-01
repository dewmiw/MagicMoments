<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Moments - Event Planning</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        /* Add any additional styles here */
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
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .modal-content {
            background: white;
            padding: 2rem;
            border-radius: 0.5rem;
            max-width: 500px;
            width: 100%;
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Hero Section -->
<section class="bg-cover bg-center h-screen relative" style="background-image: url('{{ asset('images/weddingVenue.jpg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-5xl md:text-6xl font-bold">Welcome to Magic Moments</h1>
            <p class="mt-4 text-lg md:text-xl">We organize unforgettable events that leave lasting memories.</p>
            <a href="{{ route('book-now') }}" class="mt-6 inline-block bg-white text-gray-900 py-4 px-6 rounded-full hover:bg-gray-700 hover:text-white transition duration-300">Book Now</a>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="about" class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="lg:w-1/2">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">About Us</h2>
                <p class="mt-4 text-gray-600">Magic Moments is a premier event planning company dedicated to creating extraordinary experiences. With a team of experienced professionals, we specialize in designing and executing flawless events that leave lasting impressions.</p>
                <p class="mt-4 text-gray-600">Our commitment to excellence and passion for perfection ensures that every event is unique, personalized, and memorable. Trust Magic Moments to make your special occasions truly magical.</p>
            </div>
            <div class="lg:w-1/2 lg:pl-12 mt-8 lg:mt-0">
                <img class="rounded-lg shadow-lg" src="{{ asset('images/wedding.jpg') }}" alt="About Us">
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 text-center">Our Services</h2>
        <p class="text-gray-600 text-center mt-4">We offer a wide range of services to make your event special.</p>
        <div class="mt-10 grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div href="{{ route('restaurants') }}" class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <img class="h-48 w-full object-cover rounded-md" src="{{ asset('images/menu-page.jpg') }}" alt="Food and Catering">
                <h3 class="text-xl font-semibold mt-4">Menu Packages</h3>
                <p class="mt-2 text-gray-600">Delicious food and top-notch catering services for your event.</p>
            </div>
            <!-- Service 2 -->
            <div  class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <img class="h-48 w-full object-cover rounded-md" src="{{ asset('images/decoration.jpeg') }}" alt="Decoration">
                <h3 class="text-xl font-semibold mt-4">Decoration</h3>
                <p class="mt-2 text-gray-600">Beautiful decorations to enhance the ambiance of your event.</p>
            </div>
            <!-- Service 3 -->
            <div href="{{ route('musicCategories') }}" class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <img class="h-48 w-full object-cover rounded-md" src="{{ asset('images/music.jpeg') }}" alt="Music">
                <h3 class="text-xl font-semibold mt-4">Music</h3>
                <p class="mt-2 text-gray-600">Perfect music arrangements to set the mood of your event.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 text-center">What Our Clients Say</h2>
        <p class="text-gray-600 text-center mt-4">Read some of the reviews from our happy clients.</p>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <p class="text-gray-600">"Magic Moments made our wedding day unforgettable! The decorations were stunning and the food was delicious. Highly recommend!"</p>
                <div class="mt-4 flex items-center">
                    <img class="h-12 w-12 rounded-full object-cover" src="{{ asset('images/liam.jpeg') }}" alt="Client Photo">
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold">John Doe</h4>
                        <p class="text-gray-600">Wedding</p>
                    </div>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <p class="text-gray-600">"Our office party was a huge success thanks to Magic Moments. The music and entertainment were top-notch."</p>
                <div class="mt-4 flex items-center">
                    <img class="h-12 w-12 rounded-full object-cover" src="{{ asset('images/blakely.jpeg') }}" alt="Client Photo">
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold">Jane Smith</h4>
                        <p class="text-gray-600">Office Event</p>
                    </div>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <p class="text-gray-600">"We had an amazing baby shower organized by Magic Moments. The attention to detail was incredible."</p>
                <div class="mt-4 flex items-center">
                    <img class="h-12 w-12 rounded-full object-cover" src="{{ asset('images/emily.jpeg') }}" alt="Client Photo">
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold">Emily Johnson</h4>
                        <p class="text-gray-600">Baby Shower</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scroll-to-Top Button -->
<button id="scroll-up" class="scroll-up">↑</button>

<!-- Footer -->
<footer id="contact" class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4">
        <div class="lg:flex lg:justify-between">
            <div class="lg:w-1/3">
                <h3 class="text-2xl font-semibold">Magic Moments</h3>
                <p class="mt-4 text-gray-400">Creating unforgettable events with meticulous <br> attention to detail and unparalleled
                    creativity. <br> Trust us to make your special occasions truly <br> magical.</p>
            </div>
            <div class="lg:w-1/3 mt-8 lg:mt-0">
                <h4 class="text-xl font-semibold">Quick Links</h4>
                <ul class="mt-4">
                    <li><a href="#about" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                    <li><a href="#about" class="text-gray-400 hover:text-white transition duration-300">About Us</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-white transition duration-300">Services</a></li>
                    <li><a href="#testimonials" class="text-gray-400 hover:text-white transition duration-300">Testimonials</a></li>
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
    </div>
</footer>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Scroll-to-Top Button
    const scrollUpButton = document.getElementById('scroll-up');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollUpButton.classList.add('visible');
        } else {
            scrollUpButton.classList.remove('visible');
        }
    });

    scrollUpButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Modal Popup
    const modal = document.getElementById('promo-modal');
    const closeModalButton = document.getElementById('close-modal');

    window.addEventListener('load', () => {
        modal.style.display = 'flex';
    });

    closeModalButton.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    // Swiper Carousel
    const swiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Responsive Navigation Restaurant
    document.querySelector('.mobile-menu-button').addEventListener('click', () => {
        const menu = document.querySelector('.mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>

</body>
</html>
