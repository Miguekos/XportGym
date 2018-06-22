@extends('layouts.app')



@section('title','Membresias')

@section('content')
<div class="panel-heading">
    <h4><b>Membresias</b> <small><a class="btn btn-sm btn-success pull-right" href="{{ route('cliente.create') }}">Nueva Membresia</a></small></h4>
</div>

<div class="panel-body">
    {{--<table class="table datatable table-bordered table-hover table-striped">--}}
    <table id="example" class="table datatable example">
        <thead>
        <tr>
            <th>#</th>
            <th>Nombres</th>
            <th>DNI</th>
            <th>Membresia</th>
            <th>Inicio</th>
            <th>Expira</th>
            <th>Deuda</th>
            <th width="15%">Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cliente as $clientes)
        <tr>
            <td>{{ $clientes->id }}</td>
            <td>{{ $clientes->nombre_cli }}</td>
            <td>{{ $clientes->dni }}</td>
            <td>{{ $clientes->promo_id($clientes->promo) }}</td>
            <td>{{ $clientes->fecha_de_inicio }}</td>
            <td>{{ $clientes->fecha_fin }}</td>
            <td>{{ $clientes->id }}</td>
            <td>
                <a class="btn btn-sm btn-warning" href="#">Editar</a>
                <a class="btn btn-sm btn-danger" href="#">Eliminar</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

</div>

<div class="panel-footer">
    <small>miguekos1233@gmail.com</small>
</div>

@endsection