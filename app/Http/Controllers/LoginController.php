<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller {

    public function login() {
        return view('login');
    }

    public function logar(Request $request ) {
        if($request->email == 'admin@admin.com' && $request->password == '123456')
            return redirect()->route('conteudo');
            return redirect()->route('login')->with('erro', 'Senha ou login inválido');
        
    }

    public function logout() {
        return view('login');
    }
}

   
