@extends('layouts.app')

@section('title','Promociones')

@section('content')

    <div class="panel-heading">
        <h4><b>Promociones</b> <small><a class="btn btn-sm btn-success pull-right" href="{{ route('promo.create') }}">Nueva Promocion</a></small></h4>
    </div>
    <div class="panel-body">
        <!-- <table class="table datatable"> -->
        <table id="datatable" class="table table-hover table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Dias</th>
                    <th>Precio</th>
                    {{--<th width="150px">Accion</th>--}}
                    <th width="15%">Accion</th>
                </tr>
            </thead>
            <tbody>
            @foreach($promos as $promo)
                <tr>
                    <td>{{ $promo->id }}</td>
                    <td>{{ $promo->nombre_pro }}</td>
                    <td>{{ $promo->dias }}</td>
                    <td>{{ $promo->precio }}</td>
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
@endsection()
