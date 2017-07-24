@extends('layouts.master')
@section('content')

<table class="table table-hover" id="table">
    <thead>
        <tr>
            <th>Data da compra</th>
            <th>Nome empresa</th>
            <th>Nome vendedor</th>
            <th>Total compra</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach ($listarcoCompras as $listas)

            <td>{{ date("d/m/y",strtotime($listas->data_compra)) }}</td>
            <td> {{ $listas->nome_empresa }}</td>
            <td> {{ $listas->nome_vendedor }}</td>
            <td> {{ $listas->valor }}</td>
            <td>
                 <div class="ui buttons">
                                <a class="ui black button" id="editar"
                                   href="{{ url('/relatorios/save/' .$listas->id) }}">
                                   <i class="fa fa-1x fa-file-pdf-o" aria-hidden="true"></i>
                                </a>
                                <div class="or" data-text="ou"></div>

                                <a href="{{ url('/relatorios/print/' . $listas->id ) }}" class="ui positive button">

                                    <i class="fa fa-1x fa-print" aria-hidden="true"></i>
                                </a>

                            </div>

            </td>
        </tr>
        {{-- expr --}}
        @endforeach
    </tbody>
</table>

@endsection
