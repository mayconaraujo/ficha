<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnderecoEntrega extends Controller
{
    public function getEdit($id)
    {
        $endentrega = \App\EnderecoEntrega::find($id);

        return view('pages.editar_endentrega', ['endentregas' => $endentrega]);
    }

    public function postEditar(Request $request, $id)
    {
        $endentrega = \App\EnderecoEntrega::findOrFail($id);

        $endentrega->ruaE = $request->input('ruaE');
        $endentrega->numE = $request->input('numE');
        $endentrega->baiE = $request->input('baiE');
        $endentrega->cidE = $request->input('cidE');
        $endentrega->cepE = $request->input('cepE');
        $endentrega->fonE = $request->input('fonE');
        $endentrega->celE = $request->input('celE');
        $endentrega->contE = $request->input('contE');

        $endentrega->save();
        return redirect()->route('home')->with('message', 'empresa criada com sucesso');
    }

    public function apagar($id)
    {
        $endentrega = new \App\EnderecoEntrega();
        $endentrega->where('id', $id)->delete();
        return redirect()->route('home')->with('alert-success', 'Item deletado com sucesso');
    }
}
