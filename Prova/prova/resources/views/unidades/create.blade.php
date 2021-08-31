@extends('administrativo')

@section('conteudo2')

<form action="{{ route('unidades.store')}}" method="post">

    @csrf

    <div class="container-sm form-group">
        <label id="labeltabela" for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
        <label id="labeltabela" for="bairro">Bairro</label>
        <input type="text" class="form-control" name="bairro" id="bairro" >
        <label id="labeltabela" for="cidade">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="cidade">
    </div>

    <div class="container text-right">
        <input type="submit" value="Cadastrar" class="btn-sm" id="botao">
        <input type="reset" value="Limpar" class="btn-sm" id="botao">
    </div>

</form>

@endsection
