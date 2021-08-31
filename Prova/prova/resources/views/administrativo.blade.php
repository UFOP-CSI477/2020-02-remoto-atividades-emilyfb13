@extends('principal')

@section('conteudo')
<div class ="container" id="subtela">
        <nav class="navbar" id="subtopo">
                <a id="titulo" class="navbar-brand logo">
                    <!-- https://icons.getbootstrap.com/icons/basket3-fill/ //-->
                    <img src="/img/adm.png" alt="Logo" id="logoadm">
                Área Administrativa
                </a>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" style="font-size:larger;" href="{{ route('pessoas.index') }}">Pessoas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size:larger;" href="{{ route('unidades.index') }}">Unidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size:larger;" href="{{ route('vacinas.index') }}">Vacinas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size:larger;" href="{{ route('registros.index') }}">Registros</a>
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
        </nav>

        <div class="container" style="padding: 1%;"></div>

        @yield('conteudo2')

        <div class="container" style="padding: 4%;"></div>
</div>
@endsection