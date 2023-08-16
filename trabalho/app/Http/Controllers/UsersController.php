<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{

    public function cadastro(Request $request){
        if ($request->isMethod('POST')) {
            $user = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|string',
            ]);
    
            $user['password'] = Hash::make($user['password']);
    
            $createdUser = User::create($user);
    
            // Lança um evento Registered que pode enviar um e-mail para o usuário
            event(new Registered($createdUser));
    
            return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso!');
        }
    
        return view('filmes.cadastro');
    }


    public function login(Request $request){
        if($request->isMethod('POST')){
            $data = $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            if (Auth::attempt($data)){

                return redirect()->route('admin');
            } else {
                return redirect()->route('login')->with('erro', 'Deu ruim');
            }
        }
        //$usuarios = User::all();
        //dd($usuarios);
        return view('filmes.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('filmes.lista');
    }


    public function admin(){
        return view('filmes.admin');
    }

    public function adfilme(){
        return view('filmes.adfilme');
    }

    public function edfilme(){
        return view('filmes.edfilme');
    }


    public function deleteUser(){

    }

    public function editUser(){

    }



}
