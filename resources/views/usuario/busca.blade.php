@extends('templates.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading" align="center"><strong>Busca Usuários</strong></div>
        <div class="panel-body">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"><strong>Por E-mail:</strong></div>
                        <div class="panel-body">
                            <form class="navbar-form navbar-left" role="search" action="{{ route('usuarios.email') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" class="form-control" name="endereco" placeholder="Por E-mail">
                                </div>
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"><strong>Por status:</strong></div>
                        <div class="panel-body">
                            <div class="-col-md-12" align="center" style="margin-bottom: 15px">
                                <a href="{{ route('usuarios.ativo') }}"  class="btn btn-success">ATIVO</a>
                                <a href="{{ route('usuarios.inativo') }}"  class="btn btn-danger">INATIVO</a>
                                <a href="{{ route('usuarios.index') }}"  class="btn btn-default" >VOLTAR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection