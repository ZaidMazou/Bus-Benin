<?php

namespace App\Models;

use App\Models\Compagnies;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfileCompagnie extends Model
{
    use HasFactory;

    public function compagnie() {
        return $this->belongsTo(Compagnies::class);
    }
}
