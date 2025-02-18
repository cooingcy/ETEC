<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        // Processar os dados recebidos
        $nome = $request->input('nome');
        $telefone = $request->input('telefone');
        $endereco = $request->input('endereco');
        $sexo = $request->input('sexo');

        // Exibir as informações para depuração
        var_dump($nome, $telefone, $endereco, $sexo);
    }
}
