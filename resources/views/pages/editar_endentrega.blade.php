@extends('layouts.master')

@section('content')

    <div class="ui container">
        <br>
        <header class="ui header">
            <h1 class="">
                <i class="plug icon"></i>
                Editar Endereço da entrega
            </h1>
        </header>
        <br>
        <br>
        <br>
        <form action="" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="button" name="id" value="{{ $endentregas->id }}" class="ui button">

            <div class="ui form">

                <div class="eighty wide fields">
                    <div class="field">
                        <label for="ruaE">Rua:</label>
                        <input type="text" name="ruaE" placeholder="Informe a Rua" value="{{ $endentregas->ruaE }}">
                    </div>
                    <div class="field">
                        <label for="numE">Nº:</label>
                        <input type="text" name="numE" placeholder="Número da Rua" value="{{ $endentregas->numE }}">
                    </div>

                    <div class="field">
                        <label for="baiE">Bairro:</label>
                        <input type="text" name="baiE" placeholder="Bairro" value="{{ $endentregas->baiE }}">
                    </div>
                    <div class="field">
                        <label for="cidE">Cidade:</label>
                        <input type="text" name="cidE" placeholder="Cidade" value="{{ $endentregas->cidE }}">
                    </div>
                    <div class=" field">
                        <label for="cepE"> CEP:</label>
                        <input type="text" name="cepE" placeholder="Informe o CEP" value="{{ $endentregas->cepE }}">
                    </div>

                    <div class="field">
                        <label for="fonE"> Telefone:</label>
                        <input type="text" name="fonE" placeholder="Informe o Telefone" value="{{ $endentregas->fonE }}">
                    </div>
                </div>
                <div class="eighty wide fields">

                    <div class="field">
                        <label for="celE"> Celular:</label>
                        <input type="text" name="celE" placeholder="Informe o Celular" value="{{ $endentregas->celE }}">
                    </div>
                    <div class="field">
                        <label for="contE"> Contato:</label>
                        <input type="text" name="contE" placeholder="Informe o Contato" value="{{ $endentregas->contE }}">
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