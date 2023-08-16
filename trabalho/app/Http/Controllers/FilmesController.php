<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FilmesController extends Controller
{
    public function lista(){
        $filmes = Filme::all();
        return view('filmes.lista', compact('filmes'));
    }

    public function infofilme($id){
        $filme = Filme::findOrFail($id);
        return view('filmes.infofilme', compact('filme'));
    }

    public function createFilmes(){
        return view('filmes.addfilme');
    }

    public function deleteFilmes(){
        return view('filmes.apagarfilme');
    }

    public function editFilmes(){

    }
}
