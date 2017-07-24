<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class GravarCompras extends Controller
{
    public function index()
    {
        $gravarcompra = \App\GravarCompras::all();
        return view('gravarCompras.index', [
            'gravarcompras' => $gravarcompra,
        ]);
    }

    public function getGravar()
    {
        return view('gravarCompras.gravar_compras');
    }

    public function postGravar(Request $request)
    {
        $gravarcompras = new \App\GravarCompras();

        $gravarcompras->data_compra = Carbon::createFromFormat("d/m/Y", $request->input('data_compra'));
        $gravarcompras->nome_empresa = $request->input('nome_empresa');
        $gravarcompras->nome_vendedor = $request->input('nome_vendedor');
        $gravarcompras->valor = $request->input('valor');

        $gravarcompras->save();

        return redirect()->route('get.compras');

    }

    public function getPutGravar($id)
    {
        $gravarcompra = \App\GravarCompras::findOrfail($id);
        return view('gravarCompras.gravar_compras_editar', [
            'gravarcompras' => $gravarcompra,
        ]);
    }

    public function postPutGravar(Request $request, $id)
    {
        $gravarcompras = \App\GravarCompras::findOrfail($id);

        $gravarcompras->data_compra = Carbon::createFromFormat("d/m/Y", $request->input('data_compra'));
        $gravarcompras->nome_empresa = $request->input('nome_empresa');
        $gravarcompras->nome_vendedor = $request->input('nome_vendedor');
        $gravarcompras->valor = $request->input('valor');

        $gravarcompras->save();

        return redirect()->route('get.compras');
    }

    public function apagar($id)
    {
        $gravarcompras = new \App\GravarCompras();
        $gravarcompras->where('id', $id)->delete();
        return redirect()->route('get.compras');

    }

}
