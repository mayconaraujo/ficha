<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferenciaComercias extends Model
{
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $table = 'refcom';

    protected $fillable = ['fornR', 'telR', 'fonR', 'cliR', 'limR', 'histcompR'];
}
