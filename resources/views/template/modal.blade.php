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

                @foreach($cliente as $clientes)

                    <input type="text" value="{{ $clientes->nombre_cli }}" class="form-control col-xs-6">
                @endforeach

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>