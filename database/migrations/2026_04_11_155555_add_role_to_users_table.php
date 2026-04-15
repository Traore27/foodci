<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['client', 'restaurateur', 'livreur'])->default('client')->after('email');
            $table->string('telephone', 20)->nullable()->after('role');
            $table->string('adresse')->nullable()->after('telephone');
            $table->string('quartier')->nullable()->after('adresse');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'telephone', 'adresse', 'quartier']);
        });
    }
};