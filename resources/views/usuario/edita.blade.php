@extends('templates.App')

@section('content')
    <div id="painel" class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading" align="center"><strong>Edição de Usuário</strong></div>
            <div class="panel-body" >
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="{{ route('usuarios.atualizar', $usuario->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group col-md-12 {{ $errors->has('nome') ? 'has-error' : '' }}">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{ $usuario->nome }}" placeholder="Nome">
                            @if($errors->has('nome'))
                                <span class="help-block"><b>{{ $errors->first('nome') }}</b></span>
                            @endif
                        </div>
                        <div class="form-group col-md-12 {{ $errors->has('sobrenome') ? 'has-error' : '' }}">
                            <label for="sobrenome">Sobrenome:</label>
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="{{ $usuario->sobrenome }}" placeholder="Sobrenome">
                            @if($errors->has('sobrenome'))
                                <span class="help-block"><b>{{ $errors->first('sobrenome') }}</b></span>
                            @endif
                        </div>
                        <div class="form-group col-md-12 {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">E-mail:</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $usuario->email }}" placeholder="Email">
                            @if($errors->has('email'))
                                <span class="help-block"><b>{{ $errors->first('email') }}</b></span>
                            @endif
                        </div>
                        <div class="form-group col-md-12 {{ $errors->has('cpf') ? 'has-error' : '' }}">
                            <label for="cpf">CPF:</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $usuario->cpf }}" placeholder="cpf">
                            @if($errors->has('cpf'))
                                <span class="help-block"><b>{{ $errors->first('cpf') }}</b></span>
                            @endif
                        </div>
                        <div class="form-group col-md-6 {{ $errors->has('nascimento') ? 'has-error' : '' }}">
                            <label for="nasc">Data de Nascimento:</label>
                            <input type="date" class="form-control" id="nasc" name="nascimento" value="{{ $usuario->nascimento }}" placeholder="Data de Nascimento">
                            @if($errors->has('nascimento'))
                                <span class="help-block"><b>{{ $errors->first('nascimento') }}</b></span>
                            @endif
                        </div>
                        <div class="form-group col-md-2 {{ $errors->has('ddd') ? 'has-error' : '' }}">
                            <label for="ddd">DDD:</label>
                            <input type="text" class="form-control" id="ddd" name="ddd" value="{{ $usuario->ddd }}">
                            @if($errors->has('ddd'))
                                <span class="help-block"><b>{{ $errors->first('ddd') }}</b></span>
                            @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tel">Número:</label>
                            <input type="text" class="form-control" id="tel" name="telefone" value="{{ $usuario->telefone }}">
                        </div>
                        <div class="col-md-12" align="right">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a href="{{ url('/') }}" class="btn btn-default">Cancelar</a>
                        </div>

                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
@endsection

