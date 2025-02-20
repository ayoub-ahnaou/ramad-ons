<x-layout>
    <main class="container mx-auto py-12 relative">
        @if (session('message'))
            <div id="toast"
                class="flex items-center gap-2 absolute top-4 right-0 pr-40 bg-green-100 text-green-700 rounded-md p-2">
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
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <img src="{{ URL('assets/icons/user.svg') }}" alt="Chef"
                                class="w-16 h-16 rounded-full object-cover">
                            <div class="ml-4">
                                <h3 class="font-semibold">Anonymos</h3>
                                <p class="text-gray-500 text-sm">
                                    {{ $publication->created_at->diffForHumans() }}</p>
                            </div>
                        </div>

                        <div class="relative">
                            <button class="p-1 hover:bg-gray-200 rounded-full focus:outline-none"
                                onclick="toggleDropdownPub(event)">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50"
                                id="dropdown-menu-pub">
                                <div class="py-1">
                                    <button
                                        class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        Éditer
                                    </button>
                                    <form action="{{ route('publications.destroy', $publication) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="flex items-center px-4 py-2 text-sm text-red-600 hover:bg-gray-100 w-full text-left">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                            Supprimer
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        function toggleDropdownPub(event) {
                            event.stopPropagation();
                            const dropdownPub = document.getElementById('dropdown-menu-pub');
                            dropdownPub.classList.toggle('hidden');

                            // Close dropdown when clicking outside
                            document.addEventListener('click', function closeDropdownPub(e) {
                                if (!dropdownPub.contains(e.target)) {
                                    dropdownPub.classList.add('hidden');
                                    document.removeEventListener('click', closeDropdown);
                                }
                            });
                        }
                    </script>

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
                                    <div class="flex items-center mb-4 justify-between">
                                        <div class="flex items-center">
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

                                        <!-- Menu dropdown -->
                                        <div class="relative">
                                            <button class="p-1 hover:bg-gray-200 rounded-full focus:outline-none"
                                                onclick="toggleDropdown(event)">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                </svg>
                                            </button>

                                            <!-- Dropdown menu -->
                                            <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50"
                                                id="dropdown-menu">
                                                <div class="py-1">
                                                    <button
                                                        class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                        </svg>
                                                        Éditer
                                                    </button>
                                                    <form action="{{ route('comments.destroy', $comment) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="flex items-center px-4 py-2 text-sm text-red-600 hover:bg-gray-100 w-full text-left">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="h-4 w-4 mr-2" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                            Supprimer
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 pr-64">{{ $comment->comment }}</p>
                                </div>
                            @endforeach
                            <!-- Répéter pour d'autres commentaires -->
                        </div>

                        <script>
                            function toggleDropdown(event) {
                                event.stopPropagation();
                                const dropdown = document.getElementById('dropdown-menu');
                                dropdown.classList.toggle('hidden');

                                // Close dropdown when clicking outside
                                document.addEventListener('click', function closeDropdown(e) {
                                    if (!dropdown.contains(e.target)) {
                                        dropdown.classList.add('hidden');
                                        document.removeEventListener('click', closeDropdown);
                                    }
                                });
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
