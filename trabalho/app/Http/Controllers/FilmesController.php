<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FilmesController extends Controller
{
    public function index() {
        $filmes = Filme::all();

        return view('filmes.index', [
            'filmes' => $filmes,
        ]);
    }

    public function add() {
        return view('filmes.addfilme');
    }

    public function addSave(Request $form) {
        $dados = $form->validate([
            'name' => 'required|unique:produtos|min:3',
            'price' => 'required|numeric|gte:0',
            'quantity' => 'required|integer|gte:0',
        ]);

        Filme::create($dados);

        return redirect()->route('filmes')->with('sucesso', 'Produto inserido com sucesso');
    }

    public function edit(Filme $filme) {
        // Usamos a mesma view do "add"
        return view('filmes.addfilme', [
            'filme' => $filme,
        ]);
    }

    public function editSave(Request $form, Filme $filme) {
        $dados = $form->validate([
            'name' => [
                'required',
                Rule::unique('filmes')->ignore($filme->id),
                'min:3',
            ],
            'price' => 'required|numeric|gte:0',
            'quantity' => 'required|integer|gte:0',
        ]);

        $filme->fill($dados)->save();

        return redirect()->route('filmes')->with('sucesso', 'Produto alterado com sucesso');
    }

    public function view(Filme $filme) {
        return view('filmes.infofilme', [
            'filme' => $filme,
        ]);
    }

    public function delete(Filme $filme) {
        return view('filmes.apagarfilme', [
            'filme' => $filme,
        ]);
    }

    public function deleteForReal(Filme $filme) {
        $filme->delete();
        return redirect()->route('filmes')->with('sucesso', 'Produto apagado com sucesso!');
    }
}
