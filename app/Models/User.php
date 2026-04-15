<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role', 'telephone', 'adresse', 'quartier'
    ];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = ['email_verified_at' => 'datetime', 'password' => 'hashed'];

    public function restaurant() { return $this->hasOne(Restaurant::class); }
    public function commandes() { return $this->hasMany(Commande::class); }
    public function livraisons() { return $this->hasMany(Livraison::class); }

    public function isClient() { return $this->role === 'client'; }
    public function isRestaurateur() { return $this->role === 'restaurateur'; }
    public function isLivreur() { return $this->role === 'livreur'; }
}