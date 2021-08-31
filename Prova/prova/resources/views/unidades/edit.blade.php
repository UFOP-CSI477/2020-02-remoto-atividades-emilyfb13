@extends('administrativo')

@section('conteudo2')

<form action="{{ route('unidades.update', $unidade->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="container-sm form-group">
        <label id="labeltabela" for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ $unidade->nome }}">
        <label id="labeltabela" for="bairro">Bairro</label>
        <input type="text" class="form-control" name="bairro" id="bairro" value="{{ $unidade->bairro }}">
        <label id="labeltabela" for="cidade">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="cidade" value="{{ $unidade->cidade }}">
    </div>

    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn-lg" id="botao">
        <input type="reset" value="Limpar" class="btn-lg" id="botao">
    </div>

</form>

@endsection