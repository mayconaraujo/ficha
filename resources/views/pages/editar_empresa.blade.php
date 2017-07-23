@extends('layouts.master')

@section('content')

    <div class="ui container">
        <br>
        <header class="ui header">
            <h1 class="">
                <i class="plug icon"></i>
                Editar Ficha Cadastral
            </h1>
        </header>
        <br>
        <br>
        <br>
        <form action="" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{ $empresas->id }}" class="ui button">

            <div class="ui form">
                <div class="eighty wide fields">
                    <div class=" field">
                        <label for="rs"> Razão Social:</label>
                        <input type="text" name="rs" placeholder="Razão Social" value="{{ $empresas->rs }}">
                    </div>
                    <div class="field">
                        <label for="nf"> Nome Fantasia:</label>
                        <input type="text" name="nf" placeholder="Nome Fantasia" value="{{ $empresas->nf }}">
                    </div>

                    <div class="field">
                        <label for="df"> Data Fundação:</label>
                        <input type="text" name="df" placeholder="Data da Fundação"
                               value="{{ date("d/m/Y",strtotime($empresas->df)) }}">
                    </div>


                    <div class="field">
                        <label for="cnpj"> CNPJ:</label>
                        <input type="text" name="cnpj" placeholder="Número CNPJ" value="{{ $empresas->cnpj }}">
                    </div>
                    <div class=" field">
                        <label for="ie"> Inscrição Estadual:</label>
                        <input type="text" name="ie" placeholder="Inscrição Estadual" value="{{ $empresas->ie }}">
                    </div>
                    <div class="field">
                        <label for="im"> Inscrição Municipal:</label>
                        <input type="text" name="im" placeholder="Inscrição Municipal" value="{{ $empresas->im }}">
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