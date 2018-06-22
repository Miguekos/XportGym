<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

        th {text-align: left;}
    </style>
</head>
<body>

<?php
date_default_timezone_set('America/Lima');

    echo"
            <div class='col-sm-12'>
                <label>Nombre de la Membresia</label>
                <input type='text' readonly id='nombre_pro' name='' class='form-control' value='" . $promo->nombre_pro . "' >
            </div>

            <div class='col-sm-6'>
                <label>Dias</label>
                <input type='text' readonly id='tiempo_mem' name='' class='form-control' value='" . $promo->dias . "' >
            </div>

            <div class='col-sm-6'>
            <label>Precio</label>
            <input type='text' readonly id='monto' name='' class='form-control' value='" . $promo->precio . "' >
            </div>
         ";



$fecha_actual = date("Y-m-d");
//sumo 1 día
$dias_mem = "+ ". $promo->dias ." days";
//echo "DIASSSS" . $dias_mem;
$fecha_fin = date("Y-m-d",strtotime($fecha_actual."$dias_mem"));
//resto 1 día
$fecha_alert = date("Y-m-d",strtotime($fecha_fin."- 15 days"));

echo "


    <label>Fecha de Inicio</label>
    <input type='date' id='fecha_de_inicio' name='fecha_de_inicio' class='form-control' value='" . $fecha_actual . "' >

    <label>Fecha de Fin</label>
    <input type='date' id='fecha_fin' name='fecha_fin' class='form-control' value='" . $fecha_fin . "' >

    <label>Fecha de Alerta</label>
    <input type='date' id='fecha_alert' name='fecha_alert' class='form-control' value='" . $fecha_fin . "' >


    ";

?>

</body>

<script type="text/javascript">
    $(document).ready(function(){
        $(".datatable").DataTable({
            "ordering":true,
            "language": {
                "sProcessing":    "Procesando...",
                "sLengthMenu":    "Mostrar _MENU_ registros",
                "sZeroRecords":   "No se encontraron resultados",
                "sEmptyTable":    "Ningún dato disponible en esta tabla",
                "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":   "",
                "sSearch":        "Buscar:",
                "sUrl":           "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":    "Último",
                    "sNext":    "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });
</script>
