<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ramad-on</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex flex-col justify-between min-h-screen">
        <nav class="h-8 w-full bg-gray-100 px-8 text-gray-600">
            <div class="container mx-auto flex justify-between h-full items-center">
                <div class="flex items-center gap-1">
                    <img src="{{ URL('/assets/icons/img.svg') }}" class="size-5" alt="">
                    <span class="font-medium">ramad-on</span>
                </div>

                <ul class="text-sm flex items-center h-full">
                    <li class="flex items-center gap-1 hover:bg-gray-200 h-full px-4 cursor-pointer">
                        {{-- <img src="{{URL('/assets/icons/profile.svg')}}" class="size-5" alt=""> --}}
                        <span class="font-medium">Home</span>
                    </li>
                    <li class="flex items-center gap-1 hover:bg-gray-200 h-full px-4 cursor-pointer">
                        <!-- <img src="./imgs/profile.svg" class="size-5" alt=""> -->
                        <span class="font-medium">Recipes</span>
                    </li>
                    <li class="flex items-center gap-1 hover:bg-gray-200 h-full px-4 cursor-pointer">
                        <!-- <img src="./imgs/profile.svg" class="size-5" alt=""> -->
                        <span class="font-medium">Publications</span>
                    </li>
                    <li class="flex items-center gap-1 hover:bg-gray-200 h-full px-2 cursor-pointer">
                        <img src="{{ URL('/assets/icons/profile.svg') }}" class="size-5" alt="">
                        <!-- <span class="font-medium">Login</span> -->
                    </li>
                    <li class="flex items-center gap-1 hover:bg-gray-200 h-full px-2 cursor-pointer">
                        <img src="{{ URL('/assets/icons/logout.svg') }}" class="size-5" alt="">
                    </li>
                </ul>
            </div>
        </nav>

        <div class="flex-grow w-full">
            {{ $slot }}
        </div>

        <footer class="bg-gray-50 text-gray-600 py-16">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                    <div>
                        <div class="flex items-center space-x-2 mb-6">
                            <img src="{{URL('/assets/icons/img.svg')}}" alt="Ramad-on logo" class="h-8 w-8">
                            <span class="text-xl font-semibold">ramad-on</span>
                        </div>
                        <p class="text-gray-400">Connecter les communautés à travers le partage des recettes
                            traditionnelles du Ramadan.</p>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-4">Liens Rapides</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="#" class="hover:text-white">À Propos</a></li>
                            <li><a href="#" class="hover:text-white">Contact</a></li>
                            <li><a href="#" class="hover:text-white">Conditions d'Utilisation</a></li>
                            <li><a href="#" class="hover:text-white">Politique de Confidentialité</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-4">Catégories</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="#" class="hover:text-white">Recettes Iftar</a></li>
                            <li><a href="#" class="hover:text-white">Recettes Suhoor</a></li>
                            <li><a href="#" class="hover:text-white">Desserts</a></li>
                            <li><a href="#" class="hover:text-white">Boissons</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-4">Newsletter</h4>
                        <p class="text-gray-400 mb-4">Abonnez-vous pour recevoir les dernières recettes et mises à jour.
                        </p>
                        <form class="flex">
                            <input type="email" placeholder="Votre email"
                                class="px-4 py-2 rounded-l-lg w-full text-gray-900">
                            <button class="bg-gray-600 px-4 py-2 rounded-r-lg hover:bg-gray-700 text-white">
                                S'abonner
                            </button>
                        </form>
                    </div>
                </div>

                <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                    <p>&copy; 2025 Ramad-on. Tous droits réservés.</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
