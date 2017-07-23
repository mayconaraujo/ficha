<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class ReferenciaComercias extends Controller
{
    public function getEdit($id)
    {
        $refcom = \App\ReferenciaComercias::find($id);

        return view('pages.editar_refcom', ['refcoms' => $refcom]);
    }

    public function postEditar(Request $request, $id)
    {
        $refcom = \App\ReferenciaComercias::findOrFail($id);

        $refcom->fornR = $request->input('fornR');
        $refcom->telR = $request->input('telR');
        $refcom->fonR = $request->input('fonR');
        $refcom->clieR = Carbon::createFromFormat("d/m/Y", $request->input('clieR'));
        $refcom->limR = $request->input('limR');
        $refcom->histcompR = $request->input('histcompR');

        $refcom->save();

        return redirect()->route('home')->with('message', 'empresa criada com sucesso');
    }

    public function apagar($id)
    {
        $refcom = new \App\ReferenciaComercias();
        $refcom->where('id', $id)->delete();
        return redirect()->route('home')->with('alert-success', 'Item deletado com sucesso');
    }
}
