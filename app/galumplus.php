<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galumplus extends Model
{
    protected $table = 'galumpluses';
    protected $fillable = ['logo'];
    public $timestamps = true;
}
