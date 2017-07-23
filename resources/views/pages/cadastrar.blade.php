@extends('layouts.master') @section('content')
    <div class="ui container">

        <!-- FORM --->


        <form action="" class="ui form" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="ui pointing secondary menu">
                <a class="item active" data-tab="first">FICHA CADASTRAL DE EMPRESA</a>
                <a class="item" data-tab="second">ENDEREÇO DE ENTREGA</a>
                <a class="item" data-tab="third">ENDEREÇO DE COBRANÇA</a>
                <a class="item" data-tab="four">REFERÊNCIAS COMERCIAIS</a>
                <a class="item" data-tab="five">DADOS DO VENDEDOR</a>
            </div>
            <!-- -->
            <div class="ui tab segment active" data-tab="first">

                <div class="ui container">
                    <div class="ui form">
                        <div class="eighty wide fields">
                            <div class=" field">
                                <label for="rs"> Razão Social:</label>
                                <input type="text" name="rs" placeholder="Razão Social">
                            </div>
                            <div class="field">
                                <label for="nf"> Nome Fantasia:</label>
                                <input type="text" name="nf" placeholder="Nome Fantasia">
                            </div>
                            <div class=" field">
                                <label for="df"> Data Fundação:</label>
                                <input type="text" name="df" placeholder="Data da Fundação">
                            </div>

                            <div class="field">
                                <label for="cnpj"> CNPJ:</label>
                                <input type="text" name="cnpj" placeholder="Número CNPJ">
                            </div>
                            <div class=" field">
                                <label for="ie"> Inscrição Estadual:</label>
                                <input type="text" name="ie" placeholder="Inscrição Estadual">
                            </div>
                            <div class="field">
                                <label for="im"> Inscrição Municipal:</label>
                                <input type="text" name="im" placeholder="Inscrição Municipal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui tab segment" data-tab="second">

                <div class="ui form">

                    <div class="eighty wide fields">
                        <div class="field">
                            <label for="ruaE">Rua:</label>
                            <input type="text" name="ruaE" placeholder="Informe a Rua">
                        </div>
                        <div class="field">
                            <label for="numE">Nº:</label>
                            <input type="text" name="numE" placeholder="Número da Rua">
                        </div>

                        <div class="field">
                            <label for="baiE">Bairro:</label>
                            <input type="text" name="baiE" placeholder="Bairro">
                        </div>
                        <div class="field">
                            <label for="cidE">Cidade:</label>
                            <input type="text" name="cidE" placeholder="Cidade">
                        </div>
                        <div class=" field">
                            <label for="cepE"> CEP:</label>
                            <input type="text" name="cepE" placeholder="Informe o CEP">
                        </div>

                        <div class="field">
                            <label for="fonE"> Telefone:</label>
                            <input type="text" name="fonE" placeholder="Informe o Telefone">
                        </div>
                    </div>
                    <div class="eighty wide fields">

                        <div class="field">
                            <label for="celE"> Celular:</label>
                            <input type="text" name="celE" placeholder="Informe o Celular">
                        </div>
                        <div class="field">
                            <label for="contE"> Contato:</label>
                            <input type="text" name="contE" placeholder="Informe o Contato">
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui tab segment" data-tab="third">
                <div class="ui form">
                    <div class="eighty wide fields">
                        <div class="field">
                            <label for="ruaC">Rua:</label>
                            <input type="text" name="ruaC" placeholder="Informe a Rua">
                        </div>
                        <div class="field">
                            <label for="numC">Nº:</label>
                            <input type="text" name="numC" placeholder="Número da Rua">
                        </div>

                        <div class="field">
                            <label for="baiC">Bairro:</label>
                            <input type="text" name="baiC" placeholder="Bairro">
                        </div>
                        <div class="field">
                            <label for="cidC">Cidade:</label>
                            <input type="text" name="cidC" placeholder="Cidade">
                        </div>
                        <div class=" field">
                            <label for="cepC"> CEP:</label>
                            <input type="text" name="cepC" placeholder="Informe o CEP">
                        </div>
                        <div class="field">
                            <label for="fonC"> Telefone:</label>
                            <input type="text" name="fonC" placeholder="Informe o Telefone">
                        </div>
                        <div class="field">
                            <label for="celC"> Celular:</label>
                            <input type="text" name="celC" placeholder="Informe o Celular">
                        </div>
                    </div>


                    <div class="eighty wide fields">

                        <div class="field">
                            <label for="emailC"> E-mail:</label>
                            <input type="text" name="emailC" placeholder="Informe o E-mail">
                        </div>

                        <div class=" field">
                            <label for="contC"> Contato:</label>
                            <input type="text" name="contC" placeholder="Informe o Contato">
                        </div>
                        <div class=" field">
                            <label for="soc"> Sócio 1:</label> <input type="text" name="soc"
                                                                      placeholder="Informe o Sócio">
                        </div>
                        <div class=" field">
                            <label for="soc1"> Sócio 2:</label>
                            <input type="text" name="soc1" placeholder="Informe o Sócio">
                        </div>
                        <div class=" field">
                            <label for="cap"> Capital Social:</label>
                            <input type="text" name="cap" placeholder="Informe o Capital Social">
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui tab segment" data-tab="four">
                <div class="ui form">
                    <div class="eighty wide fields">
                        <div class=" field">
                            <label for="fornR"> Fornecedor:</label>
                            <input type="text" name="fornR" placeholder="Fornecedor">
                        </div>
                        <div class=" field">
                            <label for="telR"> Telefone:</label>
                            <input type="text" name="telR" placeholder="Telefone Fornecedor">
                        </div>
                        <div class=" field">
                            <label for="fonR"> Contato:</label>
                            <input type="text" name="fonR" placeholder="Contato Fornecedor">
                        </div>

                        <div class="eighty wide fields">
                            <div class=" field">
                                <label for="clieR"> Cliente desde:</label>
                                <input type="text" name="clieR" placeholder="Cliente desde">
                            </div>
                            <div class=" field">
                                <label for="limR"> Limite de Crédito:</label>
                                <input type="text" name="limR" placeholder="Limite Fornecedor">
                            </div>
                            <div class=" field">
                                <label for="histcompR"> Historico de Compra:</label>
                                <input type="text" name="histcompR" placeholder="Histórico de Compra">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui tab segment" data-tab="five">
                <div class="ui form">

                    <div class="eighty wide fields">
                        <div class=" field">
                            <label for="nome_vendedor"> Nome Vendedor:</label>
                            <input type="text" name="nome_vendedor" placeholder="Nome Vendedor">
                        </div>

                        <div class=" field">
                            <label for="contato_vendedor"> Contato:</label>
                            <input type="text" name="contato_vendedor" placeholder="Contato Vendedor">
                        </div>

                        <div class=" field">
                            <label for="data_nasc_vendedor"> Data Nascimento:</label>
                            <input type="text" name="data_nasc_vendedor" placeholder="Data de Nascimento">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <a href="{{ url('') }}" class="ui right negative floated button">CANCELAR</a>
            <button class="ui left positive floated button">CADASTRAR</button>
        </form>
    </div>
@endsection
