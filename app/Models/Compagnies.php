<?php

namespace App\Models;

use App\Models\User;
use App\Models\Trajet;
use App\Models\Reservation;
use App\Models\ProfileCompagnie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compagnies extends Model
{
    use HasFactory;

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }

    public function couverture() {
        return $this->belongsToMany(Trajet::class,'compagnie_trajet','iDcompagnie','iDtrajet');
    }

    public function visite() {
        return $this->belongsToMany(User::class,'compagnie_user','iDcompagnie','iduser');
    }

    public function siege() {
        return $this->belongsToMany(Ville::class,'compagnie_ville','iDcompagnie','iDville');
    }

    public function profiles() {
        return $this->hasMany(ProfileCompagnie::class);
    }
    
}
