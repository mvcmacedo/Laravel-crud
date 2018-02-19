<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequest;
use App\Http\Requests\UserEditRequest;
use App\Usuario;
class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = \App\Usuario::orderBy('id')->paginate(10);
        //dd($usuarios);
        return view('usuario.lista', compact('usuarios'));
    }

    public function novo()
    {
        return view('usuario.novo');
    }

    public function salva(UsuarioRequest $request)
    {
        Usuario::create($request->all());
        return redirect()->action('UsuarioController@index');
    }

    public function view($id)
    {
        $usuario = \App\Usuario::find($id);
        return view('usuario.view', compact('usuario'));
    }

    public function edita($id)
    {
        $usuario = \App\Usuario::find($id);
        return view('usuario.edita', compact('usuario'));
    }

    public function update(UserEditRequest $request, $id)
    {
       \App\Usuario::find($id)->update($request->all());
       return redirect()->route('usuarios.index');
    }

    public function delete($id)
    {
        $usuario = \App\Usuario::find($id);
        return view('usuario.delete', compact('usuario'));
    }

    public function destroy($id)
    {
        \App\Usuario::find($id)->delete();
        return redirect()->route('usuarios.index');
    }

    public function active($id)
    {
        \App\Usuario::find($id) ->update(['status' => '1']);
        return redirect()->route('usuarios.index');
    }

    public function busca()
    {
        return view('usuario.busca');
    }

    public function buscaEmail(Request $endereco)
    {
        $usuario = Usuario::buscaEmail($endereco->endereco);
        return view('usuario.listaBusca', compact('usuario'));
    }


    public function buscaNome(Request $nome)
    {
        $usuario = Usuario::buscaNome($nome->nome);
        return view('usuario.listaBusca', compact('usuario'));
    }

    public function buscaAtivo()
    {
        $usuario = Usuario::buscaAtivo();
        return view('usuario.listaBusca', compact('usuario'));
    }

    public function buscaInativo()
    {
        $usuario = Usuario::buscaInativo();
        return view('usuario.listaBusca', compact('usuario'));
    }
}
