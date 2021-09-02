@extends('principal')

@section('conteudo')

<form action="{{ route('compra.update', $compra->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="container-sm form-group">
        <label id="labeltabela" for="pessoa_id">Pessoa</label>
            <select name="pessoa_id" id="pessoa_id" class="form-control">
            @foreach($pessoa as $e)
                <option value="{{$e->id}}"

                @if($compra->pessoa_id == $e->id)
                    selected
                @endif

                >{{$e->nome}}</option>
            @endforeach
            </select>
        <label id="labeltabela" for="produto_id">Produto</label>
            <select name="produto_id" id="produto_id" class="form-control">
            @foreach($produto as $e)
                <option value="{{$e->id}}"

                @if($compra->produto_id == $e->id)
                    selected
                @endif

                >{{$e->nome}}</option>
            @endforeach
            </select>

        <label id="labeltabela" for="data">Data</label>
        <input type="date" class="form-control" name="data" id="data" value="{{ $compra->data }}">
    </div>

    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn-lg" id="botao">
        <input type="reset" value="Limpar" class="btn-lg" id="botao">
    </div>

</form>

@endsection