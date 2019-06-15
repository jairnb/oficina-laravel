@extends('adminlte::page')

@section('title', 'Funcionario')

@section('content_header')
    <h3 class="pull-center">Adicionar Funcionario</h3>
@stop

@section('content')
    <div class="col-md-6 client-form">
        <form method="POST" action="{{ route('funcionario.store')}}"> 
            {{csrf_field()}}
            <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="nome" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>NIF</label>
                    <input type="text" name="nif" class="form-control">
                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" name="telefone" class="form-control">
                </div> 
                <div class="form-group">
                    <label>Cargo</label>
                    <input type="text" name="cargo" class="form-control">
                </div>
                <div class="form-group">                        
                    <label for="sel1">Selecionar Estado:</label>
                    <select class="form-control" name="estado" id="sel1">
                        <option>Ativo</option>
                        <option>Desativo</option>
                    </select>                             
                </div>
                <div>
                    <button class="btn btn-danger pull-right btn-save">Cancelar</button>
                    <button class="btn btn-success pull-right " type="submit">Salvar</button>
                </div>  
        </form>
    </div>
@stop
