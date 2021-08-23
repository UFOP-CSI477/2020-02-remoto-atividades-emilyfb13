@extends('principal')

@section('conteudo')

<form action="{{ route('tarefa.update', $tarefa->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="descricao">Descricao</label>
        <input type="text" class="form-control" name="descricao" id="descricao" value="{{ $tarefa->descricao }}">
    </div>

    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn-lg" id="botao">
        <input type="reset" value="Limpar" class="btn-lg" id="botao">
    </div>

</form>

@endsection