<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
    protected $fillable = ['title','url'];
    public $timestamps = true;
}
