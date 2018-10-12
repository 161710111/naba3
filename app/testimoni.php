<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimoni extends Model
{
    protected $table = 'testimonis';
    protected $fillable = ['logo','keterangan','nama'];
    public $timestamps = true;
}
