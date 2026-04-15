<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;

    protected $fillable = [
        'commande_id', 'user_id', 'statut',
        'latitude', 'longitude',
        'pris_en_charge_le', 'livre_le'
    ];

    protected $casts = [
        'pris_en_charge_le' => 'datetime',
        'livre_le' => 'datetime'
    ];

    public function commande() { return $this->belongsTo(Commande::class); }
    public function livreur() { return $this->belongsTo(User::class, 'user_id'); }
}