@extends('principal')

@section('conteudo')

<form action="{{ route('estado.update', $estado->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="container-sm form-group">
        <label id="labeltabela" for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ $estado->nome }}">
        <label id="labeltabela" for="sigla">Sigla</label>
        <input type="text" class="form-control" name="sigla" id="sigla" value="{{ $estado->siga }}">
    </div>

    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn-lg" id="botao">
        <input type="reset" value="Limpar" class="btn-lg" id="botao">
    </div>

</form>

@endsection