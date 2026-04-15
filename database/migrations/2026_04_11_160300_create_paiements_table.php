<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commande_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('methode', [
                'wave',
                'orange_money',
                'mtn_momo',
                'especes'
            ]);
            $table->enum('statut', [
                'en_attente',
                'success',
                'echoue',
                'rembourse'
            ])->default('en_attente');
            $table->decimal('montant', 10, 2);
            $table->string('reference')->unique()->nullable();
            $table->string('telephone', 20)->nullable();
            $table->json('metadata')->nullable();
            $table->timestamp('paye_le')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};