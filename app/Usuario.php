<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nome', 'sobrenome', 'email', 'cpf', 'nascimento', 'ddd', 'telefone', 'status'];

    protected $table = 'usuarios';

    public static function buscaEmail($endereco)
    {
        return static::where('email','LIKE', '%'.$endereco.'%')->get();
    }

    public static function buscaNome($nome)
    {
        return static::where('nome','LIKE', '%'.$nome.'%')->get();
    }

    public static function buscaAtivo()
    {
        return static::where('status','=', '1')->get();
    }

    public static function buscaInativo()
    {
        return static::where('status','=', '0')->get();
    }
}
