<x-layout>
    <div>
        <main class="container mx-auto py-12">
            <div class="">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <img src="{{ asset('storage/' . $recipe->image) }}" alt="Chorba"
                        class="w-full h-96 object-cover rounded-xl mb-8">

                    <div class="mb-8">
                        <div class="flex items-center mb-4">
                            <img src="{{ URL('assets/icons/user.svg') }}" alt="Chef"
                                class="w-16 h-16 rounded-full object-cover">
                            <div class="ml-4">
                                <h3 class="font-semibold">Anonymos</h3>
                                <p class="text-gray-500 text-sm">{{ $recipe->created_at->diffForHumans() }}</p>
                            </div>
                        </div>

                        <h1 class="text-3xl font-bold mb-4">{{ $recipe->title }}</h1>
                        <p class="text-gray-600 mb-6">{{ $recipe->description }}</p>

                        <div class="flex items-center space-x-6 text-sm text-gray-500">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor">
                                    <circle cx="12" cy="12" r="10" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6l4 2" />
                                </svg>
                                <span>{{ $recipe->time->format('G') }} hours and {{ $recipe->time->format('i') }}
                                    minutes</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span>{{ $recipe->persons }} personnes</span>
                            </div>
                            <div class="flex items-center">
                                <span>{{ $recipe->category }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Ingredients Section -->
                    <div class="mb-12">
                        <h2 class="text-2xl font-semibold mb-6">Ingrédients</h2>
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <p>{{ $recipe->ingredients }}</p>
                        </div>
                    </div>

                    <hr class="mb-6">
                </div>
            </div>
        </main>
    </div>
</x-layout>
