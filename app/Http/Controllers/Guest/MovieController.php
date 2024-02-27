<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//importo il model
use App\Models\Movie;


class MovieController extends Controller
{
    public function index(){
        //:: serve per estrapolare una funzione statica. intrisicamente legato alla classe e non alle singole instanze
        $movies = Movie::all(); 
        //estrapolo i dati dal database - all() equivale a select * form movies
        
        //posso provare a vedere se funziona usando :
        //dd($movies);   //dump and die 
        return view('movies.index', compact('movies'));
    }

    public function show($id){
        $movie = Movie::find($id); 
        //select * from movies where id = $id
        return view('movies.show', compact('movie'));
    }
}
