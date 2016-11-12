@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Alterar e-mail</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/painel/usuario/alterar-email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('senha') ? ' has-error' : '' }}">
                            <label for="senha" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-2">
                                <input id="senha" type="password" class="form-control" name="senha" value="{{old('senha')}}" required>

                                @if ($errors->has('senha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('senha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Novo e-mail</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('confirmar_email') ? ' has-error' : '' }}">
                            <label for="confirmar_email" class="col-md-4 control-label">Confirmar e-mail</label>

                            <div class="col-md-4">
                                <input id="password" type="email" class="form-control" name="confirmar_email" value="{{old('confirmar_email')}}" required>

                                @if ($errors->has('confirmar_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('confirmar_email') }}</strong>
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