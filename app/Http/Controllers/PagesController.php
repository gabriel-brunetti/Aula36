<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
        return view('home');
    }

    public function getClientes($pos){

        $clientes = Cliente::all();

        $clienteDoMes = $clientes[$pos];

        $nome = "Sérgio Moura";

        return view('clientes',[
            'nome'=>$nome,
            'clientes'=>$clientes,
            'clienteDoMes' => $clienteDoMes
            ]
        );
        // passando uma variável para a view: ['nomeDaVariavelNaView'=>$variavel]
        // na view o 'nomeDaVariavelNaView' será a $nomeDaVariavelnaView !
    }
    public function getContatos(){
        return view('contatos');
    }
}
