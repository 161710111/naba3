<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galerihaji extends Model
{
    protected $table = 'galerihajis';
    protected $fillable = ['logo'];
    public $timestamps = true;
}
