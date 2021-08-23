@extends('principal')

@section('conteudo')

<h1>Tarefas</h1>

<p>Id: {{ $tarefa->id }}</p>
<p>Descrição: {{ $tarefa->descricao }}</p>

<a href="{{route('tarefa.edit', $tarefa->id)}}">Editar</a>

<a href="{{route('tarefa.index')}}">Voltar</a>

<form name="frmDelete"
    action="{{ route('tarefa.destroy', $tarefa->id)}}"
    method="post"
    onsubmit="return confirm('Confirma a exclusão do estado?');">

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">

</form>

@endsection