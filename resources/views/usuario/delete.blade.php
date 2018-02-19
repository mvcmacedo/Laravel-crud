@extends('templates.App')

@section('content')
<div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
                <div class="panel-body">
                    <div  align="center">
                        <h4><span class="text-danger"><strong>DESEJA DELETAR O USUÁRIO:</strong></span></h4>
                        <h4>{{ $usuario->nome }} {{ $usuario->sobrenome }} ?</h4>
                    </div>
                <div class="col-md-12" align="center">
                    <a href="{{ route('usuarios.destroy', $usuario->id) }}"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i></button></a>
                    <a href="{{ route('usuarios.index') }}"><button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button></a>
                </div>
            </div>
        </div>
    </div>
<div class="col-md-2"></div>

@endsection