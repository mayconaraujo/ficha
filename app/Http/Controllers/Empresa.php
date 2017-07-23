<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class Empresa extends Controller
{
    public function listar()
    {
        return view('pages.listar', ['empresas' => \App\Empresa::all()]);
    }

    public function getSave()
    {
        return view('pages.cadastrar');
    }

    public function getEdit($id)
    {
        $empresas = \App\Empresa::find($id);

        return view('pages.editar_empresa', ['empresas' => $empresas]);
    }

    public function postSave(Request $request)
    {

        $empresa = new \App\Empresa();

        $empresa->rs = $request->input('rs');
        $empresa->nf = $request->input('nf');
        $empresa->df = Carbon::createFromFormat("d/m/Y", $request->input('df'));
        $empresa->cnpj = $request->input('cnpj');
        $empresa->ie = $request->input('ie');
        $empresa->im = $request->input('im');

        $empresa->save();
//        $valid = $this->validate($request, [
//            'rs' => 'bail|required|unique:posts|max:255',
//        ]);
//        if ($valid) {
//
//            $empresa->save();
//        }
//        die();

        //
        $endereco_entrega = new \App\EnderecoEntrega();

        $endereco_entrega->ruaE = $request->input('ruaE');
        $endereco_entrega->numE = $request->input('numE');
        $endereco_entrega->baiE = $request->input('baiE');
        $endereco_entrega->cidE = $request->input('cidE');
        $endereco_entrega->cepE = $request->input('cepE');
        $endereco_entrega->fonE = $request->input('fonE');
        $endereco_entrega->celE = $request->input('celE');
        $endereco_entrega->contE = $request->input('contE');

        $endereco_entrega->save();

        //
        $endereco_cobranca = new \App\EnderecoCobranca();

        $endereco_cobranca->ruaC = $request->input('ruaC');
        $endereco_cobranca->numC = $request->input('numC');
        $endereco_cobranca->baiC = $request->input('baiC');
        $endereco_cobranca->cidC = $request->input('cidC');
        $endereco_cobranca->cepC = $request->input('cepC');
        $endereco_cobranca->fonC = $request->input('fonC');
        $endereco_cobranca->celC = $request->input('celC');
        $endereco_cobranca->emailC = $request->input('emailC');
        $endereco_cobranca->contC = $request->input('contC');
        $endereco_cobranca->soc = $request->input('soc');
        $endereco_cobranca->soc1 = $request->input('soc1');
        $endereco_cobranca->cap = $request->input('cap');

        $endereco_cobranca->save();

        //
        $referenca_comercias = new \App\ReferenciaComercias();

        $referenca_comercias->fornR = $request->input('fornR');
        $referenca_comercias->telR = $request->input('telR');
        $referenca_comercias->fonR = $request->input('fonR');
        $referenca_comercias->clieR = Carbon::createFromFormat("d/m/Y", $request->input('clieR'));
        $referenca_comercias->limR = $request->input('limR');
        $referenca_comercias->histcompR = $request->input('histcompR');

        $referenca_comercias->save();

        $dados_vendedor = new \App\Vendedor();

        $dados_vendedor->nome_vendedor = $request->input('nome_vendedor');
        $dados_vendedor->contato_vendedor = $request->input('contato_vendedor');
        $dados_vendedor->data_nasc_vendedor = Carbon::createFromFormat("d/m/Y", $request->input('data_nasc_vendedor'));

        $dados_vendedor->save();


        return redirect()->route('home')->with('message', 'empresa criada com sucesso');

    }

    public function postEditar(Request $request, $id)
    {
        $empresa = \App\Empresa::findOrFail($id);

        $empresa->rs = $request->input('rs');
        $empresa->nf = $request->input('nf');
        $empresa->df = Carbon::createFromFormat("d/m/Y", $request->input('df'));
        $empresa->cnpj = $request->input('cnpj');
        $empresa->ie = $request->input('ie');
        $empresa->im = $request->input('im');

        $empresa->save();
        return redirect()->route('home')->with('message', 'empresa criada com sucesso');
    }

    public function apagar($id)
    {
        $empresa = new \App\Empresa();
        $empresa->where('id', $id)->delete();
        return redirect()->route('home')->with('alert-success', 'Item deletado com sucesso');
    }

}
