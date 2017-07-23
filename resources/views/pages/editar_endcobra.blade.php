@extends('layouts.master')

@section('content')

    <div class="ui container">
        <br>
        <header class="ui header">
            <h1 class="">
                <i class="plug icon"></i>
                Editar endereço da cobrança
            </h1>
        </header>
        <br>
        <br>
        <br>
        <form action="" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="button" name="id" value="{{ $endcobras->id }}" class="ui button">


            <div class="ui form">
                <div class="eighty wide fields">
                    <div class="field">
                        <label for="ruaC">Rua:</label>
                        <input type="text" name="ruaC" placeholder="Informe a Rua" value="{{ $endcobras->ruaC }}">
                    </div>
                    <div class="field">
                        <label for="numC">Nº:</label>
                        <input type="text" name="numC" placeholder="Número da Rua"  value="{{ $endcobras->numC }}">
                    </div>

                    <div class="field">
                        <label for="baiC">Bairro:</label>
                        <input type="text" name="baiC" placeholder="Bairro" value="{{ $endcobras->baiC }}">
                    </div>
                    <div class="field">
                        <label for="cidC">Cidade:</label>
                        <input type="text" name="cidC" placeholder="Cidade" value="{{ $endcobras->cidC }}">
                    </div>
                    <div class=" field">
                        <label for="cepC"> CEP:</label>
                        <input type="text" name="cepC" placeholder="Informe o CEP" value="{{ $endcobras->cepC }}">
                    </div>
                    <div class="field">
                        <label for="fonC"> Telefone:</label>
                        <input type="text" name="fonC" placeholder="Informe o Telefone" value="{{ $endcobras->fonC }}">
                    </div>
                    <div class="field">
                        <label for="celC"> Celular:</label>
                        <input type="text" name="celC" placeholder="Informe o Celular" value="{{ $endcobras->celC }}">
                    </div>
                </div>


                <div class="eighty wide fields">

                    <div class="field">
                        <label for="emailC"> E-mail:</label>
                        <input type="text" name="emailC" placeholder="Informe o E-mail" value="{{ $endcobras->emailC }}">
                    </div>

                    <div class=" field">
                        <label for="contC"> Contato:</label>
                        <input type="text" name="contC" placeholder="Informe o Contato" value="{{ $endcobras->contC }}">
                    </div>
                    <div class=" field">
                        <label for="soc"> Sócio 1:</label> <input type="text" name="soc"
                                                                  placeholder="Informe o Sócio" value="{{ $endcobras->soc }}">
                    </div>
                    <div class=" field">
                        <label for="soc1"> Sócio 2:</label>
                        <input type="text" name="soc1" placeholder="Informe o Sócio" value="{{ $endcobras->soc1 }}">
                    </div>
                    <div class=" field">
                        <label for="cap"> Capital Social:</label>
                        <input type="text" name="cap" placeholder="Informe o Capital Social" value="{{ $endcobras->cap }}">
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