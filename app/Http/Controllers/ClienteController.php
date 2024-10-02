<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function formCriarCliente(Request $request){
        return view('cadastro_cliente');
    }
    
    public function criarCliente(Request $request){
        $clientes = new Cliente;

        $clientes->name = $request->name;
        $clientes->email = $request->email;
        $clientes->cpf = $request->cpf;

        $clientes->save();
        return redirect('/listar_cliente');
    }

    public function listarCliente() {
        $clientes = Cliente::all();

        return view("cliente", ["clientes"=>$clientes]);
    }
}