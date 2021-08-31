@extends('administrativo')

@section('conteudo2')

<form action="{{ route('vacinas.store')}}" method="post">

    @csrf

    <div class="container-sm form-group">
        <label id="labeltabela" for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
        <label id="labeltabela" for="fabricante">Fabricante</label>
        <input type="text" class="form-control" name="fabricante" id="facbricante" >
        <label id="labeltabela" for="doses">Doses</label>
        <input type="number" class="form-control" name="doses" id="doses">
    </div>

    <div class="container text-right">
        <input type="submit" value="Cadastrar" class="btn-sm" id="botao">
        <input type="reset" value="Limpar" class="btn-sm" id="botao">
    </div>

</form>

@endsection
