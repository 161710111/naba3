<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tabungan extends Model
{
    protected $table = 'tabungans';
    protected $fillable = ['judul','keterangan','keunggulan','syarat','logo','note'];
    public $timestamps = true;
}
