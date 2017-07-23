@extends('layouts.master')

@section('content')

    <div class="ui container">
        <br>
        <header class="ui header">
            <h1 class="">
                <i class="plug icon"></i>
                Editar dados do vendedor:
            </h1>
        </header>
        <br>
        <br>
        <br>
        <form action="" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{ $vendedores->id }}" class="ui button">

            <div class="ui form">

                <div class="eighty wide fields">
                    <div class=" field">
                        <label for="nome_vendedor"> Nome Vendedor:</label>
                        <input type="text" name="nome_vendedor" value="{{ $vendedores->nome_vendedor }}"
                               placeholder="Nome Vendedor">
                    </div>

                    <div class=" field">
                        <label for="contato_vendedor"> Contato:</label>
                        <input type="text" name="contato_vendedor" value="{{ $vendedores->contato_vendedor }}"
                               placeholder="Contato Vendedor">
                    </div>

                    <div class=" field">
                        <label for="data_nasc_vendedor"> Data Nascimento:</label>
                        <input type="text" name="data_nasc_vendedor"
                               value="{{ date("d/m/Y",strtotime($vendedores->data_nasc_vendedor)) }}"
                               placeholder="Data de Nascimento">
                    </div>
                </div>
            </div>

            <div class="actions">

                <a href="{{ url('/') }}" class="ui negative  button">
                    cancelar
                </a>
                <button type="submit" class="ui positive  icon button">
                    Atualizar
                </button>
            </div>

        </form>
    </div>



@endsection