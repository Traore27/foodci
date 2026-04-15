<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('restaurant_id')->constrained()->onDelete('cascade');
            $table->string('numero')->unique();
            $table->enum('statut', [
                'en_attente',
                'confirmee',
                'en_preparation',
                'prete',
                'en_livraison',
                'livree',
                'annulee'
            ])->default('en_attente');
            $table->decimal('sous_total', 10, 2);
            $table->decimal('frais_livraison', 10, 2)->default(500);
            $table->decimal('total', 10, 2);
            $table->string('adresse_livraison');
            $table->string('quartier_livraison');
            $table->string('telephone_livraison', 20);
            $table->text('instructions')->nullable();
            $table->timestamp('confirme_le')->nullable();
            $table->timestamp('livre_le')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};