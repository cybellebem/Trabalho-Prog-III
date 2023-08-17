<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Genero;

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
    public function admin()
    {
        $filmes = Filme::all();
        return view('filmes.admin', compact('filmes'));
    }

    public function lista(){
        $filmes = Filme::all();
        return view('filmes.lista', compact('filmes'));
    }

    public function infofilme($id){
        $filme = Filme::findOrFail($id);
        return view('filmes.infofilme', compact('filme'));
    }

    public function apagarfilme($id){
        $filme = Filme::find($id);

        if (!$filme) {
            return redirect()->back()->with('error', 'Filme não encontrado');
        }

        // Excluir o filme
        $filme->delete();

        return redirect()->back()->with('success', 'Filme excluído com sucesso');    }

    public function adfilme(){
        return view('filmes.adfilme');
    }

    public function adcategoria(){
        return view('filmes.adcategoria');
    }

    public function adicionarCategoria(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:genero,name',
        ]);
    
        Genero::create([
            'name' => $request->name,
        ]);
    
        return redirect()->route('adcategoria')->with('success', 'Categoria adicionada com sucesso!');
    }
    

    public function edfilme($id)
    {
        $filme = Filme::findOrFail($id);
        return view('filmes.edfilme', compact('filme'));
    }

    public function editarFilme($id)
    {
        $filme = Filme::findOrFail($id);
        return view('filmes.edfilme', compact('filme'));
    }

    public function atualizarFilme(Request $request, $id)
    {
        $filme = Filme::findOrFail($id);

        $dadosFilme = $request->validate([
            'name' => 'required|string',
            'sinopse' => 'required|string|max:1000',
            'ano' => 'required|integer',
            'imagem' => 'required|string',
            'link' => 'required|string',
        ]);

        $filme->update($dadosFilme);

        return redirect()->route('admin')->with('success', 'Filme atualizado com sucesso!');
    }

}
