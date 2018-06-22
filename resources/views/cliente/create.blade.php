@extends('layouts.app')

@section('title','Nueva Membresia')

@section('content')

    <div class="panel-heading">
        <h4><b>Nueva Membresia</b></h4>
    </div>

    <div class="panel-body">
        <form action="{{ route('cliente.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-warning" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: solid orange 1px; border-radius: 5px;">
                        <div class="panel-heading">
                            Datos Personales
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group col-lg-12">
                                    <label>Membresia</label>
                                    <select name="promo" onchange="showPromo(this.value)" class="form-control">
                                        <option>---ELIGE UNA MEMBRESIA---</option>
                                        @foreach($promos as $promo)
                                            <option value="{{ $promo->id }}">{{ $promo->nombre_pro }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>
                            <div class="form-group col-lg-12" id="txtHint">
                                <!-- Aqui se muestra las membresias -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="panel panel-warning" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: solid orange 1px; border-radius: 5px;">
                        <div class="panel-heading">
                            Datos Tecnicos
                        </div>
                        <div class="panel-body">
                            <div class="form-group col-lg-6">
                                <label>Ruc o DNI</label>
                                <input type="text" name="dni" class="form-control" placeholder="Ruc o DNI">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Telf</label>
                                <input type="text" name="telf" class="form-control" placeholder="Telf">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Nombre Completo</label>
                                <input type="text" name="nombre_cli" class="form-control" placeholder="Nombre Completo">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Direccion</label>
                                <input type="text" name="" class="form-control" placeholder="Direccion">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Boleta N°:</label>
                                <input type="text" name="boleta" required class="form-control" placeholder="Numero de Boleta">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Atendido Por:</label>
                                <input type="text" readonly value="" name="user_nombre" required class="form-control" placeholder="Nombre">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Nota</label>
                                <textarea name="nota"  class="form-control" placeholder="Nota"></textarea>
                            </div>
                            <div class="form-group col-lg-12 text-center">

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

@endsection