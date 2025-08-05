<x-layouts.main-layout>
    {{-- @dd($cars) --}}
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


                @if ($cars->isNotEmpty())

                    @foreach ($cars as $item)
                        <!-- Car Card 1: Laxour Aura -->
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                            <img src="{{ $item->image }}" alt="Laxour Aura Sedan" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-2xl font-semibold text-gray-900 mb-2">{{ $item->name }}</h3>
                                <p class="text-gray-700 text-sm mb-4 line-clamp-3">A sleek and efficient sedan, perfect
                                    for
                                    urban commutes and stylish excursions. Combines cutting-edge technology with refined
                                    comfort.</p>
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-indigo-600 font-bold text-xl">${{ $item->price }}</span>
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
                        @empty
                        no data to show

                        
                    @endforeach
                @else
                    <div
                        class="flex items-center justify-center h-full p-4 text-center text-gray-500 bg-gray-100 rounded-lg dark:bg-gray-800 dark:text-gray-400">
                        <div class="flex flex-col items-center justify-center space-y-4">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 13h6m-3-3v6m5 5a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <p class="text-xl font-semibold">No data to display</p>
                            <p>We couldn't find any data matching your criteria. Please try again with different filters
                                or a broader search.</p>
                        </div>
                    </div>

                @endif

            </div>
        </section>
    </main>
</x-layouts.main-layout>
