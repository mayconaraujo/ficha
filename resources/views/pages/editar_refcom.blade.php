@extends('layouts.master')

@section('content')

    <div class="ui container">
        <br>
        <header class="ui header">
            <h1 class="">
                <i class="plug icon"></i>
                Editar referências comerciais
            </h1>
        </header>
        <br>
        <br>
        <br>
        <form action="" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="button" name="id" value="{{ $refcoms->id }}" class="ui button">

            <div class="ui form">
                <div class="eighty wide fields">
                    <div class=" field">
                        <label for="fornR"> Fornecedor:</label>
                        <input type="text" name="fornR" placeholder="Fornecedor" value="{{ $refcoms->fornR }}">
                    </div>
                    <div class=" field">
                        <label for="telR"> Telefone:</label>
                        <input type="text" name="telR" placeholder="Telefone Fornecedor" value="{{ $refcoms->telR }}">
                    </div>
                    <div class=" field">
                        <label for="fonR"> Contato:</label>
                        <input type="text" name="fonR" placeholder="Contato Fornecedor" value="{{ $refcoms->fonR }}">
                    </div>

                    <div class="eighty wide fields">
                        <div class=" field">
                            <label for="clieR"> Cliente desde:</label>
                            <input type="text" name="clieR" placeholder="Cliente desde"
                                   value="{{ date("d/m/Y",strtotime($refcoms->clieR)) }}">
                        </div>
                        <div class=" field">
                            <label for="limR"> Limite de Crédito:</label>
                            <input type="text" name="limR" placeholder="Limite Fornecedor" value="{{ $refcoms->limR }}">
                        </div>
                        <div class=" field">
                            <label for="histcompR"> Historico de Compra:</label>
                            <input type="text" name="histcompR" placeholder="Histórico de Compra" value="{{ $refcoms->histcompR }}">
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
            </div>
        </form>
    </div>



@endsection