<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactContoller extends Controller
{
    public function contact(){
        return view('home.contact');
    }
}
