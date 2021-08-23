@extends('principal')

@section('conteudo')

<form action="{{ route('tarefa.store')}}" method="post">

    @csrf

    <div class="container-sm form-group">
        <label id="labeltarefas"for="descricao">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
    </div>

    <div class="container text-right">
        <input type="submit" value="Cadastrar" class="btn-sm" id="botao">
        <input type="reset" value="Limpar" class="btn-sm" id="botao">
    </div>

</form>

@endsection