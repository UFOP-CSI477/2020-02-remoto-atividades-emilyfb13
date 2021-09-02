@extends('principal')

@section('conteudo')

<form action="{{ route('compra.store')}}" method="post">

    @csrf

    <div class="container-sm form-group">
        <label id="labeltabela" for="pessoa_id">Pessoa</label>
        <select name="pessoa_id" id="pessoa_id" class="form-control">
            @foreach($pessoa as $e)
                <option value="{{$e->id}}">{{$e->nome}}</option>
            @endforeach
        </select>
        <label id="labeltabela" for="produto_id">Produto</label>
        <select name="produto_id" id="produto_id" class="form-control">
            @foreach($produto as $e)
                <option value="{{$e->id}}">{{$e->nome}}</option>
            @endforeach
        </select>
        <label id="labeltabela" for="data">Data</label>
        <input type="date" class="form-control" name="data" id="data">
    </div>

    <div class="container text-right">
        <input type="submit" value="Cadastrar" class="btn-sm" id="botao">
        <input type="reset" value="Limpar" class="btn-sm" id="botao">
    </div>

</form>

@endsection
