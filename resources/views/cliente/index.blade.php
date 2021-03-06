@extends('layouts.app')


@section('title','Membresias')

@section('content')
<div class="panel-heading">
    <h4><b>Membresias</b> <small><a class="btn btn-sm btn-success pull-right" href="{{ route('cliente.create') }}">Nueva Membresia</a></small></h4>
</div>

<div class="panel-body">
    {{--<table class="table datatable table-bordered table-hover table-striped">--}}
    <table id="datatable" class="table table-hover compact table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th width="10px">#</th>
            <th>Nombres</th>
            <th>DNI</th>
            <th>Membresia</th>
            <th class="text-center">Inicio</th>
            <th class="text-center">Expira</th>
            <th class="text-center">Deuda</th>
            <th>Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cliente as $clientes)
        <tr>
            <td class="text-center">{{ $clientes->id }}</td>
            <td data-toggle="modal" data-target="#myModal{{ $clientes->id }}">{{ $clientes->nombre_cli }}</td>
            <td>{{ $clientes->dni }}</td>
            <td>{{ $clientes->promo_id($clientes->promo) }}</td>
            <td class="text-center">{{ date('d-m-Y', strtotime($clientes->fecha_de_inicio)) }}</td>
            <td class="text-center">{{ date('d-m-Y', strtotime($clientes->fecha_fin)) }}</td>
            <td data-toggle="modal" data-target="#myModal{{ $clientes->id }}" class="text-center">{{ $clientes->deuda }}</td>
            <td>
                <form action="{{ route('cliente.destroy',$clientes->id) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <a class="btn btn-xs btn-info" href="{{ route('cliente.show',$clientes->id) }}">Ver</a>
                  <a class="btn btn-xs btn-warning" href="{{ route('cliente.edit',['edit' => $clientes->id]) }}">Editar</a>
                  <input type="submit" class="btn btn-xs btn-danger" value="Eliminar">
                </form>
            </td>
        </tr>
        @include('template.modal')
        @endforeach

        </tbody>
    </table>

</div>
<!-- Modal -->
<div id="myModal{{ $clientes->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{ $clientes->nombre_cli }}</h4>
            </div>
            <div class="modal-body">

                <div class="container-fluid">
                    <label for="">Abono</label>
                    <input type="text" class="form-control col-xs-6">
                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
{{--<div class="panel-footer">
    <small>miguekos1233@gmail.com</small>
</div>--}}

@endsection
