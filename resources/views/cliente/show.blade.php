@extends('layouts.app')

@section('title','Detalle')

@section('content')

    <div class="panel-heading">
        <h4>{{ $clientes->nombre_cli }} <span class="pull-right"><small>DNI: </small> {{ $clientes->dni }}</span></h4>
    </div>

    <div class="panel-body">

        <table class="table table-bordered table-striped">
            <colgroup>
                <col class="col-xs-1">
                <col class="col-xs-7">
            </colgroup>
            <thead>
            <tr>
                <th>Item</th>
                <th>Descripcion</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"> <code>Promocion</code> </th>
                <td>{{ $clientes->promo_id($clientes->promo) }}</td>
            </tr>
            <tr>
                <th scope="row"> <code>Fecha Inicio</code> </th>
                <td>{{ date('d-m-Y', strtotime($clientes->fecha_de_inicio))  }}</td>
            </tr>
            <tr>
                <th scope="row"> <code>Fecha Fin</code> </th>
                <td>{{ date('d-m-Y', strtotime($clientes->fecha_fin))  }}</td>
            </tr>
            <tr>
                <th scope="row"> <code>Monto a pagar </code>
                </th> <td>{{ $clientes->monto}}</td>
            </tr>
            <tr>
                <th scope="row"> <code>Deuda </code>
                </th> <td>{{ $clientes->deuda }}</td>
            </tr>
            <tr>
                <th scope="row"> <code>Atendido por: </code>
                </th> <td>{{ $clientes->user_nombre }}</td>
            </tr>
            </tbody>
        </table>


    </div>

    <div class="panel-footer">
        miguekos1233@gmail.com
    </div>

@endsection