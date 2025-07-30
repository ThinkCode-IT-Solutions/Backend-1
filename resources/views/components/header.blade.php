    <!-- Header -->
    <header class="bg-white shadow-sm py-4 px-6 md:px-12 fixed top-0 left-0 w-full z-50 rounded-b-lg">
        <nav class="container mx-auto flex justify-between items-center">
            <a href="{{ route("home") }}" class="text-3xl font-bold text-gray-900 tracking-tight">Laxour</a>
            <div class="hidden md:flex space-x-8">
                <a href="{{ route("shop") }}" class="text-gray-600 hover:text-indigo-600 font-medium transition-colors duration-300">Products</a>
                <a href="{{ route("product-detail") }}" class="text-gray-600 hover:text-indigo-600 font-medium transition-colors duration-300">Product Detail</a>
                <a href="{{ route("checkout") }}" class="text-gray-600 hover:text-indigo-600 font-medium transition-colors duration-300">Checkout</a>
                <a href="{{ route("thanks") }}" class="text-gray-600 hover:text-indigo-600 font-medium transition-colors duration-300">Thank you</a>
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
            <a href="#features" class="block text-gray-700 hover:text-indigo-600 font-medium py-2 px-4 rounded-md transition-colors duration-300">Features</a>
            <a href="#models" class="block text-gray-700 hover:text-indigo-600 font-medium py-2 px-4 rounded-md transition-colors duration-300">Models</a>
            <a href="#testimonials" class="block text-gray-700 hover:text-indigo-600 font-medium py-2 px-4 rounded-md transition-colors duration-300">Testimonials</a>
            <a href="#contact" class="block text-gray-700 hover:text-indigo-600 font-medium py-2 px-4 rounded-md transition-colors duration-300">Contact</a>
            <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
                Sign In
            </button>
        </div>
    </header>
