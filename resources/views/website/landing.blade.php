<x-layouts.main-layout>

    <main>
        <!-- Hero Section -->
        <section class="relative bg-gradient-to-br from-indigo-50 to-white pt-32 pb-20 overflow-hidden">
            <div class="container mx-auto px-6 md:px-12 flex flex-col lg:flex-row items-center justify-between">
                <div class="lg:w-1/2 text-center lg:text-left mb-10 lg:mb-0">
                    <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
                        Experience <span class="text-indigo-600">Luxury</span>, Redefined.
                    </h1>
                    <p class="text-lg md:text-xl text-gray-700 mb-8 max-w-lg mx-auto lg:mx-0">
                        Laxour brings the future of automotive shopping to your fingertips. Discover, customize, and
                        purchase your dream car, all from the comfort of your home.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                        <a href="#models"
                            class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                            Explore Models
                        </a>
                        <a href="#features"
                            class="bg-white border border-gray-300 text-gray-800 hover:bg-gray-50 font-bold py-3 px-8 rounded-full shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2 flex justify-center lg:justify-end">
                    <!-- Placeholder for a sleek car image -->
                    <img src="https://placehold.co/600x400/e0e7ff/4338ca?text=Laxour+Car" alt="Laxour Luxury Car"
                        class="w-full max-w-lg rounded-xl shadow-2xl transform hover:scale-105 transition-transform duration-500 ease-in-out">
                </div>
            </div>
            <!-- Abstract shapes for SaaS aesthetic -->
            <div
                class="absolute top-0 left-0 w-48 h-48 bg-indigo-200 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob">
            </div>
            <div
                class="absolute bottom-1/4 right-0 w-64 h-64 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000">
            </div>
            <div
                class="absolute top-1/2 left-1/4 w-32 h-32 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000">
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-20 bg-white">
            <div class="container mx-auto px-6 md:px-12 text-center">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose Laxour?</h2>
                <p class="text-xl text-gray-600 mb-16 max-w-3xl mx-auto">
                    We've reimagined the car buying experience, making it seamless, transparent, and enjoyable.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <!-- Feature 1 -->
                    <div
                        class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2">
                        <div class="text-indigo-600 mb-6 flex justify-center">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.001 12.001 0 002 12c0 2.757 1.125 5.228 2.93 7.072l-.793.793a1 1 0 001.414 1.414l.793-.793A12.001 12.001 0 0012 22c2.757 0 5.228-1.125 7.072-2.93l.793.793a1 1 0 001.414-1.414l-.793-.793A12.001 12.001 0 0022 12c0-2.757-1.125-5.228-2.93-7.072z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Seamless Online Ordering</h3>
                        <p class="text-gray-700">Browse our extensive catalog, compare models, and configure your
                            perfect car with just a few clicks. Our intuitive platform makes it effortless.</p>
                    </div>
                    <!-- Feature 2 -->
                    <div
                        class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2">
                        <div class="text-indigo-600 mb-6 flex justify-center">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.555-4.555A.5.5 0 0019 5h-4a.5.5 0 00-.5.5v4a.5.5 0 00.5.5zm-5 0l-4.555-4.555A.5.5 0 005 5h4a.5.5 0 00.5.5v4a.5.5 0 00-.5.5zm0 5l-4.555 4.555A.5.5 0 005 19h4a.5.5 0 00.5-.5v-4a.5.5 0 00-.5-.5zm5 0l4.555 4.555A.5.5 0 0019 19h-4a.5.5 0 00-.5-.5v-4a.5.5 0 00.5-.5z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Virtual Test Drives</h3>
                        <p class="text-gray-700">Experience your chosen model with immersive 360-degree views and
                            detailed virtual tours, giving you a real feel before you buy.</p>
                    </div>
                    <!-- Feature 3 -->
                    <div
                        class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2">
                        <div class="text-indigo-600 mb-6 flex justify-center">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Convenient Home Delivery</h3>
                        <p class="text-gray-700">Your new Laxour vehicle will be delivered directly to your doorstep,
                            fully prepared and ready for the road. Hassle-free and secure.</p>
                    </div>
                    <!-- Feature 4 -->
                    <div
                        class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2">
                        <div class="text-indigo-600 mb-6 flex justify-center">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Personalized Customization</h3>
                        <p class="text-gray-700">Tailor every detail of your Laxour car, from interior finishes to
                            performance upgrades, with our advanced online configurator.</p>
                    </div>
                    <!-- Feature 5 -->
                    <div
                        class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2">
                        <div class="text-indigo-600 mb-6 flex justify-center">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Transparent Pricing & Financing</h3>
                        <p class="text-gray-700">Get clear, upfront pricing with no hidden fees. Explore flexible
                            financing options designed to fit your budget, all online.</p>
                    </div>
                    <!-- Feature 6 -->
                    <div
                        class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2">
                        <div class="text-indigo-600 mb-6 flex justify-center">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18.364 5.636l-3.536 3.536m0 0A9.001 9.001 0 005.636 18.364M15 12a3 3 0 11-6 0 3 3 0 016 0zm6 0a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Dedicated Customer Support</h3>
                        <p class="text-gray-700">Our team is here to assist you every step of the way, from initial
                            inquiry to post-purchase support. Your satisfaction is our priority.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Models Section (Placeholder) -->
        <section id="models" class="py-20 bg-gradient-to-br from-white to-indigo-50">
            <div class="container mx-auto px-6 md:px-12 text-center">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Exquisite Models</h2>
                <p class="text-xl text-gray-600 mb-16 max-w-3xl mx-auto">
                    Discover the perfect Laxour vehicle designed to elevate your driving experience.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <!-- Model Card 1 -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <img src="https://placehold.co/400x250/d1d5db/374151?text=Laxour+Sedan" alt="Laxour Sedan"
                            class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-900 mb-2">Laxour Aura</h3>
                            <p class="text-gray-700 mb-4">The epitome of elegance and efficiency, perfect for the
                                modern urban explorer.</p>
                            <a href="#"
                                class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-5 rounded-full text-sm shadow-md transition-colors duration-300">
                                View Details
                            </a>
                        </div>
                    </div>
                    <!-- Model Card 2 -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <img src="https://placehold.co/400x250/d1d5db/374151?text=Laxour+SUV" alt="Laxour SUV"
                            class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-900 mb-2">Laxour Horizon</h3>
                            <p class="text-gray-700 mb-4">Unleash adventure with our versatile SUV, combining robust
                                performance with luxurious comfort.</p>
                            <a href="#"
                                class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-5 rounded-full text-sm shadow-md transition-colors duration-300">
                                View Details
                            </a>
                        </div>
                    </div>
                    <!-- Model Card 3 -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <img src="https://placehold.co/400x250/d1d5db/374151?text=Laxour+Sport" alt="Laxour Sport"
                            class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-900 mb-2">Laxour Velocity</h3>
                            <p class="text-gray-700 mb-4">Experience exhilarating power and precision engineering in
                                our high-performance sports model.</p>
                            <a href="#"
                                class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-5 rounded-full text-sm shadow-md transition-colors duration-300">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="py-20 bg-white">
            <div class="container mx-auto px-6 md:px-12 text-center">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">What Our Customers Say</h2>
                <p class="text-xl text-gray-600 mb-16 max-w-3xl mx-auto">
                    Hear from real Laxour owners who have experienced the future of car buying.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="bg-gray-50 p-8 rounded-xl shadow-lg flex flex-col items-center text-center">
                        <img src="https://placehold.co/80x80/cbd5e0/4a5568?text=JD" alt="Customer Avatar"
                            class="w-20 h-20 rounded-full mb-6 object-cover border-4 border-indigo-200">
                        <p class="text-lg text-gray-700 italic mb-6">"Buying my Laxour online was incredibly easy and
                            stress-free. The virtual test drive was a game-changer, and delivery was seamless!"</p>
                        <p class="font-semibold text-gray-900">- Jane Doe, New York</p>
                        <div class="flex mt-2">
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="bg-gray-50 p-8 rounded-xl shadow-lg flex flex-col items-center text-center">
                        <img src="https://placehold.co/80x80/cbd5e0/4a5568?text=AS" alt="Customer Avatar"
                            class="w-20 h-20 rounded-full mb-6 object-cover border-4 border-indigo-200">
                        <p class="text-lg text-gray-700 italic mb-6">"The customization options were fantastic, and the
                            customer support team was incredibly helpful throughout the entire process. Highly
                            recommend!"</p>
                        <p class="font-semibold text-gray-900">- Alex Smith, California</p>
                        <div class="flex mt-2">
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-gray-300">★</span>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="bg-gray-50 p-8 rounded-xl shadow-lg flex flex-col items-center text-center">
                        <img src="https://placehold.co/80x80/cbd5e0/4a5568?text=MC" alt="Customer Avatar"
                            class="w-20 h-20 rounded-full mb-6 object-cover border-4 border-indigo-200">
                        <p class="text-lg text-gray-700 italic mb-6">"I never thought buying a car online could be this
                            convenient. Laxour has truly set a new standard for automotive retail."</p>
                        <p class="font-semibold text-gray-900">- Maria Chen, Texas</p>
                        <div class="flex mt-2">
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="py-20 bg-indigo-600 text-white text-center rounded-t-xl">
            <div class="container mx-auto px-6 md:px-12">
                <h2 class="text-4xl font-bold mb-6">Ready to Drive Your Future?</h2>
                <p class="text-xl mb-10 max-w-2xl mx-auto">
                    Join the growing community of Laxour owners and experience the next generation of luxury vehicles.
                </p>
                <a href="#models"
                    class="bg-white text-indigo-600 hover:bg-gray-100 font-bold py-4 px-10 rounded-full shadow-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl text-lg">
                    Build Your Laxour Today
                </a>
            </div>
        </section>
    </main>

</x-layouts.main-layout>
