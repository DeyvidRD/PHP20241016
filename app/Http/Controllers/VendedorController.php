<?php

namespace App\Http\Controllers;
use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function criarVendedor(Request $request){
        $vendedores = new Vendedor;
        $vendedores->name = $request->name;
        $vendedores->matricula = $request->matricula;
        $vendedores->comissao = $request->comissao;

        $vendedores->save();
        return redirect('/listar_vendedor');
    }

    public function listarVendedor(){
        $vendedores = Vendedor::all();

        return view("vendedors", ["vendedores"=>$vendedores]);
    }

    public function formCriarVendedor(Request $request) {
        return view("cadastro_vendedor");
    }

    public function deletar($id){
        $vendedor = new vendedor;
        $vendedor->find($id)->delete();
        return redirect('/listar_vendedor');
    }

    public function formEditarVendedor($id) {
        $vendedor = Vendedor::find($id);

        return view('editar_vendedor', ["vendedor" => $vendedor]);
    }

    public function editar(Request $request) {
        Vendedor      ::where('id', $request->id)->update([
            'name' => $request->name,
            'matricula' => $request->matricula,
            'comissao' => $request->comissao,
        ]);

        return redirect('/listar_vendedor');
    }
}