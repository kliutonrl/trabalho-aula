<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConteudoController extends Controller {
    
    public function conteudo() {
        return view('conteudo');
    }

    public function assistir(){
        $requeste->video->storeAs('public/Filme', 'Pixels.mp4');
        return redirect()->route('conteudo.assistir');
    }


}