<?php

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

    public function deletar($id){
        $cliente = new cliente;
        $cliente->find($id)->delete();
        return redirect('/listar_cliente');
    }

    public function formEditarCliente($id) {
        $cliente = Cliente::find($id);

        return view('editar_cliente', ["cliente" => $cliente]);
    }

    public function editar(Request $request) {
        Cliente::where('id', $request->id)->update([
            'name' => $request->name,
            'cpf' => $request->cpf,
            'email' => $request->email,
        ]);

        return redirect('/listar_cliente');
    }
}