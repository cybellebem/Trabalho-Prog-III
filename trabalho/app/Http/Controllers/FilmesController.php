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

    public function adfilme(Request $request){
        if ($request->isMethod('POST')) {
            $filme = $request->validate([
                'name' => 'required|string',
                'sinopse' => 'required|string|max:1000',
                'ano' => 'required|integer',
                'imagem' => 'required|string',
                'link' => 'required|string',
            ]);
    
            dd($filme);
    
            $createdFilme = Filme::create($filme);
    
            dd($createdFilme);
    
            return redirect()->route('admin')->with('success', 'Filme criado com sucesso!');
        }
    
        return view('filmes.adfilme');
    }

    public function deleteFilmes(){
        return view('filmes.apagarfilme');
    }

    public function editFilmes(){

    }
}
