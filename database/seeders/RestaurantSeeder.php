<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\User;
use App\Models\Plat;

class RestaurantSeeder extends Seeder
{
    public function run(): void
    {
        // Créer un utilisateur restaurateur
        $user = User::create([
            'name' => 'Kouassi Jean',
            'email' => 'restaurant@foodci.ci',
            'password' => bcrypt('password'),
            'role' => 'restaurateur',
            'telephone' => '0709080706',
            'quartier' => 'Cocody',
        ]);

        $restaurant = Restaurant::create([
            'user_id' => $user->id,
            'categorie_id' => 1,
            'nom' => 'Maquis Chez Tantine',
            'slug' => 'maquis-chez-tantine',
            'description' => 'Cuisine ivoirienne authentique, spécialités de foutou et sauce graine.',
            'telephone' => '0708090605',
            'adresse' => 'Rue des Jardins, Cocody',
            'quartier' => 'Cocody',
            'ville' => 'Abidjan',
            'note_moyenne' => 4.5,
            'temps_livraison_min' => 20,
            'temps_livraison_max' => 40,
            'frais_livraison' => 500,
            'commande_minimum' => 2000,
            'actif' => true,
            'ouvert' => true,
        ]);

        // Créer des plats
        $plats = [
            ['nom' => 'Foutou Banane + Sauce Graine', 'prix' => 2500, 'populaire' => true],
            ['nom' => 'Riz Gras au Poulet', 'prix' => 2000, 'populaire' => true],
            ['nom' => 'Attiéké Poisson Braisé', 'prix' => 2500, 'populaire' => false],
            ['nom' => 'Kedjenou de Poulet', 'prix' => 3000, 'populaire' => true],
            ['nom' => 'Soupe Kpédé', 'prix' => 1500, 'populaire' => false],
        ];

        foreach ($plats as $plat) {
            Plat::create([
                'restaurant_id' => $restaurant->id,
                'nom' => $plat['nom'],
                'prix' => $plat['prix'],
                'populaire' => $plat['populaire'],
                'disponible' => true,
                'temps_preparation' => 15,
            ]);
        }
    }
}