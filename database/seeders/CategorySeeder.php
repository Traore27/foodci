<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['nom' => 'Ivoirien', 'icone' => '🍲', 'couleur' => '#FF6B35'],
            ['nom' => 'Grillades', 'icone' => '🔥', 'couleur' => '#E74C3C'],
            ['nom' => 'Fast Food', 'icone' => '🍔', 'couleur' => '#F39C12'],
            ['nom' => 'Pizza', 'icone' => '🍕', 'couleur' => '#E67E22'],
            ['nom' => 'Poulet', 'icone' => '🍗', 'couleur' => '#F1C40F'],
            ['nom' => 'Poisson', 'icone' => '🐟', 'couleur' => '#3498DB'],
            ['nom' => 'Boissons', 'icone' => '🥤', 'couleur' => '#2ECC71'],
            ['nom' => 'Desserts', 'icone' => '🍰', 'couleur' => '#9B59B6'],
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }
    }
}