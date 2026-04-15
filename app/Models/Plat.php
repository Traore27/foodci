<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id', 'nom', 'description', 'prix',
        'image', 'disponible', 'populaire', 'temps_preparation'
    ];

    public function restaurant() { return $this->belongsTo(Restaurant::class); }
    public function commandeItems() { return $this->hasMany(CommandeItem::class); }
}