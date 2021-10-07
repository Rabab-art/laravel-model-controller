<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class HomeController extends Controller
{
    //Funzione

    public function index(){

        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

}
