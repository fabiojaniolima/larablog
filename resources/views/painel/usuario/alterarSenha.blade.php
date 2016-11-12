@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Alterar senha</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/painel/usuario/alterar-senha') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('senha_atual') ? ' has-error' : '' }}">
                            <label for="senha_atual" class="col-md-4 control-label">Senha atual</label>

                            <div class="col-md-2">
                                <input id="senha_atual" type="password" class="form-control" name="senha_atual" value="{{old('senha_atual')}}" required>

                                @if ($errors->has('senha_atual'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('senha_atual') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('nova_senha') ? ' has-error' : '' }}">
                            <label for="nova_senha" class="col-md-4 control-label">Nova senha</label>

                            <div class="col-md-2">
                                <input id="password" type="password" class="form-control" name="nova_senha" value="{{old('nova_senha')}}" required>

                                @if ($errors->has('nova_senha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nova_senha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('confirmar_nova_senha') ? ' has-error' : '' }}">
                            <label for="confirmar_nova_senha" class="col-md-4 control-label">Confirmar nova senha</label>

                            <div class="col-md-2">
                                <input id="password" type="password" class="form-control" name="confirmar_nova_senha" value="{{old('confirmar_nova_senha')}}" required>

                                @if ($errors->has('confirmar_nova_senha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('confirmar_nova_senha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Salvar
                                </button>
                                <a class="btn btn-success" href="/painel/usuario">
                                    Voltar
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection