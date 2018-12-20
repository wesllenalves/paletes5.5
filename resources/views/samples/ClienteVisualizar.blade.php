@extends('dashboard')
@section('content')
<div class="container-fluid">
<div class="animated fadeIn">

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <strong>Detalhes</strong>
                <small>Cliente</small>
              </div>
              <div class="card-body">
              @foreach ($clientes as $cliente)
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" value="{{$cliente->name}}" disabled>
                    </div>
                    <div class="col-sm-3">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" value="{{$cliente->cpf}}" disabled>
                    </div>
                    <div class="col-sm-3">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" name="telefone" id="telefone" value="{{$cliente->telefone}}" disabled>
                    </div>

                </div>

                

                <div class="form-group row">
                <div class="col-sm-4">
                  <label for="email">E-mail</label>
                  <input type="text" class="form-control" name="email" id="email" value="{{$cliente->email}}" disabled>
                </div>
                <div class="col-sm-5">
                  <label for="endereco">Endereco</label>
                  <input type="text" class="form-control" name="endereco" id="endereco" value="{{$cliente->endereco}}" disabled>
                </div>
                <div class="col-sm-3">
                  <label for="cidade">Cidade</label>
                  <input type="text" class="form-control" name="cidade" id="cidade" value="{{$cliente->cidade}}" disabled>
                </div>
                </div>

                <div class="form-group row">
                <div class="col-sm-6">
                  <label for="complemento">Complemento</label>
                  <input type="text" class="form-control" name="complemento" id="complemento" value="{{$cliente->complemento}}" disabled>
                </div>
                </div>

                <div class="row btn-visualizar">
                  <a href="/sample/cliente/clienteEditar/{{$cliente->id}}"><button type="button" class="btn btn-primary">Editar</button></a>
                  <a href="/sample/cliente"><button type="button" class="btn btn-warning">Voltar</button></a>
                </div>
                <!--/.row-->
                @endforeach
              
              </div>
            </div>
            </div>
        </div>
    </div>
</div>


@endsection