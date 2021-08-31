@extends('administrativo')

@section('conteudo2')
<div class="container-fluid">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Pessoa</th>
                <th>Unidade</th>
                <th>Vacina</th>
                <th>Dose</th>
                <th>Da</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registro as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->pessoa->nome }} </td>
                    <td>{{ $e->unidade->nome }} </td>
                    <td>{{ $e->vacina->nome }} </td>
                    <td>{{ $e->dose }} </td>
                    <td>
                        <button type="button" class="btn btn-outline-light btn-sm">
                            <a id="botaotabela" href="{{route('registros.edit', $e->id)}}">Editar</a>
                        </button>  
                    </td>
                    <td>
                        <form name="frmDelete"
                            action="{{ route('registros.destroy', $e->id)}}"
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
            <a id="botao" href="{{route('registros.create')}}" >Cadastrar</a>  
        </button>
    </div>
</div>
                    
@endsection