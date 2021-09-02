@extends('principal')

@section('conteudo')
<div class="container-fluid">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Pessoa</th>
                <th>Produto</th>
                <th>Data</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($compra as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->pessoa->nome}}</td>
                    <td>{{ $e->produto->nome}}</td>
                    <td>{{ $e->data }} </td>
                    <td>
                        <button type="button" class="btn btn-outline-light btn-sm">
                            <a id="botaotabela" href="{{route('compra.edit', $e->id)}}">Editar</a>
                        </button>  
                    </td>
                    <td>
                        <form name="frmDelete"
                            action="{{ route('compra.destroy', $e->id)}}"
                            method="post"
                            onsubmit="return confirm('Confirma a exclusão da compra?');">

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
            <a id="botao" href="{{route('compra.create')}}" >Cadastrar</a>  
        </button>
    </div>
</div>
                    
@endsection