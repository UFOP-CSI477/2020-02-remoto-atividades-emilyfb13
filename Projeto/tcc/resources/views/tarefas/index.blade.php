@extends('principal')

@section('conteudo')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descrição</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tarefa as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->descricao }} </td>
                    <td>
                        <button type="button" class="btn btn-outline-light btn-sm">
                            <a id="botaotarefa" href="{{route('tarefa.edit', $e->id)}}">Editar</a>
                        </button>  
                    </td>
                    <td>
                        <form name="frmDelete"
                            action="{{ route('tarefa.destroy', $e->id)}}"
                            method="post"
                            onsubmit="return confirm('Confirma a exclusão da tarefa?');">

                            @csrf
                            @method('DELETE')

                            <input class="btn btn-outline-light btn-sm" type="submit" value="Excluir">

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>    

    <div class="d-flex flex-row-reverse">
        <button class="btn-sm" id="botao">
            <a id="botao" href="{{route('tarefa.create')}}" >Cadastrar</a>  
        </button>
    </div>
</div>
                    
@endsection