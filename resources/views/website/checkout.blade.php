<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laxour - Secure Checkout</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Light background */
            color: #1a202c; /* Dark text for contrast */
        }
        /* Custom scrollbar for a cleaner look */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e0;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #a0aec0;
        }
    </style>
</head>
<body class="antialiased">

    <!-- Header (consistent with other pages) -->
    <header class="bg-white shadow-sm py-4 px-6 md:px-12 fixed top-0 left-0 w-full z-50 rounded-b-lg">
        <nav class="container mx-auto flex justify-between items-center">
            <a href="index.html" class="text-3xl font-bold text-gray-900 tracking-tight">Laxour</a>
            <div class="hidden md:flex space-x-8">
                <a href="index.html#features" class="text-gray-600 hover:text-indigo-600 font-medium transition-colors duration-300">Features</a>
                <a href="shop.html" class="text-gray-600 hover:text-indigo-600 font-medium transition-colors duration-300">Models</a>
                <a href="index.html#testimonials" class="text-gray-600 hover:text-indigo-600 font-medium transition-colors duration-300">Testimonials</a>
                <a href="index.html#contact" class="text-gray-600 hover:text-indigo-600 font-medium transition-colors duration-300">Contact</a>
            </div>
            <div class="hidden md:block">
                <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
                    Sign In
                </button>
            </div>
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-gray-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </nav>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 space-y-2">
            <a href="index.html#features" class="block text-gray-700 hover:text-indigo-600 font-medium py-2 px-4 rounded-md transition-colors duration-300">Features</a>
            <a href="shop.html" class="block text-gray-700 hover:text-indigo-600 font-medium py-2 px-4 rounded-md transition-colors duration-300">Models</a>
            <a href="index.html#testimonials" class="block text-gray-700 hover:text-indigo-600 font-medium py-2 px-4 rounded-md transition-colors duration-300">Testimonials</a>
            <a href="index.html#contact" class="block text-gray-700 hover:text-indigo-600 font-medium py-2 px-4 rounded-md transition-colors duration-300">Contact</a>
            <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
                Sign In
            </button>
        </div>
    </header>

    <main class="pt-28 pb-20 bg-gradient-to-br from-indigo-50 to-white">
        <section class="container mx-auto px-6 md:px-12">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 text-center mb-10">
                Secure <span class="text-indigo-600">Checkout</span>
            </h1>

            <div class="flex flex-col lg:flex-row gap-10">
                <!-- Shipping & Payment Information -->
                <div class="lg:w-2/3 bg-white rounded-xl shadow-lg p-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6">1. Shipping Information</h2>
                    <form class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                        <div>
                            <label for="fullName" class="block text-gray-700 text-sm font-medium mb-2">Full Name</label>
                            <input type="text" id="fullName" name="fullName" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200" placeholder="John Doe">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200" placeholder="john.doe@example.com">
                        </div>
                        <div class="md:col-span-2">
                            <label for="address" class="block text-gray-700 text-sm font-medium mb-2">Street Address</label>
                            <input type="text" id="address" name="address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200" placeholder="123 Luxury Lane">
                        </div>
                        <div>
                            <label for="city" class="block text-gray-700 text-sm font-medium mb-2">City</label>
                            <input type="text" id="city" name="city" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200" placeholder="Auto City">
                        </div>
                        <div>
                            <label for="state" class="block text-gray-700 text-sm font-medium mb-2">State / Province</label>
                            <input type="text" id="state" name="state" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200" placeholder="CA">
                        </div>
                        <div>
                            <label for="zip" class="block text-gray-700 text-sm font-medium mb-2">Zip / Postal Code</label>
                            <input type="text" id="zip" name="zip" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200" placeholder="90210">
                        </div>
                        <div>
                            <label for="country" class="block text-gray-700 text-sm font-medium mb-2">Country</label>
                            <select id="country" name="country" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200">
                                <option value="">Select Country</option>
                                <option value="USA">United States</option>
                                <option value="CAN">Canada</option>
                                <option value="MEX">Mexico</option>
                                <!-- Add more countries as needed -->
                            </select>
                        </div>
                    </form>

                    <h2 class="text-2xl font-semibold text-gray-900 mb-6">2. Payment Information</h2>
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <input type="radio" id="creditCard" name="paymentMethod" value="creditCard" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" checked>
                            <label for="creditCard" class="ml-3 block text-gray-700 font-medium">Credit Card</label>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="cardNumber" class="block text-gray-700 text-sm font-medium mb-2">Card Number</label>
                                <input type="text" id="cardNumber" name="cardNumber" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200" placeholder="XXXX XXXX XXXX XXXX">
                            </div>
                            <div>
                                <label for="cardName" class="block text-gray-700 text-sm font-medium mb-2">Name on Card</label>
                                <input type="text" id="cardName" name="cardName" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200" placeholder="John Doe">
                            </div>
                            <div>
                                <label for="expiryDate" class="block text-gray-700 text-sm font-medium mb-2">Expiry Date (MM/YY)</label>
                                <input type="text" id="expiryDate" name="expiryDate" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200" placeholder="12/25">
                            </div>
                            <div>
                                <label for="cvv" class="block text-gray-700 text-sm font-medium mb-2">CVV</label>
                                <input type="text" id="cvv" name="cvv" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200" placeholder="XXX">
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center mb-4">
                        <input type="radio" id="paypal" name="paymentMethod" value="paypal" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="paypal" class="ml-3 block text-gray-700 font-medium">PayPal</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="bankTransfer" name="paymentMethod" value="bankTransfer" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="bankTransfer" class="ml-3 block text-gray-700 font-medium">Bank Transfer</label>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="lg:w-1/3 bg-white rounded-xl shadow-lg p-8 h-fit sticky top-28">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6">Order Summary</h2>
                    <div class="flex items-center mb-6 border-b pb-4 border-gray-200">
                        <img src="https://placehold.co/100x60/e0e7ff/4338ca?text=Laxour+Aura" alt="Laxour Aura" class="w-24 h-auto rounded-md mr-4">
                        <div>
                            <h3 class="font-medium text-gray-900 text-lg">Laxour Aura</h3>
                            <p class="text-gray-600 text-sm">Base Model</p>
                            <p class="text-indigo-600 font-bold text-lg">$45,000.00</p>
                        </div>
                    </div>

                    <div class="space-y-3 text-gray-700 mb-6">
                        <div class="flex justify-between">
                            <span>Subtotal:</span>
                            <span>$45,000.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Delivery Fee:</span>
                            <span>$500.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Tax (8%):</span>
                            <span>$3,640.00</span>
                        </div>
                        <div class="flex justify-between font-bold text-lg text-gray-900 border-t pt-3 mt-3 border-gray-200">
                            <span>Total:</span>
                            <span>$49,140.00</span>
                        </div>
                    </div>

                    <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg shadow-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                        Place Order
                    </button>
                    <p class="text-center text-gray-500 text-sm mt-4">By placing your order, you agree to our <a href="#" class="text-indigo-600 hover:underline">Terms and Conditions</a>.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer (consistent with other pages) -->
    <footer id="contact" class="bg-gray-900 text-gray-300 py-12 px-6 md:px-12 rounded-t-lg">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
            <div>
                <h3 class="text-2xl font-bold text-white mb-4">Laxour</h3>
                <p class="text-gray-400">Redefining automotive luxury, online.</p>
                <div class="flex space-x-4 mt-6">
                    <!-- Social Media Icons (placeholders) -->
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33V22H12c5.523 0 10-4.477 10-10z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.488 2.5H11.512C9.445 2.5 7.927 4.018 7.927 6.086v4.928H4.5V12h3.427v7.414c0 2.068 1.518 3.586 3.586 3.586h.976c2.068 0 3.586-1.518 3.586-3.586V12h3.427v-1.014h-3.427V6.086C15.073 4.018 13.555 2.5 12.488 2.5zM12 10.986c-.552 0-1-.448-1-1s.448-1 1-1 1 .448 1 1-.448 1-1 1z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.921a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.4 10.707v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.844" /></svg>
                    </a>
                </div>
            </div>
            <div>
                <h3 class="text-xl font-semibold text-white mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="index.html#features" class="text-gray-400 hover:text-white transition-colors duration-300">Features</a></li>
                    <li><a href="shop.html" class="text-gray-400 hover:text-white transition-colors duration-300">Models</a></li>
                    <li><a href="index.html#testimonials" class="text-gray-400 hover:text-white transition-colors duration-300">Testimonials</a></li>
                    <li><a href="index.html#contact" class="text-gray-400 hover:text-white transition-colors duration-300">Contact Us</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Privacy Policy</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-semibold text-white mb-4">Contact Us</h3>
                <p class="text-gray-400 mb-2">Email: info@laxour.com</p>
                <p class="text-gray-400 mb-2">Phone: +1 (800) 123-4567</p>
                <p class="text-gray-400">Address: 123 Luxury Lane, Auto City, CA 90210</p>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-10 pt-8 text-center text-gray-500">
            &copy; 2023 Laxour. All rights reserved.
        </div>
    </footer>

    <script>
        // JavaScript for smooth scrolling and mobile menu toggle
        document.addEventListener('DOMContentLoaded', () => {
            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Check if the link is on the current page or needs to navigate
                    const targetId = this.getAttribute('href').substring(1);
                    if (targetId && document.getElementById(targetId)) {
                        document.querySelector(this.getAttribute('href')).scrollIntoView({
                            behavior: 'smooth'
                        });
                    } else {
                        // If it's an external link (e.g., to landing page sections or shop page)
                        window.location.href = this.getAttribute('href');
                    }

                    // Close mobile menu after clicking a link
                    if (mobileMenu.classList.contains('block')) {
                        mobileMenu.classList.remove('block');
                        mobileMenu.classList.add('hidden');
                    }
                });
            });

            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.toggle('block');
            });
        });
    </script>
</body>
</html>
