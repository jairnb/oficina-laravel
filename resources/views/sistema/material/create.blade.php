@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
    <h3 class="pull-center">Adicionar Material</h3>
@stop

@section('content')
    <form id="materialform" method="POST" action="{{ route('material.store')}}"> 
        {{csrf_field()}}
        @include('sistema.material.form')
    </form>
@stop

