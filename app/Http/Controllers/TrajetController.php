<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrajetController extends Controller
{
    public function trajets(){

        return view('home.trajet-view');
    }
}
