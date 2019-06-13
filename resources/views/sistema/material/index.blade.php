@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
    <h3>Materias</h3>
@stop

@section('content')

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
            {{-- <button class="btn btn-info d-block" data-toggle="modal" data-target="#createMaterial">
                <i class="fa fa-plus"></i> Adicionar Material
            </button>            --}}
            <a href="{{ route('material.create')}}" class="btn btn-info"><i class="fa fa-plus"></i> Adicionar Material</a>
        </div>

        <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Stock</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>    
                @forelse ($materials as $material)
                    <tr>
                        <td>{{$material->name}}</td>
                        <td>{{$material->price}}</td>
                        <td>{{$material->stock}}</td>
                        <td>{{$material->description}}</td>
                        <td>
                            <a href="{{url('material/'.$material->id.'/edit')}}"> <i class="fa fa-pencil-square-o oficina-icone-atu"></i> </a>
                            
                            <form action="{{ url('material/'.$material->id)}}" class="pull-right" method="post">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <button type="submit"> <i class="fa fa-trash oficina-icone-del"></i> </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="90">
                            <p>Nenhum elemento encontrado!!!</p>
                        </td>
                    </tr>
                @endforelse        
                
            </tbody>
            <tfoot>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Stock</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </tfoot>
            </table>
        </div>

      
    </div>
</div>

{{-- @include('sistema.material.form') --}}


@stop

@section('adminlte_js')
    <script>
        $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : false,
            'info'        : true,
            'autoWidth'   : true
        })
        })
    </script>

@stop
@Push('https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js')











