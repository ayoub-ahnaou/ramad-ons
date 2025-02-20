<x-layout>
    <main class="container mx-auto py-12 relative">
        @if (session('message'))
            <div id="toast"
                class="flex items-center gap-2 absolute top-0 right-0 pr-40 bg-green-100 text-green-700 rounded-md p-2">
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

        <div class="w-full">
            <!-- Contenu Principal -->
            <div class="">
                <!-- En-tête de l'article -->
                <div class="mb-8">
                    <div class="flex items-center mb-4">
                        <img src="{{ URL('assets/icons/user.svg') }}" alt="Chef"
                            class="w-16 h-16 rounded-full object-cover">
                        <div class="ml-4">
                            <h3 class="font-semibold">Anonymos</h3>
                            <p class="text-gray-500 text-sm">
                                {{ $publication->created_at->diffForHumans() }}</p>
                        </div>
                    </div>

                    <h1 class="text-3xl font-bold mb-4">{{ $publication->title }}</h1>

                    <img src="{{ asset('storage/' . $publication->image) }}" alt="Samosas"
                        class="w-full h-96 object-cover rounded-xl mb-8">
                </div>

                <!-- Contenu de l'article -->
                <div class="prose max-w-none mb-12">
                    <p>{{ $publication->content }} </p>
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
                                <span>({{ count($comments) }}) Commentaires</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Section Commentaires -->
                <div>
                    <!-- Formulaire de commentaire -->
                    <div class="mb-8">
                        <div class="flex items-start space-x-4">
                            <img src="{{ URL('assets/icons/user.svg') }}" alt="Votre avatar"
                                class="w-10 h-10 rounded-full object-cover">
                            <form class="flex-grow" action="{{ route('comments.store') }}" method="post">
                                @csrf
                                <textarea name="comment" class="w-full p-4 border rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500"
                                    placeholder="Ajouter un commentaire..." rows="3"></textarea>
                                <input type="hidden" value="{{ $publication->id }}" name="publication_id">
                                <button type="submit"
                                    class="mt-2 px-6 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">
                                    Commenter
                                </button>
                            </form>
                        </div>
                    </div>

                    <hr>

                    <!-- Liste des commentaires -->
                    <div>
                        <div class="space-y-6 mt-6 flex flex-col">
                            @foreach ($comments as $comment)
                                <div class="border-b p-2 bg-gray-50 rounded-lg">
                                    <div class="flex items-center mb-4">
                                        <img src="{{ URL('assets/icons/user.svg') }}" alt="User"
                                            class="w-10 h-10 rounded-full object-cover">
                                        <div class="ml-4">
                                            <h4 class="font-semibold">Anonymos</h4>
                                            <div class="flex items-center">
                                                <span
                                                    class="text-gray-500 text-sm">{{ $comment->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 pr-64">{{ $comment->comment }}</p>
                                </div>
                            @endforeach
                            <!-- Répéter pour d'autres commentaires -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
