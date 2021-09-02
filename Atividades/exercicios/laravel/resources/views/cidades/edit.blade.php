@extends('principal')

@section('conteudo')

<form action="{{ route('cidade.update', $cidade->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="container-sm form-group">
        <label id="labeltabela" for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ $cidade->nome }}">
        <label id="labeltabela" for="estado_id">Estado</label>
            <select name="estado_id" id="estado_id" class="form-control">
            @foreach($estados as $e)
                <option value="{{$e->id}}"

                @if($cidade->estado_id == $e->id)
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