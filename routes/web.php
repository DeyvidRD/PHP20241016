<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro_usuario', [UserController::class, "formCriarUsuario"]);
Route::get('/listar_usuarios', [UserController::class, 'listar']);
Route::post('/criar_usuario', [UserController::class, 'criar']);
Route::delete("/deletar_usuario/{id}", [UserController::class, 'deletar']);
Route::get("/editar_usuario/{id}", [UserController::class, 'formEditarUsuario']);
Route::put("/editar_usuario/{id}", [UserController::class, 'editar']);
Route::get('/pagina_vazia', [UserController::class, 'listar']);



Route::get('/cadastro_produto', [ProdutoController::class, "formCriarProduto"]);
Route::post('/criar_produto', [ProdutoController::class, 'criar']);
Route::get('/listar_produtos', [ProdutoController::class, 'listar']);
Route::delete("/deletar_produto/{id}", [ProdutoController::class, 'deletar']);
Route::get("/editar_produto/{id}", [ProdutoController::class, 'formEditarProduto']);
Route::put("/editar_produto/{id}", [ProdutoController::class, 'editar']);



Route::get('/cadastrar_vendedor', [VendedorController::class,'formCriarVendedor']);
Route::get('/listar_vendedor', [VendedorController::class, 'listarVendedor']);
Route::post('/criar_vendedor', [VendedorController::class, 'criarVendedor']);
Route::delete("/deletar_vendedor/{id}", [VendedorController::class, 'deletar']);
Route::get("/editar_vendedor/{id}", [VendedorController::class, 'formEditarVendedor']);
Route::put("/editar_vendedor/{id}", [VendedorController::class, 'editar']);




Route::get('/cadastrar_cliente', [ClienteController::class,'formCriarCliente']);
Route::get('/listar_cliente', [ClienteController::class,'listarCliente']);
Route::post('/criar_cliente', [ClienteController::class,'criarCliente']);
Route::delete("/deletar_cliente/{id}", [ClienteController::class, 'deletar']);
Route::get("/editar_cliente/{id}", [ClienteController::class, 'formEditarCliente']);
Route::put("/editar_cliente/{id}", [ClienteController::class, 'editar']);




Route::get('/', [AppController::class, 'inicial']);
