@extends('adminlte::page')

@section('title', 'Utilizador')

@section('content_header')
    <h3 class="pull-center">Adicionar Utilizador</h3>
@stop

@section('content')
    <div class="col-md-6 client-form">
        <form method="POST" action="{{ route('utilizador.store')}}"> 
            {{csrf_field()}}
            <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">                        
                    <label for="sel1">Função:</label>
                    <select class="form-control" name="type" id="sel1">
                        <option>Administrador</option>
                        <option>Atendente</option>
                        <option>Mecanico</option>
                    </select>                             
                </div>
                <div>
                    <button class="btn btn-danger pull-right btn-save">Cancelar</button>
                    <button class="btn btn-success pull-right " type="submit">Salvar</button>
                </div>  
        </form>
    </div>
@stop
