<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function showMovie(){

        // preleviamo tutti i film dalla tabella movies
        $movies = Movie::all();

        // dd($movies);
        
        return view('movie', compact('movies'));
    }

}
