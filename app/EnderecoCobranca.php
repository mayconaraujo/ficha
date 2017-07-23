<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnderecoCobranca extends Model
{
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $table = 'endcobra';

    protected $fillable = [
        'ruaC', 'numC', 'baiC', 'cidC', 'cepC', 'fonC', 'celC', 'emailC', 'contC', 'soc', 'soc1', 'cap'
    ];
}
