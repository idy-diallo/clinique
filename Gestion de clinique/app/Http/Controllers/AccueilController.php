<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    
    public function about(){
        return view('accueil.about');
    }

    public function doctors(){
        return view('accueil.doctors');
    }

    public function blog(){
        return view('accueil.blog');
    }

    public function contact(){
        return view('accueil.contact');
    }

    public function index(){
        return view('accueil.index');
    }

}
