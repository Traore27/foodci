<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'restaurant_id', 'numero', 'statut',
        'sous_total', 'frais_livraison', 'total',
        'adresse_livraison', 'quartier_livraison',
        'telephone_livraison', 'instructions',
        'confirme_le', 'livre_le'
    ];

    protected $casts = [
        'confirme_le' => 'datetime',
        'livre_le' => 'datetime'
    ];

    public function user() { return $this->belongsTo(User::class); }
    public function restaurant() { return $this->belongsTo(Restaurant::class); }
    public function items() { return $this->hasMany(CommandeItem::class); }
    public function livraison() { return $this->hasOne(Livraison::class); }
    public function paiement() { return $this->hasOne(Paiement::class); }
}