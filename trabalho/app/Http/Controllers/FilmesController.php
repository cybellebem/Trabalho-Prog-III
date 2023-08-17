<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Auth\Events\Registered;
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
        'categoria' => 'required|string',
        'link' => 'required|string',
    ]);
        $imagePath = $request->file('imagem')->store('','public');
        $filme['imagem'] = $imagePath;


    Filme::create($filme);
    return redirect()->route('admin')->with('success', 'Filme criado com sucesso!');
    }

    public function admin()
    {
        $filmes = Filme::all();
        return view('filmes.admin', compact('filmes'));
    }

    public function lista(Request $request)
    {
        $query = Filme::query();

        if ($request->has('ano')) {
            $ano = $request->input('ano');
            $query->where('ano', $ano);
        }

        $filmes = $query->get();

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
            'link' => 'required|string',
        ]);
        if ($request->hasFile('imagem')) {
            $novaImagemPath = $request->file('imagem')->store('', 'public');
            $dadosFilme['imagem'] = $novaImagemPath;
        }

        $filme->update($dadosFilme);

        return redirect()->route('admin')->with('success', 'Filme atualizado com sucesso!');
    }

}
