<x-layout>
    <main class="container mx-auto py-12">
        @if (session('message'))
            <div id="toast"
                class="flex items-center gap-2 absolute top-12 right-0 pr-40 bg-green-100 text-green-700 rounded-md p-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" stroke="green" />
                    <path d="M9 12l2 2 4-4" stroke="green" />
                </svg>
                {{ session('message') }}
            </div>
        @endif
        <script>
            setTimeout(() => {
                document.getElementById("toast").style.display = "none";
            }, 2000);
        </script>

        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-3xl font-bold mb-1">Recipes</h1>
            <p class="text-gray-600 mb-2">Découvrez les meilleures recettes et astuces partagées par notre communauté.
            </p>
        </div>

        <div class="mb-8 flex justify-between">
            <div class="flex flex-wrap gap-4 text-xs">
                <button class="px-4 py-2 bg-gray-600 text-white rounded-full">Tous</button>
                <button class="px-4 py-2 bg-gray-50 border text-gray-600 rounded-full hover:bg-gray-100">Entree</button>
                <button
                    class="px-4 py-2 bg-gray-50 border text-gray-600 rounded-full hover:bg-gray-100">Principale</button>
                <button class="px-4 py-2 bg-gray-50 border text-gray-600 rounded-full hover:bg-gray-100">Desert</button>
            </div>

            <a href="{{ route('recipes.create') }}"
                class="flex items-center gap-1 bg-gray-50 hover:bg-gray-100 px-4 rounded-full">
                <span class="text-xs text-gray-600">Ajouter recette</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" stroke="gray" />
                    <path d="M12 8v8M8 12h8" stroke="gray" />
                </svg>
            </a>
        </div>

        <!-- Grid des Publications -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($recipes as $recipe)
                <article class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <a href="{{ route('recipes.show', $recipe->id) }}">
                        <img src="{{ asset('storage/' . $recipe->image) }}" alt="Publication"
                            class="w-full h-64 object-cover">
                    </a>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="{{ URL('assets/icons/user.svg') }}" alt="User"
                                class="w-10 h-10 rounded-full mr-3 object-cover">
                            <div>
                                <h4 class="font-semibold">Anonymos</h4>
                                <p class="text-sm text-gray-500">{{ $recipe->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                        <a href="{{ route('recipes.show', $recipe->id) }}">
                            <h3 class="font-semibold text-xl mb-3">{{ $recipe->title }}</h3>
                        </a>
                        <p class="text-gray-600 mb-2">{{ $recipe->description }}</p>
                    </div>
                </article>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class=" space-x-2 mt-12 text-xs">
            {{ $recipes->links() }}
        </div>
    </main>
</x-layout>
