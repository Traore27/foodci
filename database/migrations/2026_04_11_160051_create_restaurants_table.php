<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('categorie_id')->constrained('categories')->onDelete('cascade');
            $table->string('nom');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('telephone', 20);
            $table->string('adresse');
            $table->string('quartier');
            $table->string('ville')->default('Abidjan');
            $table->string('logo')->nullable();
            $table->string('image_couverture')->nullable();
            $table->decimal('note_moyenne', 3, 2)->default(0);
            $table->integer('temps_livraison_min')->default(20);
            $table->integer('temps_livraison_max')->default(45);
            $table->decimal('frais_livraison', 10, 2)->default(500);
            $table->decimal('commande_minimum', 10, 2)->default(1000);
            $table->boolean('actif')->default(true);
            $table->boolean('ouvert')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};