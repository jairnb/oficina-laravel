@extends('adminlte::page')

@section('title', 'Cliente')

@section('content_header')
    <h1>Clientes</h1>
@stop

{{-- @section('meta-data')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop --}}

@section('content')
    
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
             {{-- <button class="btn btn-info d-block" data-toggle="modal" data-target="#createClient">
                <i class="fa fa-plus"></i> Adicionar Cliente
            </button>            --}}
            <a href="{{ route('client.create')}}" class="btn btn-info"><i class="fa fa-plus"></i> Adicionar Cliente</a>
        </div>

        <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>NIF</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>    
                @forelse ($clients as $client)
                    <tr>
                        <td>{{$client->name}}</td>
                        <td>{{$client->email}}</td>
                        <td>{{$client->nif}}</td>
                        <td>{{$client->phone}}</td>
                        <td>
                            <a href="{{url('client/'.$client->id.'/edit')}}"> <i class="fa fa-pencil-square-o oficina-icone-atu"></i> </a>
                            
                            <a href="#" data-toggle="modal" data-target="#detailClient"> <i class="fa fa-eye"></i> </a>
                            <a href="#" data-toggle="modal" data-target="#detailClient"> <i class="fa fa-trash oficina-icone-del"></i> </a>
                            
                            <form action="{{ url('client/'.$client->id)}}" class="pull-right" method="post">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                {{-- <button type="submit"> <i class="fa fa-trash oficina-icone-del"></i> </button> --}}
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
                    <th>Email</th>
                    <th>NIF</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </tfoot>
            </table>
        </div>      
    </div>
</div>

{{-- @include('sistema.client.create') --}}
@include('sistema.client.details')


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

    {{-- <script> 
        $("#save-client").click(function (e) { e.preventDefault();
            // $.ajaxSetup({                
            // });
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },                
                type: 'POST',
                url: '{{ url('client') }}',
                data: $('#clientForm').serialize(), 
                dataType: 'json',
                success: function(data) {
                    console.log(data.user)
                }
            });
        })
    </script> --}}
@stop