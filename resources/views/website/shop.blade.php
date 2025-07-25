<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laxour - Our Collection</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            /* Light background */
            color: #1a202c;
            /* Dark text for contrast */
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

    <!-- Header (consistent with landing page) -->
    <header class="bg-white shadow-sm py-4 px-6 md:px-12 fixed top-0 left-0 w-full z-50 rounded-b-lg">
        <nav class="container mx-auto flex justify-between items-center">
            <a href="index.html" class="text-3xl font-bold text-gray-900 tracking-tight">Laxour</a>
            <div class="hidden md:flex space-x-8">
                <a href="index.html#features"
                    class="text-gray-600 hover:text-indigo-600 font-medium transition-colors duration-300">Features</a>
                <a href="#" class="text-indigo-600 font-medium transition-colors duration-300">Models</a>
                <!-- Active link for this page -->
                <a href="index.html#testimonials"
                    class="text-gray-600 hover:text-indigo-600 font-medium transition-colors duration-300">Testimonials</a>
                <a href="index.html#contact"
                    class="text-gray-600 hover:text-indigo-600 font-medium transition-colors duration-300">Contact</a>
            </div>
            <div class="hidden md:block">
                <button
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
                    Sign In
                </button>
            </div>
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-gray-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </nav>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 space-y-2">
            <a href="index.html#features"
                class="block text-gray-700 hover:text-indigo-600 font-medium py-2 px-4 rounded-md transition-colors duration-300">Features</a>
            <a href="#"
                class="block text-indigo-600 font-medium py-2 px-4 rounded-md transition-colors duration-300">Models</a>
            <a href="index.html#testimonials"
                class="block text-gray-700 hover:text-indigo-600 font-medium py-2 px-4 rounded-md transition-colors duration-300">Testimonials</a>
            <a href="index.html#contact"
                class="block text-gray-700 hover:text-indigo-600 font-medium py-2 px-4 rounded-md transition-colors duration-300">Contact</a>
            <button
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
                Sign In
            </button>
        </div>
    </header>

    <main class="pt-28 pb-20">
        <section class="container mx-auto px-6 md:px-12 text-center">
            <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
                Our <span class="text-indigo-600">Exclusive</span> Collection
            </h1>
            <p class="text-lg md:text-xl text-gray-700 mb-16 max-w-3xl mx-auto">
                Discover the full range of Laxour vehicles, each crafted with unparalleled precision and designed for
                the ultimate driving pleasure.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">



                @foreach ($cars as $item)
                    <!-- Car Card 1: Laxour Aura -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <img src="{{ $item->image }}" alt="Laxour Aura Sedan"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-900 mb-2">{{ $item->name }}</h3>
                            <p class="text-gray-700 text-sm mb-4 line-clamp-3">A sleek and efficient sedan, perfect for
                                urban commutes and stylish excursions. Combines cutting-edge technology with refined
                                comfort.</p>
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-indigo-600 font-bold text-xl">$ {{ $item->price }}</span>
                                <div class="flex text-yellow-400">
                                    {{ $item->model }}({{ $item->make }})
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-3">
                                <button
                                    class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition-all duration-300">
                                    View Details
                                </button>
                                <button
                                    class="flex-1 border border-gray-300 text-gray-800 hover:bg-gray-50 font-semibold py-2 px-4 rounded-lg shadow-md transition-all duration-300">
                                    Configure
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach




            </div>
        </section>
    </main>

    <!-- Footer (consistent with landing page) -->
    <footer id="contact" class="bg-gray-900 text-gray-300 py-12 px-6 md:px-12 rounded-t-lg">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
            <div>
                <h3 class="text-2xl font-bold text-white mb-4">Laxour</h3>
                <p class="text-gray-400">Redefining automotive luxury, online.</p>
                <div class="flex space-x-4 mt-6">
                    <!-- Social Media Icons (placeholders) -->
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33V22H12c5.523 0 10-4.477 10-10z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.488 2.5H11.512C9.445 2.5 7.927 4.018 7.927 6.086v4.928H4.5V12h3.427v7.414c0 2.068 1.518 3.586 3.586 3.586h.976c2.068 0 3.586-1.518 3.586-3.586V12h3.427v-1.014h-3.427V6.086C15.073 4.018 13.555 2.5 12.488 2.5zM12 10.986c-.552 0-1-.448-1-1s.448-1 1-1 1 .448 1 1-.448 1-1 1z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.921a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.4 10.707v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.844" />
                        </svg>
                    </a>
                </div>
            </div>
            <div>
                <h3 class="text-xl font-semibold text-white mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="index.html#features"
                            class="text-gray-400 hover:text-white transition-colors duration-300">Features</a></li>
                    <li><a href="#"
                            class="text-gray-400 hover:text-white transition-colors duration-300">Models</a></li>
                    <li><a href="index.html#testimonials"
                            class="text-gray-400 hover:text-white transition-colors duration-300">Testimonials</a></li>
                    <li><a href="index.html#contact"
                            class="text-gray-400 hover:text-white transition-colors duration-300">Contact Us</a></li>
                    <li><a href="#"
                            class="text-gray-400 hover:text-white transition-colors duration-300">Privacy Policy</a>
                    </li>
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
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Check if the link is on the current page or needs to navigate
                    const targetId = this.getAttribute('href').substring(1);
                    if (targetId && document.getElementById(targetId)) {
                        document.querySelector(this.getAttribute('href')).scrollIntoView({
                            behavior: 'smooth'
                        });
                    } else {
                        // If it's an external link (e.g., to landing page sections)
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
