<x-layout>
    <main class="container mx-auto py-12">
        <!-- Header -->
        <div class="mb-12">
            <h1 class="text-3xl font-bold mb-4">Recipes</h1>
            <p class="text-gray-600">Découvrez les meilleures recettes et astuces partagées par notre communauté.</p>
        </div>

        <!-- Grid des Publications -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Publication Card -->
            <article class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                <a href="publication-detail.html">
                    <img src="https://www.realsimple.com/thmb/2ixrIIlE-44L1MypGHIs2TqIQYk=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/vegetarian-recipes-1672e2b4f9104ed3b3867a2a14889ce9.jpg"
                        alt="Publication" class="w-full h-64 object-cover">
                </a>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <img src="https://www.danspapers.com/wp-content/uploads/2020/11/Guestworthy-Amira-Gharib-copy.jpg"
                            alt="User" class="w-10 h-10 rounded-full mr-3 object-cover">
                        <div>
                            <h4 class="font-semibold">Sarah Ahmed</h4>
                            <p class="text-sm text-gray-500">Il y a 2 jours</p>
                        </div>
                    </div>
                    <a href="publication-detail.html">
                        <h3 class="font-semibold text-xl mb-3">Secrets pour des Samosas Croustillants</h3>
                    </a>
                    <p class="text-gray-600 mb-2">Découvrez mes astuces pour réussir des samosas parfaitement
                        croustillants à chaque fois...</p>
                </div>
            </article>
            <!-- Répéter pour autres publications -->
        </div>

        <!-- Pagination -->
        <div class="flex justify-center space-x-2 mt-12 text-xs">
            <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">Précédent</button>
            <button class="px-4 py-2 bg-gray-600 text-white rounded-lg">1</button>
            <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">2</button>
            <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">3</button>
            <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">Suivant</button>
        </div>
    </main>
</x-layout>
