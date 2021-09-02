@extends('principal')

@section('conteudo')

<form action="{{ route('produto.update', $produto->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="container-sm form-group">
        <label id="labeltabela" for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ $produto->nome }}">
        <label id="labeltabela" for="um">Unidade de Medida</label>
        <input type="text" class="form-control" name="um" id="um" value="{{ $produto->um }}">
    </div>

    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn-lg" id="botao">
        <input type="reset" value="Limpar" class="btn-lg" id="botao">
    </div>

</form>

@endsection