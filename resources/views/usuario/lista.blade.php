@extends('templates.App')

@section('content')
<div id="painel" class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading" align="center"><strong>Lista de Usuários Cadastrados</strong></div>
            <div class="panel-body">
                <div class="col-md-11">
                    <div class="col-md-12">
                        <form class="navbar-form navbar-right" role="search" action="{{ route('usuarios.nome') }}" method="post">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nome" placeholder="Buscar nome">
                                </div>
                            <button type="submit" class="btn btn-primary">Buscar</button>
                            <a href="{{ url('/usuarios/novo') }}" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i></a>
                        </form>
                    </div>
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
                        @foreach($usuarios as $usuario)
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
        <div class="panel-footer" align="center">
            {!! $usuarios->links() !!}
        </div>
    </div>
</div>
@endsection