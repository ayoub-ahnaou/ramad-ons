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
        <div class="mb-12 flex justify-between">
            <div class="">
                <h1 class="text-3xl font-bold mb-4">Communauté</h1>
                <p class="text-gray-600">Découvrez les meilleures recettes et astuces partagées par notre communauté.
                </p>
            </div>

            <a href="{{ route('publications.create') }}"
                class="flex items-center gap-1 bg-gray-50 h-full hover:bg-gray-100 px-4 py-2 rounded-full">
                <span class="text-sm text-gray-600">Partager Experience</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" stroke="gray" />
                    <path d="M12 8v8M8 12h8" stroke="gray" />
                </svg>
            </a>
        </div>

        <!-- Grid des Publications -->
        <div class="flex flex-col gap-6">
            <!-- Publication Card -->
            @foreach ($publications as $pub)
                <article class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow flex">
                    <a href="{{ route('publications.show', $pub->id) }}">
                        <img src="{{ asset('storage/' . $pub->image) }}" alt="Publication"
                            class="w-full h-36 object-cover">
                    </a>
                    <div class="px-4">
                        <div class="flex items-center pt-1 pb-2">
                            <img src="{{ URL('/assets/icons/user.svg') }}" alt="User"
                                class="w-10 h-10 rounded-full mr-3 object-cover">
                            <div>
                                <h4 class="font-semibold">Anonymos</h4>
                                <p class="text-sm text-gray-500"> {{ $pub->created_at->diffForHumans() }} </p>
                            </div>
                        </div>
                        <a href="{{ route('publications.show', 1) }}">
                            <h3 class="font-semibold text-xl mb-1">{{ $pub->title }}</h3>
                        </a>
                        <p class="text-gray-600 mb-1">{{ Str::limit($pub->content, 100, '...') }}</p>
                        <div class="flex items-center justify-between text-sm text-gray-500">
                            <div class="flex items-center space-x-4">
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </main>
</x-layout>
