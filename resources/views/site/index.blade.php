<!DOCTYPE HTML>
<!--
        Striped by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="pt-br">
    <head>
        <title>{{ config('app.name') }}</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="{{url('assets/js/ie/html5shiv.js')}}"></script><![endif]-->
        <link rel="stylesheet" href="{{url('assets/css/main.css')}}" />
        <!--[if lte IE 8]><link rel="stylesheet" href="{{url('assets/css/ie8.css')}}" /><![endif]-->
    </head>
    <body>

        <!-- Content -->
        <div id="content">
            <div class="inner">

                <!-- Post -->
                @forelse($posts as $post)
                <article class="box post post-excerpt">
                    <header>
                        <h2><a href="#">{{ $post->titulo }}</a></h2>
                        <div id="data-autor">Autor: {{$post->user->name}} &nbsp&nbsp - &nbsp&nbsp Data: {{ $post->created_at->format('d/m/Y à\s H:i:s')}}</div>
                        <!--
                                Nota: Utilize <p> neste espaço para exibir um subtitulo
                        -->
                    </header>
                    @if($post->capa)
                    <a href="{{url('/post/'.$post->id)}}" class="image featured"><img src="{{url('upload/images/' . $post->capa)}}" width="784px" height="330" alt="" /></a>
                    @endif
                    
                    @if (str_contains($post->conteudo, '<div style="page-break-after'))
                        {!! strstr($post->conteudo, '<div style="page-break-after', true) !!}
                    @else
                        {!! \Illuminate\Support\Str::words($post->conteudo, 60, "...") !!}
                    @endif
                    <p><a href="{{url('/post/'.$post->id)}}">Leia mais >></a></p>

                    <hr style="margin-bottom: -80px;">
                </article>
                @empty
                    Não existem posts para serem listados!
                @endforelse
                <!-- \Post -->

                <!-- Pagination -->      
                <div class="pagination">
                    <a href="{{ $posts->previousPageUrl() }}" class="button previous @unless($posts->previousPageUrl()) disabled @endunless"><< Anterior</a>
                    <a href="{{ $posts->nextPageUrl() }}" class="button next @unless($posts->nextPageUrl()) disabled @endunless">Próxima >></a>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">

            <!-- Logo -->
            <h1 id="logo"><a href="#">{{ config('app.name', 'Laravel') }}</a></h1>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a href="{{url('/')}}">Página inicial</a></li>
                    <li><a href="{{url('/contatos')}}">Contatos</a></li>
                    <li><a href="{{url('/login')}}">{{ (Auth::guest()) ? 'Login' : 'Painel' }}</a></li>
                </ul>
            </nav>

            <!-- Search -->
            <section class="box search">
                <form method="post" action="#">
                    <input type="text" class="text" name="search" placeholder="Buscar" />
                </form>
            </section>

            <!-- Text -->
            <section class="box text-style1">
                <div class="inner">
                    <p>
                        <strong>Blog:</strong> Esse é um exemplo de blog escrito em Laravel 5.3 
                        o código fonte deste está disponível no github: <a href="#">clique aqui</a>.
                    </p>
                </div>
            </section>

            <!-- Copyright -->
            <ul id="copyright">
                <li>&copy; Sem título.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>

        </div>

        <!-- Scripts -->
        <script src="{{url('assets/js/jquery.min.js')}}"></script>
        <script src="{{url('assets/js/skel.min.js')}}"></script>
        <script src="{{url('assets/js/util.js')}}"></script>
        <!--[if lte IE 8]><script src="{{url('assets/js/ie/respond.min.js')}}"></script><![endif]-->
        <script src="{{url('assets/js/main.js')}}"></script>

    </body>
</html>