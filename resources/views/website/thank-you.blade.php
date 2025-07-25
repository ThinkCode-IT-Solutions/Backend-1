<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Laxour Order!</title>
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
        <section class="container mx-auto px-6 md:px-12 text-center">
            <div class="bg-white rounded-xl shadow-lg p-8 md:p-12 max-w-4xl mx-auto">
                <div class="text-indigo-600 mb-6 flex justify-center">
                    <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-4">
                    Thank You for Your Order!
                </h1>
                <p class="text-xl text-gray-700 mb-8">
                    Your Laxour purchase is confirmed. We're excited for you to experience the future of driving.
                </p>

                <div class="bg-gray-50 rounded-lg p-6 mb-8 text-left">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">Order Details</h2>
                    <p class="text-lg text-gray-700 mb-2"><strong>Order ID:</strong> <span class="text-indigo-600 font-medium">#LX-2023-56789</span></p>
                    <p class="text-lg text-gray-700 mb-4"><strong>Date:</strong> July 23, 2025</p>

                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Your Product:</h3>
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/100x60/e0e7ff/4338ca?text=Laxour+Aura" alt="Laxour Aura" class="w-24 h-auto rounded-md mr-4">
                        <div>
                            <p class="font-medium text-gray-900 text-lg">Laxour Aura</p>
                            <p class="text-gray-600 text-sm">Base Model, White Exterior, Black Interior</p>
                            <p class="text-indigo-600 font-bold text-lg">$49,140.00</p>
                        </div>
                    </div>

                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Delivery Information:</h3>
                    <p class="text-gray-700 mb-2"><strong>Estimated Delivery:</strong> Within 7-10 business days.</p>
                    <p class="text-gray-700 mb-2">You will receive a separate email with tracking information once your vehicle has been dispatched.</p>
                    <p class="text-gray-700">Please ensure someone is available at the delivery address to receive and sign for the vehicle.</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 text-left">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">Important Information</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li><strong>Vehicle Registration:</strong> Our team will contact you within 2 business days to assist with the registration process in your state.</li>
                        <li><strong>Warranty:</strong> Your Laxour vehicle comes with a comprehensive 3-year/36,000-mile limited warranty. Details will be provided in your owner's manual.</li>
                        <li><strong>Returns & Exchanges:</strong> You have 14 days from the delivery date to initiate a return or exchange, subject to our <a href="#" class="text-indigo-600 hover:underline">Return Policy</a>. Vehicle must be in original condition with no more than 500 miles driven.</li>
                        <li><strong>Support:</strong> For any questions regarding your order or vehicle, please contact our dedicated support team at <a href="mailto:support@laxour.com" class="text-indigo-600 hover:underline">support@laxour.com</a> or call us at +1 (800) 123-4567.</li>
                        <li><strong>Owner's Manual:</strong> A digital copy of your owner's manual will be sent to your email address. A physical copy will be included with your vehicle.</li>
                    </ul>
                </div>

                <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
                    <a href="shop.html" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                        Continue Shopping
                    </a>
                    <a href="index.html#contact" class="bg-white border border-gray-300 text-gray-800 hover:bg-gray-50 font-bold py-3 px-8 rounded-full shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                        Contact Support
                    </a>
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
