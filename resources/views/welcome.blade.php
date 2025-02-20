<x-layout>
    <div class="">
        <section class="bg-gradient-to-r from-orange-100 to-amber-50 py-20">
            <div class="container mx-auto">
                <div class="max-w-2xl">
                    <h1 class="text-4xl font-bold mb-6">
                        Célébrez le Ramadan avec des Recettes Authentiques
                    </h1>
                    <p class="text-xl text-gray-600 mb-8">
                        Découvrez des plats traditionnels, partagez vos favoris et connectez-vous avec la communauté
                        pendant ce mois béni.
                    </p>
                    <a href="recipes.html"
                        class="inline-block bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700">
                        Explorer les Recettes
                    </a>
                </div>
            </div>
        </section>

        <!-- Popular Recipes Section -->
        <section class="py-16">
            <div class="container mx-auto">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-2xl font-semibold">Recettes Populaires</h2>
                    <a href="recipes.html" class="text-gray-600 flex items-center hover:text-gray-700">
                        Voir Tout
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ($topThreeRecipes as $recipe)
                        <a href="{{ route('recipes.show', $recipe->id) }}" class="block">
                            <div class="rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                                <img src="{{ asset('storage/' . $recipe->image)}}"
                                    alt="Recipe" class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h3 class="font-semibold text-lg mb-2">{{ $recipe->title }}</h3>
                                    <p class="text-gray-600 text-sm mb-4">
                                        {{ Str::limit($recipe->description, 50, '...') }}</p>
                                    <div class="flex items-center text-sm text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor">
                                            <circle cx="12" cy="12" r="10" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6v6l4 2" />
                                        </svg>
                                        <span>{{ $recipe->time->diff(now())->format('%h hours %i min') }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    <!-- Répéter pour autres recettes -->
                </div>
            </div>
        </section>

        <!-- Latest Publications -->
        <section class="bg-gray-50 py-16">
            <div class="container mx-auto">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-2xl font-semibold">Dernières Publications</h2>
                    <a href="publications.html" class="text-gray-600 flex items-center hover:text-gray-700">
                        Voir Tout
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <div class="flex flex-col gap-6">
                    <!-- Publication Card -->
                    @foreach ($topThreePublications as $pub)
                        <article
                            class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow flex">
                            <a href="{{ route('publications.show', $pub->id) }}">
                                <img src="{{ asset('storage/' . $pub->image)}}"
                                    alt="Publication" class="w-full h-36 object-cover">
                            </a>
                            <div class="px-4">
                                <div class="flex items-center pt-1 pb-2">
                                    <img src="{{ URL('/assets/icons/user.svg') }}"
                                        alt="User" class="w-10 h-10 rounded-full mr-3 object-cover">
                                    <div>
                                        <h4 class="font-semibold">Anonymos</h4>
                                        <p class="text-sm text-gray-500">{{ $pub->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                                <a href="{{ route('publications.show', $pub->id) }}">
                                    <h3 class="font-semibold text-xl mb-1">{{ $pub->title }}</h3>
                                </a>
                                <p class="text-gray-600 mb-1">{{ Str::limit($pub->title, 50, '...') }}</p>
                                <div class="flex items-center justify-between text-sm text-gray-500">
                                    <div class="flex items-center space-x-4">
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
    <div class="bg-white h-12 border-y"></div>
</x-layout>
