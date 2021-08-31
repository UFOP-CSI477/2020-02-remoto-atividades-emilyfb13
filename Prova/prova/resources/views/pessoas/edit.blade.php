@extends('administrativo')

@section('conteudo2')

<form action="{{ route('pessoas.update', $pessoa->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="container-sm form-group">
        <label id="labeltabela" for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ $pessoa->nome }}">
        <label id="labeltabela" for="bairro">Bairro</label>
        <input type="text" class="form-control" name="bairro" id="bairro" value="{{ $pessoa->bairro }}">
        <label id="labeltabela" for="cidade">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="cidade" value="{{ $pessoa->cidade }}">
        <label id="labeltabela" for="data_nascimento">Data de Nascimento</label>
        <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" value="{{ $pessoa->data_nascimento }}">
    </div>

    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn-lg" id="botao">
        <input type="reset" value="Limpar" class="btn-lg" id="botao">
    </div>

</form>

@endsection