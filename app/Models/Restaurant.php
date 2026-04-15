<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'categorie_id', 'nom', 'slug', 'description',
        'telephone', 'adresse', 'quartier', 'ville', 'logo',
        'image_couverture', 'note_moyenne', 'temps_livraison_min',
        'temps_livraison_max', 'frais_livraison', 'commande_minimum',
        'actif', 'ouvert'
    ];

    public function user() { return $this->belongsTo(User::class); }
    public function categorie() { return $this->belongsTo(Category::class, 'categorie_id'); }
    public function plats() { return $this->hasMany(Plat::class); }
    public function commandes() { return $this->hasMany(Commande::class); }
}