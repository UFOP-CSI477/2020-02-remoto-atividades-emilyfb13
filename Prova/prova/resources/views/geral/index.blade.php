@extends('geral')

@section('conteudo3')
<div class="container-sm col-6"> 
    <h3>Total geral vacinadas aplicadas: </h3>
    <table class="table">
        <thead>
            <tr>
                <th>Aplicação</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
                <td>Dose única</td>
                <td>{{ $total_dose_unica}}</td>
        </tbody>
        <tbody>
                <td>Primeira Dose</td>
                <td>{{ $total_primeira_dose}}</td>
        </tbody>
        <tbody>
                <td>Segunda Dose</td>
                <td>{{ $total_segunda_dose}}</td>
        </tbody>
        <tbody>
                <td style="background-color: #A9A9A9">TOTAL GERAL</td></td>
                <td style="background-color: #A9A9A9">{{ $total_geral}}</td>
        </tbody>
    </table>   
    <div class="container" style="padding: 1%;"></div>
    <h3>Total geral vacinadas aplicadas: </h3> 
    <table class="table">
        <thead>
            <tr>
                <th>Vacina</th>
                <th>Quantidade</th>
                <th>Porcentagem</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quantidade_vacina as $e)
                <tr>   
                    @foreach($vacina as $v)
                        @if($v->id == $e->vacina_id)
                        <td>  {{$v->nome}} </td>
                        @endif
                    @endforeach     
                    <td>{{ $e->soma}}</td>
                    <td>{{($e->soma / $registros) * 100}}%</td>
                </tr>
            @endforeach   
        </tbody>
        <tbody>
            <td style="background-color: #A9A9A9">TOTAL GERAL</td>
            <td style="background-color: #A9A9A9">{{$registros}}</td>
            <td style="background-color: #A9A9A9">100%</td>
        </tbody>
    </table>    
</div>
@endsection             
