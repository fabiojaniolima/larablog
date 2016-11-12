@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{!isset($post) ? 'Adicionar novo post' : 'Atualizar post'}}</div>

                <div class="panel-body">
                   
                    <form class="form-horizontal" role="form" method="POST" action="{{ url(!isset($post) ? '/painel/post/adicionar' : '/painel/post/atualizar') }}">
                        {{ csrf_field() }}
                        
                        <input type="hidden" name="id" value="{{$post->id or old('id')}}">    

                        <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                            <label for="titulo" class="col-md-2 control-label">Título</label>

                            <div class="col-md-10">
                                <input id="titulo" type="text" class="form-control" name="titulo" value="{{$post->titulo or old('titulo') }}" autofocus required>

                                @if ($errors->has('titulo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('conteudo') ? ' has-error' : '' }}">
                            <label for="conteudo" class="col-md-2 control-label">Conteúdo</label>

                            <div class="col-md-10">
                                <textarea id="conteudo" name="conteudo" class="form-control">{!! $post->conteudo or old('conteudo') !!}</textarea>

                                @if ($errors->has('conteudo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('conteudo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('capa') ? ' has-error' : '' }}">
                            <label for="capa" class="col-md-2 control-label">Capa</label>

                            <div class="col-md-10">
                                <input id="capa" type="file" class="form-control" name="capa" accept="image/*">

                                @if ($errors->has('capa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('capa') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-2">
                                <button type="submit" name="status" value="ativo" class="btn btn-primary">
                                    Publicar
                                </button>
                                <button type="submit" name="status" value="rascunho" class="btn btn-warning">
                                    Rascunho
                                </button>
                                
                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{url('assets/vendor/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('conteudo');
</script>
@endsection