<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class HomeController extends Controller
{
    //Funzione

    public function index(){

        $movies = Movie::all();
        return view('home', compact('movies'));
    }

}
