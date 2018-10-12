<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galerihome extends Model
{
    protected $table = 'galerihomes';
    protected $fillable = ['logo'];
    public $timestamps = true;
}
