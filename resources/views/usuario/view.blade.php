@extends('templates.App')

@section('content')
    <div id="painel" class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading" align="center"><strong>Usuário</strong></div>
            <div class="panel-body" >
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="" method="">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{ $usuario->nome }}" readonly placeholder="Nome">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sobrenome">Sobrenome:</label>
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="{{ $usuario->sobrenome }}" readonly placeholder="Sobrenome">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">E-mail:</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $usuario->email }}" readonly placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cpf">CPF:</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $usuario->cpf }}" readonly placeholder="cpf">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nasc">Data de Nascimento:</label>
                            <input type="date" class="form-control" id="nasc" name="nascimento" value="{{ $usuario->nascimento }}" readonly placeholder="Data de Nascimento">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="ddd">DDD:</label>
                            <input type="text" class="form-control" id="ddd" name="ddd" readonly value="({{ $usuario->ddd }})">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="tel">Número:</label>
                            <input type="text" class="form-control" id="tel" name="telefone" readonly value="{{ $usuario->telefone }}">
                        </div>
                        <div class="col-md-12" align="right">
                            <a href="{{ url('/') }}" class="btn btn-default">Voltar</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
@endsection
