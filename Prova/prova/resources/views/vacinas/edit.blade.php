@extends('administrativo')

@section('conteudo2')

<form action="{{ route('vacinas.update', $vacina->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="container-sm form-group">
        <label id="labeltabela" for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ $vacina->nome }}">
        <label id="labeltabela" for="fabricante">Fabricante</label>
        <input type="text" class="form-control" name="fabricante" id="facbricante" value="{{ $vacina->fabricante }}">
        <label id="labeltabela" for="doses">Doses</label>
        <input type="number" class="form-control" name="doses" id="doses" value="{{ $vacina->doses }}">
    </div>

    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn-lg" id="botao">
        <input type="reset" value="Limpar" class="btn-lg" id="botao">
    </div>

</form>

@endsection