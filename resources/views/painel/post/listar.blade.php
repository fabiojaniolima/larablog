@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de posts</div>

                <div class="panel-body">
                    
                    @if (session('status'))
                        <div class="alert alert-{{ session('status') }}">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{ session('mensagem') }}
                        </div>
                    @endif
                    
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Status</th>
                                <th>Autor</th>
                                <th>Criado em</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($posts as $p)
                            <tr>
                                <td><a href="/post/{{ $p->id }}">{{ $p->titulo }}</a></td>
                                <td>{{ $p->status }}</td>
                                <td>{{ $p->user->name }}</td>
                                <td>{{ $p->created_at->format('d/m/Y à\s H:i:s')}}</td>
                                <td>
                                    <a href="/painel/post/{{ $p->id }}/editar">Editar</a> / 
                                    <a href="/painel/post/{{ $p->id }}/excluir">Excluir</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">Não existem posts para serem listados</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection