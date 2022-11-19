@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-dark">Translations</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="traducoes" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartas as $carta)
                        <tr>
                            <td>{{$carta->titulo}}</td>
                            <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#cardModal" onclick="atualizarCardModal('{{$carta->traducao}}')"><i class="far fa-eye"></i></button></i></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="cardModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100">Tradução</h4>
            </div>
            <div class="modal-body">
                <p id="texto_traducao"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>

    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#traducoes').DataTable({
            "language": {
                "search": "Procurar",
                "info": "Monstrando _START_ à _END_ no _TOTAL_ registros",
                "zeroRecords": "Nenhum registro encontrado",
                "paginate": {
                    "next": "Proximo",
                    "previous": "Anterior"
                }
            }
        });
    });

    function atualizarCardModal(texto) {
        $('#texto_traducao').text(texto);
    }
</script>
@endsection