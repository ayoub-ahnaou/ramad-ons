<x-layout>
    <div class="max-w-4xl mx-auto px-4 py-8 my-12 shadow bg-white">
        {{-- <h1 class="text-2xl font-bold text-gray-900 mb-8">Ajouter une nouvelle recette</h1> --}}

        <form class="bg-white space-y-6" action="{{route('recipes.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">
                    Titre de la recette
                </label>
                <input type="text" id="title" name="title"
                    class="w-full bg-gray-50 text-gray-700 p-1 px-2 rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500"
                    placeholder="Entrez le titre de la recette" />
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">
                    Description
                </label>
                <textarea id="description" rows="4" name="description"
                    class="w-full bg-gray-50 text-gray-700 p-1 px-2 rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500"
                    placeholder="Décrivez votre recette"></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="time" class="block text-sm font-medium text-gray-700 mb-1">
                        Temps de préparation
                    </label>
                    <input type="time" id="time" name="time"
                        class="w-full bg-gray-50 text-gray-700 p-1 px-2 rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500" />
                </div>
                <div>
                    <label for="persons" class="block text-sm font-medium text-gray-700 mb-1">
                        Nombre de personnes
                    </label>
                    <input type="number" id="persons" min="1" name="persons"
                        class="w-full bg-gray-50 text-gray-700 p-1 px-2 rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500"
                        placeholder="4" />
                </div>
            </div>

            <div>
                <label for="ingredients" class="block text-sm font-medium text-gray-700 mb-1">
                    Ingrédients
                </label>
                <textarea id="ingredients" rows="4" name="ingredients"
                    class="w-full rounded-md bg-gray-50 text-gray-700 p-1 px-2 border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500"
                    placeholder="Listez les ingrédients nécessaires"></textarea>
            </div>

            <div>
                <label for="category" class="block text-sm font-medium text-gray-700 mb-1">
                    Catégorie
                </label>
                <select id="category" name="category"
                    class="w-full bg-gray-50 text-gray-700 p-1 px-2 rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500">
                    <option value="">Sélectionnez une catégorie</option>
                    <option value="Entree">Entree</option>
                    <option value="Principale">Principale</option>
                    <option value="Desert">Desert</option>
                </select>
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">
                    Image de la recette
                </label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                            viewBox="0 0 48 48">
                            <path
                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                strokeWidth={2} strokeLinecap="round" strokeLinejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                            <label for="file-upload"
                                class="relative cursor-pointer bg-white rounded-md font-medium text-gray-600 hover:text-gray-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-gray-500">
                                <span>Télécharger une photo</span>
                                <input id="file-upload" type="file" name="image" class="sr-only" accept="image/*" />
                            </label>
                            <p class="pl-1">ou glisser-déposer</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG jusqu'à 10MB</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-end space-x-4 pt-4">
                <button type="button"
                    class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                    Annuler
                </button>
                <button type="submit"
                    class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-600 hover:bg-gray-700">
                    Enregistrer la recette
                </button>
            </div>
        </form>
    </div>
</x-layout>
