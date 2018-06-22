@extends('layouts.app')

@section('title','Nueva Promocion')

@section('content')

    <div class="panel-heading">
        <h4>Nueva Promosion</h4>
    </div>
    <div class="panel-body">
        <form action="{{ route('promo.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-warning" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: solid orange 1px; border-radius: 5px;">
                        <div class="panel-heading">
                            Informacion
                        </div>
                        <div class="panel-body">
                            <div class="form-group col-lg-6">
                                <label>Nombre de la Promocion</label>
                                <input type="text" name="nombre_pro" class="form-control" required placeholder="Promocion">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Precio</label>
                                <input type="text" name="precio" class="form-control" required placeholder="Monto de la Membresia">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Tiempo de la Membresia</label>
                                <input type="number" name="dias" required class="form-control" placeholder="Dias">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Agregado Por:</label>
                                <input type="text" readonly value="Miguel" name="user_nombre" required class="form-control" placeholder="Nombre">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Nota</label>
                                <textarea name="" class="form-control" placeholder="Nota"></textarea>
                            </div>
                            <div class="form-group col-lg-12 text-center">
                                <input type="hidden" name="id" value="">
                                <button type="submit" onclick="guardar()" class="btn btn-block btn-warning">Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="panel-footer">
        miguekos1233@gmail.com
    </div>
@endsection()