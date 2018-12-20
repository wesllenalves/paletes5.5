@extends('dashboard')
@section('content')
<div class="container-fluid">
<div class="animated fadeIn">

<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <i class="fa fa-align-justify"></i> Combined All Table
        </div>
        <div class="card-body">
        <div style="overflow: auto; width: 980px">
          <table class="table table-responsive-sm table-bordered table-striped table-sm">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Medidas</th>
                <th>Descricao</th>
                <th>Valor Medio</th>
                <th>Gasto Medio</th>
                <th>Lucro Medio</th>
                <th>Tempo de Fabricação</th>
                <th>Categoria</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($produtos as $produto)
                  
              
              <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->medidas}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->valorMedio}}</td>
                <td>{{$produto->gastoMedio}}</td>
                <td>{{$produto->lucroMedio}}</td>
                <td>{{$produto->tempoFabricacao}}</td>
                <td>{{$produto->categoria}}</td>
                <td style="width:25%;">

                    <a href="/sample/produto/visualizar/{{$produto->idProduto}}"><button type="button" class="btn-sm btn-success">Mais Detalhes</button></a>
                    <a href="/sample/produto/produtoEditar/{{$produto->idProduto}}"><button type="button" class="btn-sm btn-primary">Editar</button></a>
                    <a href="/sample/produto/deletar/{{$produto->idProduto}}"><button type="button" class="btn-sm btn-danger">Remover</button></a>
                    
                </td>                
              </tr>
              @endforeach
              
            </tbody>
          </table>
          </div>
          
          <nav>
              {!! $produtos->render("pagination::bootstrap-4") !!}
          </nav>
        </div>
      </div>
    </div>
    <!--/.col-->
  </div>

</div>

</div>

@endsection