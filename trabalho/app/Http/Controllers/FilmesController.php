<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FilmesController extends Controller
{
    public function lista(){
        return view('filmes.lista');
    }

    public function infofilmes(){
        return view('filmes.infofilme');
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
