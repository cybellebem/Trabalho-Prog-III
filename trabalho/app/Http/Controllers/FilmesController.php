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

    public function adfilme(Request $request){
        if ($request->isMethod('POST')) {
            $filme = $request->validate([
                'name' => 'required|string',
                'sinopse' => 'required|string|max:1000',
                'ano' => 'required|integer',
                'imagem' => 'required|image',
                'link' => 'required|string',
            ]);
            if ($request->hasFile('imagem')) {
                $imagemPath = $request->file('imagem')->store('storage/app/public', 'public');
                $filme['imagem'] = $imagemPath;
            }
            
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
