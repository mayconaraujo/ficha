@extends('layouts.master')

@section('content')

    <div class="ui container">
        <header class="ui header">
            <h1 class="">
                <i class="fa  fa-money" aria-hidden="true"></i>
                Lista de compras
            </h1>
            <a href="{{ url('/gravar-compras/granvar') }}" class="ui positive button">
                Adicionar Compras
                <i class="fa fa-floppy-o" aria-hidden="true"></i>
            </a>


        </header>
        <hr>
        <div class="ui form">
            <table class="ui celled table">
                <thead>
                <tr>

                    <th>Data da compra</th>
                    <th>Nome empresa</th>
                    <th>Nome vendedor</th>
                    <th>Valor</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($gravarcompras as $gravarcompra)
                        <td>{{ date("d/m/Y",strtotime($gravarcompra->data_compra)) }}</td>
                        <td>{{ $gravarcompra->nome_empresa }}</td>
                        <td>{{ $gravarcompra->nome_vendedor }}</td>
                        <td>{{ $gravarcompra->valor }}</td>
                        <td>
                            <div class="ui buttons">
                                <a href="{{ url('/gravar-compras/editar/' . $gravarcompra->id) }}"
                                   class="ui positive button">
                                    <i class="fa fa-1x fa-pencil-square" aria-hidden="true"></i>
                                </a>
                                <div class="or" data-text="ou"></div>
                                <a href="{{ url('/gravar-compras/apagar/' . $gravarcompra->id) }}"
                                   class="ui negative button" onclick="return confirm('tem certeza ?')">
                                    <i class="fa fa-1x fa-window-close" aria-hidden="true"></i>
                                </a>

                            </div>
                        </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection
