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
            .container {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                margin: 0 auto;
            }
            .card {
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin: 20px;
                width: 30%;
                overflow: hidden;
                text-align: center;
            }
            .card img {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }
            .card-content {
                padding: 15px;
            }
            .card h3 {
                margin: 10px 0;
                font-size: 1.5rem;
                color: #333;
            }
            .card p {
                color: #666;
                font-size: 0.9rem;
            }
            .menu-items {
                text-align: left;
                margin-top: 10px;
            }
            .menu-items li {
                list-style: none;
                margin: 5px 0;
            }
            .card .price {
                font-size: 1.2rem;
                font-weight: bold;
                color: darkgoldenrod;
                margin-top: 10px;
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




    <body>

    <section id="events-title" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center">
                <h1 class="text-5xl font-semibold text-gray-800 mb-4 italic">
                    Our Exclusive Menu Packages
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Take a look at our menu packages fit for every event, made just for you.
                </p>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Package 1: Classic Package -->
        <div class="card">
            <img src="{{ asset('images/classic.jpeg') }}" alt="Classic Package Image">
            <div class="card-content">
                <h3>Classic Package</h3>
                <p>A perfect blend of traditional and modern flavors.</p>
                <ul class="menu-items">
                    <li><strong>Appetizer:</strong> Caesar Salad</li>
                    <li><strong>Side Dishes:</strong> Roasted Vegetables, Mashed Potatoes</li>
                    <li><strong>Main:</strong> Grilled Chicken Breast with Herb Sauce</li>
                    <li><strong>Pastries:</strong> Butter Croissants</li>
                    <li><strong>Dessert:</strong> Classic Chocolate Cake</li>
                    <li><strong>Drinks:</strong> Red/White Wine, Lemonade</li>
                </ul>
                <div class="price">Rs.2000 per person</div>
            </div>
        </div>

        <!-- Package 2: Deluxe Package -->
        <div class="card">
            <img src="{{ asset('images/menu2.jpeg') }}" alt="Deluxe Package Image">
            <div class="card-content">
                <h3>Deluxe Package</h3>
                <p>For those who love a gourmet touch to their meals.</p>
                <ul class="menu-items">
                    <li><strong>Appetizer:</strong> Shrimp Cocktail</li>
                    <li><strong>Side Dishes:</strong> Truffle Mashed Potatoes, Grilled Asparagus</li>
                    <li><strong>Main:</strong> Filet Mignon with Red Wine Reduction</li>
                    <li><strong>Pastries:</strong> Assorted French Pastries (e.g., Éclairs, Macarons)</li>
                    <li><strong>Dessert:</strong> Tiramisu</li>
                    <li><strong>Drinks:</strong> Champagne, Sparkling Water</li>
                </ul>
                <div class="price">Rs.3500 per person</div>
            </div>
        </div>

        <!-- Package 3: Vegetarian Delight -->
        <div class="card">
            <img src="{{ asset('images/menu3.jpeg') }}" alt="Vegetarian Delight Image">
            <div class="card-content">
                <h3>Vegetarian Delight</h3>
                <p>A fully plant-based menu for a healthy feast.</p>
                <ul class="menu-items">
                    <li><strong>Appetizer:</strong> Hummus with Pita Bread</li>
                    <li><strong>Side Dishes:</strong> Quinoa Salad, Grilled Zucchini</li>
                    <li><strong>Main:</strong> Stuffed Bell Peppers with Rice and Lentils</li>
                    <li><strong>Pastries:</strong> Vegan Scones</li>
                    <li><strong>Dessert:</strong> Vegan Chocolate Mousse</li>
                    <li><strong>Drinks:</strong> Fresh Smoothies, Herbal Tea</li>
                </ul>
                <div class="price">Rs.1700 per person</div>
            </div>
        </div>

        <!-- Package 4: Seafood Extravaganza -->
        <div class="card">
            <img src="{{ asset('images/menu4.jpeg') }}" alt="Seafood Extravaganza Image">
            <div class="card-content">
                <h3>Seafood Extravaganza</h3>
                <p>Fresh seafood and exotic flavors from the ocean.</p>
                <ul class="menu-items">
                    <li><strong>Appetizer:</strong> Crab Cakes with Aioli</li>
                    <li><strong>Side Dishes:</strong> Garlic Butter Green Beans, Rice Pilaf</li>
                    <li><strong>Main:</strong> Lobster Tail with Lemon Butter</li>
                    <li><strong>Pastries:</strong> Cheddar Biscuits</li>
                    <li><strong>Dessert:</strong> Key Lime Pie</li>
                    <li><strong>Drinks:</strong> White Wine, Sparkling Water</li>
                </ul>
                <div class="price">Rs.3500 per person</div>
            </div>
        </div>

        <!-- Package 5: BBQ Feast -->
        <div class="card">
            <img src="{{ asset('images/menu5.jpeg') }}" alt="BBQ Feast Image">
            <div class="card-content">
                <h3>BBQ Feast</h3>
                <p>Grilled perfection with a variety of barbecue meats.</p>
                <ul class="menu-items">
                    <li><strong>Appetizer:</strong> BBQ Wings</li>
                    <li><strong>Side Dishes:</strong> Coleslaw, Corn on the Cob</li>
                    <li><strong>Main:</strong> Smoked Ribs with BBQ Sauce</li>
                    <li><strong>Pastries:</strong> Cornbread</li>
                    <li><strong>Dessert:</strong> Apple Pie</li>
                    <li><strong>Drinks:</strong> Iced Tea, Craft Beer</li>
                </ul>
                <div class="price">Rs.2100 per person</div>
            </div>
        </div>

        <!-- Package 6: Dessert Lover's Dream -->
        <div class="card">
            <img src="{{ asset('images/menu6.jpeg') }}" alt="Dessert Lover's Dream Image">
            <div class="card-content">
                <h3>Dessert Lover's Dream</h3>
                <p>A sweet treat for those with a love for desserts.</p>
                <ul class="menu-items">
                    <li><strong>Appetizer:</strong> Mini Cheesecakes</li>
                    <li><strong>Side Dishes:</strong> Fresh Fruit Salad, Chocolate Fondue</li>
                    <li><strong>Main:</strong> Pastry Tasting Platter (e.g., Tarts, Cannoli)</li>
                    <li><strong>Pastries:</strong> Assorted Cupcakes</li>
                    <li><strong>Dessert:</strong> Triple Chocolate Brownies</li>
                    <li><strong>Drinks:</strong> Hot Chocolate, Milkshakes</li>
                </ul>
                <div class="price">Rs.4500 per person</div>
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
