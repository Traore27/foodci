<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'icone', 'couleur', 'active'];

    public function restaurants() { return $this->hasMany(Restaurant::class, 'categorie_id'); }
}