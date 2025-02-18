<x-layout>
    <main class="container mx-auto py-12">
        <!-- Header -->
        <div class="mb-12">
            <h1 class="text-3xl font-bold mb-4">Communauté</h1>
            <p class="text-gray-600">Découvrez les meilleures recettes et astuces partagées par notre communauté.</p>
        </div>

        <!-- Grid des Publications -->
        <div class="flex flex-col gap-6">
            <!-- Publication Card -->
            <article class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow flex">
                <a href="publication-detail.html">
                    <img src="https://searchengineland.com/wp-content/seloads/2014/08/photos-images-pictures-ss-1920.jpg"
                        alt="Publication" class="w-full h-36 object-cover">
                </a>
                <div class="px-4">
                    <div class="flex items-center pt-1 pb-2">
                        <img src="https://www.danspapers.com/wp-content/uploads/2020/11/Guestworthy-Amira-Gharib-copy.jpg"
                            alt="User" class="w-10 h-10 rounded-full mr-3 object-cover">
                        <div>
                            <h4 class="font-semibold">Sarah Ahmed</h4>
                            <p class="text-sm text-gray-500">Il y a 2 jours</p>
                        </div>
                    </div>
                    <a href="publication-detail.html">
                        <h3 class="font-semibold text-xl mb-1">Secrets pour des Samosas Croustillants</h3>
                    </a>
                    <p class="text-gray-600 mb-1">Découvrez mes astuces pour réussir des samosas parfaitement
                        croustillants à chaque fois...</p>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <div class="flex items-center space-x-4">
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </main>
</x-layout>
