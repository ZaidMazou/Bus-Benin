<?php

namespace App\Models;

use App\Models\User;
use App\Models\Trajet;
use App\Models\Compagnies;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function compagnie()  {
        return $this->belongsTo(Compagnies::class);
    }

    public function trajet() {
        return $this->belongsTo(Trajet::class);
    }
}
