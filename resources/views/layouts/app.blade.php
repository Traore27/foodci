<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodCI - @yield('title', 'Livraison de nourriture en Côte d\'Ivoire')</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="/" class="flex items-center space-x-2">
                    <span class="text-2xl font-extrabold text-orange-500">Food</span>
                    <span class="text-2xl font-extrabold text-gray-800">CI</span>
                </a>

                <!-- Recherche -->
                <div class="hidden md:flex flex-1 max-w-lg mx-8">
                    <div class="relative w-full">
                        <input type="text" placeholder="Rechercher un restaurant ou un plat..."
                            class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-full text-sm focus:outline-none focus:border-orange-400">
                        <span class="absolute left-3 top-2.5 text-gray-400">🔍</span>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="/dashboard" class="text-sm text-gray-600 hover:text-orange-500">Mon compte</a>
                        <form method="POST" action="/logout">
                            @csrf
                            <button class="text-sm text-gray-600 hover:text-orange-500">Déconnexion</button>
                        </form>
                    @else
                        <a href="/login" class="text-sm text-gray-600 hover:text-orange-500">Connexion</a>
                        <a href="/register" class="bg-orange-500 text-white text-sm px-4 py-2 rounded-full hover:bg-orange-600">
                            S'inscrire
                        </a>
                    @endauth
                    <button class="relative">
                        <span class="text-2xl">🛒</span>
                        <span class="absolute -top-1 -right-1 bg-orange-500 text-white text-xs w-4 h-4 rounded-full flex items-center justify-center">0</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- CONTENU -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-gray-800 text-white mt-16 py-10">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-2xl font-extrabold mb-2">
                <span class="text-orange-500">Food</span>CI
            </p>
            <p class="text-gray-400 text-sm">La livraison de nourriture en Côte d'Ivoire 🇨🇮</p>
            <p class="text-gray-500 text-xs mt-4">© 2025 FoodCI. Tous droits réservés.</p>
        </div>
    </footer>

</body>
</html>