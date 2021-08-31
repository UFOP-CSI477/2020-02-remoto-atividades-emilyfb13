@extends('principal')

@section('conteudo')
<div class ="container" id="subtela">
        <nav class="navbar" id="subtopo">
            <a id="titulo" class="navbar-brand logo">
                <!-- https://icons.getbootstrap.com/icons/basket3-fill/ //-->
                <img src="/img/adm.png" alt="Logo" id="logoadm">
            Área Geral
            </a>
        </nav>

        <div class="container" style="padding: 1%;"></div>

        @yield('conteudo3')

        <div class="container" style="padding: 4%;"></div>
</div>
@endsection