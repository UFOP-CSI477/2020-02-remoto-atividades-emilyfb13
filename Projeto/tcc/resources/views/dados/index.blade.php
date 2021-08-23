@extends('principal')

@section('head')
    

     <!-- Script botão formulario -->
     <script>
        function mostra(id) {
          if (document.getElementById(id).style.display == 'block'){
            document.getElementById(id).style.display = 'none';
          }else{
            document.getElementById(id).style.display = 'block';
          }
        }
      </script>
@endsection

@section('conteudo')
<div class="container-fluid">
  <div class="row">
        <div class="col-md-8" id="texto">
            <form id="font">
                <div class="form-group">
                   <textarea class="form-control" name="teste" rows="13" value=""></textarea>
                </div>
            </form>
        </div>
        <div class="col-md-4" id="opcoes">
            <div class="row" id="simbolos">
                <div class="col-md-2">
                    <button class="btn-lg" id="simbolo">
                        X
                    </button>
                </div>
                <div class="col-md-2">
                    <button class="btn-lg" id="simbolo" >X</button>
                </div>
                <div class="col-md-2">
                    <button class="btn-lg" id="simbolo"> X</button>
                </div>
                <div class="col-md-2">
                    <button class="btn-lg" id="simbolo"> X</button>
                </div>
            </div>
            <div class="row" id="simbolos">
                <div class="col-md-2">
                    <button class="btn-lg" id="simbolo">
                        X
                    </button>
                </div>
                <div class="col-md-2">
                    <button class="btn-lg" id="simbolo">X</button>
                </div>
                <div class="col-md-2">
                    <button class="btn-lg" id="simbolo"> X</button>
                </div>
                <div class="col-md-2">
                    <button class="btn-lg" id="simbolo"> X</button>
                </div>
            </div>
            <div class="row" id="simbolos">
                <div class="col-md-2">
                    <button class="btn-lg" id="simbolo">
                        X
                    </button>
                </div>
                <div class="col-md-2">
                    <button class="btn-lg" id="simbolo">X</button>
                </div>
                <div class="col-md-2">
                    <button class="btn-lg" id="simbolo"> X</button>
                </div>
                <div class="col-md-2">
                    <button class="btn-lg" id="simbolo"> X</button>
                </div>
            </div>
            <div class="row" id="simbolos">
                <div class="col-md-2">
                    <button class="btn-lg" id="simbolo">
                        X
                    </button>
                </div>
                <div class="col-md-2">
                    <button class="btn-lg" id="simbolo">X</button>
                </div>
                <div class="col-md-2">
                    <button class="btn-lg" id="simbolo"> X</button>
                </div>
                <div class="col-md-2">
                    <button class="btn-lg" id="simbolo"> X</button>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-4" style="margin-top: 1%">
                    <input class="btn-lg" id="botao" type='button' onClick="mostra('oculta')" value='Tabelas'/><br/>
                </div>
                <div class="col-md-4">
                    <form id="font">
                            <div class="form-group" style="margin-top: 3%">
                                <button class="btn-lg" id="botao">Consultar</button>
                            </div>
                    </form>
                </div>
            </div>
      </div>
  </div>
</div>

    <div class="hidden" id = 'oculta'>
        <div class="container-fluid">
            <ul class="nav nav-tabs">
                <li class="abaTabelaLinha">
                    <a id="abaTabela" data-toggle="tab" href="#menu1" >Dados 1</a>
                </li>
                <li class="abaTabelaLinha"><a id="abaTabela"data-toggle="tab" href="#menu2">Dados 2</a></li>
            </ul>

            <div class="tab-content">
                <div id="menu1" class="tab-pane fade">
                <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dados as $e)
                                <tr>
                                    <td>{{ $e->id }}</td>
                                    <td>{{ $e->nome }} </td>
                                    <td>{{ $e->sobrenome }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>     
                </div>
                <div id="menu2" class="tab-pane fade">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dados as $e)
                                <tr>
                                    <td>{{ $e->id }}</td>
                                    <td>{{ $e->nome }} </td>
                                    <td>{{ $e->sobrenome }}</td>
                                    <td>{{ $e->cidade }}</td>
                                    <td>{{ $e->estado }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>         
                </div>
            </div>
        </div>
    </div> 
@endsection