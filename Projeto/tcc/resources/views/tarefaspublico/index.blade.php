@extends('principal')

@section('conteudo')
<div class="container">
    <div class="d-flex flex-row-reverse bd-highlight" style="margin-bottom:3%">
        <button class="btn-lg" id="botao" style="padding:1% 0% 1% 0%">
            <a id="botao"  href="{{route('tarefa.index')}}" >Area do Professor</a>  
        </button>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tarefa as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->descricao }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>    
</div>
                    
@endsection