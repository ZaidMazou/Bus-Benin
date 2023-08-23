<?php

namespace App\Http\Controllers;

use App\Models\Compagnies;
use Illuminate\Http\Request;

class CompagnieController extends Controller
{
    public function compagnies() {
        $compagnies = Compagnies::all();
       
        return view('home.compagnie-view',['compagnies'=>$compagnies]);
    }

    public function compagnie( int $id) {
        $compagnie = Compagnies::findOrfail($id);
        return view('home.compagnie',['compagnie'=>$compagnie]);
    }
}
