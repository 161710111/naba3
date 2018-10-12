<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galumreguler extends Model
{
    protected $table = 'galumregulers';
    protected $fillable = ['logo'];
    public $timestamps = true;
}
