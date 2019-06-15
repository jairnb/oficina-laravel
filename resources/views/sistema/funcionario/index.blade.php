@extends('adminlte::page')

@section('title', 'Funcionario')

@section('content_header')
    <h1>Funcionarios</h1>
@stop

@section('content')
    
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
            <a href="{{ route('funcionario.create')}}" class="btn btn-info"><i class="fa fa-plus"></i> Adicionar Funcionario</a>
        </div>

        <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>NIF</th>
                    <th>Telefone</th>
                    <th>Cargo</th>
                    <th>Estado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>    
                @forelse ($funcionarios as $funcionario)

                    
                    <tr>
                        <td>{{$funcionario->nome}}</td>
                        <td>{{$funcionario->email}}</td>
                        <td>{{$funcionario->nif}}</td>
                        <td>{{$funcionario->telefone}}</td>
                        <td>{{$funcionario->cargo}}</td>
                        <td>{{$funcionario->estado}}</td>
                        <td>
                            <a href="#"> <i class="fa fa-pencil-square-o oficina-icone-atu"></i> </a>
                            <a href="#"> <i class="fa fa-eye"></i> </a>
                            {{-- <a href="#"> <i class="fa fa-trash oficina-icone-del"></i> </a> --}}
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
                    <th>Email</th>
                    <th>NIF</th>
                    <th>Telefone</th>
                    <th>Cargo</th>
                    <th>Estado</th>
                    <th>Ações</th>
                </tr>
            </tfoot>
            </table>
        </div>      
    </div>
</div>

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