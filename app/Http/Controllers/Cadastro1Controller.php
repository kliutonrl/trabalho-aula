<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cadastro1Controller extends Controller {
    
    public function cadastro1() {
        return view('cadastro1');
    }

    public function cadastrar(Request $request ) {
        return view('cadastro2');
    }

}