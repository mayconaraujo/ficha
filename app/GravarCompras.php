<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GravarCompras extends Model
{
    protected $table = 'gravarcompras';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'data_compra', 'nome_empresa', 'nome_vendedor', 'valor',
    ];
}
