<x-layouts.main-layout>
    <main class="pt-28 pb-20">
        <section class="container mx-auto px-6 md:px-12">
            <div class="flex flex-col lg:flex-row gap-10 bg-white rounded-xl shadow-lg p-8">
                <!-- Car Image Gallery/Main Image -->
                <div class="lg:w-1/2">
                    <img src="https://placehold.co/800x500/e0e7ff/4338ca?text=Laxour+Aura+Front"
                        alt="Laxour Aura Front View" class="w-full h-auto rounded-lg shadow-md mb-4 object-cover">
                    <div class="grid grid-cols-4 gap-4">
                        <img src="https://placehold.co/200x120/e0e7ff/4338ca?text=Side" alt="Laxour Aura Side View"
                            class="w-full h-24 object-cover rounded-md cursor-pointer hover:opacity-80 transition-opacity duration-200">
                        <img src="https://placehold.co/200x120/e0e7ff/4338ca?text=Interior" alt="Laxour Aura Interior"
                            class="w-full h-24 object-cover rounded-md cursor-pointer hover:opacity-80 transition-opacity duration-200">
                        <img src="https://placehold.co/200x120/e0e7ff/4338ca?text=Rear" alt="Laxour Aura Rear View"
                            class="w-full h-24 object-cover rounded-md cursor-pointer hover:opacity-80 transition-opacity duration-200">
                        <img src="https://placehold.co/200x120/e0e7ff/4338ca?text=Dashboard" alt="Laxour Aura Dashboard"
                            class="w-full h-24 object-cover rounded-md cursor-pointer hover:opacity-80 transition-opacity duration-200">
                    </div>
                </div>

                <!-- Car Details and Actions -->
                <div class="lg:w-1/2">
                    <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Laxour Aura</h1>
                    <p class="text-xl text-gray-700 mb-6">The epitome of elegance and efficiency, designed for the
                        discerning urban driver.</p>

                    <div class="flex items-baseline mb-6">
                        <span class="text-indigo-600 font-bold text-4xl mr-3">$45,000</span>
                        <span class="text-gray-500 text-lg">MSRP</span>
                    </div>

                    <div class="flex items-center text-yellow-400 mb-6">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span class="text-gray-300">★</span>
                        <span class="text-gray-600 ml-2 text-sm">(4.5/5 based on 120 reviews)</span>
                    </div>

                    <p class="text-gray-800 leading-relaxed mb-8">
                        The Laxour Aura redefines urban mobility with its sophisticated design, advanced technology, and
                        eco-friendly performance. Engineered for a smooth and responsive drive, it offers unmatched
                        comfort and connectivity, making every journey a pleasure. Its compact yet spacious interior is
                        crafted with premium materials, ensuring a luxurious experience for both driver and passengers.
                    </p>

                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">Key Specifications</h2>
                    <ul class="list-disc list-inside text-gray-700 mb-8 space-y-2">
                        <li>Engine: 1.5L Turbocharged Hybrid</li>
                        <li>Horsepower: 200 HP</li>
                        <li>Fuel Economy: 45 MPG (Combined)</li>
                        <li>0-60 MPH: 7.2 seconds</li>
                        <li>Transmission: CVT Automatic</li>
                        <li>Seating Capacity: 5</li>
                    </ul>

                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">Features & Technology</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700 mb-8">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-indigo-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>12-inch Infotainment System</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-indigo-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Adaptive Cruise Control</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-indigo-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Lane Keeping Assist</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-indigo-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Premium Leather Interior</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-indigo-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Panoramic Sunroof</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-indigo-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>360-degree Camera System</span>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <button
                            class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                            Configure Your Aura
                        </button>
                        <button
                            class="flex-1 border border-gray-300 text-gray-800 hover:bg-gray-50 font-bold py-3 px-8 rounded-lg shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                            Request a Virtual Tour
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layouts.main-layout>
