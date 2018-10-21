<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwalumroh extends Model
{
    protected $fillable = ['bulan','keterangan'];
    public $timestamps = true;
}
