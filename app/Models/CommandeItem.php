<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandeItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'commande_id', 'plat_id', 'quantite',
        'prix_unitaire', 'sous_total', 'notes'
    ];

    public function commande() { return $this->belongsTo(Commande::class); }
    public function plat() { return $this->belongsTo(Plat::class); }
}