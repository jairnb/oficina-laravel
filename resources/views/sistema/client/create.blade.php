@extends('adminlte::page')

@section('title', 'Cliente')

@section('content_header')
    <h3 class="pull-center">Adicionar Cliente</h3>
@stop

@section('content')
    <div class="col-md-6 client-form">
        <form method="POST" action="{{ route('client.store')}}"> 
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
                    <label>NIF</label>
                    <input type="text" name="nif" class="form-control">
                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" name="phone" class="form-control">
                </div> 
                <div>
                    <button class="btn btn-danger pull-right btn-save">Cancelar</button>
                    <button class="btn btn-success pull-right " type="submit">Salvar</button>
                </div>  
        </form>
    </div>
@stop








{{-- 
<div class="modal fade text-dark" id="createClient">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Adicionar Cliente</h5>
                    <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body"> 
                    <form  id="clientForm" name="clientForm">             
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" class="form-control">
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
                            <input type="text" name="phone" class="form-control">
                        </div> 
                    </form> 
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        <button class="btn btn-success" id="save-client" data-dismiss="modal">Salvar</button>
                    </div>              
                </div>                
            </div>
        </div>
    </div> --}}

