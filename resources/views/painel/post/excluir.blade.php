@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Tem certeza desta exclusão?</div>

                <div class="panel-body">
                    
                    ID do post: {{ $post->id }} <br>
                    Título: <a target='_blank' href="/post/{{ $post->id }}">{{ $post->titulo }}</a> <br>
                    Autor: {{ $post->user->name }} <br>
                    Publicado em: {{ $post->created_at->format('d/m/Y à\s H:i:s')}}
                    
                    <br /><br />
                    
                    <a class="btn btn-danger" href="/painel/post/{{ $post->id }}/excluir/true">Excluir!</a>
                    <a class="btn btn-success" href="/painel/posts">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection