@extends('templates.app')

@section('content')
    <div id="painel" class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading" align="center"><strong>Lista de Usuários Cadastrados</strong></div>
            <div class="panel-body">
                <div class="col-md-12" align="right">
                    <a href="{{ url('/usuarios/novo') }}" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i></a>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>View / Edita / Apaga</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($usuario as $usuario)
                        <tr>
                            <th scope="row">{{ $usuario->id }}</th>
                            <td>{{ $usuario->nome }}</td>
                            <td>{{ $usuario->sobrenome }}</td>
                            <td>{{ $usuario->email }}</td>
                            @if($usuario->status == 0)
                                <td><a href="{{ route ('usuarios.active', $usuario->id) }}"  class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i></a></td>
                            @else
                                <td><a href="{{ route ('usuarios.view', $usuario->id) }}"  class="btn btn-success"><i class="glyphicon glyphicon-ok-sign"></i></a></td>
                            @endif
                            <td>
                                <a href="{{ route('usuarios.view', $usuario->id) }}"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-eye-open"></i></button></a>
                                <a href="{{ url("usuarios/edita/$usuario->id") }}"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></button></a>
                                <a href="{{ route('usuarios.delete', $usuario->id) }}"><button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection