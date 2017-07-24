@extends('layouts.master')

@section('content')

    <div class="ui container">
        <br>
        <header class="ui header">
            <h1 class="">
                <i class="fa  fa-money" aria-hidden="true"></i>
                Editar compras gravadas
            </h1>
        </header>
        <hr>
        <br>
        <br>
        <div class="ui form">
            <form action="" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $gravarcompras->id }}">
                <div class="ui form">
                    <div class="eighty wide fields">
                        <div class="field">
                            <label>Data da compra</label>
                            <div class="ui input">
                                <input type="text" name="data_compra"
                                       value="{{ date("d/m/Y",strtotime($gravarcompras->data_compra )) }}"
                                       placeholder="Data da compra">
                            </div>
                        </div>
                        <div class="field">
                            <label>Nome da empresa</label>
                            <div class="ui input">
                                <input type="text" name="nome_empresa" value="{{ $gravarcompras->nome_empresa }}"
                                       placeholder="Nome da empresa">
                            </div>
                        </div>
                        <div class="field">
                            <label>Nome vendedor</label>
                            <div class="ui input">
                                <input type="text" name="nome_vendedor" value="{{ $gravarcompras->nome_vendedor }}"
                                       placeholder="Nome do vendedor">
                            </div>
                        </div>
                        <div class="field">
                            <label>Total</label>
                            <div class="ui input">
                                <input type="text" name="valor"
                                       value="{{ $gravarcompras->valor }}"
                                       placeholder="Valor total">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="actions">
                    <a href="{{ url('/') }}" class="ui negative  button">
                        cancelar
                    </a>
                    <button type="submit" class="ui positive  icon button">
                        AtualizarCompras
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
