@extends('principal')

@section('conteudo')

<form action="{{ route('pessoa.store')}}" method="post">

    @csrf

    <div class="container-sm form-group">
        <label id="labeltabela" for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
        <label id="labeltabela" for="cidade_id">Cidade</label>
        <select name="cidade_id" id="cidade_id" class="form-control">
            @foreach($cidade as $e)
                <option value="{{$e->id}}">{{$e->nome}}</option>
            @endforeach
        </select>
    </div>

    <div class="container text-right">
        <input type="submit" value="Cadastrar" class="btn-sm" id="botao">
        <input type="reset" value="Limpar" class="btn-sm" id="botao">
    </div>

</form>

@endsection
