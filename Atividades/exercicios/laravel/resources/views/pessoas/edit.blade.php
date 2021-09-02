@extends('principal')

@section('conteudo')

<form action="{{ route('pessoa.update', $pessoa->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="container-sm form-group">
        <label id="labeltabela" for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ $pessoa->nome }}">
        <label id="labeltabela" for="cidade_id">Cidade</label>
            <select name="cidade_id" id="cidade_id" class="form-control">
            @foreach($cidade as $e)
                <option value="{{$e->id}}"

                @if($pessoa->cidade_id == $e->id)
                    selected
                @endif

                >{{$e->nome}}</option>
            @endforeach
            </select>
    </div>

    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn-lg" id="botao">
        <input type="reset" value="Limpar" class="btn-lg" id="botao">
    </div>

</form>

@endsection