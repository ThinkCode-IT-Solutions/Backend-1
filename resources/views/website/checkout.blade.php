<x-layouts.main-layout>


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
                            <input type="text" id="fullName" name="fullName"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200"
                                placeholder="John Doe">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email
                                Address</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200"
                                placeholder="john.doe@example.com">
                        </div>
                        <div class="md:col-span-2">
                            <label for="address" class="block text-gray-700 text-sm font-medium mb-2">Street
                                Address</label>
                            <input type="text" id="address" name="address"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200"
                                placeholder="123 Luxury Lane">
                        </div>
                        <div>
                            <label for="city" class="block text-gray-700 text-sm font-medium mb-2">City</label>
                            <input type="text" id="city" name="city"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200"
                                placeholder="Auto City">
                        </div>
                        <div>
                            <label for="state" class="block text-gray-700 text-sm font-medium mb-2">State /
                                Province</label>
                            <input type="text" id="state" name="state"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200"
                                placeholder="CA">
                        </div>
                        <div>
                            <label for="zip" class="block text-gray-700 text-sm font-medium mb-2">Zip / Postal
                                Code</label>
                            <input type="text" id="zip" name="zip"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200"
                                placeholder="90210">
                        </div>
                        <div>
                            <label for="country" class="block text-gray-700 text-sm font-medium mb-2">Country</label>
                            <select id="country" name="country"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200">
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
                            <input type="radio" id="creditCard" name="paymentMethod" value="creditCard"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" checked>
                            <label for="creditCard" class="ml-3 block text-gray-700 font-medium">Credit Card</label>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="cardNumber" class="block text-gray-700 text-sm font-medium mb-2">Card
                                    Number</label>
                                <input type="text" id="cardNumber" name="cardNumber"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200"
                                    placeholder="XXXX XXXX XXXX XXXX">
                            </div>
                            <div>
                                <label for="cardName" class="block text-gray-700 text-sm font-medium mb-2">Name on
                                    Card</label>
                                <input type="text" id="cardName" name="cardName"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200"
                                    placeholder="John Doe">
                            </div>
                            <div>
                                <label for="expiryDate" class="block text-gray-700 text-sm font-medium mb-2">Expiry Date
                                    (MM/YY)</label>
                                <input type="text" id="expiryDate" name="expiryDate"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200"
                                    placeholder="12/25">
                            </div>
                            <div>
                                <label for="cvv" class="block text-gray-700 text-sm font-medium mb-2">CVV</label>
                                <input type="text" id="cvv" name="cvv"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200"
                                    placeholder="XXX">
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center mb-4">
                        <input type="radio" id="paypal" name="paymentMethod" value="paypal"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="paypal" class="ml-3 block text-gray-700 font-medium">PayPal</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="bankTransfer" name="paymentMethod" value="bankTransfer"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="bankTransfer" class="ml-3 block text-gray-700 font-medium">Bank Transfer</label>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="lg:w-1/3 bg-white rounded-xl shadow-lg p-8 h-fit sticky top-28">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6">Order Summary</h2>
                    <div class="flex items-center mb-6 border-b pb-4 border-gray-200">
                        <img src="https://placehold.co/100x60/e0e7ff/4338ca?text=Laxour+Aura" alt="Laxour Aura"
                            class="w-24 h-auto rounded-md mr-4">
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
                        <div
                            class="flex justify-between font-bold text-lg text-gray-900 border-t pt-3 mt-3 border-gray-200">
                            <span>Total:</span>
                            <span>$49,140.00</span>
                        </div>
                    </div>

                    <button
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg shadow-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                        Place Order
                    </button>
                    <p class="text-center text-gray-500 text-sm mt-4">By placing your order, you agree to our <a
                            href="#" class="text-indigo-600 hover:underline">Terms and Conditions</a>.</p>
                </div>
            </div>
        </section>
    </main>
</x-layouts.main-layout>
