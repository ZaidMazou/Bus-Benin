<?php

namespace App\Models;

use App\Models\Ville;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trajet extends Model
{
    use HasFactory;

    public function depart() {
        return $this->hasOne(Ville::class);
    }

    public function arrivee() {
        return $this->hasOne(Ville::class);
    }

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }
}
