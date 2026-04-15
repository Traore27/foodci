<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'commande_id', 'user_id', 'methode', 'statut',
        'montant', 'reference', 'telephone', 'metadata', 'paye_le'
    ];

    protected $casts = [
        'metadata' => 'array',
        'paye_le' => 'datetime'
    ];

    public function commande() { return $this->belongsTo(Commande::class); }
    public function user() { return $this->belongsTo(User::class); }
}