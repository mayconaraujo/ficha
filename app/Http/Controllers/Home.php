<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{

    public function index(Request $request)
    {

        return view('index',
            [
                'empresas' => \App\Empresa::all(),
                'endcobras' => \App\EnderecoCobranca::all(),
                'endentregas' => \App\EnderecoEntrega::all(),
                'refcoms' => \App\ReferenciaComercias::all(),
                'vendedores' => \App\vendedor::all(),


            ]
        );

    }
}
