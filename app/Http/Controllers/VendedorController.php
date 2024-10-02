<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function formCriarVendedor(Request $request) {
        //pegar a view
        return view('cadastro_vendedor');
    }

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
}