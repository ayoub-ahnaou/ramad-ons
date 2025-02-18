<x-layout>
    <main class="container mx-auto py-12">
        <div class="w-full">
            <!-- Contenu Principal -->
            <div class="">
                <!-- En-tête de l'article -->
                <div class="mb-8">
                    <div class="flex items-center mb-4">
                        <img src="https://www.danspapers.com/wp-content/uploads/2020/11/Guestworthy-Amira-Gharib-copy.jpg"
                            alt="Chef" class="w-16 h-16 rounded-full object-cover">
                        <div class="ml-4">
                            <h3 class="font-semibold">Chef Amira</h3>
                            <p class="text-gray-500 text-sm">23 min ago</p>
                        </div>
                    </div>

                    <h1 class="text-3xl font-bold mb-4">Secrets pour des Samosas Croustillants</h1>

                    <img src="https://searchengineland.com/wp-content/seloads/2014/08/photos-images-pictures-ss-1920.jpg"
                        alt="Samosas" class="w-full h-96 object-cover rounded-xl mb-8">
                </div>

                <!-- Contenu de l'article -->
                <div class="prose max-w-none mb-12">
                    <p class="text-gray-600 mb-6">
                        Après des années de préparation de samosas pour le Ramadan, j'ai appris quelques secrets
                        essentiels
                        pour obtenir cette texture parfaitement croustillante que nous recherchons tous...
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita atque neque quis. Eos corrupti
                        laudantium ex quisquam veritatis, quidem rem ipsa optio doloribus repellat ducimus voluptatum
                        excepturi facilis praesentium nisi?
                        Dignissimos, iste tempora, optio provident error ducimus saepe architecto recusandae totam
                        earum, dolorem nisi corrupti commodi quas veritatis harum ex reiciendis. Voluptates delectus
                        adipisci doloremque, vel dolorem sunt eaque amet.
                        Impedit temporibus optio quaerat voluptatum eum magni fuga nemo quis laborum voluptas corrupti,
                        neque, tenetur maxime minima vitae recusandae saepe odio! Facere minus adipisci cumque magni,
                        quam impedit dolores tempora.
                        Molestias amet illo omnis eligendi. Iusto officiis magnam eius atque nostrum sed, beatae
                        impedit. Culpa nostrum hic eos velit placeat praesentium quos, suscipit labore accusamus ex,
                        maiores error quidem quas?</p>
                </div>

                <!-- Section Interactions -->
                <div class="border-t border-b py-6 mb-8">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-6">
                            <button class="flex items-center space-x-2 text-gray-600 hover:text-gray-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                                <span>24 Commentaires</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Section Commentaires -->
                <div>
                    <h2 class="text-2xl font-semibold mb-6">Commentaires (24)</h2>

                    <!-- Formulaire de commentaire -->
                    <div class="mb-8">
                        <div class="flex items-start space-x-4">
                            <img src="https://www.danspapers.com/wp-content/uploads/2020/11/Guestworthy-Amira-Gharib-copy.jpg"
                                alt="Votre avatar" class="w-10 h-10 rounded-full object-cover">
                            <div class="flex-grow">
                                <textarea class="w-full p-4 border rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500"
                                    placeholder="Ajouter un commentaire..." rows="3"></textarea>
                                <button class="mt-2 px-6 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">
                                    Commenter
                                </button>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!-- Liste des commentaires -->
                    <div>
                        <div class="space-y-6 mt-6">
                            <div class="border-b pb-6">
                                <div class="flex items-center mb-4">
                                    <img src="https://www.hli.org/wp-content/uploads/2017/10/statue-our-lady-of-fatima-e1573008965153.jpg.webp"
                                        alt="User" class="w-10 h-10 rounded-full object-cover">
                                    <div class="ml-4">
                                        <h4 class="font-semibold">Fatima K.</h4>
                                        <div class="flex items-center">
                                            <span class="text-gray-500 text-sm">Il y a 3 jours</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-gray-600 pr-64">Excellente recette ! Je l'ai préparée hier pour l'iftar
                                    et
                                    toute
                                    la famille a adoré. Les proportions sont parfaites.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat hic sequi commodi
                                    nesciunt delectus nam quam beatae doloremque corrupti, sint debitis suscipit, porro,
                                    inventore accusantium odio itaque aliquam adipisci architecto!Deleniti, unde
                                    corrupti ipsa voluptate aliquam explicabo alias in, expedita vitae itaque saepe quos
                                    totam iusto aliquid. Autem, totam cupiditate aspernatur, quaerat eos perspiciatis
                                    nemo ab libero, minima earum animi.</p>
                            </div>
                            <!-- Répéter pour d'autres commentaires -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
