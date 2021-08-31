@extends('administrativo')

@section('conteudo2')
<div class="container-fluid">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($unidade as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->nome }} </td>
                    <td>{{ $e->bairro }} </td>
                    <td>{{ $e->cidade }} </td>
                    <td>
                        <button type="button" class="btn btn-outline-light btn-sm">
                            <a id="botaotabela" href="{{route('unidades.edit', $e->id)}}">Editar</a>
                        </button>  
                    </td>
                    <td>
                        <form name="frmDelete"
                            action="{{ route('unidades.destroy', $e->id)}}"
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
            <a id="botao" href="{{route('unidades.create')}}" >Cadastrar</a>  
        </button>
    </div>
</div>
                    
@endsection