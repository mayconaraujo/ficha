@extends('layouts.master')

@section('content')
    <div class="ui container">
        <div class="ui top attached tabular menu">
            <a class="item active" data-tab="first">Ficha Cadastral</a>
            <a class="item" data-tab="second">ENDEREÇO DE ENTREGA</a>
            <a class="item" data-tab="third">ENDEREÇO DE COBRANÇA</a>
            <a class="item" data-tab="four">REFERÊNCIAS COMERCIAIS</a>
            <a class="item" data-tab="five">DADOS DO VENDEDOR</a>
        </div>

        <div class="ui bottom attached tab segment active" data-tab="first">
            <table class="ui celled table">
                <thead>
                <tr>
                    <th>Razão Social</th>
                    <th>Nome Fantasia</th>
                    <th>Data Fundação</th>
                    <th>CNPJ</th>
                    <th>Inscrição Estadual</th>
                    <th>Inscrição Municipal</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($empresas as $empresa)
                        <td>{{ $empresa->rs }}</td>
                        <td>{{ $empresa->nf }}</td>
                        <td>{{ date("d/m/Y",strtotime($empresa->df)) }}</td>
                        <td>{{ $empresa->cnpj }}</td>
                        <td>{{ $empresa->ie }}</td>
                        <td>{{ $empresa->im }}</td>
                        <td>
                            <div class="ui buttons">
                                <a class="ui positive button" id="editar"
                                   href="{{ url('/ficha/editar/' .$empresa->id) }}">
                                    <i class="fa fa-1x fa-pencil-square" aria-hidden="true"></i>
                                </a>
                                <div class="or" data-text="ou"></div>

                                <a href="{{ url('/ficha/apagar/' . $empresa->id ) }}" class="ui negative button"
                                   onclick="return confirm('tem certeza ?')">
                                    <i class="fa fa-1x fa-window-close" aria-hidden="true"></i>
                                </a>

                            </div>


                        </td>
                </tr>
                @endforeach


                </tbody>
            </table>
            {{--@include('pages.editar')--}}
        </div>
        <div class="ui bottom attached tab segment" data-tab="second">
            <table class="ui celled table">
                <thead>
                <tr>
                    <th>Rua</th>
                    <th>Nº</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>CEP</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Contato</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    @foreach($endentregas as $endentrega)

                        <td>{{ $endentrega->ruaE }}1</td>
                        <td>{{ $endentrega->numE }}</td>
                        <td>{{ $endentrega->baiE }}</td>
                        <td>{{ $endentrega->cidE }}</td>
                        <td>{{ $endentrega->cepE }}</td>
                        <td>{{ $endentrega->fonE }}</td>
                        <td>{{ $endentrega->celE }}</td>
                        <td>{{ $endentrega->contE }}</td>
                        <td>
                            <div class="ui buttons">
                                <a href="{{ url('/endentrega/editar/' . $endentrega->id) }}" class="ui positive button">
                                    <i class="fa fa-1x fa-pencil-square" aria-hidden="true"></i>
                                </a>
                                <div class="or" data-text="ou"></div>
                                <a href="{{ url('/endentrega/apagar/' . $endentrega->id) }}" class="ui negative button"
                                   onclick="return confirm('tem certeza ?')">
                                    <i class="fa fa-1x fa-window-close" aria-hidden="true"></i>
                                </a>

                            </div>


                        </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- ENDEREÇO DE COBRANÇA -->

        <div class="ui bottom attached tab segment" data-tab="third">
            <table class="ui celled table">
                <thead>
                <tr>
                    <th>Rua</th>
                    <th>Nº</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>CEP</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>E-mail</th>
                    <th>Contato</th>
                    <th>Sócio 1</th>
                    <th>Sócio 2</th>
                    <th>Capital Social</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($endcobras as $endcobra)
                        <td>{{ $endcobra->ruaC }}</td>
                        <td>{{ $endcobra->numC }}</td>
                        <td>{{ $endcobra->baiC }}</td>
                        <td>{{ $endcobra->cidC }}</td>
                        <td>{{ $endcobra->cepC }}</td>
                        <td>{{ $endcobra->fonC }}</td>
                        <td>{{ $endcobra->celC }}</td>
                        <td>{{ $endcobra->emailC }}</td>
                        <td>{{ $endcobra->contC }}</td>
                        <td>{{ $endcobra->soc }}</td>
                        <td>{{ $endcobra->soc1 }}</td>
                        <td>{{ $endcobra->cap }}</td>
                        <td>
                            <div class="ui buttons">
                                <a href="{{ url('/endcobra/editar/' . $endcobra->id) }}" class="ui positive button">
                                    <i class="fa fa-1x fa-pencil-square" aria-hidden="true"></i>
                                </a>
                                <div class="or" data-text="ou"></div>
                                <a href="{{ url('/endcobra/apagar/' . $endcobra->id) }}" class="ui negative button"  onclick="return confirm('tem certeza ?')">
                                    <i class="fa fa-1x fa-window-close" aria-hidden="true"></i>
                                </a>

                            </div>


                        </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="ui bottom attached tab segment" data-tab="four">
            <table class="ui celled table">
                <thead>
                <tr>
                    <th>Fornecedor</th>
                    <th>Telefone</th>
                    <th>Contato</th>
                    <th>Cliente desde</th>
                    <th>Limite de Crédito</th>
                    <th>Historico de Compra</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($refcoms as $refcom)
                        <td>{{ $refcom->fornR }}</td>
                        <td>{{ $refcom->telR }}</td>
                        <td>{{ $refcom->fonR }}</td>
                        <td>{{ date("d/m/Y", strtotime($refcom->clieR)) }}</td>
                        <td>{{ $refcom->limR }}</td>
                        <td>{{ $refcom->histcompR }}</td>
                        <td>
                            <div class="ui buttons">
                                <a href="{{ url('/refcom/editar/' . $refcom->id) }}" class="ui positive button">
                                    <i class="fa fa-1x fa-pencil-square" aria-hidden="true"></i>
                                </a>
                                <div class="or" data-text="ou"></div>
                                <a href="{{ url('/refcom/apagar/' . $refcom->id) }}" class="ui negative button"  onclick="return confirm('tem certeza ?')">
                                    <i class="fa fa-1x fa-window-close" aria-hidden="true"></i>
                                </a>

                            </div>


                        </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="ui bottom attached tab segment" data-tab="five">
            <table class="ui celled table">
                <thead>
                <tr>
                    <th>Nome Vendedor</th>
                    <th>Contato</th>
                    <th>Data Nascimento</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($vendedores as $vendedor)
                        <td>{{ $vendedor->nome_vendedor }}</td>
                        <td>{{ $vendedor->contato_vendedor }}</td>
                        <td>{{ date("d/m/Y",strtotime($vendedor->data_nasc_vendedor)) }}</td>
                        <td>
                            <div class="ui buttons">
                                <a href="{{ url('/vendedor/editar/' . $vendedor->id) }}" class="ui positive button">
                                    <i class="fa fa-1x fa-pencil-square" aria-hidden="true"></i>
                                </a>
                                <div class="or" data-text="ou"></div>
                                <a href="{{ url('/vendedor/apagar/' . $vendedor->id) }}" class="ui negative button"  onclick="return confirm('tem certeza ?')">
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
