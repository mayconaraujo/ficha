<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendedor extends Model
{
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $table = 'vendedor';

    protected $fillable = ['nome_vendedor', 'contato_vendedor', 'data_nasc_vendedor'];
}
