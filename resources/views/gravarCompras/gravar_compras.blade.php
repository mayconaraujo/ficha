@extends('layouts.master')

@section('content')

    <div class="ui container">
        <br>
        <header class="ui header">
            <h1 class="">
                <i class="fa  fa-money" aria-hidden="true"></i>
                Salvar compras
            </h1>
        </header>
        <hr>
        <br>
        <br>
        <div class="ui form">
            <form  action="{{ url('/gravar-compras/gravar') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="ui form">
                    <div class="eighty wide fields">
                        <div class="field">
                            <label>Data da compra</label>
                            <div class="ui input">
                                <input type="text" name="data_compra" value="" placeholder="Data da compra">
                            </div>
                        </div>
                        <div class="field">
                            <label>Nome da empresa</label>
                            <div class="ui input">
                                <input type="text" name="nome_empresa" value="" placeholder="Nome da empresa">
                            </div>
                        </div>
                        <div class="field">
                            <label>Nome vendedor</label>
                            <div class="ui input">
                                <input type="text" name="nome_vendedor" value="" placeholder="Nome do vendedor">
                            </div>
                        </div>
                        <div class="field">
                            <label>Valor</label>
                            <div class="ui input">
                                <input type="number" name="valor" value="" placeholder="Valor da compra">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="actions">
                    <a href="{{ url('/') }}" class="ui negative  button">
                        cancelar
                    </a>
                    <button type="submit" class="ui positive  icon button">
                        GravarCompras
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
