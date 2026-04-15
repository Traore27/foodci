@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

    <!-- HERO -->
    <div class="bg-gradient-to-r from-orange-500 to-orange-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
                Commandez vos plats préférés 🍽️
            </h1>
            <p class="text-orange-100 text-lg mb-8">
                Livraison rapide depuis les meilleurs restaurants d'Abidjan
            </p>
            <div class="max-w-xl mx-auto flex gap-2">
                <input type="text" placeholder="Votre quartier (ex: Cocody, Yopougon...)"
                    class="flex-1 px-4 py-3 rounded-full text-gray-800 focus:outline-none">
                <button class="bg-gray-800 text-white px-6 py-3 rounded-full font-semibold hover:bg-gray-900">
                    Rechercher
                </button>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 py-10">

        <!-- CATEGORIES -->
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Nos catégories</h2>
        <div class="grid grid-cols-4 md:grid-cols-8 gap-4 mb-12">
            @foreach($categories as $categorie)
            <div class="flex flex-col items-center p-3 bg-white rounded-xl shadow-sm hover:shadow-md cursor-pointer transition">
                <span class="text-3xl mb-1">{{ $categorie->icone }}</span>
                <span class="text-xs font-medium text-gray-600">{{ $categorie->nom }}</span>
            </div>
            @endforeach
        </div>

        <!-- RESTAURANTS -->
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Restaurants populaires</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($restaurants as $restaurant)
            <a href="/restaurant/{{ $restaurant->slug }}" class="bg-white rounded-2xl shadow-sm hover:shadow-md transition overflow-hidden">
                <!-- Image -->
                <div class="h-48 bg-gradient-to-br from-orange-100 to-orange-200 flex items-center justify-center">
                    <span class="text-6xl">🍽️</span>
                </div>
                <!-- Infos -->
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800 text-lg">{{ $restaurant->nom }}</h3>
                        <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">
                            {{ $restaurant->ouvert ? 'Ouvert' : 'Fermé' }}
                        </span>
                    </div>
                    <p class="text-gray-500 text-sm mb-3">{{ $restaurant->description }}</p>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span>⭐ {{ $restaurant->note_moyenne }}</span>
                        <span>🕐 {{ $restaurant->temps_livraison_min }}-{{ $restaurant->temps_livraison_max }} min</span>
                        <span>🚚 {{ number_format($restaurant->frais_livraison, 0, ',', ' ') }} FCFA</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

    </div>

@endsection