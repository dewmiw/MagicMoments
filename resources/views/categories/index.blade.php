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
                Our Exclusive Event Offerings
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                At Magic Moments, we specialize in crafting unforgettable experiences tailored to your unique needs.
                Whether you're planning a wedding, a corporate event, or a personal celebration, our team is dedicated to
                providing exceptional service and attention to detail. Explore our exclusive event offerings to see how
                we can bring your vision to life with elegance and sophistication.
            </p>
        </div>
    </div>
</section>

<br>
<br>





<!-- Events Sections -->
<section id="events" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Weddings Section -->
        <div class="lg:flex lg:items-center lg:justify-between py-8 fade-in" data-aos="fade-up">
            <div class="lg:w-1/2">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Weddings</h2>
                <p class="mt-4 text-gray-600">
                    We create magical weddings that are tailored to your unique love story. Our dedicated team ensures that every detail, from the ceremony to the reception, is perfect and personalized to your desires. From selecting the ideal venue to curating the perfect menu and arranging stunning floral decorations, we handle it all with meticulous attention to detail. Let us turn your dream wedding into a beautiful reality that you and your guests will remember forever.
                </p>
            </div>
            <div class="lg:w-1/2 lg:pl-12 mt-8 lg:mt-0">
                <img class="w-full h-64 object-cover rounded-lg shadow-lg image-hover" src="{{ asset('images/wedding.jpg') }}" alt="Weddings">
            </div>
        </div>

        <!-- Birthday Parties Section -->
        <div class="lg:flex lg:items-center lg:justify-between py-8 bg-gray-100 fade-in" data-aos="fade-up">
            <div class="lg:w-1/2 lg:order-last">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Birthday Parties</h2>
                <p class="mt-4 text-gray-600">
                    Celebrate your special day with a party that is as unique as you are. We offer a comprehensive range of services to ensure your birthday bash is a memorable event. From designing themed decorations that capture your personality to organizing engaging entertainment and coordinating delicious catering, we handle every aspect with creativity and care. Trust us to make your birthday party an extraordinary occasion that you and your guests will cherish.
                </p>
            </div>
            <div class="lg:w-1/2 lg:pr-12 mt-8 lg:mt-0 lg:order-first">
                <img class="w-full h-64 object-cover rounded-lg shadow-lg image-hover" src="{{ asset('images/bday.jpg') }}" alt="Birthday Parties">
            </div>
        </div>

        <!-- Office Events Section -->
        <div class="lg:flex lg:items-center lg:justify-between py-8 fade-in" data-aos="fade-up">
            <div class="lg:w-1/2">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Office Events</h2>
                <p class="mt-4 text-gray-600">
                    From corporate retreats to office parties, we organize professional and enjoyable events that foster team spirit and create lasting memories. Our expert team is skilled in planning and executing various office events, including team-building activities, client appreciation gatherings, and holiday parties. We handle all the details to ensure your event runs smoothly, allowing you to focus on what matters most: engaging with your team and clients.
                </p>
            </div>
            <div class="lg:w-1/2 lg:pl-12 mt-8 lg:mt-0">
                <img class="w-full h-64 object-cover rounded-lg shadow-lg image-hover" src="{{ asset('images/officeEvent.jpg') }}" alt="Office Events">
            </div>
        </div>

        <!-- Tea Party Section -->
        <div class="lg:flex lg:items-center lg:justify-between py-8 bg-gray-100 fade-in" data-aos="fade-up">
            <div class="lg:w-1/2 lg:order-last">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Tea Party</h2>
                <p class="mt-4 text-gray-600">
                    Step into a world of elegance and charm with our enchanting tea party experience. Perfect for celebrations, gatherings, or simply a delightful afternoon, our tea party offers a unique blend of exquisite teas, delectable treats, and a whimsical atmosphere.
                </p>
            </div>
            <div class="lg:w-1/2 lg:pr-12 mt-8 lg:mt-0 lg:order-first">
                <img class="w-full h-64 object-cover rounded-lg shadow-lg image-hover" src="{{ asset('images/TeaParty.jpeg') }}" alt="Baby Showers">
            </div>
        </div>

        <!-- Gender Reveals Section -->
        <div class="lg:flex lg:items-center lg:justify-between py-8 fade-in" data-aos="fade-up">
            <div class="lg:w-1/2">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Gender Reveals</h2>
                <p class="mt-4 text-gray-600">
                    Make the big reveal special with a perfectly planned gender reveal party. We offer creative and memorable ideas to reveal the gender of your baby, from themed decorations and unique reveal options to delightful refreshments. Our team will work with you to ensure the event is as exciting and heartwarming as the news itself, providing a truly memorable experience for you and your loved ones.
                </p>
            </div>
            <div class="lg:w-1/2 lg:pl-12 mt-8 lg:mt-0">
                <img class="w-full h-64 object-cover rounded-lg shadow-lg image-hover" src="{{ asset('images/genderReveal.jpeg') }}" alt="Gender Reveals">
            </div>
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
