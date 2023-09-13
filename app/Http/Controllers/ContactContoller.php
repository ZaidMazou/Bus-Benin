<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class ContactContoller extends Controller
{
    public function contact(){
        return view('home.contact');
    }
    public function store(Request $request) {
        $request->validate([
            "nom"=>["required","min:3"],
            "prenom"=>["required","min:3"],
            "email"=>["required","min:3","email"],
            "message"=>["required","min:5"],
        ]);
        Notification::create([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "email"=>$request->email,
            "message"=>$request->message,
        ]);
        return redirect('/');
    }
}
