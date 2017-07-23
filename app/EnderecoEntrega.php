<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnderecoEntrega extends Model
{
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $table = 'endentrega';


    protected $fillable = ['ruaE', 'numE', 'baiE', 'cidE', 'cepE', 'fonE', 'celE', 'contE'];
}
