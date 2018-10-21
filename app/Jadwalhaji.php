<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwalhaji extends Model
{
    protected $fillable = ['bulan','keterangan'];
    public $timestamps = true;
}
