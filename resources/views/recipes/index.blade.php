<x-layout>
    <main class="container mx-auto py-12">
        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-3xl font-bold mb-1">Recipes</h1>
            <p class="text-gray-600 mb-2">Découvrez les meilleures recettes et astuces partagées par notre communauté.</p>
        </div>

        <!-- Grid des Publications -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($recipes as $recipe)
                <article class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <a href="{{ route('recipes.show', $recipe->id) }}">
                        <img src="https://www.realsimple.com/thmb/2ixrIIlE-44L1MypGHIs2TqIQYk=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/vegetarian-recipes-1672e2b4f9104ed3b3867a2a14889ce9.jpg"
                            alt="Publication" class="w-full h-64 object-cover">
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
