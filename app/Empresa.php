<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $table = 'empresa';

    protected $fillable = [
        'rs', 'nf', 'df', 'cnpj', 'ie', 'im',
    ];

}
