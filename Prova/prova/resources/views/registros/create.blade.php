@extends('administrativo')

@section('conteudo2')

<form action="{{ route('registros.store')}}" method="post">

    @csrf

    <div class="container-sm form-group">
        <label id="labeltabela" for="pessoa_id">ID da Pessoa</label>
            <select name="pessoa_id" id="pessoa_id" class="container-sm form-control">

                @foreach($pessoa as $e)
                    <option value="{{$e->id}}">{{$e->nome}}</option>
                @endforeach

            </select>
    </div>
    <div class="container-sm form-group">
        <label id="labeltabela" for="unidade_id">ID da Unidade</label>
            <select name="unidade_id" id="unidade_id" class="container-sm form-control">

                @foreach($unidade as $e)
                    <option value="{{$e->id}}">{{$e->nome}}</option>
                @endforeach

            </select>
    </div>
    <div class="container-sm form-group">
        <label id="labeltabela" for="vacina_id">ID da Vacina</label>
            <select name="vacina_id" id="vacina_id" class="container-sm form-control">

                @foreach($vacina as $e)
                    <option value="{{$e->id}}">{{$e->nome}}</option>
                @endforeach

            </select>
    </div>
    <div class="container-sm form-group">
        <label id="labeltabela" for="dose">Dose</label>
        <input type="number" class="form-control" name="dose" id="dose">
        <label id="labeltabela" for="data">Data</label>
        <input type="date" class="form-control" name="data" id="data">
    </div>

    <div class="container text-right">
        <input type="submit" value="Cadastrar" class="btn-sm" id="botao">
        <input type="reset" value="Limpar" class="btn-sm" id="botao">
    </div>

</form>

@endsection