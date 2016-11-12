@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    
                    @if (session('status'))
                        <div class="alert alert-{{ session('status') }}">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{ session('mensagem') }}
                        </div>
                    @endif
                    
                    ID: {{ $usuario->id }}  <br />
                    Nome: {{ $usuario->name }} <br />
                    E-mail: {{ $usuario->email }} <br />
                    Cadastrado em: {{ $usuario->created_at->format('d/m/Y à\s H:i:s') }} 
                    <br /><br />
                    <a class="btn btn-primary" href="/painel/usuario/alterar-senha">Alterar senha</a>
                    <a class="btn btn-primary" href="/painel/usuario/alterar-email">Alterar Email</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
