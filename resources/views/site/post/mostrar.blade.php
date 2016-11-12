<!DOCTYPE HTML>
<!--
        Striped by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="pt-br">
    <head>
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="{{url('assets/js/ie/html5shiv.js')}}"></script><![endif]-->
        <link rel="stylesheet" href="{{url('assets/css/main.css')}}" />
        <!--[if lte IE 8]><link rel="stylesheet" href="{{url('assets/css/ie8.css')}}" /><![endif]-->        
        <link rel="stylesheet" href="{{url('assets/css/highlight.min.css')}}" />
        
    </head>
    <body>

        <!-- Content -->
        <div id="content">
            <div class="inner">

                <!-- Post -->
                <article class="box post post-excerpt">
                    <header>
                        <h2><a href="#">{{ $post->titulo }}</a></h2>
                        <!--
                                Nota: Utilize <p> neste espaço para exibir um subtitulo
                        -->
                        <div id="data-autor">Autor: {{$post->user->name}} &nbsp&nbsp - &nbsp&nbsp Data: {{ $post->created_at->format('d/m/Y à\s H:i:s')}}</div>
                    </header>
                    
                        {!! $post->conteudo !!}
                    
                </article>
                <!-- \Post -->
            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">

            <!-- Logo -->
            <h1 id="logo"><a href="#">{{ config('app.name') }}</a></h1>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a href="{{url('/')}}">Página inicial</a></li>
                    <li><a href="{{url('/contatos')}}">Contatos</a></li>
                    <li><a href="{{url('/login')}}">Login</a></li>
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
        
        <script src="{{url('assets/js/highlight/highlight.min.js')}}"></script>
        <script src="{{url('assets/js/highlight/highlightjs-line-numbers.min.js')}}"></script>
        <script>
            $(document).ready(function() {
                $('pre code').each(function(i, block) {
                  hljs.highlightBlock(block);
                  hljs.lineNumbersBlock(block);
                });
              });
        </script>

    </body>
</html>