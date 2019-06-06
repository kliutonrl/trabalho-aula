<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;


class LoginController extends Controller {

    public function login() {
        return view('login');
    }

    public function logar(Request $request ) {
        $cliente = Cliente::where('email', $request->email)->where('senha', $request->senha)->first();
        if($cliente != null){
        return redirect()->route('filmes.listar');
    }
        return redirect()->route('login')->with('erro', 'Senha ou login inválido');     
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return view('login');
    }
}

   
