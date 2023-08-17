<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FilmesController extends Controller
{

    public function exibirAdicionarFilme()
{
    return view('filmes.adfilme');
}

public function adicionarFilme(Request $request)
{
    $filme = $request->validate([
        'name' => 'required|string',
        'sinopse' => 'required|string|max:1000',
        'ano' => 'required|integer',
        'imagem' => 'required|string',
        'link' => 'required|string',
    ]);

    $createdFilme = Filme::create($filme);

    return redirect()->route('admin')->with('success', 'Filme criado com sucesso!');
}

    public function lista(){
        $filmes = Filme::all();
        return view('filmes.lista', compact('filmes'));
    }

    public function infofilme($id){
        $filme = Filme::findOrFail($id);
        return view('filmes.infofilme', compact('filme'));
    }

    public function deleteFilmes(){
        return view('filmes.apagarfilme');
    }

    public function adfilme(){
        return view('filmes.adfilme');
    }

    public function editFilmes(){

    }
}
