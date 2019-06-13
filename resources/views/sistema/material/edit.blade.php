@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
    <h3 class="pull-center">Editar Material</h3>
@stop

@section('content')
    <form id="materialform" method="POST" action="{{ url('material/'.$material->id)}}"> 
        {{csrf_field()}}
        {{ method_field('PATCH') }}
        <div class="col-md-6 m-auto">               
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" value="{{ old('material', $material->name) }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">Preço</label>
                    <input id="price" name="price" value="{{ old('material', $material->price) }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="stock">Quantidade</label>
                    <input type="number" id="stock" name="stock" value="{{ old('material', $material->stock) }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Descrição</label>
                    <textarea name="description"  cols="30" rows="3" class="form-control">{{$material->description}}</textarea>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit" form="materialform" data-dismiss="modal">Salvar</button>
                </div>     
            </div> 
    </form>
@stop

