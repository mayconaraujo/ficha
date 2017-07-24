<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker3.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/FontAwesome.otf">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.eot">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.svg">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.min.css') }}">
    <style>
        body {
            padding-top: 30px;
        }
    </style>
</head>
<body>
<div class="ui container">
    <header class="">

        <div class="ui inverted segment menu">

            <a href="{{ url('/') }}" class="ui inverted button ">
                Inicio
            </a>
            <a href="{{ url('/ficha/criar') }}" class="ui  inverted blue button ">
                Adicionar ficha
            </a>
            <a href="{{ url('/gravar-compras') }}" class="ui  inverted blue button ">
                Gravar compras
            </a>
            <a href="{{ url('/relatorios') }}" class="ui  inverted blue button ">
                Relatórios
            </a>

        </div>
        <hr>
    </header>
    @yield('content')
</div>
<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>

<script>
    $('#table').each(function (i) {
        var worktable = $(this);
        var num_head_columns = worktable.find('thead tr th').length;
        var rows_to_validate = worktable.find('tbody tr');
        rows_to_validate.each(function (i) {
            var row_columns = $(this).find('td').length;
            for (i = $(this).find('td').length; i < num_head_columns; i++) {
                $(this).append('<td class="hidden"></td>');
            }
        });
    });
</script>
<script type="text/javascript" src="{{ asset('js/semantic.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script>$.fn.poshytip={defaults:null}</script>
<script>
    $(document).ready(function () {

        $('.menu .item').tab();
        $("a#editar").click(function () {
            $('.fullscreen.modal').modal('show');
        });

        var table = $('#table').DataTable({
            //'ajax': '',
            'columnDefs': [{
                'targets': 0,
                'searchable': false,
                'orderable': false,
                'className': 'dt-body-center',
                //'render': function (data, type, full, meta) {
                    //return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
                //}
            }],
            'order': [1, 'asc'],
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                },
            },
            "lengthMenu": [
                [4, 6, -1],
                [4, 6, "All"]
            ],
        });

    });

    var date_input = $('input[name="data_compra"]');
    date_input.datepicker({
        format: 'dd/mm/yyyy',
        todayHighlight: true,
        autoclose: true,
    });
</script>
</body>
</html>
