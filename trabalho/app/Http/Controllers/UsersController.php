<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{

    public function cadastro(){
        return view('filmes.cadastro');
    }
    public function cadastro1(Request $request){
        if ($request->isMethod('POST')) {
            $usr = $request->validate([
                'name' => ['string|required'],
                'email' => ['email|required', Rule::unique('users')],
                'password' => ['string|required'],
            ]);

            $usr['password'] = Hash::make($usr['password']);

            $user = User::create($usr);
            // Lança um evento Registered que vai enviar um e-mail para o usuário
            event(new Registered($user));

            return redirect()->route('cadastro');
        }
    }


    public function login(Request $request){
        if($request->isMethod('POST')){
            $data = $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            if (Auth::attempt($data)){

                return redirect()->route('lista');
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





    public function deleteUser(){

    }

    public function editUser(){

    }



}
