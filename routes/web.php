<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/", "UsuarioController@index");

Route::group(["prefix" => "usuarios"], function(){
    Route::get("/",  ['uses' => "UsuarioController@index", 'as'=> "usuarios.index"]);
    Route::get("/novo",  ['uses' => "UsuarioController@novo", 'as'=> "usuarios.novo"]);
    Route::post("/salva", ['uses' => "UsuarioController@salva", 'as'=> "usuarios.salva"]);
    Route::get("/edita/{id}", ['uses' => "UsuarioController@edita", 'as'=> "usuarios.edita"]);
    Route::post("/atualizar/{id}", ['uses' => "UsuarioController@update", 'as'=> "usuarios.atualizar"]);
    Route::get("/view/{id}",  ['uses' => "UsuarioController@view", 'as'=> "usuarios.view"]);
    Route::get("/delete/{id}",  ['uses' => "UsuarioController@delete", 'as'=> "usuarios.delete"]);
    Route::get("/destroy/{id}", ['uses' => "UsuarioController@destroy", 'as'=> "usuarios.destroy"]);
    Route::get("/active/{id}", ['uses' => "UsuarioController@active", 'as'=> "usuarios.active"]);
    Route::get("/busca", ['uses' => "UsuarioController@busca", 'as'=> "usuarios.busca"]);
    Route::post("/busca/email", ['uses' => "UsuarioController@buscaEmail", 'as'=> "usuarios.email"]);
    Route::post("/busca/nome", ['uses' => "UsuarioController@buscaNome", 'as'=> "usuarios.nome"]);
    Route::get("/busca/ativo", ['uses' => "UsuarioController@buscaAtivo", 'as'=> "usuarios.ativo"]);
    Route::get("/busca/inativo", ['uses' => "UsuarioController@buscaInativo", 'as'=> "usuarios.inativo"]);
});
