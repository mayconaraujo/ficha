<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnderecoCobranca extends Controller
{

    public function getEdit($id)
    {
        $endcobra = \App\EnderecoCobranca::find($id);

        return view('pages.editar_endcobra', ['endcobras' => $endcobra]);
    }

    public function postEditar(Request $request, $id)
    {
        $endcobra = \App\EnderecoCobranca::findOrFail($id);

        $endcobra->ruaC = $request->input('ruaC');
        $endcobra->numC = $request->input('numC');
        $endcobra->baiC = $request->input('baiC');
        $endcobra->cidC = $request->input('cidC');
        $endcobra->cepC = $request->input('cepC');
        $endcobra->fonC = $request->input('fonC');
        $endcobra->celC = $request->input('celC');
        $endcobra->emailC = $request->input('emailC');
        $endcobra->contC = $request->input('contC');
        $endcobra->soc = $request->input('soc');
        $endcobra->soc1 = $request->input('soc1');
        $endcobra->cap = $request->input('cap');

        $endcobra->save();

        return redirect()->route('home')->with('message', 'empresa criada com sucesso');
    }

    public function apagar($id)
    {
        $endcobra = new \App\EnderecoCobranca();
        $endcobra->where('id', $id)->delete();
        return redirect()->route('home')->with('alert-success', 'Item deletado com sucesso');
    }

}
