<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv = "content-type" content = "text / html; charset = utf-8">

    <!-- Bootstrap CSS -->
    <link rel="icon" href="https://raw.githubusercontent.com/twbs/icons/main/icons/basket3-fill.svg">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet"  href="/css/principal.css">
    <link rel="stylesheet"  href="/css/subprincipal.css">
    
    <!-- https://fonts.google.com/specimen/Secular+One?sidebar.open=true&selection.family=Secular+One //-->
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">

    @yield('head')

    <title>Consulta de Álgebra Relacional</title>
  </head>
  <body>
     
    <!-- Topo página de tarefas -->
    <header>
            <nav class="navbar navbar-expand-lg topo">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <ul class="nav">
                            <li class="nav-item active">
                                <a class="nav-link" style="font-size:x-large;" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="font-size:x-large;" href="{{route('estado.index')}}">Estados</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="font-size:x-large;" href="{{route('cidade.index')}}">Cidades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="font-size:x-large;" href="{{route('produto.index')}}">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="font-size:x-large;" href="{{route('pessoa.index')}}">Pessoas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="font-size:x-large;" href="{{route('compra.index')}}">Compras</a>
                            </li>
                        </ul>
                        <ul class="nav">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a id="loginsm" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                         </ul>    
                    </div>
                </div>
            </nav>
        </header>   


        @if(session('mensagem'))

            <div class="alert alert-success">
                {{ session('mensagem') }}
            </div>

        @endif

        <div class="container" style="padding: 1%;"></div>
        @yield('conteudo')
    </div>

    <div class="container" style="padding: 4%;"></div>
    <footer class="footer fixed-bottom">
        <div> © 2021 Copyright</div>
    </footer>
        
  </body>
</html>
