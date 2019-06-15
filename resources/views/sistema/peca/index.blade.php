@extends('adminlte::page')

@section('title', 'Peças')

@section('content_header')
    <h3>Peças</h3>
@stop

@section('content')

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
            <a href="{{ route('peca.create')}}" class="btn btn-info"><i class="fa fa-plus"></i> Adicionar Peça</a>
        </div>

        <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>    
                @forelse ($pecas as $peca)
                    <tr>
                        <td>{{$peca->nome}}</td>
                        <td>{{$peca->preco}}</td>
                        <td>{{$peca->quantidade}}</td>
                        <td>
                            <a href="#"> <i class="fa fa-pencil-square-o oficina-icone-atu"></i> </a>
                            <a href="#"> <i class="fa fa-trash oficina-icone-del"></i> </a>
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
                    <th>Quantidade</th>
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
@Push('https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js')











