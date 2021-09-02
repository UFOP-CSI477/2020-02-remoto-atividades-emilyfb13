@extends('principal')

@section('conteudo')
<div class="container-fluid">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Estado</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cidade as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->nome }} </td>
                    <td>{{ $e->estado->nome }}-{{ $e->estado->sigla }}</td>
                    <td>
                        <button type="button" class="btn btn-outline-light btn-sm">
                            <a id="botaotabela" href="{{route('cidade.edit', $e->id)}}">Editar</a>
                        </button>  
                    </td>
                    <td>
                        <form name="frmDelete"
                            action="{{ route('cidade.destroy', $e->id)}}"
                            method="post"
                            onsubmit="return confirm('Confirma a exclusão da cidade?');">

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
            <a id="botao" href="{{route('cidade.create')}}" >Cadastrar</a>  
        </button>
    </div>
</div>
                    
@endsection