@extends('administrativo')

@section('conteudo2')

<form action="{{ route('registros.update', $registro->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="container-sm form-group">
        <label id="labeltabela" for="pessoa_id">ID da Pessoa</label>
            <select name="pessoa_id" id="pessoa_id" class="container-sm form-control">

                @foreach($pessoa as $e)
                    <option value="{{$e->id}}"

                    @if($registro->pessoa_id == $e->id)
                        selected
                    @endif

                    >{{$e->nome}}</option>
                @endforeach

            </select>
    </div>
    <div class="container-sm form-group">
        <label id="labeltabela" for="unidade_id">ID da Pessoa</label>
            <select name="unidade_id" id="unidade_id" class="container-sm form-control">

                @foreach($unidade as $e)
                    <option value="{{$e->id}}"

                    @if($registro->unidade_id == $e->id)
                        selected
                    @endif

                    >{{$e->nome}}</option>
                @endforeach

            </select>
    </div>
    <div class="container-sm form-group">
        <label id="labeltabela" for="vacina_id">ID da Pessoa</label>
            <select name="pessoa_id" id="vacina_id" class="container-sm form-control">

                @foreach($vacina as $e)
                    <option value="{{$e->id}}"

                    @if($registro->vacina_id == $e->id)
                        selected
                    @endif

                    >{{$e->nome}}</option>
                @endforeach

            </select>
    </div>
    <div class="container-sm form-group">
        <label id="labeltabela" for="dose">Dose</label>
        <input type="number" class="form-control" name="dose" id="dose" value="{{ $registro->dose }}">
        <label id="labeltabela" for="data">Data</label>
        <input type="date" class="form-control" name="data" id="data" value="{{ $registro->data }}">
    </div>  

    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn-lg" id="botao">
        <input type="reset" value="Limpar" class="btn-lg" id="botao">
    </div>

</form>

@endsection