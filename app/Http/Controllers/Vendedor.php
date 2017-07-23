<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class Vendedor extends Controller
{
    public function getEdit($id)
    {
        $vendedor = \App\Vendedor::find($id);

        return view('pages.editar_vendedor', ['vendedores' => $vendedor]);
    }

    public function postEditar(Request $request, $id)
    {
        $dados_vendedor = \App\Vendedor::findOrFail($id);

        $dados_vendedor->nome_vendedor = $request->input('nome_vendedor');
        $dados_vendedor->contato_vendedor = $request->input('contato_vendedor');
        $dados_vendedor->data_nasc_vendedor = Carbon::createFromFormat("d/m/Y", $request->input('data_nasc_vendedor'));

        $dados_vendedor->save();

        return redirect()->route('home')->with('message', 'empresa criada com sucesso');
    }

    public function apagar($id)
    {
        $dados_vendedor = new \App\Vendedor();
        $dados_vendedor->where('id', $id)->delete();
        return redirect()->route('home')->with('alert-success', 'Item deletado com sucesso');
    }
}
